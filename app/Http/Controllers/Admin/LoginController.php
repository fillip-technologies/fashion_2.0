<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCustomization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Admin Login (Secure)
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $email = Str::lower($request->email);
        $ip    = $request->ip();

        // Unique throttle key
        $throttleKey = $email . '|' . $ip;

        // Max 5 attempts in 10 minutes
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);

            throw ValidationException::withMessages([
                'email' => "Too many login attempts. Try again in {$seconds} seconds.",
            ]);
        }

        $credentials = [
            'email'    => $email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {

            // Clear limiter after success
            RateLimiter::clear($throttleKey);

            // Prevent session fixation
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        // Increase attempt count
        RateLimiter::hit($throttleKey, 600);

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    /**
     * Create Admin User
     */
    public function store()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin2@gmail.com',
            'password' => Hash::make('admin@1275'),
        ]);

        return back()->with('success', 'Admin created successfully.');
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin');
    }

    /**
     * Save Product Customization
     */
    public function productCustomoze(Request $request)
    {
        $validated = $request->validate([
            'product_id'   => 'required|exists:products,id',
            'message'      => 'nullable|string|max:1000',
            'images.*'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'theme-color'  => 'nullable|string|max:20',
            'color-picker' => 'nullable|string|max:20',
            'notes'        => 'nullable|string|max:1000',
            'gift-wrap'    => 'nullable|in:on',
        ]);

        $uploadedImages = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                $destinationPath = public_path('uploads/customizations');

                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                $image->move($destinationPath, $imageName);

                $uploadedImages[] = 'uploads/customizations/' . $imageName;
            }
        }

        ProductCustomization::create([
            'user_id'      => Auth::check() ? Auth::id() : null,
            'product_id'   => $validated['product_id'],
            'message'      => $validated['message'] ?? null,
            'images'       => !empty($uploadedImages) ? json_encode($uploadedImages) : null,
            'theme_color'  => $validated['theme-color'] ?? null,
            'color_code'   => $validated['color-picker'] ?? null,
            'notes'        => $validated['notes'] ?? null,
            'gift_wrap'    => isset($validated['gift-wrap']) ? 1 : 0,
        ]);

        return back()->with('success', 'Your customization has been saved successfully!');
    }

    /**
     * View All Customizations
     */
    public function allproductCustomoze()
    {
        $customizations = ProductCustomization::with(['user', 'product'])
            ->latest()
            ->get();

        return view('admin.pricesetting.productCustomoze', compact('customizations'));
    }
}
