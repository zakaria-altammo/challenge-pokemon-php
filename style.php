<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


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
font-family: sans-serif;
color: #CBAC88;


}
div {
padding: 10px;
width: 350px;
background-color: #FCFFFC;
color: #2D3A3A;
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
box-shadow: 0 0 15px black;
border: none;

}
p {
font-family: Andalus, sans-serif;
font-size: 15px;
}
button {
background-color: #CBAC88;
width: 110px;
margin: 0 0 7px 0;
height: 30px;
border-radius: 5px;
border: none;

}
button:hover {
background-color: #2BA84A;
}
button:active {
transform: translateY(2px);
}
img {
width: 125px;
height: 125px;
}
