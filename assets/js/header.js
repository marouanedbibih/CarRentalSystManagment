//Menu open Close
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click",() =>{
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");

})

//Vedio Slider
var btns = document.querySelectorAll(".navigation-btn");
var vedios = document.querySelectorAll(".vedio-slide")
var slideNav = (Manual) =>{
    btns.forEach((btn) =>{
        btn.classList.remove("active")
    });

    vedios.forEach((vedio) =>{
        vedio.classList.remove("active")
    });


    btns[Manual].classList.add("active");
    vedios[Manual].classList.add("active");

}
btns.forEach((btn,i) =>{
    btn.addEventListener("click", () =>{
        slideNav(i);
    });
});
