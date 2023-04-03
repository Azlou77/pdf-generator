<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PDF Content</title>

</head>
<body>
    <!--Tab users  -->
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
        </thead>
        <tbody>
            <!-- Loop through the users -->
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>     
    </table>
</body>
</html>