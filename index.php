<?php 
    if(isset($_POST['rez'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2']; 
        $num3 = $_POST['num3']; 

        $ress = $num1 * $num2 / $num3;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3 text-white">
        <div class="row">
            <h2 class="text-center p-3 bg-primary rounded">Multiplikasaun no Divizaun</h2>
            <div class="col-6 bg-primary rounded-start">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Numeru Primeiru</label>
                        <input type="number" name="num1" class="form-control" id="num1">
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Numeru Segundo</label>
                        <input type="number" name="num2" class="form-control" id="num2">
                    </div>
                    <div class="mb-3">
                        <label for="num3" class="form-label">Numeru Terseiru</label>
                        <input type="number" name="num3" class="form-control" id="num3">
                    </div>
                    <button type="submit" name="rez" class="btn btn-warning mb-2 ">Resultadu</button>
                </form>
            </div>
            <div class="col-6 bg-info rounded-end d-flex justify-content-center align-items-center">
                <h1 class="display-1 bold fw-bold"><?php if(isset($ress)) echo $ress; ?></h1>
            </div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
  </body> 
</html>
