<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zzigae House</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/3239cdd2fb.js" crossorigin="anonymous"></script>
</head>

<body>
    @yield('content')
    <footer>
        <p>Copyright {{ Date('Y') }} Zzigae House ❤️ Made With Laravel</p>
    </footer>
</body>

</html>