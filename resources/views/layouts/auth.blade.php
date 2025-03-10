<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "To Do App")</title>
    <link href='{{asset("assets/css/bootstrap.min.css")}}' rel="stylesheet" crossorigin="anonymous">
    @yield("style")
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    @yield("content")
    <script src='{{asset("assets/js/bootstrap.bundle.min.js")}}' crossorigin="anonymous"></script>
  </body>
</html>