<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $portfolio->title)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="slug" :value="__('Slug (optional)')" />
                                <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $portfolio->slug)" />
                                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                            </div>


                            <div>
                                <x-input-label for="client" :value="__('Client')" />
                                <x-text-input id="client" name="client" type="text" class="mt-1 block w-full" :value="old('client', $portfolio->client)" />
                                <x-input-error class="mt-2" :messages="$errors->get('client')" />
                            </div>

                            <div>
                                <x-input-label for="url" :value="__('URL')" />
                                <x-text-input id="url" name="url" type="url" class="mt-1 block w-full" :value="old('url', $portfolio->url)" />
                                <x-input-error class="mt-2" :messages="$errors->get('url')" />
                            </div>

                            <div>
                                <x-input-label for="completion_date" :value="__('Completion Date')" />
                                <x-text-input id="completion_date" name="completion_date" type="date" class="mt-1 block w-full" :value="old('completion_date', $portfolio->completion_date?->format('Y-m-d'))" />
                                <x-input-error class="mt-2" :messages="$errors->get('completion_date')" />
                            </div>

                            <div class="md:col-span-2">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="4">{{ old('description', $portfolio->description) }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('Featured Image')" />
                                @if($portfolio->image)
                                    <div class="mt-2 mb-4">
                                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-32 h-auto rounded">
                                    </div>
                                @endif
                                <input id="image" name="image" type="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-800 file:text-white hover:file:bg-gray-700" />
                                <x-input-error class="mt-2" :messages="$errors->get('image')" />
                            </div>

                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input id="is_featured" name="is_featured" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" value="1" {{ old('is_featured', $portfolio->is_featured) ? 'checked' : '' }}>
                                    <x-input-label for="is_featured" :value="__('Featured')" class="ml-2" />
                                </div>
                                <div>
                                    <x-input-label for="sort_order" :value="__('Sort Order')" />
                                    <x-text-input id="sort_order" name="sort_order" type="number" class="mt-1 block w-24" :value="old('sort_order', $portfolio->sort_order)" min="0" />
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Update Portfolio') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
