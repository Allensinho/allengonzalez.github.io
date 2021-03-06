<!DOCTYPE html>

<?php 
  // Starts the session
  session_start(); 
if(!isset($_SESSION['UserData']['user_name'])){
  header("location:home.php");
  exit;
  }
  ?>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  background-color: #F6F6F6;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-image: linear-gradient(to right, #FFB38B , #FF0865);
}

.ham-button {
  float: left;
  padding: 5px 10px;
  cursor: pointer;
}

.ham {
  width: 30px;
  height: 5px;
  background-color: white;
  margin: 5px 3px;
}
	
.topnav .home {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 15px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 7px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 7px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }

.topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
	
.welcome-bar {
  padding: 10px 50px;
  display: flex;
  text-align: start;
  font-size: 20px;
}

.left {
  width: 50%;
  display: flex;
}

.right {
  width: 50%;
}

.button-container {
  border: solid 20px;
  border-radius: 30px;
  border-color: rgb(255, 179, 139, .4);
  width: 60%;
  position: fixed;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  overflow-y: auto;

}

.button-container .icons {
    width: 120px;
    height: 120px;
    border-radius: 30px;
    float: left;
    justify-content: space-around; 
    margin: 50px;
}

.button-container .icons:hover {
    opacity: .7;
    border-radius: 80px;
	
	
}

</style>
</head>
<body>

<div class="topnav">
	
<div class="ham-button">
  <div class="ham"></div>
  <div class="ham"></div>
  <div class="ham"></div>
</div>
	
<div class="home"><strong>HOME</strong></div>
	
<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
	
<div class="welcome-bar">
    <div class="left">
        <h2>Welcome, Teacher1!</h2>
        <img src="img/calendar.png" alt="calendar" style="align-self: center; margin: 0px 60px; width: 80px">

    </div>

    <div class="right">
        <img src="img/email.jpg" alt="email" style="float: right; margin-right: 280px; width: 80px">
    </div>
</div>


<div class="button-container">
    <a href="class1.html"><img src="img/art.png" alt="art" class="icons"></a>
    <a href="class1.html"><img src="img/history.jpg" alt="history" class="icons"></a>
    <a href="class1.html"><img src="img/math.jpg" alt="math" class="icons"></a>
    <a href="class1.html"><img src="img/music.jpg" alt="music" class="icons"></a>
    <a href="class1.html"><img src="img/science.jpg" alt="science" class="icons"></a>
    <a href="class1.html"><img src="img/add.jpg" alt="add" class="icons"></a>
</div>


</body>
</html>
