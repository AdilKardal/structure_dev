let burger = document.querySelector(".icon")
let menu = true;

burger.addEventListener("click", function(){
    if(menu){
    //   navbar.style.overflow = "visible"
      navbar.style.height = "70vh"
      menu = false  
    } else {
        navbar.style.height = "8vh"
        menu = true
    }
})
