<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.php">
    <title>challenge-pokemon-php</title>
</head>
<body>
<h1>Challenge Pokemon php</h1>
<form action="">
    <label for="">
        <input type="text" name="search" placeholder="Write Pokemon Name or Id"> <br>
        <button>Search</button>
    </label>
</form>
<div>
    <?php

// if  statement to check if the value of the input is empty or not
    if (!empty($_GET["search"])) {
        $poke_url = "https://pokeapi.co/api/v2/pokemon/" . urlencode($_GET["search"]); // add input value to url
        $poke_json = file_get_contents($poke_url); // get data from the api
        $poke_data = json_decode($poke_json, true);
// api to get the name and the image of previous evolution
        $poke_url2 = "https://pokeapi.co/api/v2/pokemon-species/" . urlencode($_GET["search"]);
        $poke_json2 = file_get_contents($poke_url2); // get data from the api
        $poke_data2 = json_decode($poke_json2, true);
        $pre_evo = $poke_data2["evolves_from_species"];
// get the name and the id of pokemon
        $poke_name = $poke_data["name"];
        $poke_Id = $poke_data["id"];
// get the the pic of the pokemon
        $poke_pic = $poke_data["sprites"]["other"]["dream_world"]["front_default"]; // pic from front
// get another pic of pokemon because some of pokemon doesn't have dream world pic
        $poke_picAlt = $poke_data["sprites"]["front_default"];
        echo "<h3>Name of Pokemon: $poke_name </h3><br><p> ID: $poke_Id </p><br>";
        echo "<img class='first' alt='poke Dream world pic' src='" . $poke_pic . "'><br>";
        echo "<img class='second' alt='poke normal pic' src='" . $poke_picAlt. "'><br>";

// get the pokemon moves using for loop
        $poke_moves = $poke_data["moves"];
        echo "Moves: <br>";
        for ($i = 0; $i < 5 && $i < count($poke_moves); $i++) {

            echo "<p>" . $poke_moves[$i]['move']['name'] . "</p><br>";
        }
// if statement to check if the pokemon has previous evolution
        if (is_null($pre_evo)) {
            echo "This pokemon has no previous evolution";
        } else {
            echo "Previous Evolution:" . $pre_evo['name'];
        }
    } else if (empty($_GET["search"])) {
        echo "<h3>You have to write a name or id !!!.</h3>";
    }


    ?>
</div>
</body>
</html>



