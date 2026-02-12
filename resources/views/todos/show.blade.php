<x-layout>
    <x-slot:title>{{ $todo->content }}</x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    <a href="/todos/{{ $todo->id }}/edit">Rediģēt ierakstu</a>
    <form method="POST" action="{{ $todo->id }}">
        @csrf
        @method('delete')
        <button>Dzēst</button>
    </form>
</x-layout>