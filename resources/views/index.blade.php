<!DOCTYPE HTML>
<html>
        <head>
            <style>
                *{
    margin: 0;
    padding: 0;
    outline: 0;
}
.container{
    width: 80%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    overflow: auto;
}
.contact-nav{
    background-color: #424242;
    padding: 5px 10px;
    color: #fafafa;
}
 
.nav img{
    height: 100px;
}
.nav ul{
    float: right;
    padding-top: 45px;
}
.nav ul li{
    display: inline-block;
    margin-right: 15px;
}
.nav ul li a{
    font-size: 1.2rem;
    text-transform: uppercase;
    text-decoration: none;
    color: #212121;
    transition: .4;
}
.nav ul li a:hover{
    color: #3e7a7e;
}
 
.header{
    position: relative;
    width: 100%;
    height: 600px;
    background-image: url("https://media.istockphoto.com/id/1181450953/id/foto/teman-teman-tertawa-di-sekitar-api-unggun-di-pantai-saat-matahari-terbenam.jpg?s=612x612&w=0&k=20&c=oLSu1mi2rNG5XIPE8gSzloav3lRb1SWy16u_M_lj7PY=");
    background-size: cover;
    background-position: center;
}
.header .search{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    background-color: #fff;
    
    border-radius: 4px;
}
.header .search input{
    padding: 15px 10px;
    border: none;
    width: 500px;
    font-size: 1.1rem;
}
.header .search button{
    padding: 17px 6px;
    border: none;
  width: 100px;
    border-radius: 0 4px 4px 0;
    background-color: #8ed1d5;
    color: #fafafa;
    font-size: 1.2rem;
    transition: .4s;
}
.header .search button:hover{
    background-color: #3e7a7e;
}
 
.footer{
    padding: 52px;
    background-color: #3e7a7e;
}
.footer p{
    text-align: center;
    
}

@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap");

* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	display: grid;
	place-items: center;

	--bkg: #5eb3fd;
	--white: #e7e6e6;

	background-color: var(--white);
	background-image: url("https://www.transparenttextures.com/patterns/concrete-wall.png");
}

.container {
	width: 100%;
	height: 100%;
	display: grid;
	place-items: center;
	overflow: hidden;
}

.title {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.title h1 {
	font-size: 25vmin;
	font-weight: 900;
	font-family: "Montserrat", sans-serif;
	color: black;
    font-size: 40px;
}

.ghost {
	width: 8vmin;
	height: 12vmin;
	background-color: var(--white);
	background-image: url("https://www.transparenttextures.com/patterns/concrete-wall.png");
	background-image: radial-gradient(ellipse at 35% 40%, #000 8%, transparent 0%),
		radial-gradient(ellipse at 65% 40%, #000 8%, transparent 0%),
		radial-gradient(ellipse at 50% 60%, #000 8%, transparent 0%);
	border-radius: 100% / 70% 70% 0% 0%;
	transform: translateX(100em) rotateZ(-90deg);
	position: relative;
	opacity: 0.9;
	mix-blend-mode: exclusion;
	animation: ghostMove 4s ease-out infinite;
}
@keyframes ghostMove {
	0% {
		transform: translateX(30em) rotateZ(-90deg);
	}
	100% {
		transform: translateX(-35em) rotateZ(-90deg);
	}
}
.ghost div {
	position: absolute;
	width: 20%;
	background-color: var(--white);
	background-image: url("https://www.transparenttextures.com/patterns/concrete-wall.png");
}
.ghost div:nth-of-type(1) {
	height: 7vmin;
	left: 0;
	bottom: -6vmin;
	border-radius: 100% / 0% 0% 50% 50%;
}
.ghost div:nth-of-type(2),
.ghost div:nth-of-type(4) {
	height: 4vmin;
	left: 20%;
	bottom: -3vmin;
	border-radius: 100% / 50% 50% 0% 0%;
	background-color: transparent;
}
.ghost div:nth-of-type(3) {
	height: 4vmin;
	left: 40%;
	bottom: -3.95vmin;
	border-radius: 100% / 0% 0% 60% 60%;
	background-color: var(--white);
}
.ghost div:nth-of-type(4) {
	left: 60%;
}
.ghost div:nth-of-type(5) {
	height: 3vmin;
	left: 80%;
	bottom: -2.9vmin;
	border-radius: 100% / 0% 0% 70% 70%;
	background-color: var(--white);
}



            </style>
        </head>
 
        <body>
            
              <div class="nav">
                <div class="container">
                    
                    <img src="https://media.istockphoto.com/id/510128869/id/foto/van-kemping.jpg?s=612x612&w=0&k=20&c=lpK9Tt165orX9C3Xs-crj-81M4NrVu0mEJ61fgXwQ20=" class="logo">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">about us </a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
            <div class="container">
	<div class="title">
		<h1>GHOST TRAVELING</h1>
	</div>
	<div class="ghost">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
            <div class="header">
                <div class="search">
                    <input type="text" placeholder="search your destination">
                    <button>Search</button>
</div>
            </div>  
            
            <div class="footer">
                <p>copyright &copy; All rights reserved to DoctorCode</p>
            </div>
            
        </body>
    <script src="tab.js"></script>
</html>