<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Agenda telefónica</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" charset="utf-8">
    <style>

    </style>
  </head>
  <body>

    <div id="app" class="position-ref full-height">
      <div class="content">

        <phonebook></phonebook>

      </div>
    </div>

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </body>
</html>
