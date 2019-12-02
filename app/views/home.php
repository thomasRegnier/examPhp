<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<table>
    <tr>
        <th>
            Date
        </th>
        <th>
            FullName
        </th>
        <th>
            Email
        </th>
        <th>
            Login
        </th>
    </tr>
    <?php foreach ($userObject as $user) : ?>
        <tr>
            <td>
                <?= $user->getCreatedAtCarbon();?>
            </td>

            <td>
                <?= $user->getFullName();?>
            </td>
            <td>
                <?= $user->getEmail();?>
            </td>

            <td>
                <?= $user->getUpdateAt();?>
            </td>
        </tr>

    <?php endforeach; ?>

</table>


</body>
</html>