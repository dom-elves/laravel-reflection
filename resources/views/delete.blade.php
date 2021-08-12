@extends('layouts.master')

@section('delete')
<body>

<div class="container">
  <div class="delete-box">
    <h1>Delete Successful!</h1>
    <h3>Redirecting...</h3>
  </div>
</div>



<!-- <script>setTimeout(function(){ window.location.href = '{{ url()->previous() }}' }, 3000);</script> -->
</body>
@endsection
