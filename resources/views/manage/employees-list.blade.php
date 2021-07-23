@extends('layouts.master')

@section('employees-list')

<form method="POST" action="{{ route("manage.employees-list.destroy") }}">

  @method('DELETE')
  @csrf

    <table>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Company</th>


    @foreach ($employees as $employee)
        <tr>
          <td>{{$employee->id}}</td></td>
          <td>{{$employee->first_name}}</td>
          <td>{{$employee->last_name}}</td>
          <td>{{$employee->email}}</td>
          <td>{{$employee->phone_number}}</td>
          <td>{{$employee->company}}</td>
          <td><button type="sumbit">Delete row</button><td>

        </tr>
    @endforeach
    </table>
</form>
<div>
  {{$employees->links()}}
</div>
@endsection
