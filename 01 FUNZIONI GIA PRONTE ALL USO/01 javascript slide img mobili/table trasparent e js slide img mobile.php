<!DOCTYPE html>
<html>
<head><title></title></head>
<body bgcolor="white">

<table id="lightbox" width="300" height="300">
<tr>
<td>

<center>
<style>
    #immagini img {
        width: 220px;
    }
</style>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.onload = function(){
        var immagini = ["acqua.jpg","Ozone7.jpg","22.jpg"];
        var tempo = 10000; // tempo per il cambio immagine
        var i = 1; // incrementatore
        var dir = "/"; // percorso della cartella immagini
        setInterval(function(){
            $("#immagini img").fadeOut(1200,function(){
                $("#immagini img").attr("src",dir + immagini[i]).fadeIn(1200);
            });            
            i++;
            if(i == immagini.length) i = 0;
        },tempo);
    }
</script>
<div id="immagini">    
    <img src="acqua.jpg" alt="img"/>
</div>
</center>

<style type="text/css">
#lightbox {
   background: white;
   border: 20px solid rgba(0, 0, 0, 0.3);}
</style>

</td>
</tr>
</table>

</body>
</html>