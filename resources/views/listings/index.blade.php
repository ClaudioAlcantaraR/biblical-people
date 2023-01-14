<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biografias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-3">
            <div class="mb-6">
                @include('partials._search')
            </div>
            <div class="grid grid-flow-row-dense sm:grid-cols-2 sm:grid-rows-2 md:grid-cols-3 md:grid-rows-3 lg:grid-cols-4 gap-4 mt-3">
          
                @unless (count($listings) == 0)
            
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            
                @else
                    <p class="mt-1 text-base text-gray-600 dark:text-gray-400">No se han encontrado biografías.</p>
                @endunless
            </div>
            <div class="mt-6">
                {{$listings->links()}}
            </div>
        </div>
    </div>
</x-app-layout>