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
    <form method="post" action="{{route('users.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div>
            <label>First Name:</label>
            <input type="text" name="first_name" placeholder="First Name">
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="last_name" placeholder="Last Name">
        </div>
        <div>
            <label>Email Address:</label>
            <input type="email" name="email_address" placeholder="Email Address:">
        </div>
        <div>
            <label>Password:</label>
            <input type="Password" name="password" placeholder="Password">
        </div>
        <div>
            <input type="submit" value="Add Users">   
        </div>
    </form>
</body>
</html>