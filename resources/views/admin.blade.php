@extends('layouts.master')


@section('adminpage')

<h1>welcome to admin<h1>
<h3>what would you like to do?<h3>

  <div class="options">
    <div class="icon-block">
    <div class="icon">
      <a href="/companies-list"><i class="far fa-building"></i></a>
    </div>

    <div class="icon">
      <a href="/companies"><i class="fas fa-plus"></i></a>
    </div>
  </div>
  <div class="icon-block">
    <div class="icon">
      <a href="/employees-list"><i class="fas fa-user-edit"></i></a>
    </div>

    <div class="icon">
      <a href="/employees"><i class="fas fa-plus"></i></a>
    </div>
</div>

  </div>

@endsection
