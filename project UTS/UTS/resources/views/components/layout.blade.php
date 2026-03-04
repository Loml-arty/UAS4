<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="Mid-client-HlLut7HPBh4cVqc8"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <x-navbar> </x-navbar>
    <x-header>{{ $title }}</x-header>
    <main> {{ $slot }}</main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>