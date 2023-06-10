<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ $listing->name }}
                </h2>
            </div>
            <div class="flex items-center gap-x-3">
                @can('update', $listing)
                <a href="/listings/{{$listing->id}}/edit" class="mr-2">
                    <x-secondary-button class="hidden sm:block">Editar</x-secondary-button>
                    <span class="text-stone-500 dark:text-stone-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:hidden inline-block hover:text-indigo-600 transition ease-in-out duration-150">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg></span>
                </a>
                @endcan
                @can('delete', $listing)
                <x-danger-button
                    class="hidden sm:block"
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-bio-deletion')">
                    {{ __('Borrar biografía') }}
                </x-danger-button>
                <button
                    class="sm:hidden inline-block text-stone-500 dark:text-stone-400 hover:text-red-600 transition ease-in-out duration-150"
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-bio-deletion')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
                    @endcan
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8 px-3 flex justify-between">
            <aside class="hidden lg:block lg:w-70 pr-6" aria-label="Sidebar">
                <x-quick-bio :listing="$listing" />
            </aside>

            <div class="w-full max-w-5xl">
                {{-- Nombre --}}
                <h1 class="mb-2 text-2xl sm:text-3xl font-extrabold leading-tight text-gray-900 lg:mb-2 lg:text-4xl dark:text-white">
                    {{ $listing->name }}
                </h1>
                {{-- Tags --}}
                <div>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>
                {{-- <div>
                    <x-reading-time />
                </div> --}}
                {{-- Content --}}
                <div class="mt-4">
                    <article id="article_reading_time" class="text-gray-900 dark:text-gray-300 lg:text-lg text-base">{!! clean($listing->content) !!}</article>
                </div>
            </div>
            {{-- <aside class="hidden lg:block lg:w-70" aria-label="Sidebar">
               <x-index-single />
            </aside> --}}

            <x-modal name="confirm-bio-deletion" focusable>
                <form method="POST" action="/listings/{{ $listing->id }}" class="p-6">
                    @csrf
                    @method('DELETE')

                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

                    <h2 class="text-lg text-center font-medium text-gray-900 dark:text-gray-100">
                        {{ __('¿Estas seguro de borrar esta biografía?') }}
                    </h2>

                    <div class="mt-6 flex justify-center">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('No, Cancelar') }}
                        </x-secondary-button>

                        <x-danger-button class="ml-3">
                            {{ __('Si, estoy seguro') }}
                        </x-danger-button>
                    </div>
                </form>
            </x-modal>
        </div>
    </div>
</x-app-layout>
