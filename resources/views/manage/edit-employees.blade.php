@extends('layouts.master')

@section('employees-edit')
<h1> Edit Employee Information </h1>

<form action="" method="POST" action="{{ route("manage.employees-list.edit",  ['id' => $employee->id]) }}" id="edit-form">
  @method('POST')
  @csrf
  <input type="text" name="first_name" value="{{ $employee->first_name }}">
  <input type="text" name="last_name" value="{{ $employee->last_name }}">
  <input type="text" name="email" value="{{ $employee->email }}">
  <input type="number" name="phone_number" value="{{ $employee->phone_number }}">
  <input type="text" name="company" value="{{ $employee->company }}">
  <button> Update Info </button>
</form>
@endsection
