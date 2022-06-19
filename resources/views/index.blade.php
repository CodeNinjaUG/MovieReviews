@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold"> Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-12 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-10px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy
                </a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

        </div>
        <!----block two --->
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold"> Recently Reviewed </h2>
                <!----container to store cards --->
                <div class="recently-reviewed-container space-y-12 mt-8">

                    <!----container to store game cards --->
                    <div class="bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('img/movie.jpg') }}" alt="game cover" class="w-48 hover:opacity-75">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                style="right:-20px; bottom:-20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#"
                                class="block text-base font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy
                            </a>
                            <div class="text-gray-400 mt-1">PlayStation 4</div>
                            <p class="mt-6 text-gray-400">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                               Etiam et ante in lectus ultrices pretium. Vestibulum nec 
                               enim vitae est porttitor molestie. Proin varius erat dui, 
                               sit amet egestas turpis accumsan vel. Aliquam in dui ante. 
                               Pellentesque faucibus odio ac efficitur placerat.
                               In maximus pellentesque orci.       
                             </p>
                        </div>

                    </div>
                    <div> Game Card </div>
                    <div> Game Card </div>
                </div>
            </div>
            <div class="mostly-anticipated w-1/4">
                Mostly Anticipated
            </div>
        </div>
    </div>
@endsection
