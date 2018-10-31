<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foundation | Welcome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
  <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
</head>

<body>

  <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas>
    <div class="grid-y grid-padding-x" style="height: 100%;">
      <br>
      <div class="cell shrink">
        <img class="thumbnail" src="https://placehold.it/550x350">
      </div>
      <div class="cell auto">
        <h5>main Menu</h5>
        <ul  class="side-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/gallery/create">Gallery Create</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="off-canvas-content" data-off-canvas-content>
    <div class="title-bar hide-for-large">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="my-info"></button>
        <span class="title-bar-title">Mike Mikerson</span>
      </div>
    </div>

    @if (Session::has('message'))
        <div data-alert="" class="alert-box">
          {{ Session::get('message')}}
        </div>
    @endif
  @yield('content')
  </div>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>