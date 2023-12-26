<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<head>
  @yield('head')
  @include('website.component.head')
</head>

<body class="home blog home-container post-post-the-winkelvoss-twins-bitcoin-billionaires-and-foes-of-facebook">
  <div class="loaders-container">
    <div class="loaders"></div>
  </div>

  <div id="main-wrapper">
    @include('website.component.navigation')
    
    @yield('content')

    @include('website.component.footer')
  </div>

  @include('website.component.script')
  @yield('script')
</body>

</html>