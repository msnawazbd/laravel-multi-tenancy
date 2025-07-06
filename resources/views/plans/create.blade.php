<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
            <x-link-button href="{{ route('plans.index') }}" class="ml-4 float-right">
                {{ __('Manage Plans') }}
            </x-link-button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('plans.store') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Slug -->
                    <div class="mt-4">
                        <x-input-label for="slug" :value="__('Slug')" />
                        <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required />
                        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                    </div>

                    <!-- Post Limit -->
                    <div class="mt-4">
                        <x-input-label for="post_limit" :value="__('Post Limit')" />
                        <x-text-input id="post_limit" class="block mt-1 w-full" type="number" name="post_limit" :value="old('post_limit')" required />
                        <x-input-error :messages="$errors->get('post_limit')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" :value="old('price')" required />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <!-- Stripe Plan ID -->
                    <div class="mt-4">
                        <x-input-label for="stripe_plan_id" :value="__('Stripe Plan ID')" />
                        <x-text-input id="stripe_plan_id" class="block mt-1 w-full" type="text" name="stripe_plan_id" :value="old('stripe_plan_id')" />
                        <x-input-error :messages="$errors->get('stripe_plan_id')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('plans.index') }}">
                            {{ __('Cancel') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Save Plan') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
