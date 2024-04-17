<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite('resources/css/app.css')
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Products</h1>

        <div>
            @if(session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div class="my-4">
            <a href ="{{ route('product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create a Product
            </a>
        </div>
        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr class="border-b block md:table-row absolute md:relative md:bg-gray-100">
                        <th class="text-left p-3 px-5 block md:table-cell">ID</th>
                        <th class="text-left p-3 px-5 block md:table-cell">Name</th>
                        <th class="text-left p-3 px-5 block md:table-cell">Qty</th>
                        <th class="text-left p-3 px-5 block md:table-cell">Price</th>
                        <th class="text-left p-3 px-5 block md:table-cell">Description</th>
                        <th class="text-left p-3 px-5 block md:table-cell">Edit</th>
                        <th class="text-left p-3 px-5 block md:table-cell">Delete</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach($products as $product)
                    <tr class="bg-gray-300 border-b block md:table-row">
                        <td class="p-3 px-5 block md:table-cell">{{ $product->id }}</td>
                        <td class="p-3 px-5 block md:table-cell">{{ $product->name }}</td>
                        <td class="p-3 px-5 block md:table-cell">{{ $product->qty }}</td>
                        <td class="p-3 px-5 block md:table-cell">{{ $product->price }}</td>
                        <td class="p-3 px-5 block md:table-cell">{{ $product->description }}</td>
                        <td class="p-3 px-5 block md:table-cell">
                            <a href="{{ route('product.edit', ['product' => $product]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                        </td>
                        <td class="p-3 px-5 block md:table-cell">
                            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
