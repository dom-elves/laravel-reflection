

<h1>company logo</h1>

<!-- <form role="form" action="{{ URL::asset('storage/public' . $logo) }}" enctype="multipart/form-data"> -->
<img src="{{ route('manage.company-logos.logos', 'storage/public/' . $logo) }}">


<!-- </form> -->
