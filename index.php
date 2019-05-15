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
    <div id="ytplayer"></div>
    <div id="fond_site">
        <div id="champ">
            <form method="POST">
                <input type="password" name="mdp" placeholder="Mot de passe requis :">
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

    <script>
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Replace the 'ytplayer' element with an <iframe> and
        // YouTube player after the API code downloads.
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
            height: '360',
            width: '640',
            videoId: 'z3avlLlGZkA',
            playerVars : {
                autoplay: 1,
                controls: 0,
                loop: 1,
                playlist: 'z3avlLlGZkA',
            },
            events: {
                'onReady': () => {
                    document.getElementById('ytplayer').style.opacity = 1;
                }
            }
            });
        }
</script>
</body>

</html>