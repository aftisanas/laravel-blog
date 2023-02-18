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

    <section>
        <div class="mx-auto text-center py-16 font-inter"> {{-- md:grid grid-cols-2 gap-16 --}}
            <h2 class="text-stone-700 font-bold text-4xl my-5 md:mt-0 font-roboto">{{ $post['title'] }}</h2>
            
            <div class="my-2">
                By: <span class="text-stone-500 italic">{{ $post->user->name }}</span>
                On: <span class="text-stone-500 italic">{{ date('d-m-Y', $post->updated_at->timestamp) }}</span>
            </div>
        </div>
        <div class="mx-auto pt-14 pb-5 font-inter">

            <div class="flex " style="height: 500px;" >
                <img class="object-cover w-4/5 mb-8 mx-auto" src="{{ asset('storage/' . $post['image_path']) }}" alt="...">
            </div>

            <p class="text-lg w-4/5 mx-auto text-stone-700 my-8 pt-8 leading-8">
                {{ $post['description'] }}
            </p>

        </div>
        @auth
            @if (Auth::user()->id === $post['user_id'])
                <a href="{{ route('blogs.edit', $post['id']) }}" 
                    class="bg-amber-600 text-stone-100 float-left mx-5 mt-4 py-4 px-5 rounded-lg font-bold uppercase text-sm place-self-start hover:opacity-90"
                >edit blog</a> 
                
                <form action="{{ route('blogs.destroy', $post['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input
                        type="submit" 
                        value="delete blog"
                        class="bg-red-600 text-stone-100 float-left cursor-pointer my-4 mx-5 py-4 px-5 rounded-lg font-bold uppercase text-sm place-self-start hover:opacity-90">
                </form>
            @endif
        @endauth
    </section>

@endsection