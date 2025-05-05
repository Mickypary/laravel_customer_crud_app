<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div>
            <input type="hidden" name="user_id" id="" value="2">
            <input type="text" name="title" placeholder="Title">
            <br>
            <textarea name="description" placeholder="Description"></textarea>
            <br>
            <button type="submit">Submit</button>
        </div>
    </form> --}}

    <div>
        @foreach ($posts as $post)
            {{-- @if ($post->user_id == Auth::user()->id)
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->name }}</a>
                <br>
            @endif --}}

            {{-- @can('update', $post)
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->name }}</a>
                <br>
            @endcan --}}


            {{-- @if (auth()->user()->id === $post->user_id)
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->name }}</a>
                <br>
            @endif --}}


            {{-- @can('update', $post)
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->name }}</a>
                <br>
            @endcan --}}

            {{-- @if (auth()->user()->can('update', $post))
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->name }}</a>
                <br>
            @endif --}}
        @endforeach
    </div>
</body>

</html>
