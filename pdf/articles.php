<html>
<head>
    <meta charset="utf-8">
    <title>Les articles</title>
</head>
<?php require_once('includes/header.php');?>
<body>
    <h1>Liste des articles</h1>
    <?php require_once('includes/connect.php');?>
    <?php
    $sql = "SELECT * FROM `articles`  where author = `Louis`;
    $query= $db->query($sql);
    $articles = $query->fetchAll();
    ?>
    <table>
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
        </thead>
        <tbody>
            <!-- Loop through the users -->
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?= $article['id']; ?></td>
                    <td><?= $article['title']; ?></td>
                    <td><?= $article['content']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>     
    </table>
</body>
</html>


