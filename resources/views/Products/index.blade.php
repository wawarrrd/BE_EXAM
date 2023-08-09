<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
  border: 1px solid black;
}
table {
  border-spacing: 30px;
}

</style>
<body>
    <h1>Product</h1>
    
    <div>
        <ul>
            <li> <a href="{{route('product.create')}}">Add Product</a></li>
            <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
        </ul>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>product_name</th>
                <th>product_SKU</th>
                <th>product_category</th>
                <th>product_description</th>
                <th>product_image</th>
                <th>Edit</th>
            </tr>
            @foreach($products as $product)
           
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_SKU}}</td>
                    <td>{{$product->product_category}}</td>
                    <td>{{$product->product_description}}</td>
                    <td><img src="{{$product->product_image}}" /></td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
            
        </table>

    </div>
        
</body>
</html>