<!-- RISOLUZIONE RESPONSIVE (RESPONSIVO - SI ADATTA A DEVICE) -->
<!-- IMG FUNCTION JS -->

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");}

//Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches(".dropbtn")) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");}}}}      
</script>



<!-- SCREEN RESOLUTION -->
<script type="text/javascript"> 
function resolutionX(){
document.write(screen.width);} 
function resolutionY(){
document.write(screen.height);}
</script>

<?php

$iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$_SERVER['HTTP_USER_AGENT'];

$iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
$ipod = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPod');
$android = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$webos = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
 
if(!$ipad && !$iphone && !$android && !$webos && !$ipod){

//Non è un dispositivo mobile
//FUNZIONE STAMPA RISOLUZIONE SCHERMO DA USER AGENT PHP
echo "<table style='position: absolute; bottom: -100%' border='0' cellpadding='0' cellspacing='0' style='margin-bottom: 100%' width='100%' height='100px'>
      <tr>
      <td>";
      
$useragent=$_SERVER['HTTP_USER_AGENT'];
    
$width='<script> resolutionX() </script>';
$height='<script> resolutionY() </script>';
$browser="<br />&nbsp <b><font style='color: red; font-size: 80%'>" . $useragent . "<br />&nbsp <b></font></b><b><font style='font-size: 80%; color: red'><font style='color: black'> Risoluzione Schermo = </font>" . $width . "x" . $height . "px </font><b>";

echo $browser;

echo "</td>
      </tr>
      </table>";}

else{
//è un dispositivo mobile
//FUNZIONE STAMPA RISOLUZIONE SCHERMO DA USER AGENT PHP
echo "<table style='position: absolute; bottom: 5%' border='0' cellpadding='0' cellspacing='0' style='margin-bottom: 100%' width='100%' height='100px'>
      <tr>
      <td>";
      
$useragent=$_SERVER['HTTP_USER_AGENT'];
    
$width='<script> resolutionX() </script>';
$height='<script> resolutionY() </script>';
$browser="<br />&nbsp <b><font style='color: red; font-size: 80%'>" . $useragent . "<br />&nbsp <b></font></b><b><font style='font-size: 80%; color: red'><font style='color: black'> Risoluzione Schermo = </font>" . $width . "x" . $height . "px </font><b>";

echo $browser;

echo "</td>
      </tr>
      </table>";}

//EOF


?>