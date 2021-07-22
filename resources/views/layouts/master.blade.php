<head>
 <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
</head>



<header>
  <div class="header">
    <div class="titles">
      <h1>header on every page</h1>
      <h2>(hopefully)</h2>
    </div>
    <div>
      <a href="/index"><button>home</button></a>
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
