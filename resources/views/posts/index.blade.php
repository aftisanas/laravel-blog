@extends('layouts.app')

@section('content')

    @if (session('success'))
        <section>
            <div class="bg-green-900 text-center py-4 lg:px-4">
                <div class="p-2 bg-green-800 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('success') }}</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                </div>
            </div>
        </section>
    @endif

    <section class="m-auto mx-6">
        <h1 class="text-4xl md:text-6xl md:mt-16 font-bold font-roboto capitalize text-center my-6">All posts</h1>
    </section>

    @auth
        <section>
            <div class="mx-auto py-16 px-6 md:grid grid-cols-2 gap-16 font-inter">
                <a href="{{ route('blogs.create') }}" 
                    class="bg-green-700 text-stone-100 py-4 px-5 rounded-lg font-bold uppercase text-sm place-self-start hover:opacity-90"
                >create new blog</a>
            </div>
        </section>
    @endauth

    <section>
        @foreach ($posts as $post)
            <div class="mx-auto py-16 px-6 md:grid grid-cols-2 gap-16 font-inter">
                <div class="flex">
                    <img class="object-cover" src="{{ asset('storage/' . $post['image_path']) }}" alt="...">
                </div>
        
                <div>
                    <h2 class="text-stone-700 font-bold text-4xl my-5 md:mt-0 font-roboto">{{ $post['title'] }}</h2>
                
                    <div>
                        By: <span class="text-stone-500 italic">{{ $post->user->name }}</span>
                        On: <span class="text-stone-500 italic">{{ date('d-m-Y', $post->updated_at->timestamp) }}</span>

                        <p class="text-lg text-stone-700 my-8 leading-6">
                            {{ Str::words($post['description'], 100) }}
                        </p>
        
                        <a href="{{ route('blogs.show', $post['slug']) }}"
                        class="bg-neutral-700 text-stone-100 py-4 px-5 rounded-lg font-bold uppercase text-md place-self-start"
                    >read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

@endsection