<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 17/05/2017
 * Time: 09:28
 */

require_once "../Class/RevuesDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$Rev = new RevuesDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file_name = $Rev->uploadImg($_FILES);

    $Rev->insert([
        'numero' => $_POST['numero'],
        'annee' => $_POST['annee'],
        'regions' => $_POST['regions'],
        'img' => $file_name,
        'lien_calameo' => $_POST['lien_calameo']

    ]);

    header("Location: RevueIndex.php");
    die();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
<form action="" method="post" id="revue-editer" enctype="multipart/form-data">

    <p>
        <label for="numero">Numéro<span>*</span></label>
        <input type="text" name="numero" required>
    </p>

    <p>
        <label for="annee">Année de Parution<span>*</span></label>
        <input type="text" name="annee" required>
    </p>

    <p>
        <label for="regions">Régions<span>*</span></label>
        <input type="text" name="regions" required>
    </p>

    <p>
        <label for="img">Couverture<span>*</span></label>
        <input type="file" name="img" required>
    </p>

    <p>
        <label for="lien_calameo">Lien PDF<span>*</span></label>
        <input type="text" name="lien_calameo" required>
    </p>


    <p>
        <input type="submit" id="valider" value="Envoyer">


</form>


</body>
</html>
