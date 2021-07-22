@extends('layouts.master')

@section('employees-list')

<table>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email Address</th>
    <th>Phone Number</th>
    <th>Company</th>


@foreach ($employees as $employee)
    <tr>
      <td>{{$employee->id}}</td>
      <td>{{$employee->first_name}}</td>
      <td>{{$employee->last_name}}</td>
      <td>{{$employee->email}}</td>
      <td>{{$employee->phone_number}}</td>
      <td>{{$employee->company}}</td>
    </tr>
@endforeach
</table>

<div>
  {{$employees->links()}}
</div>
@endsection
