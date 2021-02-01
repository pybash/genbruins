window.addEventListener('load', () => {
    let searchbar = document.getElementById("searchbar");
    let searchbutton = document.getElementById("searchbutton");

    searchbar.addEventListener('keydown', (key) => {
        if(key.key == "Enter") {
            searchbutton.click();
        }
    })

    searchbutton.addEventListener("click" , () => {
        let xhr = new XMLHttpRequest();

        xhr.addEventListener('load' ,(resp) => {
            searchbar.value = xhr.responseText;
        })
        xhr.open("GET", "./test.php?query=" + searchbar.value);
        xhr.send();
    })
})