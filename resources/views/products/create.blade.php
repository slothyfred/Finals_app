<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    @vite('resources/css/app.css')
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Create Products</h1>
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')
            <div class="mb-4">
                <input type="text" name="name" placeholder="name" class="w-full p-2 border rounded"/>
            </div>
            <div class="mb-4">
                <input type="text" name="qty" placeholder="quantity" class="w-full p-2 border rounded"/>
            </div>
            <div class="mb-4">
                <input type="text" name="price" placeholder="Price" class="w-full p-2 border rounded"/>
            </div>
            <div class="mb-4">
                <input type="text" name="description" placeholder="Description.." class="w-full p-2 border rounded"/>
            </div>
            <div>
                <input type="Submit" value="Save" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"/>
            </div>
        </form>
    </div>
</body>
</html>
