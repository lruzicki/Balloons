// let photo1 = document.querySelector('.section-one__photo');
// let text1 = document.querySelector('.section-one__text');

// let interval = setInterval(function(){photo1.getBoundingClientRect().top <= 400 ? changeClass() : null}, 1000/60);

// function changeClass() {
//     photo1.classList.remove("left");
//     text1.classList.remove("right");
//     clearInterval(interval);
// }

export default class Animations{

    init(){
        // let photo1 = document.querySelector('.section-one__photo');
        // let text1 = document.querySelector('.section-one__text');
        
        // let interval = setInterval(function(){photo1.getBoundingClientRect().top <= 400 ? changeClass() : null}, 1000/60);
        
        // function changeClass() {
        //     photo1.classList.remove("left");
        //     text1.classList.remove("right");
        //     clearInterval(interval);
        // }

        const sectionOne = document.querySelector(".section-one");
        const sectionTwo = document.querySelectorAll(".section-two__one");
        console.log(sectionOne);
        const options = {
            threshold: 0.3
        };

        const appearOnScroll = new IntersectionObserver(function
            (entries, appearOnScroll){
                entries.forEach(entry => {
                    if(!entry.isIntersecting){
                        return;
                    } else {
                        console.log(entry.target);
                        entry.target.classList.add("appear");
                        appearOnScroll.unobserve(entry.target);
                    }
                });
            }, options);
        appearOnScroll.observe(sectionOne);
        sectionTwo.forEach( fader => {
            appearOnScroll.observe(fader);
        });
    }

};