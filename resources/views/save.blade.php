@extends('layouts.master')

@section('save')
<body>

<div class="container">
  <div class="save-box">
    <h1>Save Successful!</h1>
    <h3>Redirecting...</h3>
  </div>
</div>



<script>setTimeout(function(){ window.location.href = '{{ url()->previous() }}' }, 3000);</script>
</body>
@endsection
