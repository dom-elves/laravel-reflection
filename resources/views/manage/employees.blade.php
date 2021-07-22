@extends('layouts.master')

@section('employees')

<h1>add a new employee</h1>

<div class="create-employee">
  <form action="{{ route("manage.employees.save") }}" method="post">
    @csrf
     <p>Fields marked with a * are required</p>
     <label for="first_name"><b>First Name *</b></label>
     <input type="text" placeholder="Enter First Name" name="first_name" required>

     <label for="last_name"><b>Last Name(s) *</b></label>
     <input type="text" placeholder="Enter Last Name(s)" name="last_name" required>

     <label for="email"><b>Email *</b></label>
     <input type="text" placeholder="Enter Email" name="email" required>

     <label for="company"><b>Company</b></label>
     <input type="text" placeholder="Enter Company" name="company">

     <label for="phone_number"><b>Phone Number</b></label>
     <input type="number" placeholder="Enter Phone Number" name="phone_number">

     <label for="password"><b>Password *</b></label>
     <input type="password" placeholder="Enter Password" name="password" required>

     <button type="submit">Sign Up</button>
     <label>
       <input type="checkbox" checked="checked" name="remember"> Remember me
     </label>

  <div>


@endsection
