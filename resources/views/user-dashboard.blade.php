<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
</head>

<body>
    <h3>User Dashboard</h3>
    {{-- @auth
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ auth()->user()->email }}</p>
    @endauth --}}

    @if (Auth::check())
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ auth()->user()->email }}</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            {{-- <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              this.closest('form').submit();">Logout</a> --}}

            <button type="submit">Logout</button>

        </form>
    @endif
</body>

</html>
