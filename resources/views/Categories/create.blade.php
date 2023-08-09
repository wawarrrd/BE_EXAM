<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Categories</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('categories.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Category Name:</label>
            <input type="text" name="category_name" placeholder="Category name">
        </div>
        <div>
            <label>Description:</label>
            <input type="text" name="category_description" placeholder="Description">
        </div>
        <div>
            <label>Product Manager:</label>
            <input type="text" name="product_manager" placeholder="Product Manager">
        </div>
        <div>
            <input type="submit" value="Add Categories">   
        </div>
    </form>
</body>
</html>