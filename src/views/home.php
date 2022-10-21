<?php require_once "bootstrap.php";
$address = $entityManager->find('Models\Address', isset($_GET['id']) ? $_GET['id'] : 1);

$url = explode('?', $_SERVER["REQUEST_URI"]);

if (!$address) {
    header('Location:' . $url[0]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>YourPager</title>
    <style>
        .container {
            height: 95vh;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body style="height: 100vh">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin">Go to Admin Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php

                    $address = $entityManager->getRepository('Models\Address')->findAll();
                    echo '<li>';
                    foreach ($address as $p)
                        echo '<li> <a class="nav-link m-1" href="?id=' . $p->getId() . '">' . $p->getAddressValue() . '</a></li>';
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center">

        <?php
        if (!isset($_GET['id'])) {
            echo '<img height="450px" src="src/images/welcome.png" alt="welcome">';
        }
        if (isset($_GET['id'])) {
            $add = $entityManager->getRepository('Models\Address')->findBy(array('id' => $_GET['id']));
            echo '<div>';
            foreach ($add as $z)
                echo "<br>"
                    . "<tr>"
                    . "<td>" . $z->getUser() . "</td>"
                    . "</tr>"
                    . "</div>";
        }
        ?>


    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>© 2022 Copyright:</p>
            <a class="text-dark" href="home">Main page</a>
        </div>
    </footer>
</body>

</html>