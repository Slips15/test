<!DOCTYPE html> 
<html> 
    <head> 
        <title>TODO supply a title</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head> 
    <body> 
        

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 " style="position: relative;	box-shadow: 0px 0px 5px 2px #436280;">
                    <h1 class="d-flex justify-content-center">Введите данные</h1>

                    <form action="script.php" method="post">

                        <div class="form-floating" style="margin: 5px 0 5px 0">
                            <input name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                            <label for="floatingInput">Ваше имя</label>
                        </div>
                        <div class="form-floating" style="margin: 5px 0 5px 0">
                            <input name="surname" class="form-control" id="surname" placeholder="Ваша фамилия" required>
                            <label for="floatingInput">Ваша фамилия</label>
                        </div>
                        <div class="form-floating" style="margin: 5px 0 5px 0">
                            <input name="patronymic" class="form-control" id="floatingInput" placeholder="Ваше Отчество" required>
                            <label for="floatingInput">Ваше Отчество</label>
                        </div>
                        <div class="form-floating" style="margin: 5px 0 5px 0">
                            <input name="age" class="form-control" id="floatingInput" placeholder="Ваш возраст" required>
                            <label for="floatingInput">Ваш возраст</label>
                        </div>
                        
                        <button type="submit" > Ввести</button>
                    </form>

                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


    </body> 
</html>