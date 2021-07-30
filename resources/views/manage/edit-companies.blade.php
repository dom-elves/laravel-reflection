@extends('layouts.master')

@section('companies-edit')
<h1> edit </h1>

<form action="" method="POST" action="{{ route("manage.companies-list.edit",  ['id' => $company->id]) }}">
  @method('POST')
  @csrf
  <input type="text" name="name" value="{{ $company->name }}">
  <input type="text" name="email" value="{{ $company->email }}">
  <input type="file" name="logo" value="{{ $company->logo }}">
  <input type="text" name="website" value="{{ $company->website }}">
  <button> Update Info </button>
</form>
@endsection
