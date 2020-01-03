<!-- form -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        .lable{
            width:69px;
            height:100px;
            border:1px solid;
            background:#fff;
        }
        .lable:hover{
            width:69px;
            height:100px;
            border:1px solid;
            background:#aaa;

        }
        .file{
            width:0px;
            height:0px;
        }
        .jobdp{
            width:167px;
            height:150px;
        }
        .main{

            margin:auto;
            width:500px;
            text-align:center;

        }
        .card_main{
            margin:auto;
            width:600px;
            height:650px;
            border:1px solid #333;
            border-radius:30px;
            /* background:url('bg_blue.jpg'); */
            /* background:#071734; */
            box-shadow: 5px 5px 5px 5px rgba(50, 50, 50, 0.5);
            margin-top: 5rem;
            font-family:"微軟正黑體";
            font-weight:bold;
        }
      
    </style>
</head>
<body>

    <div class="container card_main">
    <h1 >VCard產生器</h1>
    <form method="post" enctype="multipart/form-data" action="api.php" class="form">
    <table class="table">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>你的名字：</td>
      <td><input type="text" name="name" placeholder="姓名"><br></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>你的職稱：</td>
      <td><input type="text" name="job" placeholder="職稱"><br></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>技能說明：</td>
      <td><textarea name="jobdp" class="jobdp"></textarea><br></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>手機號碼：</td>
      <td><input type="text" name="phone" placeholder="電話"><br></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>電子郵件：</td>
      <td><input type="text" name="email" placeholder="信箱"><br></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>大頭照：</td>
      <td><input type="file" name="pic" id="" class=""><br></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>版型選擇：</td>
        <td>
          <select name="background">
                <option value="r">聖誕紅</option>
                <option value="g">清晨綠</option>
                <option value="b">牛仔藍</option>
            </select>
        </td>
    </tr>
  </tbody>
</table>
<div style="margin:0px 0px 0px 250px">
    <input type="submit" value="送出"  class="btn btn-info"></td>
</div>
</form>
</div>

</body>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>