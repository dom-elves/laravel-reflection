<head>
 <script src="https://kit.fontawesome.com/33e7ba0ce6.js" crossorigin="anonymous"></script>
 <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">

</head>



<header>
  <div class="header">
    <div class="titles">
      <h1>Administration Center</h1>
    </div>
    <div class="buttons">
      <div class="home-button">
        <a href=" {{ url()->previous() }}"><button><i class="fas fa-arrow-left"></i></button></a>
      </div>
      <div class="home-button">
        <a href="/index"><button><i class="fas fa-home"></i></button></a>
      </div>
    </div>
  </div>



</header>


<div>
@yield('login')
@yield('adminpage')
@yield('index')
@yield('signup')
@yield('thankyou')
@yield('employees')
@yield('employees-list')
@yield('companies')
@yield('companies-list')
@yield('employees-edit')
@yield('companies-edit')
@yield('company-logos')
@yield('save')
@yield('delete')
</div>
