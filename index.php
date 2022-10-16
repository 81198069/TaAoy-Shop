<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                <div class="form-group">
					<h2 class="heading-section">Login page</h2>
                </div>
				</div>
			</div>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>


    <form action="login.php" method="post">
    
        
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        
        <br>

        <input type="password"class="form-control" name="password" placeholder="Password" required>
        
        <br>
    
        <input type="submit" class="form-control btn btn-primary submit px-3" name="submit" value="Login">

    </form>

    <div class="col-md-6 text-center mb-5"></div>
    <h3><p class ="w-100 text-center"><a href="register.php">Go to register</a></p></h3>
    
    
</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>