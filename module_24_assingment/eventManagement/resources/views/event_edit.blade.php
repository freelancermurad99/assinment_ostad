<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Event') }}
            <a href="{{route('event_list')}}" class="btn btn-primary float-end">Back to Event List</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="p-5" method="POST" action="{{route('event_update')}}">
                    @csrf
                    <div class="row">

                        <input type="hidden" class="form-control" name="id" value="{{$result->id}}" required>


                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Title</span>
                            <input type="text" class="form-control" name="title" value="{{$result->title}}" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea type="text" class="form-control" placeholder="" name="description" required>{{$result->description}}</textarea>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Date</span>
                            <input type="date" class="form-control" value="{{$result->date}}" name="date" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Time</span>
                            <input type="time" class="form-control" value="{{$result->time}}" name="time" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            <span class="input-group-text">Location</span>
                            <input type="text" class="form-control" value="{{$result->location}}" name="location" required>
                        </div>
                        <div class="input-group col-12 mb-3">
                            
                            <input type="submit" class="form-control btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
