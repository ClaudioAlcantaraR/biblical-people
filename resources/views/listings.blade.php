<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @unless (count($listings) == 0)
        
            @foreach ($listings as $listing)
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="/listings/{{$listing->id}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                        {{ $listing->name }}</h5>
                </a>
                <p class="font-normal text-gray-700 dark:text-gray-400">Nacimiento: {{ $listing->birthday }}</p>
                <p class="font-normal text-gray-700 dark:text-gray-400">Lugar de nacimiento: {{ $listing->birthplace }}</p>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            @endforeach
        
            @else
                <p>no listings found</p>
            @endunless
        </div>
    </div>
</x-app-layout>