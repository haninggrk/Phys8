<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Level</title>
</head>
<body>
    @foreach()
    <table>
    <h1> Data Level </h1>
    <table>
        <tr>
        <td><a>Level name</a></td>
        <td><a>Category</a></td>
        <td><a>Thumbnail</a></td>
        <td><a>Description</a></td>
        <td><a>Score Reward</a></td>
        <td><a>Ticket Reward</a></td> 
        <td><a>Money Reward</a></td> 
        <td><a>Maximum Time</a></td> 
        </tr>
        @foreach()
    </table>
    @endforeach
</body>
</html>