<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Genius Bruins</title>
    <link href="../resources/generic.css" rel="stylesheet">
    <style>
        .heroHeader {
            text-align: center;
            position: relative;
           top:-270px;
           z-index: 300;
           font-size: 50px;
        }
    </style>
    <link rel="shortcut icon" href="../favicon.ico"type="image/x-icon"/>
    <?php 
        $articleQuery = $_GET["id"];
        $articlesJSON = json_decode(file_get_contents("./articles.json"), true);
        # GOD PHP IS SO BAD
        $foundArticle = false;
        $articleDict;
        foreach($articlesJSON as $value) {
            if($value["id"] == $articleQuery) {
                $foundArticle = true;
                $articleDict = $value;
            }
        }
        if(!$foundArticle) {
            echo '<script>location.href = "./notfound.php";</script>';
        }
    ?>
</head>
<body>
    <script src="resources/articleScript.js"></script>
    <div class="searchbar">
        <script src="../resources/headerbar.js"></script>
        <h1 class="logo primarycolor" id="logobutton">
            genbru
        </h1>
        <input class="primarycolor" placeholder="Search" />
        <button id="search" class="gradient2">Search</button>
    </div>
    <div class="posthero gradient"></div>
    <div class="articleBody">
        <?php echo '<h1 id="title">' . $articleDict["title"] . ' </h1>';?>
        <?php echo $articleDict["innerContent"] ?>
    </div>
    </body>
</html>