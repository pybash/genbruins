<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $query = $_GET["query"];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/generic.css" rel="stylesheet">

</head>
<body>
    <title>genbru | <?php echo $query;?></title>
    <div class="searchbar">
        <script src="resources/headerbar.js"></script>
        <h1 class="logo primarycolor" id="logobutton">
            genbru
        </h1>
        <?php 
            echo '<input class="primarycolor" placeholder="Search" value="' . $query . '" />'; 
        ?>
        <button id="search" class="gradient2">Search</button>
    </div>
    <div class="posthero gradient"></div>
    <div class="searchResults primarycolor">
        <h2>Searching for: <?php echo $query; ?></h2>
    </div>
</body>
</html>