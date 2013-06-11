<?php

session_start();
//if user has not logged in redirect to harmless page 

if(!isset($_SESSION['logged_in'])){	
	header('Location:lure_login.php');
}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allwater Lures - Catalog - Add a Lure</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/val_add.js"></script>
</head>

<body>
    <section>
        <header>
        </header>
        <nav>
            <ul>
                <li><a href="php/home.php">Home</a></li>
                <li><a href="../all_lures.php">All Products</a></li>
                <li><a href="lure_login.php">Login</a></li>
                <li><a href="add_lure.php">Add a Lure</a></li>
            </ul>
        </nav>
    </section>
    <article>
        
        
        <h3>Add a Lure</h3>
        
        <form method="post" action="process_add_lure.php" enctype="multipart/form-data">
        <p class="form">Name of Lure:<input id="newname" name="newname" type="text" /></p>
        <p class="form">Price:<input id="newprice" name="newprice" type="text" /></p>
        <p class="form">Description:<textarea id="newdis" name="newdis"></textarea></p>
        <p class="form">Thumbnail Image(100x100 jpg):<input id="thumbnail" type="file" name="newthumb" /></p>
        <p class="form">Full-size Image:<input id="full-size" type="file" name="newimg" /></p>
        <p class="form"><input type="submit" value="Done" /></p>
        </form>
        
    </article>
</body>
</html>