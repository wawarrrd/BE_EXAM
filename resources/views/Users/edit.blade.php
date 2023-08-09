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
            @foreach($$errors->all() as $error)
            <li>{{$$$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('users.update', ['user' => $users    ])}}">
        @csrf
        @method('put')
        <div>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username" value="{{$users->username}}">
        </div>
        <div>
            <label>First Name:</label>
            <input type="text" name="first_name" placeholder="First Name" value="{{$users->first_name}}">
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="last_name" placeholder="Last Name" value="{{$users->last_name}}">
        </div>
        <div>
            <label>Email Address:</label>
            <input type="email" name="email_address" placeholder="Email Address:" value="{{$users->email_address}}">
        </div>
        <div>
            <label>Password:</label>
            <input type="Password" name="password" placeholder="Password" value="{{$users->password}}">
        </div>
        <div>
            <input type="submit" value="Update Product">   
        </div>
    </form>
</body>
</html>