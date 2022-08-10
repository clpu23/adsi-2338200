<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Strings" ?> </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info navbar-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP & Bootstrap V5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Main Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">05 Strings</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
            <?php
             echo "<h1 class='mt-5'>Strings</h1>"; 
            <?php 

            // Concatenate
            $tbl1  = 'table';
            $tbl2  = 'table-bordered';
            $tbl3  = 'table-hover table-dark';
            $class = $tbl1." ".$tbl2." ".$tbl3." table-stripped";
            // strings
            $string1 = "ADSI 2338200";
            $string2 = "sena caldas";
            $string3 = "Hello world";

        ?>
        <table class="<?php echo $class; ?>">
            <thead class="bg-secondary text-uppercase">
                <tr>
                    <th>Method</th>
                    <th>Descrition</th>
                    <th>string</th>
                    <th>Resuld</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>strlen()</td>
                    <td>string lengtth</td>
                    <td><?php echo $string1; ?></td>
                    <td><?php echo strlen($string1); ?></td>
                </tr>
                <tr>
                    <td>strpos()</td>
                    <td>match position string</td>
                    <td>1804230</td>
                    <td><?php echo strpos($string1, '2338200'); ?></td>
                </tr>
                <tr>
                    <td>strtoupper()</td>
                    <td>string uppercase</td>
                    <td><?php echo $string2; ?></td>
                    <td><?php echo strtoupper($string2); ?></td>
                </tr>
                <tr>
                    <td>ucwords()</td>
                    <td>first l</td>
                    <td><?php echo $string2; ?></td>
                    <td><?php echo ucwords($string2); ?></td>
                </tr>
                <tr>
                    <td>strrev()</td>
                    <td>Invierte Cadena</td>
                    <td><?php echo $string2; ?></td>
                    <td><?php echo strrev($string2); ?></td>
                </tr>
                <tr>
                    <td>str_replace()</td>
                    <td>Reemplaza Cadena</td>
                    <td><?php echo $string3; ?></td>
                    <td><?php echo str_replace("Mundo", "Jeremias", $string3); ?></td>
                </tr>
                <tr>
                    <td>substr()</td>
                    <td>Substraer Cadena</td>
                    <td><?php echo $string3; ?></td>
                    <td><?php echo substr($string3, 5, 9); ?></td>
                </tr>
            </tbody>
        </table>
          
            
            
            ?>
           
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>