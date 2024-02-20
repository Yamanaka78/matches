<x-app-layout>
  <div class="max-w-sm mx-auto flex p-5 m-10 bg-white rounded-3g shadow-xl">
  <div class="ml-6 pt-1 ">
    @foreach($users as $user)
    <p>{{ $user->name }}</p>
    <img src="{{ asset('storage/' . $user->image) }}"
    alt="" id="preview" class="w-16 h-16 rounded-full object-cover border-none bg-gray-200">
    <p>こんにちは初めまして</p>
    <button>yes</button>
    <button>no</button>
    @endforeach
    </div>
  </div>
</x-app-layout>
