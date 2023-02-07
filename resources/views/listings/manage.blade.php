<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Biografía
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Etiquetas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Editar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Borrar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless($listings->isEmpty())
                        @foreach($listings as $listing)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="/listings/{{$listing->id}}"> {{$listing->name}}</a>
                            </th>
                            <td class="px-6 py-4">
                                <div>{{$listing->tags}}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>Ultima modificación</div>
                                <div>{{ \Carbon\Carbon::parse($listing->updated_at)->format('d/m/Y') }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/listings/{{$listing->id}}/edit" class="inline-block hover:text-indigo-600 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <button 
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-bio-deletion')"
                                    class="inline-block hover:text-red-600 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </td>                       
                        </tr>
                        @endforeach                   
                        @else
                        <tr>
                            <td>
                                No se han encontrado biografías
                            </td>
                        </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
            <x-modal name="confirm-bio-deletion" focusable>
                <form method="POST" action="/listings/{{ $listing->id }}" class="px-6 py-6">
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
