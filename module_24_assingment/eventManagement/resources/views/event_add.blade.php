<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Event') }}
            <a href="{{route('event_list')}}" class="btn btn-primary float-end">Event List</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="p-5" method="POST" action="{{route('event_add_store')}}">
                    @csrf
                    <div class="row">
                        <input type="hidden" class="form-control" name="user_id" value="{{auth()->user()->id}}">

                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Title</span>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea type="text" class="form-control" placeholder="" name="description" required></textarea>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Date</span>
                            <input type="date" class="form-control" name="date" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Time</span>
                            <input type="time" class="form-control" name="time" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Location</span>
                            <input type="text" class="form-control" name="location" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            
                            <input type="submit" class="form-control btn btn-primary" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
