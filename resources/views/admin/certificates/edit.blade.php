<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Certificate') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $certificate->title)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="provider" :value="__('Provider')" />
                                <x-text-input id="provider" name="provider" type="text" class="mt-1 block w-full" :value="old('provider', $certificate->provider)" />
                                <x-input-error class="mt-2" :messages="$errors->get('provider')" />
                            </div>

                            <div>
                                <x-input-label for="type" :value="__('Category')" />
                                <select id="type" name="type" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="image" {{ old('type', $certificate->type) == 'image' ? 'selected' : '' }}>Academic / Non-Academic Certificate (Image)</option>
                                    <option value="url" {{ old('type', $certificate->type) == 'url' ? 'selected' : '' }}>E-Course / Online Course (External URL)</option>
                                </select>
                                <p class="mt-1 text-xs text-gray-500">Academic = upload file gambar sertifikat. E-Course = masukkan URL dan logo provider.</p>
                                <x-input-error class="mt-2" :messages="$errors->get('type')" />
                            </div>

                            <div>
                                <x-input-label for="url" :value="__('External URL (wajib untuk E-Course)')" />
                                <x-text-input id="url" name="url" type="url" class="mt-1 block w-full" :value="old('url', $certificate->url)" />
                                <p class="mt-1 text-xs text-gray-500">Link ke sertifikat/credential (misal: Coursera, Dicoding).</p>
                                <x-input-error class="mt-2" :messages="$errors->get('url')" />
                            </div>

                            <div>
                                <x-input-label for="sort_order" :value="__('Sort Order')" />
                                <x-text-input id="sort_order" name="sort_order" type="number" class="mt-1 block w-full" :value="old('sort_order', $certificate->sort_order)" min="0" />
                                <x-input-error class="mt-2" :messages="$errors->get('sort_order')" />
                            </div>

                            <div class="md:col-span-2">
                                <x-input-label for="image" :value="__('Image')" />
                                <p class="mt-1 text-xs text-gray-500 mb-2">Untuk Academic: upload gambar sertifikat. Untuk E-Course: upload logo provider (ukuran kecil).</p>
                                @if($certificate->image)
                                    <div class="mt-2 mb-4">
                                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="w-32 h-auto rounded">
                                    </div>
                                @endif
                                <input id="image" name="image" type="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-800 file:text-white hover:file:bg-gray-700" />
                                <x-input-error class="mt-2" :messages="$errors->get('image')" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Update Certificate') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
