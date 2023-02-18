@extends('layouts.app')

@section('content')

@if (session('error'))
<section>
    <div class="bg-red-900 text-center py-4 lg:px-4">
        <div class="p-2 bg-red-800 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('error') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
    </div>
</section>
@endif

<section>
    <div class="flex min-h-screen items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="my-6 text-center text-4xl font-bold tracking-tight text-gray-900">Create new Blog</h2>

            </div>
            <form class="mt-8 space-y-6" action="{{ route('blogs.update', $post['id']) }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="blog_title" class="sr-only">Your Title</label>
                        <input id="blog_title" name="title" type="text" autocomplete="text" required class="relative block w-full my-4 appearance-none rounded-md border border-gray-300 px-5 py-4 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-neutral-500 focus:outline-none focus:ring-indigo-500 sm:text-sm md:text-lg" placeholder="Your Title" value="{{ $post['title'] }}">
                    </div>

                    <div>
                        <div class="my-1">
                            <textarea id="about" name="description" rows="3" class="relative block w-full my-4 appearance-none rounded-md border border-gray-300 px-5 py-4 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-neutral-500 focus:outline-none focus:ring-indigo-500 sm:text-sm md:text-lg" placeholder="write your Description">{{ $post['description'] }}</textarea>
                        </div>
                        <p class="mx-2 text-sm text-gray-500">description for your blog.</p>
                    </div>

                    <div>
                        <div class="mt-6 flex justify-center rounded-md border-2 border-dashed border-neutral-300 px-6 pt-5 pb-6">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-stone-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-stone-600">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-stone-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-stone-500 focus-within:ring-offset-2 hover:text-stone-500">
                                        <span>Upload a Cover blog photo</span>
                                        <input id="file-upload" type="file" name="blogImage" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-stone-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <input type="submit" value="Create" class="group relative flex cursor-pointer w-full justify-center rounded-md border border-transparent bg-neutral-600 py-3 px-4 text-sm md:text-lg font-medium text-white hover:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection