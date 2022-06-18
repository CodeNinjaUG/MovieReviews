@extends('layouts.app')


@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://media.gettyimages.com/vectors/cinema-poster-with-cola-filmstrip-and-clapper-vector-vector-id1244034031?s=612x612"
                            alt="game cover" class="hover:opacity-70 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            90%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Movie One</a>
                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>
        </div>
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-400 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://media.gettyimages.com/vectors/cinema-poster-with-cola-filmstrip-and-clapper-vector-vector-id1244034031?s=612x612"
                                    alt="game cover" class="w-48 hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                                style="right:-20px; bottom:-10px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    90%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-white-400 mt-4">
                                Movie Magic </a>
                            <div class="text-white-400 mt-1">Play Station 4</div>
                            <p class="mt-6 text-white-400">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec et mauris ut sem eleifend rhoncus vel ac justo.
                                Mauris eget enim sem. Cras dignissim lectus ex, ut
                                egestas eros gravida quis. Maecenas condimentum
                                tincidunt pretium. Nam venenatis eu ipsum sed eleifend.
                                Duis rhoncus tellus nec mauris volutpat sagittis.
                                Nunc eget nibh nec nisl consectetur elementum.
                                Suspendisse potenti.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recently-reviewed w-1/4">
               <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
               <div class="most-anticipated-container space-y-10 mt-8">
                   <div class="game flex space-x-5">
                            <a href="#">
                                <img src="https://media.gettyimages.com/vectors/cinema-poster-with-cola-filmstrip-and-clapper-vector-vector-id1244034031?s=612x612"
                                    alt="game cover" class="w-16 hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                            <div>
                               <a href="#" class="hover:text-gray-300"> Cyber Punk 777</a>
                               <div class="text-gray-400 text-sm mt-1"> September 16, 2022</div>
                            </div>

                   </div>
               </div>

              <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-8">Most Anticipated</h2>
               <div class="most-anticipated-container space-y-10 mt-8">
                   <div class="game flex space-x-5">
                            <a href="#">
                                <img src="https://media.gettyimages.com/vectors/cinema-poster-with-cola-filmstrip-and-clapper-vector-vector-id1244034031?s=612x612"
                                    alt="game cover" class="w-16 hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                            <div>
                               <a href="#" class="hover:text-gray-300"> Cyber Punk 777</a>
                               <div class="text-gray-400 text-sm mt-1"> September 16, 2022</div>
                            </div>

                   </div>
               </div>
            </div>
            
        </div>
    </div>
@endsection
