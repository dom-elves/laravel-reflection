@extends('layouts.master')

@section('companies-list')

<table>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Logo</th>
    <th>Website</th>



@foreach ($companies as $company)
    <tr>
      <form method="POST" action="{{ route("manage.companies-list.destroy",  ['id' => $company->id]) }}">
        @method('POST')
        @csrf
      <td>{{$company->id}}</td>
      <td>{{$company->name}}</td>
      <td>{{$company->email}}</td>
      <td>{{$company->logo}}</td>
      <td>{{$company->website}}</td>
      <td><button type="sumbit">Delete row</button><td>
    </form>
    </tr>
@endforeach
</table>

<div>
  {{$companies->links()}}
</div>
@endsection
