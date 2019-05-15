<!DOCTYPE html>
<html lang="fr">

gus le gros pd 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="fond_site">
        <div id="champ">
            <form action="post">
                <label for="mdp">Mot de passe requis :</label>
                <br>
                <input type="mdp">
            </form>
            <?php
            $dataTest = true;
            if (!isset($_POST['mdp']) || empty($_POST['mdp'])){
        $dataTest = false;
    } else {
        $mdpClair = $_POST['mdp'];
    }
    if ($dataTest){
        $getMDP = $bdd->prepare("SELECT password FROM `rgsrh`");
        $getMDP->execute(array(':mdp' => $mdp));
        $tableauMDP = $getMDP -> fetchall(PDO::FETCH_ASSOC);
            if (empty($tableauMDP)){
                echo "Mauvais mot de passe";
            } else {
                header("Location : http://?????????.map.php");
            }
        }
    ?>
        </div>
    </div>
</body>

</html>