<x-layout>
    <div>
        <div>
            <h1>todo: {{ $todo->created_at }}</h1>
            <div>
                <a href="{{ route('todo.edit', $todo) }}">Edit</a>
                <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </div>
        <div>
            <div>
                {{ $todo->todo }}
            </div>
        </div>
    </div>
</x-layout>