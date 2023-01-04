<?php
$nick = $_GET['nick'];

if(!$nick) {
    die("Nie podałeś nicku!");
} else {
    $skin = "https://mineskin.eu/armor/body/$nick/100.png";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oto twoj skin!</title>
</head>
<body>
    <h1>Udalo sie zdobyc skina!</h1>
    <h3>Skin uzytkownika: <?php echo $nick; ?></h3>
    <img src="<?php echo $skin; ?>">
</body>
</html>