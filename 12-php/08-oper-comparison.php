<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="operator comparison" ?> </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">08- operator comparison</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-6 offset-3 text-center">
            <?php 
            echo "<h1 class='mt-5'>operator comparison</h1>"; ?>
            <table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operator</th>
							<th>Descrition</th>
							<th>Example</th>
							<th>Resuld</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> == </td>
							<td> Es Igual </td>
							<td>5==8;</td>
							<td><?php echo var_dump(5==8); ?></td>
						</tr>
						<tr>
							<td> != </td>
							<td> No es Igual </td>
							<td>5!=8;</td>
							<td><?php echo var_dump(5!=8); ?></td>
						</tr>
						<tr>
							<td> <> </td>
							<td> No es Igual </td>
							<td>5<>8;</td>
							<td><?php echo var_dump(5<>8); ?></td>
						</tr>
						<tr>
							<td> > </td>
							<td> Es Mayor que </td>
							<td>5>8;</td>
							<td><?php echo var_dump(5>8); ?></td>
						</tr>
						<tr>
							<td> < </td>
							<td> Es Menor que </td>
							<td>5<8;</td>
							<td><?php echo var_dump(5<8); ?></td>
						</tr>
						<tr>
							<td> >= </td>
							<td> Es Mayor o Igual que </td>
							<td>5>=8;</td>
							<td><?php echo var_dump(5>=8); ?></td>
						</tr>
						<tr>
							<td> <= </td>
							<td> Es Menor o Igual que </td>
							<td>5<=8;</td>
							<td><?php echo var_dump(5<=8); ?></td>
						</tr>
					</tbody>
				</table>
            
                
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>