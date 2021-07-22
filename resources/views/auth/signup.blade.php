@extends('layouts.master')


@section('signup')
<div class="login-form">
  <p>Please fill out the form below in order to sign up.</p>

    <form action="{{ route("auth.signup.save") }}" method="post">
      @csrf
     <div class="form-content">
       <label for="first_name"><b>First Name</b></label>
       <input type="text" placeholder="Enter First Name" name="first_name" required>

       <label for="last_name"><b>Last Name(s)</b></label>
       <input type="text" placeholder="Enter Last Name(s)" name="last_name" required>

       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" required>

       <label for="password"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="password" required>

       <button type="submit">Sign Up</button>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Remember me
       </label>
     </div>


    </form>
</div>
@endsection
