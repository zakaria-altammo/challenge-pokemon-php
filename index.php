<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

// i use if  statement to check if the value of the input is empty or not
if (!empty($_GET["search"])){ // input value
    $poke_url = "https://pokeapi.co/api/v2/pokemon/" . urlencode($_GET["search"]); // merge the url with input value
    $poke_json = file_get_contents($poke_url); // get data from the api
    $poke_array = json_decode($poke_json, true); //


    // get the name and the id of pokemon
    $poke_name = $poke_array["name"];
    $poke_Id = $poke_array["id"];
    $search = $_GET['search'];
    echo "Name: {$poke_name} <br> ID: {$poke_Id}";
    // get the the pic of the pokemon

    
} else if (empty($_GET["search"])){
    echo "You have to write a name or id";
}


?>
<form action="">
    <p>Pokemon Name or Id</p>
<input type="text" name="search">
    <button>Search</button>
</form>

</body>
</html>



