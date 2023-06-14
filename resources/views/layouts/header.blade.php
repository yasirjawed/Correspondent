<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
   
    <script src="https://kit.fontawesome.com/e7193bac3f.js" crossorigin="anonymous"></script>
    <style>
        *{
    box-sizing: border-box;
}
html, body {
    overflow-x: hidden;
    height: 100%;
    width: 100%;
}
body {
  font-family: 'Varela Round', sans-serif;
    background: #fff;
    padding: 0;
    margin: 0;
}
h1{
    text-align: center;
    padding-top: 30px;
}
.navbar {
    background-color: black;
    width: 100%;
    height: 60px;
    position: fixed;
    z-index: 10;
}
.main {
    height: 100%;
    margin-top: 60px;
    padding: 10px 50px;
}
#sidebarMenu {
    height: 100%;
    position: fixed;
    left: 0;
    top: 0;
    width: 330px;
    overflow:scroll;
    margin-top: 60px;
    transform: translateX(-330px);
    transition: transform 250ms ease-in-out;
    background: white;
 z-index: 100;
    color: black
}
.menu{
  list-style: none; 
    margin:0;
    padding:0;
}
.menu li{
    border-bottom: 2px solid rgba(121, 7, 7, 0.1);
}
.menu li a{
    color: black;
    display: block;
    padding: 20px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
}

.menu li a:hover{
    color: rgb(185, 26, 26)
}
.menu2{
  list-style: none; 
    margin:0;
    padding:0;
}
.menu2 li a{
    color: black;
    display: block;
    padding: 15px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
}

.menu2 li a:hover{
    color: rgb(185, 26, 26)
}
#openSidebarMenu:checked ~ #sidebarMenu {
    transform: translateX(0);
}

input#openSidebarMenu{
    display: none;
    
}
.sidebarIconToggle {
  height: 22px;
    width: 22px;
    position: absolute;
    z-index: 99;
    top: 22px;
    left: 15px;
    transition: all 0.3s;
    cursor: pointer; 
   
}
.spinner {
    height: 3px;
    background-color: #fff;
    transition: all 0.3s;
}
.spinner.middle ,
.spinner.bottom{
    margin-top: 3px;
}
#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.middle {
    opacity: 0;
}
#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.top {
    transform: rotate(135deg);
    margin-top: 8px;
}
#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.bottom {
    transform: rotate(-135deg);
    margin-top: -9px;
}

#openSidebarMenuborder{
    border-right: 2px solid white;
}
.header2{
    display: flex;
    justify-content: space-between;
}
.navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
  }
  .button-nav{
    position: absolute;
    left: 80%;
    transform: translatex(-50%);
    color: rgb(125, 119, 107);   
    border: 1px solid rgb(125, 119, 107);
  }
  .button-nav:hover{
    color: white;
font-weight: bold
}
.button-nav a{
text-decoration: none;
color: rgb(125, 119, 107);

}

.button-nav a:hover{
color: white;
font-weight: bold;
}

  .navbar-nav li a:hover{
color: white;
font-weight: bold
  }
  .navbar-nav li a{
color: rgb(125, 119, 107);   
}
#main-img-display{
  
    width: 350px;
    float: right;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #000000;">
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav navbar-center mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/correspondents')}}">Correspondents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Collections</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Listen</a>
              </li>
            
           
          </ul>
          <button type="button" class="btn  button-nav" ><a href="{{url('/login')}}" style="">Login / Signup</a></button>
          
        </div>
      </nav>
      
    <input type="checkbox" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle" style="position:fixed">
        <div class="spinner top"></div>
        <div class="spinner middle"></div>
        <div class="spinner bottom"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="menu">
            <li style=""><a href="#">Home<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
            <li><a href="#">Correspondents<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
            <li><a href="#">Collections<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
            <li><a href="#">Listen<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
            <li><a href="#">Videos<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
            <li><a href="#">Founding Principles<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
        </ul>
        <ul class="menu2">
            <li style=""><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Frequently Asked Questions</a></li>
            <li><a href="#">Terms And Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>

    
   
  
