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
      <td>{{$company->id}}</td>
      <td>{{$company->name}}</td>
      <td>{{$company->email}}</td>
      <td>{{$company->logo}}</td>
      <td>{{$company->website}}</td>

    </tr>
@endforeach
</table>

<div>
  {{$companies->links()}}
</div>
@endsection
