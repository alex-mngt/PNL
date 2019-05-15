<!DOCTYPE html>
<html lang="fr">

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
            <form method="POST">
                <label for="mdp">Mot de passe requis :</label>
                <br>
                <input type="password" name="mdp">
            </form>
            <?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=pnl', 'root', 'floflo');
    }
    catch (exception $e) {
    exit('Erreur : '.$e->getMessage());
    }
            $dataTest = true;
            if (!isset($_POST['mdp']) || empty($_POST['mdp'])){
        $dataTest = false;
    } else {
        $mdpClair = $_POST['mdp'];
    }
    if ($dataTest){
        $getMDP = $bdd->prepare("SELECT 'password' FROM `password`");
        $getMDP->execute(array(':mdp' => $mdp));
        $tableauMDP = $getMDP -> fetchall(PDO::FETCH_ASSOC);
            if (empty($tableauMDP)){
                echo "<h3>Mauvais mot de passe</h3>";
            } else {
                header("Location : https://google.com");
            }
        }
    ?>
        </div>
    </div>
</body>

</html>