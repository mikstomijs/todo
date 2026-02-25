<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
<h1>Izveidot uzdevumu</h1>
<form method="POST" action="/todos">
    @csrf
  <input name="content" />
  <select name="priority">
    <option value="low">Zema</option>
    <option value="medium">Vidēja</option>
    <option value="high">Augsta</option>
  </select>
  @error("content")
    <p>{{ $message }}</p>
  @enderror
   @error("uuid")
    <p>{{ $message }}</p>
  @enderror
   @error("priority")
    <p>{{ $message }}</p>
  @enderror
  <button>Saglabāt</button>
</form>
</x-layout>