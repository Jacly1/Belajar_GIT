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
    padding: 15px;
    background-color: #3e7a7e;
}
.footer p{
    text-align: center;
    
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