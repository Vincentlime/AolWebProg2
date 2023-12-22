<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> @yield('title') </title>
  @vite('resources/css/app.css')
</head>
<body>
  <header class="sticky text-white bg-c-black p-3 top-0 left-0 right-0 font-medium text-sm">
    <div class="">
        <ul class="flex flex-wrap justify-between list-none">
            <li class="align-middle pr-60"> <img src="img\logo.png" alt="" class="box-content w-10"> </a></li>
            <li class="flex items-end"> <a href='/' > Home </a></li>
            <li class="flex items-end"> <a href='product'> Product</a></li>
            <li class="flex items-end"> <a href='aboutus'> About Us</a></li>

            @if(session('user'))
                <li class="flex items-end"> <a href='showProfile'> Profile </a></li>
            @else
                <li class="flex items-end"> <a href='account'> Account </a></li>
            @endif
        </ul>
    </div>
  </header>


  <div class="m-3">
      @yield('content')
  </div>
  
  <footer class = "sticky bottom-0 bg-c-black left-0 right-0 p-1">
    <div class = "flex justify-center">
    <a href="instagram.com" class = "box-content w-5 h-5 m-2"> <img src="img\ig.png" alt=""> </a>
    <a href="twitter.com" class = "box-content w-5 h-5 m-2"> <img src="img\twitter.png" alt=""></a>
    <a href="tiktok.com" class = "box-content w-5 h-5 m-2"> <img src="img\tiktok.png" alt=""></a>
    </div>
    <div class = "text-center text-white font-medium text-sm">
        ©copyright 2023
    </div>
</footer>
</body>
</html>