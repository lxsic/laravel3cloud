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

<label for="show">Show Data:</label>
<input type="radio" name="show" value="1" id="show">
<br>
<label for="hide">Hide Data:</label>
<input type="radio" name="show" value="0" id="hide">
@error('show')
  {{ $message }}  
@enderror
<hr>
<label for="status2">Status:</label>
<select name="status" >
    <option value="Enabled">Enable</option>
    <option value="Disabled">Disable</option>
</select>
@error('status2')
  {{ $message }}  
@enderror

<hr>
<input type="submit" value="Create">
</form>