<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="css/<?=$_SESSION['file']['background']?>.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCardView</title>
</head>

<body>

    <h1 class="textcenter">VCard</h1>
        <div id="main">    
            <div class="textcenter">
               <img class="card_pic" src="pic/<?=$_SESSION['file']['pic']?>" >
               <br><br>
               <span class="title">關於</span>
               <span class="title_name"><?=$_SESSION['file']['name']?></span>
               <br><br>       
               <div class="job"><?=$_SESSION['file']['job']?></div>
               <hr class="hr">      
               <span class="job2"><?=$_SESSION['file']['jobdp']?></span>
               <br><br>
               <div class="email"><?=$_SESSION['file']['email']?></div>        
               <br>        
               <div class="phone"><?=$_SESSION['file']['phone']?></div>
            </div>
            <button class="button" onclick="window.history.go(-1)">回頁面</button>
        </div>
        
</body>
</html>
