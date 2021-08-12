@extends('layouts.master')

@section('companies-edit')
<h1> Edit Company Information </h1>

<form method="POST" action="{{ route("manage.companies-list.edit",  ['id' => $company->id]) }}" id="edit-form">
  @method('POST')
  @csrf
  <input type="text" name="name" value="{{ $company->name }}">
  <input type="text" name="email" value="{{ $company->email }}">
  <input type="file" name="logo" value="{{ $company->logo }}">
  <input type="text" name="website" value="{{ $company->website }}">
  <button> Update Info </button>
</form>
@endsection
