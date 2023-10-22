<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Customer</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="POST" action="{{ route('admin.adstore') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Type Name">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Type Email">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" placeholder="Type Password">
        </div>
        <div>
            <label>PhoneNumber</label>
            <input type="text" name="phonenumber" placeholder="Type PhoneNumber">
        </div>
        <div>
            <label>Type</label>
            <select name="type">
                <option value="0" {{ (old('user_type') == '0') ? 'selected' : '' }}>User</option>
                <option value="1" {{ (old('user_type') == '1') ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ (old('user_type') == '2') ? 'selected' : '' }}>Manager</option>
            </select>
        </div>
        <div>
            <input type="Submit" value="Save a New Customer">
        </div>

    </form>
</body>
</html>