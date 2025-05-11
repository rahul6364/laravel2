@extends('layouts.app')

@section('title', 'Home - My Laravel Website')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to My Laravel Website</h1>
        <p class="text-gray-600 text-lg mb-4">
            This is a simple website built with Laravel and Tailwind CSS. It demonstrates basic routing and view rendering in Laravel.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-blue-800 mb-4">About Us</h2>
                <p class="text-gray-600">Learn more about our company and what we do.</p>
                <a href="/about" class="inline-block mt-4 text-blue-600 hover:text-blue-800">Read More →</a>
            </div>
            <div class="bg-green-50 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-green-800 mb-4">Contact Us</h2>
                <p class="text-gray-600">Get in touch with our team for any inquiries.</p>
                <a href="/contact" class="inline-block mt-4 text-green-600 hover:text-green-800">Contact Us →</a>
            </div>
        </div>
    </div>
</div>
@endsection
