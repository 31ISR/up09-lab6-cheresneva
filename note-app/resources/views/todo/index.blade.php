<x-layout>
    <div >
        <a href="{{ route('todo.create') }}" >
            New Todo
        </a>
        <div >
            @foreach ($todos as $todo)
                <div >
                    <div >
                        {{ Str::words($todo->todo, 30) }}
                    </div>
                    <div >
                        <a href="{{ route('todo.show', $todo) }}" >View</a>
                        <a href="{{ route('todo.edit', $todo) }}" >Edit</a>
                        <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button >Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div >
            {{ $todos->links() }}
        </div>
    </div>
</x-layout>