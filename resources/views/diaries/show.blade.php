<x-layout>
      <x-slot:title>
    {{ $diary->title }} 
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <p>{{ $diary->body }}</p>
  <p>{{ $diary->date }}</p>
  <a href="/diaries/{{ $diary->id }}/edit">Rediģēt ierakstu</a>
   <form method="POST" action="{{ $diary->id }}">
        @csrf
        @method('delete')
        <button>Dzēst</button>
    </form>
</x-layout>