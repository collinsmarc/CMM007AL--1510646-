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
    <title>Home- myBlog</title>
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


<main class="grid container">
    <section class="grid-60" tablet-grid="grid-60" mobile-grid="grid-60" id="textMain">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante
            dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
            Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent
            taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in
            libero.

            Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.
            Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus
            risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris
            ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. </p>
    </section>

    <section class="grid-40" tablet-grid="grid-40" mobile-grid="grid-40" id="logoMain">
        <img src="blog.png" img id="blogLogo" alt="BlogLogo">


    </section>
</main>

<footer>
    <p>Designed by [Marc Collins],[2016]</p>
</footer>


</body>
</html>