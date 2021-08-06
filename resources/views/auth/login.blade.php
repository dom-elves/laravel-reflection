@extends('layouts.master')



@section('login')


<div class="logo"></div>

<div class="login-form">
  <p>Welcome to the admin panel.</p>
  <p>Please log in to continue.</p>
    <form action="{{ route('admin.save') }}" method="post" name="adminLogin">
      @csrf
     <div class="form-content">
       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" required id="email">

       <label for="password"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="password" required id="password">

       <button type="submit">Login</button>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Remember me
       </label>
     </div>


    </form>
</div>

@endsection
