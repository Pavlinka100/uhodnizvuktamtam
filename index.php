<?php
// Define the directory to scan
$directory = "./gifs"; 

// Array to store gif file names
$gifFiles = [];

// Scan the directory for files
$files = scandir($directory);

// Loop through the files and select only .gif files
foreach ($files as $file) {
  // Check if the file has a .gif extension
  if (pathinfo($file, PATHINFO_EXTENSION) === 'gif') {
      $gifFiles[] = $file; // Add the .gif file to the array
     
  }
}




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Uhodni zvuk!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="styles.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


  <button class=" btn btn-outline-secondary border-0 amgexternalsound float-right  position-absolute top-0 end-0 mx-5 fw-bold" >♫</button>
  <div class="container ">
  
  
    <div class="row d-flex justify-content-center" >
      
      <div class="d-flex justify-content-center"><h1 class="mb-3 mt-3 amgheading fw-bold text-primary">Uhodni zvuk!</h1>
      </div>

          <div class="row amg mb-3"> 
          <div class=" col-sm-12 col-md-8 col-lg-8 text-center my-2">
            <img class="amggif"  src ="images/button-162066_640.png" />
          </div>
          <div class="col-sm-12 col-md-4  col-lg-4  align-self-end" > 
            <div class=" text-end m-3"> 
              <div class="amgspeedoptions ">
                <input type="range" class="form-range amgspeed  " value="1" min="1" max="2" >

                <div class="d-flex justify-content-between">
                  <span class="m-1 fw-bold ">Pomalu</span> <span class="m-1 fw-bold">Rychle</span>
                </div>
              </div>
              <div class=" d-flex justify-content-between mt-5">
                <button class="btn btn-primary amgstartstop fw-bold p-3 m-1">Start</button> 
                <button class="btn btn-secondary amghelp fw-bold p-3 m-1 " onclick="window.location.href='rules.html'">Pomoc</button> 
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="amggifnames d-none"><?php echo implode(', ', $gifFiles);; ?></div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="index.js"charset="utf-8"></script>
</body>


</html>
