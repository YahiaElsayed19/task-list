@extends('layouts.app')

@section('title', ' The List Of Tasks')

@section('content')
    <nav>
        <a class="link" href="{{ route('tasks.create') }}">Add
            Task</a>
    </nav>

    <div>
        {{-- @if (count($tasks) > 0) --}}
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['', 'line-through' => $task->completed])>
                    {{ $task->title }}
                </a>
            </div>
        @empty
            <div>There no tasks!</div>
        @endforelse
        {{-- @endif --}}
    </div>
    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
