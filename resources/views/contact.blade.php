@extends('layouts.app')

@section('title', 'Contact - My Laravel Website')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Contact Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Get in Touch</h2>
                <p class="text-gray-600 mb-4">
                    Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
                <div class="space-y-4">
                    <div>
                        <h3 class="font-semibold text-gray-700">Email</h3>
                        <p class="text-gray-600">contact@example.com</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Phone</h3>
                        <p class="text-gray-600">+1 (555) 123-4567</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Address</h3>
                        <p class="text-gray-600">123 Web Street<br>Digital City, DC 12345</p>
                    </div>
                </div>
            </div>
            <div>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
