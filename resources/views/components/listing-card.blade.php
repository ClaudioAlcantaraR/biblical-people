@props(['listing'])

<x-card>
    <a href="/listings/{{$listing->id}}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
            {{ $listing->name }}</h5>
    </a>
    @isset($listing->birthday)
        <p class="font-normal text-gray-700 dark:text-gray-400">Nacimiento: <span class="text-sm font-bold capitalize">{{ $listing->birthday }}</span></p>
    @endisset

    @isset($listing->birthplace)
        <p class="font-normal text-gray-700 dark:text-gray-400">Lugar: <span class="text-sm font-bold capitalize">{{ $listing->birthplace }}</span></p>
    @endisset

    @isset($listing->job)
        <p class="font-normal text-gray-700 dark:text-gray-400">Profesión: <span class="text-sm font-bold capitalize">{{ $listing->job }}</span></p>
    @endisset
    
    <x-listing-tags :tagsCsv="$listing->tags" class="px-20"/>
</x-card>
