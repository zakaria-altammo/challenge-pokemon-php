<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

 * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    text-align: center;
    background: url('DVMT.jpg');
    background-size: cover;


}
h1 {
text-shadow: 0 0 15px black;

    font-family: Algerian, sans-serif;
    color: ;
}
div {
    padding: 10px;
    width: 350px;
background-color: darkseagreen;
    color: black;
    position: absolute;
    left: 465px;
border-radius: 10px;
font-weight: bolder;
box-shadow: 0 0 15px black;


}
input {
    margin: 5px;
    width: 350px;
    height: 30px;
}
p {
    font-family: Andalus, sans-serif;
    font-size: 15px;
}
button {
    background-color: firebrick;
    width: 110px;
    margin: 0 0 7px 0;
    height: 30px;
    border-radius: 5px;
}

img {
    width: 150px;
    height: 150px;
}
ul {
list-style-type: none
}