<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <div>
        @foreach ($users as $user)
            <h4>User: {{ $user->name }}</h4>
            @foreach ($user->addresses as $address)
                <p>Country: {{ $address->country }}</p>
            @endforeach
            <hr>
        @endforeach
    </div> --}}

    <div>
        @foreach ($users as $user)
            <h4>User: {{ $user->name }}</h4>
            <p>Post: {{ $user->posts->count() }}</p>
            <hr>
        @endforeach
    </div>

    <br>
    <hr>
    {{-- <div>
        @foreach ($address as $address)
            <h4>Country: {{ $address->country }}</h4>
            <p>User: {{ $address->user->name }} - {{ $address->user->email }}</p>
            <hr>
        @endforeach
    </div> --}}
</body>

</html>
