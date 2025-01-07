@extends('layouts.app')

@section('title', 'Blog | Register')

@section('content')
  <main class="form-signin w-25 m-auto my-5">
    <form method="post" action="{{ url('register') }}" class="flex-col">
    @csrf
        
      <h1 class="text-center h3 mb-3 fw-normal">Sign Up</h1>
      @if(session()->has('error_login'))
        <div class="alert alert-danger">
          {{ session()->get('error_login') }}
        </div>
      @endif

      <div class="form-floating">
        <input type="text" class="form-control mb-3" id="floatingInput" name="name">
        <label for="floatingInput">Name</label>
        @if($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email">
        <label for="floatingInput">Email address</label>
        @if($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>

      <div class="form-floating my-3">
        <input type="password" class="form-control" id="floatingPassword" name="password">
        <label for="floatingPassword">Password</label>
        @if($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>

      <div class="form-floating my-3">
        <input type="password" class="form-control" id="floatingPassword" name="password_confirmation">
        <label for="password_confirmation">Password Confirmation</label>
      </div>
      
      <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
    </form>
  </main>
@endsection