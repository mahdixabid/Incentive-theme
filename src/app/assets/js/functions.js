let menu_canvas = document.querySelector('.menu_canvas')
let toggle_btn = document.querySelector('.toggle_menu img')
let close_btn = document.querySelector(".close_btn")


toggle_btn.addEventListener('click', function() {
    menu_canvas.classList.add("swipe_right")
})

close_btn.addEventListener('click', function() {
    menu_canvas.classList.remove("swipe_right")
})

