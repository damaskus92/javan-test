@extends('layouts.app')

@section('title', 'Hubungi Kami — Contact Form')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-16 sm:px-6 lg:px-8">

        {{-- Hero Section --}}
        <div class="text-center mb-10 animate-fade-in-up">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 mb-5 text-xs font-medium tracking-wide uppercase text-slate-400 bg-slate-800/60 border border-slate-700/50 rounded-full">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Formulir Kontak
            </div>
            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">
                Hubungi Kami
            </h1>
            <p class="mt-3 text-base text-slate-400 max-w-md mx-auto">
                Ada pertanyaan? Isi formulir di bawah dan kami akan segera menghubungi Anda.
            </p>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div id="success-alert" class="w-full max-w-lg mb-6 animate-fade-in-up">
                <div class="flex items-center gap-3 px-4 py-3 bg-emerald-500/10 border border-emerald-500/20 rounded-xl">
                    <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <p class="text-emerald-300 text-sm">{{ session('success') }}</p>
                    <button onclick="document.getElementById('success-alert').remove()" class="ml-auto text-emerald-400/50 hover:text-emerald-300 transition-colors cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        {{-- Contact Form Card --}}
        <div class="w-full max-w-lg animate-fade-in-up animation-delay-200">
            <div class="bg-slate-900 border border-slate-800 rounded-2xl p-7 sm:p-9">
                <form action="{{ route('contact.store') }}" method="POST" id="contact-form" class="space-y-5">
                    @csrf

                    {{-- Nama Lengkap --}}
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-slate-300 mb-1.5">
                            Nama Lengkap
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4.5 h-4.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" placeholder="Masukkan nama lengkap"
                                class="w-full pl-11 pr-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white placeholder-slate-600 focus:outline-none focus:border-slate-600 transition-colors duration-200">
                        </div>
                        @error('full_name')
                            <p class="mt-1.5 text-xs text-rose-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">
                            Email
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4.5 h-4.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com"
                                class="w-full pl-11 pr-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white placeholder-slate-600 focus:outline-none focus:border-slate-600 transition-colors duration-200">
                        </div>
                        @error('email')
                            <p class="mt-1.5 text-xs text-rose-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Nomor HP --}}
                    <div>
                        <label for="phone" class="block text-sm font-medium text-slate-300 mb-1.5">
                            Nomor HP
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4.5 h-4.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"
                                class="w-full pl-11 pr-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white placeholder-slate-600 focus:outline-none focus:border-slate-600 transition-colors duration-200">
                        </div>
                        @error('phone')
                            <p class="mt-1.5 text-xs text-rose-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Pesan --}}
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-300 mb-1.5">
                            Pesan
                        </label>
                        <div class="relative">
                            <div class="absolute top-3.5 left-0 pl-3.5 pointer-events-none">
                                <svg class="w-4.5 h-4.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini..."
                                class="w-full pl-11 pr-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white placeholder-slate-600 focus:outline-none focus:border-slate-600 transition-colors duration-200 resize-none">{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <p class="mt-1.5 text-xs text-rose-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="pt-1">
                        <button type="submit" id="submit-button" class="w-full flex items-center justify-center gap-2 px-6 py-3 bg-white text-slate-950 text-sm font-semibold rounded-xl hover:bg-slate-200 active:scale-[0.98] transition-all duration-200 cursor-pointer">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Footer --}}
        <div class="mt-10 text-center text-xs text-slate-600 animate-fade-in-up animation-delay-400">
            <p>&copy; {{ date('Y') }} Contact Form.</p>
        </div>
    </div>
@endsection
