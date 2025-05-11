@extends('layouts.app')

@section('title', 'About - My Laravel Website')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">About Us</h1>
        <div class="prose max-w-none">
            <p class="text-gray-600 text-lg mb-4">
                Welcome to our company! We are a team of passionate individuals dedicated to creating amazing web experiences.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                    <p class="text-gray-600">
                        Our mission is to provide high-quality web solutions that help businesses grow and succeed in the digital world.
                    </p>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Vision</h2>
                    <p class="text-gray-600">
                        We envision a world where every business has access to beautiful, functional, and user-friendly web applications.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
