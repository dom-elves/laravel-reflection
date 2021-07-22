@extends('layouts.master')

@section('companies')

<h1>add a new company</h1>

<div class="create-employee">
  <form action="{{ route("manage.companies.save") }}" method="post">
    @csrf

     <label for="name"><b>Company Name</b></label>
     <input type="text" placeholder="Enter Company Name" name="name" required>

     <label for="email"><b>Company Email</b></label>
     <input type="text" placeholder="Enter Email" name="email" required>

     <label for="logo"><b>Logo</b></label>
     <input type="file"  name="logo" required>

     <label for="website"><b>Company Website</b></label>
     <input type="text" placeholder="Company Website" name="website" required>

     <button type="submit">Sign Up</button>
     <label>
       <input type="checkbox" checked="checked" name="remember"> Remember me
     </label>

  <div>


@endsection
