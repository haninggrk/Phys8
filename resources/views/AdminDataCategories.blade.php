<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Category Data</title>
</head>
<body>
    @foreach()
    <table>
        <tr>
        <th>Category Data</th>
        </tr>
        <tr>
        <td><a>ID</a></td>
        <td><a>name</a></td>
        <td><a>Description</a></td>
        <td><a>created_at</a></td>
        <td><a>updated_at</a></td>
        </tr>
    </table>
    @endforeach
</body>
</html>
