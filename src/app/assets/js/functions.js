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

toggle_mobile.addEventListener('click', function () {
    nav_mobile.classList.add("swipe_up")
})

close_mobile.addEventListener('click', function () {
    nav_mobile.classList.remove("swipe_up")
})