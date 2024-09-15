@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Todo List</h2>
            <a href="{{ route('todos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Add New Todo
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
                    <div class="flex-grow">
                        <h3 class="text-lg font-medium text-gray-800">
                            {{ $todo->todo }}
                        </h3>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('todos.edit', $todo) }}" class="bg-blue-500 text-white hover:text-white-600 p-2 rounded">
                            Edit
                        </a>
                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" bg-red-500 text-white hover:text-white-600 p-2 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection