<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Alcohol Provenance check' }}</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/4.1.1/web3.min.js"></script>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  @livewireStyles
</head>
<body >
{{ $slot }}




@livewireScripts



</body>
</html>