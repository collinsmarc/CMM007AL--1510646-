<?php
include("connection.php"); //establish connection to DB  ?>


<!--all of the metadata for the page, including unsemantic, CSS stylesheet and fonts from google-->
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
    <title>AddItem- myBlog</title>
</head>
<body>


<!--the header for the page including the title and the navbar-->

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


<!--self referencing form, if post will add to my database otherwise if get will present the form for user to fill-->
<main class="grid container">
    <section id="formAdd">
        <div id="formEntry">

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ?>


            <form action="<? {
                $_SERVER['PHP_SELF'];
            } ?>" method="post">
                Entry Title : <input type="text" name="title" required>
                <br>
                Entry Summary: <br><textarea name="summary" cols="30" rows="7" required></textarea><br><br>
                <br>
                Category: <select name="category" required>
                    <option value="none"></option>
                    <option value="work">Work</option>
                    <option value="university">University</option>
                    <option value="family">Family</option>
                </select>
                <br>
                Submitted By: <input type="text" name="submittedAuthor">

                <br><br>
                <input type="submit" value="Submit" id="submitButton">

                <?

                }
                elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $title = $_POST["title"];
                    $summary = $_POST["summary"];
                    $category = $_POST["category"];
                    $submitter = $_POST["submittedAuthor"];


                    $sql = "INSERT INTO blogview (entryTitle,entrySummary,category,submitter)
                  VALUES ('$title','$summary','$category','$submitter')";

                    if (mysqli_query($db, $sql)) {
                        header("Location:blog.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($db);
                    }


                    $conn->close();


                } else {
                    header("Location:index.php");
                }


                ?>

            </form>
        </div>

    </section>
</main>

<!--footer for the site with my name and year of design-->
<footer>
    <p>Designed by [Marc Collins],[2016]</p>
</footer>


</body>
</html>