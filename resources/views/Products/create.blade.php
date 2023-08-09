<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Product Name:</label>
            <input type="text" name="product_name" placeholder="Product Name">
        </div>
        <div>
            <label>Product SKU:</label>
            <input type="text" name="product_SKU" placeholder="Product SKU">
        </div>
        <div>
            <label>Product Category:</label>
            <input type="text" name="product_category" placeholder="Product Category">
        </div>
        <div>
            <label>Product Description:</label>
            <input type="text" name="product_description" placeholder="Product Description">
        </div>
        <div>
            <label>Product Image:</label>
            <input type="file" name="product_image" placeholder="Product image">
        </div>
        <div>
            <input type="submit" value="Add Product">   
        </div>
    </form>
</body>
</html>