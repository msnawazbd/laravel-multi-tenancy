<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
            <x-link-button href="{{ route('posts.index') }}" class="ml-4 float-right">
                {{ __('Manage Posts') }}
            </x-link-button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    <!-- Title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Details -->
                    <div class="mt-4">
                        <x-input-label for="details" :value="__('Details')" />
                        <x-text-input id="details" class="block mt-1 w-full" type="text" name="details" :value="old('details')" required autocomplete="details" />
                        <x-input-error :messages="$errors->get('details')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('posts.index') }}">
                            {{ __('Close') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
