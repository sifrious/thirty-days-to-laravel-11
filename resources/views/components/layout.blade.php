<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>

<body>
    <nav>
        <a href="/">
            <x-nav-link>
                Home
            </x-nav-link>
        </a>
        <a href="/about">
            <x-nav-link>
                About
            </x-nav-link>
        </a>
        <a href="/contact">
            <x-nav-link>
                Contact
            </x-nav-link>
        </a>
    </nav>

    {{-- <?php echo $slot; ?> --}}
    {{ $slot }}

    {{-- create a Laravel component called nav-link (a file) and paste that anchor tag; 
    you can't also paste the label for the anchor tag. That will need to be dynamic (use a slot). --}}
</body>
<html>
