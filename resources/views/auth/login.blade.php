@extends('layouts.app')

@section('content')

  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg dark:bg-gray-900 dark:text-gray-100">

      @if (session('status'))
      <div class="bg-red-600 text-white p-2 rounded text-sm mb-2">
        {{ session('status') }}
      </div>
      @endif

    <form id="register" action="{{ route('login') }}" method="POST">
      @csrf

      {{-- Email Field --}}
      <div class="mb-4">
        <label for="email" class="">Email</label>
        <input type="text" name="email" id="email" placeholder="Your email" class="text-gray-200 leading-tight mt-1 focus:outline-none focus:bg-gray-800 focus:border-blue-500 bg-gray-900 opacity-70 border-2 border-gray-500 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
        @error('email')
          <div class="text-red-500 text-sm inline p-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      {{-- Password Field --}}
      <div class="mb-4">
        <label for="password" class="">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" class="text-gray-200 leading-tight mt-1 focus:outline-none focus:bg-gray-800 focus:border-blue-500 bg-gray-900 opacity-70 border-2 border-gray-500 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
        @error('password')
          <div class="text-red-500 text-sm inline p-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div>
        <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded font-medium mx-auto">Register</button>
      </div>
    </form>
    </div>
  </div>
@endsection