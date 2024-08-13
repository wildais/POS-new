<!DOCTYPE html>
<html>
    <head>
        <title>User</title>
    </head>
    <body>
        <h1>Data Pengguna</h1>
        <table border="1">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level ID</th>
            </tr>

            @foreach ($data as $d)
                <tr>
                    <td>{{$d->user_id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->level_id}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
