<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel - @yield('title')</title>
  <link rel="stylesheet" href="/css/all.css">
</head>
<body>
<body>
  @include('includes/admin-sidebar')
  <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar hide-for-large">
          <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
          <span class="title-bar-title">{{ getenv('APP_NAME') }}</span>
          </div>
        </div>
    <!-- Your page content lives here -->
    @yield('content')
  </div>
</body>
  <script src="/js/all.js"></script>
</body>
</html>