<?php

// 1.Sukurkite masyva kuris atspindetu vartotojo duomenis: user_id, user_name,
// user_img, user_email, user_password

$users = [
    'user_1' => [

        'user_id' => 1,
        'user_name' => 'Petras',
        'user_img' => 'https://img.freepik.com/free-psd/satisfied-young-man-with-crossed-arms-gesture_1459-6066.jpg?size=626&ext=jpg',
        'user_email' => 'petras@petras.lt',
        'user_password' => 'labas',
    ],
    'user_2' => [

        'user_id' => 2,
        'user_name' => 'Saulė',
        'user_img' => 'https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?cs=srgb&dl=closeup-photo-of-woman-with-brown-coat-and-gray-top-733872.jpg&fm=jpg',
        'user_email' => 'saule@saulyte.lt',
        'user_password' => 'gele',
    ],
];
//Neveikia .txt failas

//4. sukurkite .txt faila savo projekte ir i ji irasykete nauja vartotoja, nuotrauka saugoma kaip linkas, ne kaip failas
//atvaizduokite vartotoju korteles su visais duomenimis is .txt failo. -->
$failas = fopen("array.txt", "w") or die("Unable to open file!");
$txt = $_POST['user_id'] . ' ' . $_POST['user_name'] . ' ' . $_POST['user_img'] . ' ' . $_POST['user_email'] . ' ' . $_POST['user_password'] . "\n";
fwrite($failas, $txt);
fclose($failas);


var_dump($_POST);

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<!--  3. sukurkite forma kurios pagalba galetume atvaizduoti vartotoja dirbant su $_GET/$_POST masyvu-->
<form action="" method="post">
    <input type="text" placeholder="User id:" name="user_id">
    <input type="text" placeholder="User name:" name="user_name">
    <input type="text" placeholder="User img:" name="user_img">
    <input type="email" placeholder="User email:" name="user_email">
    <input type="password" placeholder="User password:" name="user_password">
    <input type="submit" value="pateikti">
</form>
<!-- 2. atvaizduokite siuos duomenis sukurdami vartotojo kortele. -->
<section class="vh-100 d-flex justify-content-around align-items-center">
    <?php foreach ($users as $user => $user_data): ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php print $user_data['user_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5><?php print $user_data['user_name']; ?></h5>
                <p><?php print $user_data['user_email']; ?></p>
                <h2><?php print $user_data['user_password']; ?></h2>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<section class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card" style="width: 18rem;">
        <img src="<?php print $_POST['user_img'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php print $_POST['user_name']; ?></h5>
            <p class="card-text"><?php print $_POST['user_email']; ?></p>
            <a href="#" class="btn btn-primary"><?php print $_POST['user_password']; ?></a>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>





