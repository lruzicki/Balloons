let tabHeader = document.getElementsByClassName("contact__top")[0];
let tabIndicator = document.getElementsByClassName("contact__indicator")[0];
let tabBody = document.getElementsByClassName("contact__body")[0];
 
let tabsPane = tabHeader.getElementsByTagName("div");
 
for(let i=0;i<tabsPane.length;i++){
  tabsPane[i].addEventListener("click",function(){
    tabHeader.getElementsByClassName("active")[0].classList.remove("active");
    tabsPane[i].classList.add("active");
    tabBody.getElementsByClassName("active")[0].classList.remove("active");
    tabBody.getElementsByTagName("div")[i].classList.add("active");
    
    tabIndicator.style.left = `calc(calc(100% / 4) * ${i})`;
  });
}