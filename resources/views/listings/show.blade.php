<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $listing->name }}
            </h2>
            <a href="/listings/{{$listing->id}}/edit">
                <x-primary-button>Editar</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-3 flex justify-between">
            <div class="w-full max-w-3xl">
                {{-- Nombre --}}
                <h1
                    class="mb-2 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $listing->name }}</h1>
                {{-- Tags --}}
                <div>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>
                {{-- Lectura TODO: Hard Code--}}
                <div>
                    <span class="text-gray-900 font-semibold text-sm">15 min de lectura</span>
                </div>
                {{-- Content --}}
                <div class="mt-8">
                    <p class="text-gray-900 dark:text-gray-300 lg:text-lg text-base">{{ $listing->content }}</p>
                </div>
            </div>
            <aside class="hidden lg:block lg:w-80" aria-label="Sidebar">
                <x-quick-bio :listing="$listing" />
            </aside>
        </div>
    </div>
</x-app-layout>
