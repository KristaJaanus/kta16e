
<meta charset = "utf-8">

<script type="text/javascript">
    window.onload =function (){
        (function(){
        var date = new Date();
        //paneme aja õigel kujul kokku
        var time = date.getHours() + ':' 
        + date.getMinutes()+ ':'
        + date.getSeconds();
        //otsime lehelt esimese div tag'i
        document.getElementsByTagName('div')
        [0].innerHTML = "Aeg JS'is: " + time;
        window.setTimeout(arguments.callee,1000);
        })();
        
    }
        
        
</script>

<?php
require 'components.php';
require 'function.php';
$name = "Tarmo";

// üherealine kommentaar

/*
See on 
kommentaar
mitmel real
*/

// tagasi algusesse
home();
menu($menu_begin, $menu_arr,$menu_end);

//näitame praegust aega ja anname soovitusi
aeg();
echo "<div></div>";
// näited teksti kuvamise kohta
echo "$name esimene PHP's kirjutatud lause!<br>";
echo '<b>$name esimene PHPs kirjutatud lause!</b><br>';
echo "Nüüd vaatame täpitähti<br>";

GetVisitorIp();
counter();

?>