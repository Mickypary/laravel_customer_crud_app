<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h3>Hello</h3>

    {{-- <x-alert></x-alert> --}}

    {{-- To pass data statically --}}
    {{-- <x-alert style="color: blue; border: 1px solid red" text="This is a message" /> --}}


    {{-- To pass data dynamically --}}
    {{-- @php
        $languages = ['PHP', 'JavaScript', 'Java', 'Dart', 'C', 'C++'];
    @endphp

    @foreach ($languages as $language)
        <x-alert :text="$language" />
    @endforeach --}}


    {{-- Using and passing attributes in components --}}
    {{-- <x-button type="submit" style="padding: 10px; background-color: blueviolet; color: white; border-radius: 10px;" /> --}}
    {{-- <x-button>Click Here</x-button> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <x-card>
                    <x-slot name="image">
                        <img src="https://images.unsplash.com/photo-1746307415157-0d4dac84556e?q=80&w=1992&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Drinks">
                    </x-slot>
                    <x-slot name="title">Card Title One</x-slot>
                </x-card>
            </div>
            <div class="col-md-4">
                <x-card>
                    <x-slot name="image">
                        <img src="https://plus.unsplash.com/premium_photo-1670591396438-d3c517977c3b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw4Mnx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Drinks">
                    </x-slot>
                    <x-slot name="title">Card Title Two</x-slot>
                </x-card>
            </div>
            <div class="col-md-4">
                <x-card>
                    <x-slot name="image">
                        <img src="https://images.unsplash.com/photo-1744360817433-0d9386ddb9e4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw4MXx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Drinks">
                    </x-slot>
                    <x-slot name="title">Card Title Three</x-slot>
                </x-card>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
