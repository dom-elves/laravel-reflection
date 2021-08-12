@extends('layouts.master')


@section('adminpage')




  <div class="options">
    <h2>Companies</h2>
    <div class="icon-block">
    <div class="icon">
      <a href="/companies-list"><i class="far fa-building"></i></a>
    </div>

    <div class="icon">
      <a href="/companies"><i class="fas fa-plus"></i></a>
    </div>
  </div>

<h2>Employees</h2>
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
