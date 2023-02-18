@extends('layouts.app')

@section('content')

    {{-- hero --}}
    <section 
        class="w-full flex flex-col items-center justify-center gap-10 bg-no-repeat bg-fixed bg-center bg-cover"
        style="height: 92.5vh; background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');"
    >
        <h1 class="text-5xl text-center text-stone-100 font-bold uppercase">Welcome to my blog</h1>
        <a href="#" 
            class="bg-neutral-400 text-stone-800 py-4 px-5 rounded-lg font-bold uppercase text-xl"
        >start reading</a>
    </section>

    {{-- how to be exeperts --}}
    <section class="container sm:grid grid-cols-2 gap-14 mx-auto px-6 py-14 font-inter">
        <div class="mx-2 md:mx-0">
            <img src="https://picsum.photos/id/239/960/620" alt="..." class="sm:rounded">
        </div>
        <div class="mx-4 flex flex-col items-start justify-cente">
            <h1 class="font-bold font-roboto text-2xl md:text-4xl text-stone-600 uppercase mb-2">how to be expert in 2023</h1>
            <p class="my-1 font-semibold text-md md:text-xl text-stone-500">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, incidunt.
            </p>
            <p class="my-1 font-light text-sm text-stone-400 leading-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto eveniet modi veritatis harum rerum suscipit dignissimos 
                odio aliquid nihil voluptate! Veritatis nobis facilis dignissimos laudantium nulla voluptatum esse asperiores neque 
                fugiat sequi sint quam possimus, iusto, modi ratione tempora odio.
            </p>
            <a href="/" class="my-3 bg-neutral-800 text-stone-200 py-4 px-5 rounded-lg font-semibold uppercase text-sm md:text-xl">read more</a>
        </div>
    </section>

    {{-- blog categories --}}
    <section class="p-14 text-center bg-gray-700 text-stone-200">
        <h2 class="text-2xl text-stone-400">Blog categories</h2>
        <ul class="container mx-auto pt-10 sm:grid grid-cols-4">
            <li class="text-2xl font-bold py-2 cursor-pointer hover:text-stone-300 transition-all">UX | UI design</li>
            <li class="text-2xl font-bold py-2 cursor-pointer hover:text-stone-300 transition-all">Programing Languages</li>
            <li class="text-2xl font-bold py-2 cursor-pointer hover:text-stone-300 transition-all">Front-end Development</li>
            <li class="text-2xl font-bold py-2 cursor-pointer hover:text-stone-300 transition-all">Back-end Development</li>
        </ul>
    </section>

    {{-- recent posts --}}
    <section>
        <div class="container mx-auto text-center py-14">
            <h1 class="font-bold text-3xl md:5xl py-10">Recent Posts</h1>
            <p class="text-stone-400 leading-6 px-10">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsa ullam repellendus dolorum alias. Ducimus officiis minus dolore fugiat esse totam minima laborum, velit, alias aut et impedit reprehenderit culpa.
            </p>
        </div>

        <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
            <div class="flex bg-amber-700 text-stone-100 pt-10">
                <div class="block m-auto pt-4 pb-12 w-4/5">
                    <ul class="md:flex text-xs gap-2">
                        <li class="bg-amber-100 text-amber-600 p-2 rounded inline-block cursor-pointer my-1 md:my-0 hover:bg-amber-500 hover:text-amber-100 transition-all">PHP</li>
                        <li class="bg-amber-100 text-amber-600 p-2 rounded inline-block cursor-pointer my-1 md:my-0 hover:bg-amber-500 hover:text-amber-100 transition-all">Programing</li>
                        <li class="bg-amber-100 text-amber-600 p-2 rounded inline-block cursor-pointer my-1 md:my-0 hover:bg-amber-500 hover:text-amber-100 transition-all">Languages</li>
                        <li class="bg-amber-100 text-amber-600 p-2 rounded inline-block cursor-pointer my-1 md:my-0 hover:bg-amber-500 hover:text-amber-100 transition-all">Back-end</li>
                    </ul>
                
                    <h1 class="text-l py-10 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quia ab culpa deleniti iste minus soluta in totam sequi doloribus, blanditiis, quam cum officia similique doloremque alias quod neque obcaecati aperiam dolorum non illo! Alias iusto reprehenderit illo velit, officiis iure optio earum, perferendis, libero dicta fugit laboriosam esse non.
                    </h1>

                    <a href="/" class="bg-transparent border-2 text-stone-100 px-5 py-3 rounded-lg font-bold uppercase text-sm inline-block hover:bg-stone-100 hover:text-amber-600 hover:border-stone-100">read more</a>
                </div>
            </div>

            <div>
                <img src="https://picsum.photos/id/242/960/620" alt="..." class="object-cover">
            </div>
        </div>
    </section>
@endsection