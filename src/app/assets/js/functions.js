let menu_canvas = document.querySelector('.menu_canvas')
let toggle_btn = document.querySelector('.toggle_menu img')
let close_btn = document.querySelector(".close_btn")


toggle_btn.addEventListener('click', function () {
    menu_canvas.classList.add("swipe_right")
})

close_btn.addEventListener('click', function () {
    menu_canvas.classList.remove("swipe_right")
})



let toggle_mobile = document.querySelector('.toggle_btn')
let nav_mobile = document.querySelector('.nav_canvas_mobile')
let close_mobile = document.querySelector('.close_btn_mobile')


if (toggle_mobile) {
    toggle_mobile.addEventListener('click', function () {
        nav_mobile.classList.add("swipe_up")
    })
}

if (close_mobile) {
    close_mobile.addEventListener('click', function () {
        nav_mobile.classList.remove("swipe_up")
    })
}



let btn_postuler = document.querySelector(".postuler_popup .btn_light")
let close_btn_popup = document.querySelector(".postuler_popup .close_btn")
let popup_container = document.querySelector('.overlay_popup')
if (btn_postuler) {
    btn_postuler.addEventListener('click', function (e) {
        popup_container.classList.remove("hide")
    })
}
if (close_btn_popup) {
    close_btn_popup.addEventListener('click', function (e) {
        popup_container.classList.add("hide")
    })
}




var currentURL = window.location.href;
if (currentURL.includes("project__type")) {
    var element = document.querySelector("#Portfolio_block_01");
    if (element) {
        element.scrollIntoView({ behavior: "smooth" });
    }
}












