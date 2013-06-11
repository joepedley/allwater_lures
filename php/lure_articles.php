<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allwater Lures - Catalog - All Lures</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/val_art.js"></script>
</head>

<body>
    <section>
        <header>
        </header>
        <nav>
            <ul>
                <li><a href="php/home.php">Home</a></li>
                <li><a href="../all_lures.php">All Products</a></li>
                <li><a href="php/lure_login.php">Login</a></li>
                <li><a href="php/lure_articles.php">Articles</a></li>
            </ul>
        </nav>
    </section>
    <article>

 <h3>Add a comment.</h3>
	
    <form action="xml_lure_process.php" method="POST">
        <p>Name: <input id="name" type="text" name="comName" /></p>
        <p>Comment: <textarea id="comment" name="comment"></textarea></p>
        <p>Lure Bought: <input id="lure" type="text" name="comLure"></p>
        <p>Fishing Type: <input id="type" type="text" name="comType"></p>
        <p><input type="submit" value="Comment" /></p>
    </form>	
    
    <?php		  
		//make a reuseable var to store the path to the data
		
		$fileDir="../xml/";
		
		//open a conncetion to the data (XML folder full of flies)
		
		$handle=opendir($fileDir);
		
		//while loop to perform the procdeure in {} to each file in the folder
		
		while(($file=readdir($handle))!==FALSE){
	
		//if the file we are looking at is a directory skip to the next item in the folder
		
		if (is_dir($fileDir.$file))continue;
		
		//load the file's data into an array var
		
		$comFile=simplexml_load_file($fileDir.$file);
		
		//store each child node's value into a different var
		
		$com_name=$comFile->username;
		$com=$comFile->comment;
		$comLure=$comFile->comLure;
		$comType=$comFile->comType;
		$com_id=$comFile['id'];
		//display the var amid HTML/CSS
		
		?>
		
		
		<h1><?php echo $com_name ?></h1>
		<p class="article_para"><?php echo $com ?></p>
        <p>Lure Bought: <?php echo $comLure ?></p>
        <p>Fishing Type: <?php echo $comType ?></p>
		<p class="datetime"><?php echo date('F jS, Y h:i:s',strtotime($com_id));?></p>
        
        
        
		<?php
		//Close while loop
		}
		  

        
        ?>

</article>
</body>
</html>