@extends('layouts.master')

@section('index')

<h1>welcome to something</h1>
<h2>please select what you would like to do</h2>

<div class="options">

  <div class="create">
    <a href="{{ route("auth.signup") }}"><button>create an account</button></a>
  </div>

  <div class="login">
    <a href="/login"><button>log in as admin</button></a>
  </div>
</div>




@endsection
