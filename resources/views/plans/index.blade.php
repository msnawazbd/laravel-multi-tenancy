<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
            <x-link-button href="{{ route('plans.create') }}" class="ml-4 float-right">
                {{ __('Create Plan') }}
            </x-link-button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Slug</th>
                                    <th scope="col" class="px-6 py-3">Post Limit</th>
                                    <th scope="col" class="px-6 py-3">Price</th>
                                    <th scope="col" class="px-6 py-3">Strip Plan Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($plans as $plan)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">{{ $plan->id }}</td>
                                        <td class="px-6 py-4">{{ $plan->name }}</td>
                                        <td class="px-6 py-4">{{ $plan->slug }}</td>
                                        <td class="px-6 py-4">{{ $plan->post_limit }}</td>
                                        <td class="px-6 py-4">US$ {{ $plan->price }}</td>
                                        <td class="px-6 py-4">{{ $plan->stripe_plan_id }}</td>
                                        <td class="px-6 py-4">
                                            <x-link-button href="{{ route('plans.edit', $plan) }}" class="mr-2">
                                                {{ __('Edit') }}
                                            </x-link-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
