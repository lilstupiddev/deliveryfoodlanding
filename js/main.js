
new WOW().init();

const cartButton = document.querySelector("#cart-button");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");
const otmena = document.querySelector(".otmena");   
cartButton.addEventListener("click", function(event){
    modal.classList.add("is-open");
})

close.addEventListener("click", function(event){
    modal.classList.remove("is-open");
})

otmena.addEventListener("click", function(event){
    modal.classList.remove("is-open");
})



$(window).on("load",function(){
    $(".loader-container").fadeOut(3000);
});


