<form action="{{ route('example.update',['example'=>$test->id]) }}" method="POST">
@csrf
@method('put')
<input type="text" name="name" value="{{ $test->name }}">
@error('name')
{{ $message }}
@enderror
<hr>
<textarea name="content">{{ $test->content }}</textarea>
@error('content')
    {{ $message }}
@enderror
<hr>
<input type="submit" value="Update">
</form>