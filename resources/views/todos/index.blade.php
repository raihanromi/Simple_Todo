@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Todo List</h2>
            <a href="{{ route('todos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-plus"></i> Add New Todo
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="space-y-4">
            @foreach ($todos as $todo)
                <div class="border-b border-gray-200 pb-4 flex items-center">
                    <div class="flex-grow flex items-center">
                        <form action="/todos/{{$todo->id}}/status" method="POST">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white w-10 h-10 rounded-full hover:bg-blue-700"><i class="fa-solid fa-check"></i></button>
                        </form>
                        <h3 class="text-xl font-medium text-gray-800 ml-2 {{$todo->complete ? 'line-through': '' }}">
                            {{ $todo->todo }}
                        </h3>
                    </div>
                    <div class="flex space-x-3 mr-2">
                        <a href="{{ route('todos.edit', $todo) }}" class="">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=""><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection