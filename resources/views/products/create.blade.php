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
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Type the name of the song that you want to add:</label><br><br>
        <label>Name:</label>
        <input class="border-2 border-gray" type="text" name="name"><br><br>
        <label>Description:</label>
        <input class="border-2 border-gray" type="text" name="description"><br><br>
        <input class="px-4 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" type="submit" value="Add">
    </form>
</body>

</html>
