<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE ITIC PROJECT</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>
            DATABASE ITIC PARIS
        </h1>
    </header>
    <main>
        <section class="acceuil">
            <h2>
                Bienvenue sur la base de données ITIC PARIS
            </h2>
            <p>
                Dans le tableau qui suit vous trouverez la liste des professeurs et les missions qui leur sont
                confiés par l'etablissement.
            </p>
        </section>
        <section class="usermission">
            <h2>
                Voici les missions
            </h2>
            <table>
                <thead>
                    <tr>
                        <th>Numero de mision</th>
                        <th>titre de la mission </th>
                        <th>description</th>
                    </tr>
                    </thead>
                    <?php
                $top10 = myMission($connexion);
                foreach($mission as $column):?>
                <tbody>
                    <tr>
                    <?=
                    "<td>".($column['id_mission'])."</td>
                    <td>".($column['title'])."</td>
                    <td>".($column['description'])."</td>"
                    ?>
                    </tr>
                </tbody>
                <?php   endforeach;?>
            </table>
        </section>
    </main>
</body>
</html>