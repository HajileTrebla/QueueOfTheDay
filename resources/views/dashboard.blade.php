<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-col md:flex-row lg:flex-row justify-center">
        <div class='md:min-w-[50%] flex pt-24 pl-16 pr-12 md:pl-40 md:pr-0'>
            @include('tasks-partials.task-input-form')
        </div>
        @if (1 === 1)
            <div class='md:min-w-[50%] flex pt-8 pl-16 md:pt-24 md:pl-40'>
                @include('tasks-partials.task-list', ['tasks'=>$tasks])
            </div>
        @else
            <div class='md:min-w-[50%] flex pt-8 pl-16 md:pt-24 md:pl-40'>
                @include('tasks-partials.task-list', ['tasks'=>$tasks])
            </div>
        @endif
    </div>
</x-app-layout>
