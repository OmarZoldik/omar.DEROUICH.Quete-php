<!DOCTYPE html>
<html lang="fr">
<?php

include 'include/head.php';
include 'include/header.php';
include 'include/footer.php';


?>


<body>
    
<img src="./img/Carte_du_monde_france_europe-_vierge-image_01.webp" alt="">
<div id="nord1">NORD</div>
<div id="sud1">SUD</div>
<div id="est1">EST</div>
<div id="ouest1">OUEST</div>

<?php

$Lundi =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];

$Mardi =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];


$Mercredi =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];


$Jeudi =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];


$Vendredi =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];


$Samedi =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];


$Dimanche =[

    "NORD" => ['15','12°','10°','13°'],
  

    "SUD" => ['15','12°','10°','13°'],
    

    "EST" => ['15','12°','10°','13°'],


    "OUEST" => ['15','12°','10°','13°'],

];

if(isset($_GET['Lundi'])){
            foreach($Lundi as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }

if(isset($_GET['Mardi'])){
            foreach($Mardi as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }



        if(isset($_GET['Mercredi'])){
            foreach($Mercredi as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }



        if(isset($_GET['Jeudi'])){
            foreach($Jeudi as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }



        if(isset($_GET['Vendredi'])){
            foreach($Vendredi as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }



        if(isset($_GET['Samedi'])){
            foreach($Samedi as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }



        if(isset($_GET['Dimanche'])){
            foreach($Dimanche as $key => $value){
                echo "<div id='$key'>";
                foreach($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
        }



        // echo "<div id='$key' class='Lundi'> $key";



        

?>













</body>
</html>