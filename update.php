<?php
include "script.php";

$id = $_GET['id']
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Ввод данных</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head> 
    <body> 


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-7" style="position: relative;	box-shadow: 0px 0px 5px 2px #436280;">

                    <h1 class="d-flex justify-content-center">Обновление данных</h1>

                    <form action="upd_script.php" class="main_form" method="post">

                        <input type="hidden" name="id" value="<?php echo $id;?>" >
                        <div class="form-floating">
                            <input name="name" class="form-control" id="name" required value="<?php echo $row['name'];?>" required>
                            
                        </div>
                        <div class="form-floating">
                            <input name="surname" class="form-control" id="surname" value="<?php echo $row['surname'];?>" required>
                            
                        </div>
                        <div class="form-floating">
                            <input name="patronymic" class="form-control" id="floatingInput" value="<?php echo $row['patronymic'];?>" required>
                            
                        </div>
                        <div class="form-floating">
                            <input name="age" class="form-control" id="floatingInput" value="<?php echo $row['age'];?>" required>
                            
                        </div>

                        <input type="submit" class="col-sm-5 d-flex justify-content-center" value="upd">
                    </form>

                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


    </body> 
</html>
