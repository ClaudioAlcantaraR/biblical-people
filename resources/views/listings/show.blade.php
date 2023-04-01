<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ $listing->name }}
                </h2>
            </div>
            <div>
                <a href="/listings/{{$listing->id}}/edit" class="mr-2">
                    <x-secondary-button>Editar</x-secondary-button>
                </a>
                <x-danger-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-bio-deletion')">
                    {{ __('Borrar biografía') }}
                </x-danger-button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8 px-3 flex justify-between">
            <aside class="hidden lg:block lg:w-70" aria-label="Sidebar">
                <x-quick-bio :listing="$listing" />
            </aside>
            
            <div class="w-full max-w-4xl">
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
            <aside class="hidden lg:block lg:w-70" aria-label="Sidebar">
               {{--  <x-index-single /> --}}
            </aside>

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
