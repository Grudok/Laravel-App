<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $users)
        <tr>
            <td>{{ $users.name }}</td>
            <td>{{ $users.email }}</td>
            <td>{{ $users.created_at }}</td>
        </tr> 
        @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>
