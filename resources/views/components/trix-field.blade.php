@props(['id', 'name', 'value' => ''])

<input type="hidden" id="{{ $id }}_input" name="{{ $name }}" value="{{ $value?->toTrixHtml() }}" />

<trix-editor
    id="{{ $id }}"
    input="{{ $id }}_input"
    {{ $attributes->merge(['class' => 'trix-content block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer']) }}
    x-data="{
        upload(event) {
            const data = new FormData();
            data.append('attachment', event.attachment.file);
 
            window.axios.post('/attachments', data, {
                onUploadProgress(progressEvent) {
                    event.attachment.setUploadProgress(
                        progressEvent.loaded / progressEvent.total * 100
                    );
                },
            }).then(({ data }) => {
                event.attachment.setAttributes({
                    url: data.image_url,
                });
            });
        }
    }"
    x-on:trix-attachment-add="upload"
></trix-editor>
