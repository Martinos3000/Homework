<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">';?>
                                                       
                </div>

                <div class="fullname">
                    <p> Nazywam się 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Miasto', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Mam
                    <?php  echo $age;   ?>          
                    lat </p>
                    <p> Na tym kursie nauczyłem się robić zmienne</p>
                    <p> Nauczyłem się robić proste operacji ze zmiennymi </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 50;
                        $b = 50;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Nauka - to jest wszystko. 
                    Rób co musisz i niech będzie jak będzie ! 
                    Jak się nauczysz tak będziesz umiał ! Progamowanie to jest przyszlość! Pozdrawiam.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
