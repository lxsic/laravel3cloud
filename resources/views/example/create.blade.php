<form action="{{ route('example.store') }}" method="POST">
@csrf
<input type="text" name="name" placeholder="Enter Name">
@error('name')
    {{ $message }}
@enderror
<hr>
<textarea  name="content" placeholder="Enter Content"></textarea>
@error('content')
{{ $message }}
@enderror
<hr>
<input type="submit" value="Create">
</form>