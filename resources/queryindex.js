window.addEventListener('load', () => {
    let searchbar = document.getElementById("searchbar");
    let searchbutton = document.getElementById("searchbutton");

    searchbar.addEventListener('keydown', (key) => {
        if(key.key == "Enter") {
            searchbutton.click();
        }
    })

    searchbutton.addEventListener("click" , () => {
        location.href = "./search.php?query=" + searchbar.value
    })
})