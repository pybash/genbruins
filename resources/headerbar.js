window.addEventListener('load', () => {
    let logobutton = document.getElementById("logobutton")
    if(location.href.includes("articles")) {
        logobutton.addEventListener("click" , () => {
            window.location = "../index.html"
        })
    } else {
        logobutton.addEventListener("click" , () => {
            window.location = "./index.html"
        })
    }
})