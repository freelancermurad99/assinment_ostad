<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row p-4">
                    <div class="col">
                        <div class="card bg-success text-light">
                            <div class="card-header">
                                <span>Total Event</span>
                            </div>
                            <div class="card-body">
                                <span>{{$event_count}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
