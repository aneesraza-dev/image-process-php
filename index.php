<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">

    <form method="post" enctype="multipart/form-data">
        <div class="container bg-light border border-2 p-5 rounded rouded-2 ">
            <div class="row ">
                <h1 class="text-center text-capitalize ">
                    Convert Any format to (.jpg,.jpeg,.png,.gif) to .webp
                </h1>
                <div class="col-md-6 d-flex  justify-content-center align-items-center">
                    <div class="form-group w-100">
                        <label for="" class="form-label">Insert Image</label>
                        <input type="file" name="imagefile" class="form-control p-3" id="">
                        <small><label>only allowed format: ( .jpg , .jpeg , .png , .gif )</label></small>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <dotlottie-wc class="d-block m-auto" src="https://lottie.host/cd46d1ec-7a25-400b-9d4b-25e4e205b6d8/mBDVrI6Ac2.lottie" style="width:400px;height: 400px" autoplay loop></dotlottie-wc>

                </div>
            </div>

            <button type="submit" name="btn_submit" class="btn w-25 btn-primary fw-bold my-3 d-block m-auto">Convert <svg xmlns="http://www.w3.org/2000/svg" height="30px" width="30px" viewBox="0 -960 960 960" fill="#1aff00">
                    <path d="m360-240 56-56-62-64h166v-80H354l62-64-56-56-160 160 160 160Zm240-160 160-160-160-160-56 56 62 64H440v80h166l-62 64 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                </svg></button>

                
                    
                
            </div>
        </form>
        
     



    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.14/dist/dotlottie-wc.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>



<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

if (isset($_POST['btn_submit'])) {



    $tmpName = $_FILES['imagefile']['tmp_name'];

    $newName = time() . ".webp";

    $manager = new ImageManager(new Driver());

    $image = $manager->read($tmpName);

    $watermark = $manager->read("watermark.png");

    $watermark->scale(width: 100);

    $image->place($watermark, "center", 20, 20, 50);

    $image->toWebp(100);
    

    $image->save("uploads/" . $newName);

    echo "
      <a href='uploads/$newName' style='position: absolute; bottom: 70px;'  class=' w-75 btn btn-success' download>Click to Download Image</a>
  
    ";
}




?>