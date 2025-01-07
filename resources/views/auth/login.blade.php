@extends('layouts.app')

@section('title', 'Blog | Login')

@section('content')
  <main class="form-signin w-25 m-auto my-5">
    <form method="post" action="{{ url('login') }}" class="flex-col">
    @csrf
        
      <h1 class="text-center h3 mb-3 fw-normal">Sign In</h1>
      @if(session()->has('error_login'))
        <div class="alert alert-danger">
          {{ session()->get('error_login') }}
        </div>
      @endif

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating my-3">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>
@endsection