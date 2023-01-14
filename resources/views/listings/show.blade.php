<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $listing->name }}
            </h2>
            <a href="/listings/{{$listing->id}}/edit" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                Editar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8 px-3 flex justify-between">
            <aside class="hidden lg:block lg:w-70" aria-label="Sidebar">
                <x-quick-bio :listing="$listing" />
            </aside>
            
            <div class="w-full max-w-3xl">
                {{-- Nombre --}}
                <h1 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $listing->name }}
                </h1>
                {{-- Tags --}}
                <div>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>
                {{-- Lectura TODO: Hard Code. Hacerte de esto un componente dinamico--}}
                <div>
                    <span class="text-gray-900 font-semibold text-sm">15 min de lectura</span>
                </div>
                {{-- Content --}}
                <div class="mt-8">
                    <p class="text-gray-900 dark:text-gray-300 lg:text-lg text-base">{{ $listing->content }}</p>
                </div>
            </div>
            <aside class="hidden lg:block lg:w-70" aria-label="Sidebar">
                <x-index-single />
            </aside>
        </div>
    </div>
</x-app-layout>
