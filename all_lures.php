<?php

//starts a session that gets terminated when the user closes the window

session_start();

//insert the code from an external include file.

include("includes/function_lib.php");

//here's a default column name to sort by

$ordercol='id';

//if the user clicked a link below to sort...

//let our ordercol var use that column name instead
if(isset($_GET['sortby'])){
$ordercol=$_GET['sortby'];
}
//run the query function that's in the include

$res=run_query("SELECT * FROM lure_table ORDER BY $ordercol");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allwater Lures - Catalog - All Lures</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/val_del.js"></script>
</head>

<body>
    <section>
        <header>
        </header>
        <nav>
            <ul>
                <li><a href="php/home.php">Home</a></li>
                <li><a href="all_lures.php">All Products</a></li>
                <li><a href="php/lure_login.php">Login</a></li>
                <li><a href="php/lure_articles.php">Articles</a></li>
            </ul>
        </nav>
    </section>
    <article>
    
    <?php
    
		//display message if user has logged in.
		
		if(isset($_SESSION['logged_in'])){
			echo "<p id=\"admin\">Welcome, administrator ".$_SESSION['username'].'</p>';
		}
		
        if(isset($_SESSION['logged_in'])){ 
                if($_SESSION['privilege']=='admin'){
            ?>
        <ul><li class="add"><a href="php/add_lure.php">Add a Lure</a></li></ul>
        <?php }}//closes if statement ?>
    	<p>Allwater Lures is your one stop shop for fishing lures. We carry many variaties and the highest quality lures for your sport fishing needs. Browse the catalog below.</p>
    	<h1>Catalog - All Lures</h1>
        <a class="sort" href="all_lures.php?sortby=name">Sort by Name</a>
        <a class="sort" href="all_lures.php?sortby=price">Sort by Price</a>
    	
        <ul>
        <?php
        
        //Sets $res array to be read from the first row.
        
        $res->data_seek(0);
        
        
        //Looping through and displaying data.
        
            while($row=$res->fetch_assoc()){
                $name=$row['name'];
                $ID=$row['id'];
                $price=$row['price'];
                $dis=$row['description'];
                $img=$row['lrg_img'];
                $thumb=$row['thumb_img'];
                echo '<li class="whileLoop">';
                ?>
                <form action="php/lure_details.php" method="POST">
                    <input type="hidden" name="select_id" value="<?php echo $ID ?>" />
                    <input class="submit" type="submit" value="<?php echo $name ?>" /><br>
                    <input class="img" type="image" src="<?php echo 'img/'.$thumb ?>" />
                </form>
                    <div class="box_wrap">
                <?php
                if(isset($_SESSION['logged_in'])){ 
					if($_SESSION['privilege']=='admin'){
				?>
                <form action="php/process_delete_lure.php" method="POST">
                    <input class="del" name="delete" type="submit" value="Delete" />
                     <input type="hidden" name="del_id" value="<?php echo $ID ?>" />
                </form>
                <?php }}//closes if statement?>
                <?php
                echo '<h4>$'.$price.'</h4>'.'</li>';
                ?>
				</div>
                <?php
            }//closes while loop//
        ?>
        
        </ul>
    </article>
</body>
</html>