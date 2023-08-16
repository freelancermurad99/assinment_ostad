<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event List') }}
            <a href="{{route('event_add')}}" class="btn btn-primary float-end">Add New Event</a>
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->location}}</td>
                                <td>{{$item->date}}</td>
                                <td>
                                    <a href="{{route('event_details', ['id'=>$item->id])}}" class="btn btn-success">Details</a>
                                    <a href="{{route('event_edit', ['id'=>$item->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('event_delete', ['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                  </table>
                  <div class="paginate" class="p-5 m-5" style="padding: 20px!important;">
                    {{$results->links()}}
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
