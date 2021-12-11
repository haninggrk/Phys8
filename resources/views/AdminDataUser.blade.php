<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data User</title>
</head>
<body>
    <h1> Data User </h1>
    <table>
        <tr>
        <td><a>Name</a></td>
        <td><a>Email</a></td>
        <td><a>Password</a></td>
        <td><a>Username</a></td>
        <td><a>Code</a></td>
        <td><a>Photo</a></td>
        <td><a>School</a></td> 
        <td><a>City</a></td>
        <td><a>Birthyear</a></td>
        <td><a>Tickets</a></td>
        <td><a>Money</a></td>
        <td><a>Score</a></td>
        <td><a>History</a></td>
        </tr>
        @foreach()
    </table>
    @endforeach
</body>
</html>