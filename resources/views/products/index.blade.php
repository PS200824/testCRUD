<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        </div>
    </div>
    @foreach ($products as $product)
        <div class="grid grid-cols-4">
            <div><a href="/products/{{ $product->product }}">{{ $product->name }}</a></div>
            <div><a href="/products/{{ $product->product }}">{{ $product->description }}</a></div>
            <div><a class="px-4 py-1 rounded-md bg-green-500 text-sky-100 hover:bg-green-600"
                    href="{{ route('products.edit', $product) }}">edit</a></div>
            <div>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="px-4 py-1 rounded-md bg-red-500 text-sky-100 hover:bg-red-600" type="submit"
                        value="Delete">
                </form>
            </div>
        </div>
    @endforeach
    <div><a class="px-4 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600"
            href="{{ route('products.create', $product) }}"> Create a new product</a></div>
</body>

{{-- <div class="container max-w-7xl mx-auto mt-8">
    <div class="mb-4">
        <h1 class="font-serif text-3xl font-blod underline decoration-gray-400"> Company Home </h1>
        <div>
            <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Add new
                staff</button>
        </div>
    </div>
</div>
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div
            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        </div>
    </div>
</div> --}}

</html>
