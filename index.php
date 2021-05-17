<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>challenge-pokemon-php</title>
</head>
<body>
<h1>Challenge Pokemon php</h1>
<form action="">
    <label for="">
    <input type="text" name="search" placeholder="Write Pokemon Name or Id:"> <br>
    <button>Search</button>
    </label>
</form>
<?php

// i use if  statement to check if the value of the input is empty or not
if (!empty($_GET["search"])){ // input value
    $poke_url = "https://pokeapi.co/api/v2/pokemon/" . urlencode($_GET["search"]); // merge the url with input value
    $poke_json = file_get_contents($poke_url); // get data from the api
    $poke_data = json_decode($poke_json, true);
// api to get the name and the image of previous evolution
    $poke_url2 = "https://pokeapi.co/api/v2/pokemon-species/" . urlencode($_GET["search"]);
    $poke_json2 = file_get_contents($poke_url2); // get data from the api
    $poke_data2 = json_decode($poke_json2, true);
    $evo_name = $poke_data2["evolves_from_species"]["name"];

    // get the name and the id of pokemon
    $poke_name = $poke_data["name"];
    $poke_Id = $poke_data["id"];
    $search = $_GET['search'];
    echo "Name of Pokemon: {$poke_name} <br> ID: {$poke_Id} <br>";
    // get the the pic of the pokemon
    $poke_pic = $poke_data["sprites"]["front_default"]; // pic from front
    $poke_pic2 = $poke_data["sprites"]["back_shiny"];// pic from back
    echo "<img src='" . $poke_pic . "'>";
    echo "<img src='" . $poke_pic2 . "'> <br>";
    // get the pokemon moves
    $poke_moves = $poke_data['moves'];
    $poke_move1 = $poke_moves[0]['move']['name'];
    $poke_move2 = $poke_moves[1]['move']['name'];
    $poke_move3 = $poke_moves[2]['move']['name'];
    $poke_move4 = $poke_moves[4]['move']['name'];
    echo "Move 1: $poke_move1 <br> Move 2: $poke_move2 <br> Move 3: $poke_move3 <br> Move 4: $poke_move4 <br>";

} else if (empty($_GET["search"])){
    echo "<h3>You have to write a name or id !!!.</h3>";
}
// if statement to check if the pokemon has previous evolution
if ($evo_name !== null){
    echo "Previous Evolution: $evo_name";
} else {
    echo "This pokemon has no previous evolution";
}

?>

</body>
</html>



