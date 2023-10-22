<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a Customer</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="POST" action="{{ route('admin.adupdate',['user'=>$user]) }}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Type Name" value="{{ $user->name }}">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Type Email" value="{{ $user->email }}">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" placeholder="Type Password" value="{{ $user->password }}">
        </div>
        <div>
            <label>PhoneNumber</label>
            <input type="text" name="phonemuber" placeholder="Type Phonenumber" value="{{ $user->phonenumber }}">
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
            <input type="Submit" value="Update">
        </div>

    </form>
</body>
</html>