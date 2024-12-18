<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Meu layout com components" }}</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css')  }}">
</head>
<body>

@include('layout.navbar')

{{ $slot }}

{{-- bootstrap --}}
<script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
