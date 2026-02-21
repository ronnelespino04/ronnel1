@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <!-- Hero Section -->
    <div class="text-center mb-16">
        <div class="flex justify-center mb-4">
            <div class="rounded-full overflow-hidden w-24 h-24">
                <img src="{{ asset('images/1x1.jpg') }}" alt="Ronnel Espino" class="w-full h-full object-cover">
            </div>
        </div>
        <h1 class="text-3xl font-bold text-gray-900 mb-1">Ronnel P. Espino</h1>
        <p class="text-gray-500 text-sm mb-1">@ Barangay Sun Valley, Parañaque City, Metro Manila, Philippines</p>
        <p class="text-gray-700 mb-6">IT Student | Aspiring System Integration Specialist | Customer Service Professional</p>
        
        <!-- Buttons -->
        <div class="flex justify-center gap-2">
            <a href="#contact" class="bg-gray-900 text-white px-4 py-2 text-sm rounded hover:bg-gray-800">Schedule a Call</a>
            <a href="mailto:ronnelespino04@gmail.com" class="bg-gray-900 text-white px-4 py-2 text-sm rounded hover:bg-gray-800">Send Email</a>
            <a href="https://linkedin.com/in/ronnel-espino-4392492b8/" class="bg-gray-900 text-white px-4 py-2 text-sm rounded hover:bg-gray-800">LinkedIn</a>
        </div>
    </div>

    <!-- About Me -->
    <div class="mb-12">
        <h2 class="text-lg font-semibold text-gray-900 mb-3">About Me</h2>
        <p class="text-gray-700 text-sm leading-relaxed">
            From Customer Service to IT, I blend communication skills with technical innovation. As a working student, I bridge academic theory with real-world execution using system integration to create meaningful applications.
        </p>
    </div>

    <!-- Experience -->
    <div class="mb-12">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Experience</h2>
        
        <div class="space-y-4">
            <div>
                <div class="flex justify-between">
                    <h3 class="font-medium text-gray-900">Customer Service Specialist</h3>
                    <span class="text-gray-400 text-xs">2024-2025</span>
                </div>
                <p class="text-gray-500 text-xs">Unicity Network Philippines, Inc. · Taguig City</p>
            </div>
            
            <div>
                <div class="flex justify-between">
                    <h3 class="font-medium text-gray-900">Customer Sales Representative</h3>
                    <span class="text-gray-400 text-xs">2023-2024</span>
                </div>
                <p class="text-gray-500 text-xs">Telus International · Taguig</p>
            </div>
            
            <div>
                <div class="flex justify-between">
                    <h3 class="font-medium text-gray-900">Fraud Specialist</h3>
                    <span class="text-gray-400 text-xs">2021-2023</span>
                </div>
                <p class="text-gray-500 text-xs">Alorica · Makati City</p>
            </div>
        </div>
    </div>

    <!-- Education -->
    <div class="mb-12">
        <h2 class="text-lg font-semibold text-gray-900 mb-3">Education</h2>
        <div>
            <h3 class="font-medium text-gray-900">BS Information Technology</h3>
            <p class="text-gray-500 text-xs">National Teacher's College · 2021-Present</p>
        </div>
    </div>

    <!-- Skills -->
    <div class="mb-12">
        <h2 class="text-lg font-semibold text-gray-900 mb-3">Skills</h2>
        <div class="flex flex-wrap gap-1">
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Communication</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Leadership</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Time Management</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Basic Programming</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Database</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Excel</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">VS Code</span>
            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs rounded">Zendesk</span>
        </div>
    </div>

    <!-- Project -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-3">
            <h2 class="text-lg font-semibold text-gray-900">Projects</h2>
            <a href="#" class="text-gray-400 text-xs hover:text-gray-600">View All →</a>
        </div>
        <div>
            <h3 class="font-medium text-gray-900">SALON</h3>
            <p class="text-gray-400 text-xs mb-1">Smart Automated Link & Operations Network · 2024-2025</p>
            <p class="text-gray-600 text-xs">Hybrid management system for salon operations with staff monitoring.</p>
        </div>
    </div>

    <!-- Certifications -->
    <div class="mb-12">
        <h2 class="text-lg font-semibold text-gray-900 mb-3">Certifications</h2>
        <div class="space-y-2">
            <div>
                <h3 class="font-medium text-gray-900 text-sm">Foundations of Cybersecurity</h3>
                <p class="text-gray-400 text-xs">Google · 2025</p>
            </div>
            <div>
                <h3 class="font-medium text-gray-900 text-sm">Data-Driven Decisions</h3>
                <p class="text-gray-400 text-xs">Google · 2024</p>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="mb-12" id="contact">
        <h2 class="text-xl font-bold text-gray-900 mb-1 text-center">Let's work together.</h2>
        <p class="text-gray-400 text-xs text-center mb-6 uppercase tracking-wide">Get in touch</p>
        
        <div class="bg-gray-50 p-6 rounded text-center">
            <p class="text-gray-600 text-xs mb-4">Open for IT roles and system integration projects.</p>
            <p class="text-gray-500 text-xs mb-4">ronnelespino04@gmail.com</p>
            <div class="flex justify-center gap-2">
                <a href="#" class="bg-gray-900 text-white px-4 py-2 text-xs rounded hover:bg-gray-800">Let's Talk</a>
                <a href="https://linkedin.com/in/ronnel-espino-4392492b8/" class="bg-gray-600 text-white px-4 py-2 text-xs rounded hover:bg-gray-700">Connect</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-center text-gray-300 text-[10px] pt-6 border-t border-gray-100">
        <p>© 2026 Ronnel P. Espino. All Rights Reserved.</p>
    </div>
</div>
@endsection