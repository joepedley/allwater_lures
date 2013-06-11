<?php

//insert the code from an external include file.

include("../includes/function_lib.php");

//store the id passed along when user clicked a product on the all lure page

$chosen_id=$_POST['select_id'];

//run the query function that's in the include

$res=run_query("SELECT * FROM lure_table WHERE id = $chosen_id");

while($row=$res->fetch_assoc()){
                $name=$row['name'];
                $ID=$row['id'];
                $price=$row['price'];
                $dis=$row['description'];
                $img=$row['lrg_img'];
                $thumb=$row['thumb_img'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allwater Lures - Catalog - <?php echo $name ?></title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/val_del.js"></script>
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
                <li><a href="lure_articles.php">Articles</a></li>
            </ul>
        </nav>
    </section>
    <article>
		<?php
        
        //Sets $res array to be read from the first row.
        
        $res->data_seek(0);
        
        
        //displaying data.
        
                echo '
                <h1>'.$name.'</h1>
                <img src="../img/'.$img.'" /><br>
                <h4>$'.$price.'<h4><br>
                <p>'.$dis.'</p>';
          ?>     
        
      
    </article>
</body>
</html>