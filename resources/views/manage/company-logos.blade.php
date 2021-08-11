@extends('layouts.master')

@section('company-logos')
<h1>company logo</h1>

  <img src="{{ asset('/assets/storage/' . $logo ) }}">


@endsection
