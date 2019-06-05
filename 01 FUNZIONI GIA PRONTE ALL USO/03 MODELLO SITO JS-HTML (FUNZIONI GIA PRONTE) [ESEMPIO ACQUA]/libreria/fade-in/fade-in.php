<!-- MENU RESPONSIVE (RESPONSIVO - SI ADATTA A DEVICE) -->


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

//Non è un dispositivo mobile (DESKTOP PC)
//FADE-IN - SLADER CON DISSOLVENZA IN ENTRATA [JS]
echo "<center>
<table id='lightbox' width='1300' height='300'>
<tr>
<td>

<center>
<style>
    #immagini img {
        width: 512px;
        height:339px;}

</style>
<script src='/libreria/fade-in/jquery-latest.min.js' type='text/javascript'></script>
<script type='text/javascript'>
    window.onload = function(){
        var immagini = ['acqua.jpg','Ozone7.jpg','22.jpg'];
        var tempo = 10000; // tempo per il cambio immagine
        var i = 1; // incrementatore
        var dir = '/foto/'; // percorso della cartella immagini
        setInterval(function(){
            $('#immagini img').fadeOut(1200,function(){
                $('#immagini img').attr('src',dir + immagini[i]).fadeIn(1200);
            });            
            i++;
            if(i == immagini.length) i = 0;},tempo);}

</script>
<div id='immagini'>    
    <img src='/foto/acqua.jpg' alt='img'/>
</div>
</center>

<style type='text/css'>
#lightbox{
   background: black;
   border: 20px solid rgba(0, 0, 0, 0.3);}
</style>

</td>
</tr>
</table>
</center>";}

else{

//è un dispositivo mobile (SMARTPHONE-TABLET)
//FADE-IN - SLADER CON DISSOLVENZA IN ENTRATA [JS]
echo "<center>
<table id='lightbox' width='900' height='200'>
<tr>
<td>

<center>
<style>
    #immagini img {
        width: 512px;
        height:339px;}

</style>
<script src='/libreria/fade-in/jquery-latest.min.js' type='text/javascript'></script>
<script type='text/javascript'>
    window.onload = function(){
        var immagini = ['acqua.jpg','Ozone7.jpg','22.jpg'];
        var tempo = 10000; // tempo per il cambio immagine
        var i = 1; // incrementatore
        var dir = '/foto/'; // percorso della cartella immagini
        setInterval(function(){
            $('#immagini img').fadeOut(1200,function(){
                $('#immagini img').attr('src',dir + immagini[i]).fadeIn(1200);
            });            
            i++;
            if(i == immagini.length) i = 0;},tempo);}

</script>
<div id='immagini'>    
    <img src='/foto/acqua.jpg' alt='img'/>
</div>
</center>

<style type='text/css'>
#lightbox{
   background: black;
   border: 20px solid rgba(0, 0, 0, 0.3);}
</style>

</td>
</tr>
</table>
</center>";}

?>