<?php
        if(isset($_POST["btn_save"])){
            
            include("conexion.php");
            
            $id=$_POST["id"];
            $name=$_POST["name"];
            $last_name=$_POST["last_name"];
            $telephone=$_POST["telephone"];

            $query = "SELECT * FROM contacts WHERE contact_id ='$id'";
            $result= mysqli_query($conexion,$query) or die("Cannot execute query");
            
            if(empty($id) OR empty($name) OR empty($last_name) OR empty($telephone)){
                echo '<script> alert("Cannot exist text fields empty.");</script>';
            }elseif(mysqli_num_rows($result)==0){ 
                    $insert = "INSERT INTO contacts VALUES ('$id','$name','$last_name','$telephone');";
                    //$marks = $conexion->query("SET NAMES 'utf8'");
                    mysqli_query($conexion,$insert) or die ("There is a problem for to insert " .mysqli_error($conexion));
                    echo    '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
                            </div>';
                    //echo '<script> alert("Your register is success."); window.location = "http://localhost:8080/Prueba-10x/contact.php";</script>';
                }else{
                    /*echo    '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
                            </div>';*/
                    echo '<script> alert("This user is registered."); window.location = "http://localhost:8080/Prueba-10x/contact.php";</script>';
                }
            mysqli_close($conexion);
        }
    ?>