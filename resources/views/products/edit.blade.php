<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    @vite('resources/css/app.css')
</head>

<body>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PATCH')
        <label>Type the name and the description that you want to add:</label><br><br>
        <input class="border-2 border-gray type="text" value="{{ $product->name }}" name="name" />
        <input class="border-2 border-gray type="text" value="{{ $product->description }}" name="description" />
        <button class="px-4 py-1 rounded-md bg-red-500 text-sky-100 hover:bg-red-600" type="submit">Update</button>
    </form>
</body>

</html>
