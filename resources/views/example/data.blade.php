<tr>
    <td>
        <th>{{$data->id  }}</th>
        <th>{{ $data->name }}</th>
        <th>{{ $data->content }}</th>
        <th>{{ $data->status2 }}</th>
        <th>{{ $data->show }}</th>
        <th>{{ $data->created_at }}</th>
        <th>{{ $data->updated_at }}</th>
        <th>{{ $data->deleted_at }}</th>
        <th><a href="example/{{ $data->id }}/edit">Edit</a>
        <a href="example/{{ $data->id }}">Show</a>
        <form action="{{ route('example.destroy',['example'=>$data->id]) }}"method="post">
            @csrf
        @method('delete')
        <input type="submit" value="SoftDelete">
        </form>
        <form action="{{ route('example.forceDelete',['example'=>$data->id]) }}"method="post">
            @csrf
        @method('delete')
        <input type="submit" value="ForceDelete">
        </form>
        <form action="{{ route('example.restore',['example'=>$data->id]) }}"method="post">
            @csrf
        <input type="submit" value="Restore">
        </form></th>
    </td>
    </tr>
