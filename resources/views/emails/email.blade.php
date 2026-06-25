<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Query</title>
</head>

<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:8px;overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#2563eb;padding:20px;text-align:center;">
                            <h1 style="margin:0;color:#ffffff;font-size:24px;">
                                New Contact Query Received
                            </h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:30px;">

                            <p style="margin-bottom:20px;color:#333;font-size:16px;">
                                A new query has been submitted through the website contact form.
                            </p>

                            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;width:30%;">
                                        Title
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->title }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;">
                                        First Name
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->firstname }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;">
                                        Last Name
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->lastname }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;">
                                        Email
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->email }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;">
                                        Phone
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->phone }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;">
                                        Query Type
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->query_type }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;font-weight:bold;vertical-align:top;">
                                        Message
                                    </td>
                                    <td style="border:1px solid #ddd;">
                                        {{ $data->message }}
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f8f9fa;padding:20px;text-align:center;color:#666;font-size:12px;">
                            This email was automatically generated from the website contact form.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
