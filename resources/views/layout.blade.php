<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Adoption -@yield('title')</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Somi</h1>
        </header>
        <nav>
            <a href="/demo">Demo</a>
            <a href="/dem">Dem</a>
        </nav>
        <main>
            <article>
                @hasSection('content')
                @yield('content')
                @else
                <h1>no content</h1>
                @endif
            </article>
            <aside>
                @section('ji')
                <ul>
                    <li><a href="/demo">Demo</a></li>
                        <li><a href="/dem">Dem</a></li>
                </ul>
                @show
            </aside>
        </main>
        <footer>Somuu</footer>
    </div>

</body>
</html>