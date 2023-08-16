<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Details') }}
            <a href="{{route('event_list')}}" class="btn btn-primary float-end">Back to Event List</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row p-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                               <b>Title:</b> {{$result->title}}
                            </div>
                            <div class="card-body">
                                <b>Description:</b> {{$result->description}} <br>
                                <b>Date:</b> {{$result->date}} <br>
                                <b>Time:</b> {{$result->time}} <br>
                                <b>Location:</b> {{$result->location}} <br>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('event_edit', ['id'=>$result->id])}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('event_delete', ['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
