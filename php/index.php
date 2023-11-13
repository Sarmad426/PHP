<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <?php
        echo "Salman"
        ?>
        <!-- Variables -->
        <?php
        echo $name = 'Salman';
        echo '<h3>' . $name . '</h3>';
        ?>
        <?php
        echo $age = 20;
        echo '<h3>' . $age . '</h3>';
        ?>
        <!-- Conditions -->
        <?php
        if($age<18){
            echo '<h2>' . $name. ' Not Adult.</h2>';
        }else{
            echo '<h2>' . $name .' Adult</h2>';
        }
        ?>
        <!-- Loops -->

        <!-- While Loop -->
        <?php
        $array = [1,2,3,4,5];
        $count = 0;
        while($count<5){
            echo '<p>' . $array[$count] . '</p>';
            echo '<br>';
            $count+=1;
        }

        ?>

        <!-- For Loop -->
        <?php
         $array = ['Sarmad','Salman','Kashif','Imran','Mehboob'];
         for($i=0;$i<5;$i+=1){
            echo '<p>' . $array[$i] . '</p>';
            echo '<br>';
         }
        ?>

    </body>
</html>