<?php
    header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found!</title>
    <link href="./resources/articleMisc.css" rel="stylesheet">
    <link href="../resources/generic.css" rel="stylesheet">
    <script>
        window.addEventListener('load', () => {
            let searchbar = document.getElementById("searchbar");
            let searchbutton = document.getElementById("searchbutton");

            searchbar.addEventListener('keydown', (key) => {
                if(key.key == "Enter") {
                    searchbutton.click();
                }
            })

            searchbutton.addEventListener("click" , () => {
                location.href = "../search.php?query=" + searchbar.value
            })
        })

    </script>
</head>
<body>
<div class="searchbar">
        <script src="../resources/headerbar.js"></script>
        <h1 class="logo primarycolor" id="logobutton">
            genbru
        </h1>
        <input class="primarycolor" placeholder="Search" />
        <button id="search" class="gradient2">Search</button>
    </div>
    <div class="content">
        <div class="inner">
            <img src="./resources/catbox.png">
            <h1>404</h1>
            <p>If you are looking for a cat in a box, you found the right place. Otherwise, what you were looking for doesn't seem to be here.</p>
            <input class="searchbarindex border" placeholder="Search for an article." id="searchbar" autocomplete="off" />
            <input  class="gradient2 searchButton" id="searchbutton" type="submit" value="Search">
        </div>
    </div>
</body>
</html>