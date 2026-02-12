<x-layout>
    <x-slot:title>Rediģēt ierakstu</x-slot:title>
    <h1>{{ $diary->content }}</h1>
    <form method="POST" action="/diaries/{{ $diary->id }}">
        @csrf
        @method('PUT')
        <label>
            <input name="title" value="{{ old('title', $diary->title) }}">
        </label>
        @error("title")
        <p>{{ $message }}</p>
        @enderror
        <label>
            <textarea name="body">{{ old('body', $diary->body) }}</textarea>
        </label>
        @error("body")
        <p>{{ $message }}</p>
        @enderror
        <label>
            <input type="date" name="date" value="{{ old('date', $diary->date) }}">
        </label>
        @error("date")
        <p>{{ $message }}</p>
        @enderror
    
        <button>Saglabāt</button>
    </form>
</x-layout>