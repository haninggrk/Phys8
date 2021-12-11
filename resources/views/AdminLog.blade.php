<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log</title>
</head>
<body>
    <h1> Log </h1>
    <table>
        <tr>
        <td><a>Table Name</a></td>
        <td><a>Student ID</a></td>
        <td><a>log Note</a></td>
        <td><a>log Description</a></td>
        <td><a>log path</a></td> 
        <td><a>log Ip</a></td>
        </tr>
        @foreach()
    </table>
    @endforeach
</body>
</html>