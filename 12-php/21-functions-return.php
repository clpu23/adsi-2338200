<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Hello World" ?> </title>
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
          <a class="nav-link active" aria-current="page" href="#">01 Hello World</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Hello World</h1>"; ?>
            <hr>
            <?php 
					function show_name($name) {
						return $name;
					}
					function show_result($n1, $n2) {
						return $n1 * $n2;
					}
				?>
				<div class="mt-4 p-5 bg-dark text-white rounded">
				  <div class="container">
				    <h1 class="display-4"><?php echo show_name('Hideo Kojima'); ?></h1>
				    <p class="lead"> 23 * 15 = <?php echo show_result(23, 15); ?></p>
				  </div>
				</div>

           
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>