@extends('layouts.app')

@section('content')
    {{-- Hero section --}}
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl upercase font-bold pb-10 text-center">welcom to my blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

    {{-- how to be an expert --}}
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/243/960/620" />
        </div>

        <div class=" flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">
                how to be an expert in 2024
            </h2>
            <p class="font-bold text-gray-600 text-xl pt-2">
                You can find a list of all programing languages here
            </p>
            <p class="py-4 text-gray-500 text-sm leading-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores harum accusamus qui tempore dolorem esse
                corporis quis odit voluptatem atque, nesciunt, in, eos suscipit cum possimus totam eius cupiditate quasi.
            </p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase textl place-self-start"
                href="/">
                Read more</a>
        </div>
    </div>

    {{-- blog categories --}}
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">UX Design thinking</div>
            <div class="font-bold text-2xl py-2">Pragraming languages</div>
            <div class="font-bold text-2xl py-2">Graphic design</div>
            <div class="font-bold text-2xl py-2">Front-End Developper</div>
        </div>
    </div>

    {{-- Recent Posts --}}
    <div class='container mx-auto text-center py-15'>
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">
            PHP is a general-purpose scripting language
        </p>
    </div>


    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">

                <ul class="md:flex text-xs gap-2">
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                        <a href="/">PHP</a>
                    </li>
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                        <a href="/">Programming</a>
                    </li>
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"w>
                        <a href="/">Languges</a>
                    </li>
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                        <a href="/">Backend</a>
                    </li>
                </ul>

                <h3 class="text-l py-10 leading-6">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro quod pariatur blanditiis debitis?
                    Accusamus nam, aperiam pariatur, ipsam labore voluptates ad autem perferendis saepe quo eligendi
                    eaque fugit placeat ducimus.
                </h3>
                <a href="/"
                    class="bg-transparant border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read
                    more</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620">
        </div>
    </div>
@endsection
