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
      <td><a href="{{ route('manage.company-logos.logos', ['id' => $company->id]) }}" target="_blank" name="logo">{{ $company->logo }}</a></td>
      <td>{{$company->website}}</td>
      <td>
        <form method="POST" action="{{ route('manage.companies-list.destroy',  ['id' => $company->id]) }}">
          @method('POST')
          @csrf
          <button type="submit" class="delete-button">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </td>

      <td><button class="edit-button"><a href="{{ route('manage.companies-list.edit', ['id' => $company->id]) }}"><i class="fas fa-edit"></i></a></button></td>

    </tr>
@endforeach
</table>

<div>
  {{$companies->links()}}
</div>
@endsection
