let photo1 = document.querySelector('.section-one__photo');
let text1 = document.querySelector('.section-one__text');

let interval = setInterval(function(){photo1.getBoundingClientRect().top <= 400 ? changeClass() : null}, 1000/60);

function changeClass() {
    photo1.classList.remove("left");
    text1.classList.remove("right");
    console.log('dasdad');
    clearInterval(interval);
}