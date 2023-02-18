@extends('layouts.app')


@section('content')

    <section>
        <!--
            This example requires some changes to your config:
            
            ```
            // tailwind.config.js
            module.exports = {
                // ...
                plugins: [
                // ...
                require('@tailwindcss/forms'),
                ],
            }
            ```
            -->
            <!--
            This example requires updating your template:

            ```
            <html class="h-full bg-gray-50">
            <body class="h-full">
            ```
        -->
        <div class="flex min-h-screen items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
            <div>
                {{-- <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"> --}}
                <h2 class="my-6 text-center text-4xl font-bold tracking-tight text-gray-900">Create new account</h2>
                {{-- <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-stone-600 hover:text-stone-500">start your 14-day free trial</a>
                </p> --}}
            </div>
            <form class="mt-8 space-y-6" action="{{ route('registration') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="name" class="sr-only">Your Full Name:</label>
                        <input id="name" name="name" type="text" autocomplete="name" required class="relative block w-full my-4 appearance-none rounded-md border border-gray-300 px-5 py-4 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-neutral-500 focus:outline-none focus:ring-indigo-500 sm:text-sm md:text-lg" placeholder="Your Full Name">
                        @if ($errors->has('name'))
                            <span class="text-sm text-red-600">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="email-address" class="sr-only">Email address:</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full my-4 appearance-none rounded-md border border-gray-300 px-5 py-4 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-neutral-500 focus:outline-none focus:ring-indigo-500 sm:text-sm md:text-lg" placeholder="you@example.com">
                        @if ($errors->has('email'))
                            <span class="text-sm text-red-600">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password:</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full my-4 appearance-none rounded-md border border-gray-300 px-5 py-4 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-neutral-500 focus:outline-none focus:ring-indigo-500 sm:text-sm md:text-lg" placeholder="Your Password">
                        @if ($errors->has('password'))
                            <span class="text-sm text-red-600">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="confirm_password" class="sr-only">Confirm Password:</label>
                        <input id="confirm_password" name="confirm_password" type="password" autocomplete="current-password" required class="relative block w-full my-4 appearance-none rounded-md border border-gray-300 px-5 py-4 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-neutral-500 focus:outline-none focus:ring-indigo-500 sm:text-sm md:text-lg" placeholder="Confirm Your Password">
                        @if ($errors->has('confirm_password'))
                            <span class="text-sm text-red-600">{{ $errors->first('confirm_password') }}</span>
                        @endif
                    </div>
                </div>
        
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-stone-600 focus:ring-indigo-500">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>
                </div>
        
                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-neutral-600 py-3 px-4 text-sm md:text-lg font-medium text-white hover:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <!-- Heroicon name: mini/lock-closed -->
                        <svg class="h-5 w-5 text-stone-500 group-hover:text-stone-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                        </svg>
                        </span>
                        Register
                    </button>
                </div>

                <div>
                    <p class="mt-2 text-center text-md sm:text-lg text-gray-600">
                        Already have an account
                        <a href="{{ route('login') }}" class="font-medium text-stone-600 hover:text-stone-500">log in</a>
                    </p>
                </div>
            </form>
            </div>
        </div>
        
    </section>
@endsection