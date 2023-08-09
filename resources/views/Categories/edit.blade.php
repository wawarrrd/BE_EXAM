<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('categories.update', ['category' => $categories    ])}}">
        @csrf
        @method('put')
        <div>
            <label>Category Name:</label>
            <input type="text" name="category_name" placeholder="Category name" value="{{$categories->category_name}}">
        </div>
        <div>
            <label>Description:</label>
            <input type="text" name="category_description" placeholder="Description" value="{{$categories->category_description}}">
        </div>
        <div>
            <label>Product Manager:</label>
            <input type="text" name="product_manager" placeholder="Product Manager" value="{{$categories->product_manager}}">
        </div>
        <div>
            <input type="submit" value="Update Product">   
        </div>
    </form>
</body>
</html>