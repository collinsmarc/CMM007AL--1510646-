<?php
include("connection.php"); //establish connection to DB  ?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="myBlogStyle.css" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet"
          href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,10 13 maximum-scale=1"/>
    <title>Show- myBlog</title>
</head>
<body>

<header>
    <h1>myBlog</h1>

    <h3>because the internet needs to know what I think</h3>
    <nav id="quickLinks">
        <ul>
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?category=work">Work Items</a></li>
            <li><a href="blog.php?category=university">University Items</a></li>
            <li><a href="blog.php?category=family">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>

<main>

    <?
    $sql = "SELECT * FROM blogview";
    $result = $db->query($sql);


    while ($row = $result->fetch_array()) {
        echo "<h3><a href='#'>".$row["entryTitle"]."</a> by ".$row["submitter"]."</h3> ";
        echo "<h4>".$row["category"]."</h4>";
        echo"<p>".$row["entrySummary"]."</p>";
        echo "<br>";
        echo"<p>-------------------------------------------------------------------</p>";
        echo "<br>";

    }

    ?>


</main>

<footer>
    <p>Designed by [Marc Collins],[2016]</p>
</footer>


</body>
</html>