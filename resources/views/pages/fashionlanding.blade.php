@extends('layouts.landing')

@section('content')

<x-landing-page.hero-landing />

<x-landing-page.aboutlanding />

<x-landing-page.review-section />

<div class="mt-0 mb-0 lg:mt-10 lg:mb-20 w-full outline outline-1 outline-[#97A0A1] bg-[#f2f2f2]"></div>

<x-landing-page.newsletter />

<div class="mt-0 mb-0 lg:mt-10 lg:mb-20 mx-auto w-full lg:w-[var(--line-width)] max-w-full outline outline-1 outline-[#97A0A1] bg-[#f2f2f2]" style="--line-width: 70%;"></div>





@endsection
