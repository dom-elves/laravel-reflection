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
      <td><a href="{{ route("manage.logos.logos",  ['id' => $company->id]) }}" target="_blank">{{ $company->logo }}</a></td>
      <td>{{$company->website}}</td>
      <td><button type="sumbit" class="delete-button"><i class="fas fa-trash"></i></button><td>
      <td><button class="edit-button"><a href="{{ route("manage.companies-list.edit",  ['id' => $company->id]) }}"><i class="fas fa-edit"></i></a></button></td>
    </form>
    </tr>
@endforeach
</table>

<div>
  {{$companies->links()}}
</div>
@endsection
