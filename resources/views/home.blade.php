<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elliot Dickerson</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <style>
        .pointer {
            cursor: pointer;
            user-select: none;
        }

        .selected {
            font-weight: bold;
            text-shadow: 2px 2px 2px rgb(0 0 0 / 0.2);
        }

        .title {
            text-shadow: 2px 2px 2px rgb(0 0 0 / 0.2);
        }

        article {
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }
    </style>
    @livewireStyles
</head>

<body id="root" class="container">
    <nav>
        <livewire:title />
        <livewire:menu />
    </nav>
    <livewire:content />
    <livewire:Footer />

    @livewireScripts
</body>

</html>
