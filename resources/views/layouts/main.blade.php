<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
    <div>
    <nav>
        <ul>
            <li>
            <a href="{{route('main.index')}}">Main</a>
            <a href="{{route('about.index')}}">About</a>
            <a href="{{route('contacts.index')}}">Contacts</a>

            </li>
        </ul>
    </nav>
    </div>
@yield('content')
    </body>
</html>
