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
    <h1>Dashboard</h1>
    <div>
        <ul>
            <li><a href="{{route('users.index')}}">Check All Users</a></li>
            <li><a href="{{route('categories.index')}}">Check All Category</a></li>
            <li><a href="{{route('product.index')}}">Check All Products</a></li>
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
                
            </tr>
            @foreach($products as $product)
           
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_SKU}}</td>
                    <td>{{$product->product_category}}</td>
                    <td>{{$product->product_description}}</td>
                    <td><img src="{{$product->product_image}}" /></td>
                    
                </tr>
            @endforeach
            
        </table>
        {{$products->links()}}
    </div>
        
</body>
</html>