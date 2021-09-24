<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center">Gérer backoffice du site:</h1>
                    @if (Auth::user()->admin || Auth::user()->webmaster)
                            @auth
                            <div class="flex justify-between my-4 ">
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Header</button>
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">BookMenu</button>
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Chef</button>
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Testimonial</button>
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">BookTable</button>
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Commentaires</button>
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Footer</button>
                            </div>
                        
                            @endauth
                    @endif
                    @if (Auth::user()->editeur)
                            @auth
                            <div class="text-center my-4 ">
                                <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Commentaires</button>
                                <h1 class="my-5 underline">Vous devez êtres <span class="hover:bg-yellow-100">Administrateur</span>  ou <span class="hover:bg-red-100">Webmaster</span> pour gérer le reste du site.</h1>

                            </div>
                            @endauth
                    @endif
                        </div>
                    </div>
                </div>
            </div>
    
    
</x-app-layout>
