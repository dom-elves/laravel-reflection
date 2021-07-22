@extends('layouts.master')



@section('login')


<div class="logo"></div>

<div class="login-form">
  <p>Welcome to the admin panel.</p>
  <p>Please log in to continue.</p>
    <form action="action_page.php" method="post">
     <div class="form-content">
       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" required>

       <label for="password"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="password" required>

       <button type="submit">Login</button>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Remember me
       </label>
     </div>


    </form>
</div>

@endsection
