<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear biografía') }}
        </h2>
    </x-slot>

    <div class="max-w-screen-2xl mx-auto flex justify-items-center justify-between">
        {{-- Editor --}}    
        <div class="w-full">
            <div class="max-w-4xl mx-auto px-6 pt-12 text-white">
                <h1 class="text-5xl pb-8">Sample Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet a risus ut pretium. Pellentesque eget sodales velit. Aliquam sed felis non dui rhoncus ornare ac id magna. Vestibulum ut massa molestie, pharetra sapien sit amet, tristique sem. Vestibulum pulvinar lobortis nunc sit amet condimentum. Quisque ipsum enim, pulvinar vitae ex ut, porta viverra odio. Curabitur mattis magna et tellus blandit sagittis. Nunc sed lectus eleifend, feugiat nulla eget, tristique nulla. Praesent porta mauris non elementum bibendum. Pellentesque eget faucibus sem. Proin et orci consequat, tempus ipsum quis, condimentum leo. Ut maximus lobortis mauris, convallis tempor mauris convallis dapibus.
                <br>
                Nunc id eros nec sapien posuere ultricies. Proin vitae odio vel elit ultricies lobortis et eu tortor. Ut arcu tellus, fermentum nec lacus quis, tincidunt ultricies neque. In turpis elit, tempor sit amet lacus eget, interdum imperdiet augue. Sed tempor aliquet quam, pulvinar pulvinar magna consectetur sed. Phasellus facilisis dolor nec ligula porttitor vehicula. Pellentesque bibendum vehicula risus sit amet bibendum. Maecenas condimentum, ipsum eu tincidunt tempus, nisl ipsum accumsan nisi, nec elementum lorem nibh ut nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ante massa, suscipit non tellus vitae, venenatis tempus orci. Maecenas tristique justo justo, eget auctor dui dictum eget. Fusce orci elit, sollicitudin nec congue nec, ultricies sit amet dolor. Donec dictum erat sed justo ultrices, at blandit nisl ultricies.</p>
            </div>
        </div>
        {{-- Sidebar --}}
        <div class="max-w-xs">
            <div class="px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <form method="POST" action="/listings" class="" id="identifier">
                    @csrf
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                                placeholder=" " value="{{old('name')}}" required />
                            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                            @error('name')
                            <div class="mt-2 text-sm text-red-700dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span>El nombre esta mal. Por favor, revisalo.</span>
                            </div>
                            @enderror
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="job" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                                placeholder=" " value="{{old('job')}}" />
                            <label for="job" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Profesión</label>
                        </div>  
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="birthday" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                                placeholder=" " value="{{old('birthday')}}" />
                            <label for="birthday" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Año de nacimiento</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="birthplace" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                                placeholder=" " value="{{old('birthplace')}}" />
                            <label for="birthplace" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lugar de nacimiento</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="deathdate" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                                placeholder=" " value="{{old('deathdate')}}" />
                            <label for="deathdate" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Año de muerte</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="deathplace" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                                placeholder=" " value="{{old('deathplace')}}" />
                            <label for="deathplace" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lugar de muerte</label>
                        </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="tags" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                            placeholder=" " value="{{old('tags')}}" />
                        <label for="tags" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Etiquetas (separadas por coma)</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <textarea type="text" name="content" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                        placeholder=" " />{{old('content')}}</textarea>
                        <label for="content" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripción</label>
                    </div>
                    <x-primary-button>Crear biografía</x-primary-button>
                </form>
            </div>
        </div>  
    </div>
</x-app-layout>