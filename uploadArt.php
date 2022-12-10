<?php 
include 'db_connection.php';
$conn=createConnection();

$arttitle=" ";
$artDesc=" ";
$artSubtitle=" ";
$artSoftware=" ";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistry Concept</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form>
        <table>
            <tr><td><input type="text" name="title" id="title" placeholder="Title"></td></tr>
            <tr><td><input type="text" name="subtitle" id="subtitle" placeholder="Subtitle"></td></tr>
            <tr><td><input type="text" name="desc" id="desc" placeholder="Description"></td></tr>
            <tr><td><input type="text" name="software" id="sofyware" placeholder="Softwares"></td></tr>
            <tr><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>






</body>
</html>