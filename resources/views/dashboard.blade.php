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
                    <div class="flex justify-between my-4">
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Header</button>
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">BookMenu</button>
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Chef</button>
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Testimonial</button>
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">BookTable</button>
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Commentaires</button>
                        <button class="shadow-lg border border-gray-900	rounded-lg	p-4">Footer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center">Gérer les utilisateurs:</h1>
                    <div class="flex justify-between my-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
