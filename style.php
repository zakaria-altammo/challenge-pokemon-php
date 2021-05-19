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
padding: 5px;
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
padding-left: 5px;
margin: 3px;
width: 350px;
height: 30px;
box-shadow: 0 0 15px black;
border: none;
border-radius: 5px;

}
p {
font-family: Andalus, sans-serif;
font-size: 15px;
margin-bottom: -1em;
margin-top: 0em;
}
button {
background-color: #CBAC88;
width: 110px;
margin: 0 0 7px 0;
height: 30px;
border-radius: 5px;
border: none;
box-shadow: 0 0 10px black;

}
button:hover {
background-color: #2BA84A;
}
button:active {
transform: translateY(2px);
}
.first {
width: 100px;
height: 100px;
}
.second {
width: 125px;
height: 125px;
}
