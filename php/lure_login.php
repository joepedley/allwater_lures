<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allwater Lures - Catalog - All Lures</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
                <li><a href="php/about_us.php">About Us</a></li>
            </ul>
        </nav>
    </section>
    <article>
        <h1>Login</h1>
      
        <form action="process_login.php" method="post">
        <p>Username:<input name="uname" type="text" /></p>
        <p>Password:<input name="upass" type="password" /></p>
        <p><input type="submit" value="login" /></p>
       </form>
       <p>Developer's Note: Feel free to test the ability to add and delete lures from the list, by logging in with username and password of "admin"</p>
    </article>
</body>
</html>
