@extends('layouts.master')

@section('employees-list')


    <table>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Company</th>
        <th colspan="2">Action</th>
      </tr>
    @foreach ($employees as $employee)
        <tr>

            <td>{{$employee->id}}</td>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>{{$employee->company}}</td>
            <form method="POST" action="{{ route("manage.employees-list.destroy",  ['id' => $employee->id]) }}">
              @method('POST')
              @csrf
            <td>
              <button type="submit" class="delete-button">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </form>
          <td><button class="edit-button"><a href="{{ route('manage.employees-list.edit',  ['id' => $employee->id]) }}"><i class="fas fa-edit"></i></a></button></td>

        </tr>
    @endforeach
    </table>

<div>
  {{$employees->links()}}
</div>
@endsection
