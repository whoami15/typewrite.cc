@props(['title'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{ $title }}</title>
</head>
<body>
    <header class="container">
        <nav>
            <ul>
                <li>
                    <a href="{{ route('app.dashboard') }}" class="contrast">
                        <strong>{{ config('app.name') }}</strong>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="{{ route('app.collections.index') }}">Collections</a>
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

    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
