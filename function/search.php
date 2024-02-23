<?php 
include_once "colors.php";





if($_SERVER['REQUEST_METHOD'] === 'POST'){

    switch ($_POST['action']){

        case 'searchColor':
            $color = strtolower($_POST['color']);

            if(in_array($color, $colors))
            {
                if($color == "jade"){
                    echo $jade;
                }
                if($color == "aqua"){
                    echo $aqua;
                }
                if($color == "blue"){
                    echo $blue;
                }
                if($color == "indigo"){
                    echo $indigo;
                }
                if($color == "brown"){
                    echo $brown;
                }
                if($color == "bronze"){
                    echo $bronze;
                }
                if($color == "coffee"){
                    echo $coffee;
                }
                if($color == "mocha"){
                    echo $mocha;
                }
                if($color == "yellow"){
                    echo $yellow;
                }
                if($color == "red"){
                    echo $red;
                }
                if($color == "mahogany"){
                    echo $mahogany;
                }
                if($color == "violet"){
                    echo $violet;
                }
                if($color == "pink"){
                    echo $pink;
                }
                if($color == "purple"){
                    echo $purple;
                }
                if($color == "raspberry"){
                    echo $raspberry;
                }
                if($color == "green"){
                    echo $green;
                }
                if($color == "orange"){
                    echo $orange;
                }
                if($color == "orchid"){
                    echo $orchid;
                }
                if($color == "amaranth"){
                    echo $amaranth;
                }
                if($color == "iris"){
                    echo $iris;
                } 

            }else{
                echo "Color not found";
            }


        break;

    }

}