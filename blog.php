<?php
include("connection.php"); //establish connection to DB
$choice=$_GET["category"];
?>


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
    <?
         switch ($choice) {
            case "work":
                        echo " <h1>myBlog - Work </h1>
    <h3>because the internet needs to know what I think about work</h3>";
             break;
         case "university":
                      echo " <h1>myBlog - University </h1>
     <h3>because the internet needs to know what I think about university</h3>";
             break;
         case "family":
                      echo " <h1>myBlog - Family </h1>
    <h3>because the internet needs to know what I think about family</h3>";
            break;


        default:
                       echo " <h1>myBlog</h1>
    <h3>because the internet needs to know what I think</h3>";
    }
     ?>





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

<main id="blogList">

    <?

    if ($choice=="work") {


        $sql = "SELECT * FROM blogview where category LIKE 'Work'";
        $result = $db->query($sql);


        while ($row = $result->fetch_array()) {
            echo "<h3>" . $row["entryTitle"] . "</a> by " . $row["submitter"] . "</h3> ";
            echo "<h4>" . $row["category"] . "</h4>";
            echo "<p>" . $row["entrySummary"] . "</p>";
            echo "<br>";
            echo "<p>-------------------------------------------------------------------</p>";
            echo "<br>";

        }
    }

    elseif($choice=="university") {


        $sql = "SELECT * FROM blogview where category LIKE 'University'";
        $result = $db->query($sql);


        while ($row = $result->fetch_array()) {
            echo "<h3>" . $row["entryTitle"] . "</a> by " . $row["submitter"] . "</h3> ";
            echo "<h4>" . $row["category"] . "</h4>";
            echo "<p>" . $row["entrySummary"] . "</p>";
            echo "<br>";
            echo "<p>-------------------------------------------------------------------</p>";
            echo "<br>";

        }
    }

    elseif($choice=="family") {


        $sql = "SELECT * FROM blogview where category LIKE 'Family'";
        $result = $db->query($sql);


        while ($row = $result->fetch_array()) {
            echo "<h3>" . $row["entryTitle"] . "</a> by " . $row["submitter"] . "</h3> ";
            echo "<h4>" . $row["category"] . "</h4>";
            echo "<p>" . $row["entrySummary"] . "</p>";
            echo "<br>";
            echo "<p>-------------------------------------------------------------------</p>";
            echo "<br>";

        }
    }

    else{

        $sql = "SELECT * FROM blogview";
        $result = $db->query($sql);


        while ($row = $result->fetch_array()) {
            echo "<h3>" . $row["entryTitle"] . "</a> by " . $row["submitter"] . "</h3> ";
            echo "<h4>" . $row["category"] . "</h4>";
            echo "<p>" . $row["entrySummary"] . "</p>";
            echo "<br>";
            echo "<p>-------------------------------------------------------------------</p>";
            echo "<br>";

        }
    }



    ?>


</main>

<footer>
    <p>Designed by [Marc Collins],[2016]</p>
</footer>


</body>
</html>