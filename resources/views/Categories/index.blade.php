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
    <h1>Categories Manager</h1>

    <div>
        <ul>
            <li><a href="{{route('categories.create')}}">Add Categories</a></li>
            <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
        </ul>
    </div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <div>
        <table border="1">
            <tr>
                <th>Category Name</th>
                <th>Description</th>
                <th>Product Manager</th>
                <th>Edit</th>
                
            </tr>
            @foreach($categories as $category)
           
                <tr>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_description}}</td>
                    <td>{{$category->product_manager}}</td>
                    <td>
                        <a href="{{route('categories.edit', ['category' => $category])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
            
        </table>

    </div>
        
</body>
</html>