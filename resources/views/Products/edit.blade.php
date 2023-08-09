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
    <form method="post" action="{{route('product.update', ['product' => $products    ])}}">
        @csrf
        @method('put')
        <div>
            <label>Product Name:</label>
            <input type="text" name="product_name" placeholder="Product Name" value="{{$products->product_name}}">
        </div>
        <div>
            <label>Product SKU:</label>
            <input type="text" name="product_SKU" placeholder="Product SKU" value="{{$products->product_SKU}}">
        </div>
        <div>
            <label>Product Category:</label>
            <input type="text" name="product_category" placeholder="Product Category" value="{{$products->product_category}}">
        </div>
        <div>
            <label>Product Description:</label>
            <input type="text" name="product_description" placeholder="Product Description" value="{{$products->product_description}}">
        </div>
        <div>
            <label>Product Image:</label>
            <input type="file" name="product_image" placeholder="Product image" value="{{$products->product_image}}">
        </div>
        <div>
            <input type="submit" value="Update Product">   
        </div>
    </form>
</body>
</html>