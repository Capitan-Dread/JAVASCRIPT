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


//MENU DESKTOP PC 
//Non è un dispositivo mobile
echo "<table style='background-color: black' border='1' bordercolor='black' cellspacing='0' cellpaddign='0' width='100%' height='100px'>
      <tr>
      <td>
      
         <div>
            <ul style='float: left; padding: 0 270px' id='menu'>
               <li><a style='font-size=20px; list-style: none; color: white; text-decoration: none; margin: 100px' href='/'>Home</a></li>
               <li><a style='font-size=20px; list-style: none; color: white; text-decoration: none; margin: 100px' href='chi-siamo.php'>Chi Siamo</a></li>
               <li><a style='font-size=20px; list-style: none; color: white; text-decoration: none; margin: 100px' href='contattaci.php'>Contattaci</a></li>
           </ul>
         </div>
      
      </td>
      </tr>
</table>

<style type='text/css'>
ul#menu li{
   display: inline;
</style>";}

else{


//MENU SCROLLABILE (SE MOBILE)
//è un dispositivo mobile
echo "<table style='background-color: black' border='1' bordercolor='black' cellspacing='0' cellpaddign='0' width='100%' height='100px'>
      <tr>
      <td>
      
      
//STILI MENU SCROLLABILE (CSS)      
<style>
    .dropbtn{
    background-color: black;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #f1f1f1;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 50px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>";


//FUNZIONE BOTTONE SCROLLABILE CON IMG JPG
echo "<div class='dropdown' style='float: right; margin: 25px'>
<button onclick='myFunction()' class='dropbtn'><img src='/foto/menu-linee.jpg' alt='menu-linee' width='50' height='50' /></button>
  <div id='myDropdown' class='dropdown-content'>
    <a href='/'>Home</a>
    <a href='chi-siamo.php'>Chi Siamo</a>
    <a href='contattaci.php'>Contattaci</a>
  </div>
</div>

      </td>
      </tr>
</table>";}


?>