<head>
 <script src="https://kit.fontawesome.com/33e7ba0ce6.js" crossorigin="anonymous"></script>
 <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
</head>



<header>
  <div class="header">
    <div class="titles">
      <h1>Welcome to the administration center</h1>
      <h2>Please log in to proceed</h2>
    </div>

    <div class="home-button">
      <a href="/index"><button><i class="fas fa-home"></i></button></a>
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
</div>
