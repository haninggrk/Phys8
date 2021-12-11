<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data History</title>
</head>
<body>
    @foreach()
    <table>
    <h1> Data History </h1>
    <table>
        <tr>
        <td><a>User Answer</a></td>
        <td><a>Time Taken</a></td>
        <td><a>SUm Correct Answers</a></td>
        <td><a>Action</a></td>
        </tr>
        @foreach()
    </table>
    @endforeach
</body>
</html>