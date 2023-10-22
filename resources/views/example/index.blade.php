Index page <a href="example/create">Create</a>
<a href="example">Without Trashed</a>
<a href="example?trashed=yes">With Trashed</a>
<table width="100%">
    @include('layouts.message')
    <thead>
        <td>
            <th>ID</th>
            <th>Name</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
            <th>Action</th>
        </td>
    </thead>
    <tbody>
        @each('example.data',$test,'data','example.empty_data')
    </tbody>
</table>
@123('UTC')
correct
@else('vwave')
false
@end123
<br>
@unless123('UTC')
true
@end123