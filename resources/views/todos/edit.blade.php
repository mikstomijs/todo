<x-layout>
    <x-slot:title>Rediģēt uzdevumu</x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')
        <label>
            <input name="content" value="{{ old('content', $todo->content) }}">
        </label>
        @error("content")
        <p>{{ $message }}</p>
        @enderror
        <label>
            Izpildīts:
            <input name="completed" type="hidden" value="0">
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? "checked" : "" }}>
        </label>
        @error("completed")
        <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>