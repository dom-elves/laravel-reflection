@extends('layouts.master')


@section('adminpage')

<h1>welcome to admin<h1>
<h3>what would you like to do?<h3>

  <div class="options">

    <div>
      <a href="{{ route("auth.signup") }}"><button>add a company</button></a>
    </div>

    <div>
      <a href="/login"><button>manage a company</button></a>
    </div>

    <div>
      <a href="/login"><button>add an employee</button></a>
    </div>

    <div>
      <a href="/login"><button>manage an employee</button></a>
    </div>
  </div>

@endsection
