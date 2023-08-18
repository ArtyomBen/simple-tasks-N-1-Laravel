<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <select>
        @foreach ($country as $countryes)
            <option value="{{ $countryes->Code }}">
                {{ $countryes->Name }}
            </option>
        @endforeach
    </select>
</body>

</html>
