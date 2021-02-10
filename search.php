<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $query = $_GET["query"];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/generic.css" rel="stylesheet">

    <?php 
        // WIP

        $articlesJSON = json_decode(file_get_contents("./articles/articles.json"), true);
        $resultedArticles = array();
    ?>

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
        <!-- <div class="searchresult">
            <h1>title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel erat a arcu gravida blandit et vitae ex. Praesent iaculis elementum lacus hendrerit fermentum. Praesent imperdiet, elit vitae varius cursus, diam magna iaculis elit, nec bibendum metus turpis congue neque. Nam ut nulla massa. Donec vitae purus fermentum, lobortis lorem eu, volutpat augue. Proin gravida mi finibus, rhoncus ipsum non, varius ipsum. Morbi sollicitudin, massa non placerat aliquet, justo est interdum elit, vitae vehicula nisl turpis quis eros. Vivamus ut porttitor lectus. Maecenas consectetur dolor lorem, vestibulum varius ex varius eget. Duis vel lorem tortor. Ut egestas erat non dui ullamcorper aliquet. Sed nunc est, hendrerit ac sem eu, posuere ultricies dui. Sed viverra augue et vehicula pharetra. Morbi sit amet lectus nec lacus viverra tempor ac eget massa. Vestibulum luctus leo vel mi hendrerit egestas. Praesent egestas lacus non lacus placerat ultricies. Morbi hendrerit, leo at elementum tempor, felis arcu sollicitudin massa, ut sodales nisi felis non neque. Duis sed rutrum nisi. Quisque sapien elit, malesuada vitae orci quis, ornare semper massa. Curabitur consequat, nunc non dapibus blandit, eros ipsum varius enim, eu dapibus tellus nisl at justo. Quisque tincidunt euismod maximus. Maecenas id convallis felis. Etiam dignissim a elit eu sagittis. Vestibulum bibendum odio erat, vel pharetra tellus tristique pulvinar. Maecenas enim dolor, facilisis at ex ut, dignissim molestie mauris. Nam pretium tristique sagittis. Vivamus commodo euismod placerat. In libero erat, tempus eget turpis sit amet, sagittis commodo justo. Fusce quis maximus ex, at pharetra urna. Sed in tristique sapien. Fusce sit amet velit at arcu convallis sodales.</p>
        </div> -->
        <?php
            echo '<div class="searchresult">';

            foreach ($articlesJSON as $key => $value) {
                echo '<h1>' . $value["title"] . '</h1>';
                echo '<p>' . strip_tags($value["innerContent"]) . '</p>';
            }
            
            echo '</div>';
        ?>
    </div>
</body>
</html>