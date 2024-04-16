<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Products</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <input type="text" name="name" placeholder="name"/>   
        </div>
        <div>
            <input type="text" name="qty" placeholder="quantity"/>   
        </div>
        <div>
            <input type="text" name="price" placeholder="Price"/>   
        </div>
        <div>
            <input type="text" name="description" placeholder="Description.."/>   
        </div>
        <div>
            <input type="Submit" value="Save"/>   
        </div>

    </form>
</body>
</html>