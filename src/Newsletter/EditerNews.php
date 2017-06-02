<?php

require_once "../Class/NewsletterDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$News = new NewsletterDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $News->update($_POST);
    header("Location: Newsindex.php");
    die();

}
    $row = $News->select($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editer</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
<form action="" method="post" id="revue-editer">

    <p>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
    </p>

    <p>
        <label for="date">Date<span>*</span></label>
        <input type="text" name="date" value="<?= $row['date'] ?>" required>
    </p>

    <p>
        <label for="nom_architectes">Nom de l'architecte'<span>*</span></label>
        <input type="text" name="nom_architectes" required value="<?= $row['nom_architectes'] ?>">
    </p>

    <p>
        <label for="realisations">Les réalisations<span>*</span></label>
        <input type="text" name="realisations" required value="<?= $row['realisations'] ?>">
    </p>

    <p>
        <label for="rubriques">Rubriques<span>*</span></label>
        <input type="text" name="rubriques" required value="<?= $row['rubriques'] ?>">
    </p>

    <p>
        <label for="lieu">Lieu<span>*</span></label>
        <input type="text" name="lieu" required value="<?= $row['lieu'] ?>">
    </p>

    <p>
        <label for="departement">Département<span>*</span></label>
        <input type="text" name="departement" required value="<?= $row['departement'] ?>">
    </p>

    <p>
        <label for="img">Illustration<span>*</span></label>
        <input type="file" name="img"  value="<?=$row['img'] ?>" required>
    </p>

    <p>
        <input type="submit" id="valider" value="Envoyer">
    </p>
</form>


</body>
</html>
<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editer</title>
</head>
<body>
<h1>Editer </h1>
    <form action="" method="get"></form>

</body>
</html>
