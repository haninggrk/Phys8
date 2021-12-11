<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Question</title>
</head>
<body>
    @foreach()
    <table>
    <h1> Data Question </h1>
    <table>
        <tr>
        <td><a>Level ID</a></td>
        <td><a>Question Text</a></td>
        <td><a>Images</a></td>
        <td><a>Discussion</a></td> 
        </tr>
        @foreach()
    </table>
    @endforeach
</body>
</html>