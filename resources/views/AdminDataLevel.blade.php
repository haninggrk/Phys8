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
        <td><a>Description</a></td>
        <td><a>score_reward</a></td>
        <td><a>ticket_reward</a></td>
        <td><a>money_reward</a></td>
        <td><a>cat_id</a></td>
        <td><a>time</a></td>
        </tr>
    </table>
    @endforeach
</body>
</html>
