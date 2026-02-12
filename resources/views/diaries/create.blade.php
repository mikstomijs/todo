<x-layout>
    <x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot ierakstu</h1>
<form method="POST" action="/diaries">
    @csrf
  <input name="title" />
  <textarea name="body"></textarea>
  <input name="date" type="date">
  @error("content")
    <p>{{ $message }}</p>
  @enderror  
  <button>Saglabāt</button>
</form>
</x-layout>