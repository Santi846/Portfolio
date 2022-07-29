<?php 
    //call 'con_db.php' script
    include("con_db.php");
    
    //verify botton action
    if (isset($_POST['register'])) {
    //strlen count parameter´s caracters
        if (strlen($_POST['name']) >= 1 &&
            strlen($_POST['email'])>= 1) {
    //trim remove the sppaces before and after the parameters
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            //set the real time zone as a value
            $f_registro = date("d/m/y");
            //sql insert with previous data
            $query = "INSERT INTO datos(nombre, email, f_registro) VALUES ('$name','$email','f_registro')";
            //set connection with database and run a query
            $result= mysqli_query($connection,$query);
            if ($result) {
                ?>
                    <h3 id="ok">¡Te has inscripto correctamente!</h3>
                <?php
            }
            else{
                ?>
                <h3 class="bad">No has podido inscribirte</h3>
            <?php  
            }
    }
        else{
            ?>
                <h3 class="bad">Por favor completa los campos</h3>
            <?php  
    }

    }
    

        ?>