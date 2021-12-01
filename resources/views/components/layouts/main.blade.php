@props(['title'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>{{ $title }}</title>
</head>
<body>
    <header class="container">
        <nav>
            <ul>
                <li>
                    <strong>{{ config('app.name') }}</strong>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="{{ route('app.lists.index') }}">Lists</a>
                </li>

                <li>
                    <a href="#">API</a>
                </li>

                <li>
                    <a href="#">Account</a>
                </li>
            </ul>
        </nav>
    </header>

    {{ $slot }}
</body>
</html>
