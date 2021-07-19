

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <table border="1">

        <tr>
            <th>Id</th>
            <th>Img</th>
            <th>name</th>
            <th>email</th>
            <?php if($userrole ==1): ?>
            <th>update</th>
            <th>delete</th>
            <?php endif ; ?>
        </tr>
        <?php  foreach($data as $user):  ?>
        <tr>

            <td> <?php echo $user['id']; ?> </td>
            <td><img style="height: 50px; width:50px;" src="userimg/<?php echo $user['img']; ?>"></td>
            <td> <?php echo $user['name']; ?> </td>
            <td> <?php echo $user['email']; ?> </td>
            <?php if($userrole ==1): ?>
            <td> <a href="updateuser.php?id= <?=$user['id']; ?>">update</a> </td>
            <td> <a href="deleteuser.php?id= <?=$user['id']; ?>">delete</a> </td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>