@props(['listing'])

<div {{ $attributes->merge(['class' => 'p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 sticky top-36'])}}>
    <dl>
        <div class="mb-4">
            <dt class="mb-2 text-sm font-bold text-gray-900 uppercase dark:text-white">Profesión</dt>
            <dd class="inline-flex items-center text-sm text-gray-900 dark:text-gray-300 capitalize">{{ $listing->job }}</dd>
        </div>
        <div class="mb-4">
            <dt class="mb-2 text-sm font-bold text-gray-900 uppercase dark:text-white">Año de nacimiento</dt>
            <dd class="inline-flex items-center text-sm text-gray-900 dark:text-gray-300 capitalize">{{ $listing->birthday }}</dd>
        </div>
        <div class="mb-4">
            <dt class="mb-2 text-sm font-bold text-gray-900 uppercase dark:text-white">Lugar de nacimiento</dt>
            <dd class="inline-flex items-center text-sm text-gray-900 dark:text-gray-300 capitalize">{{ $listing->birthplace }}</dd>
        </div>
        <div class="mb-4">
            <dt class="mb-2 text-sm font-bold text-gray-900 uppercase dark:text-white">Año de muerte</dt>
            <dd class="inline-flex items-center text-sm text-gray-900 dark:text-gray-300 capitalize">{{ $listing->deathdate }}</dd>
        </div>
        <div class="mb-4">
            <dt class="mb-2 text-sm font-bold text-gray-900 uppercase dark:text-white">Lugar de muerte</dt>
            <dd class="inline-flex items-center text-sm text-gray-900 dark:text-gray-300 capitalize">{{ $listing->deathplace }}</dd>
        </div>
    </dl>
</div>