// ---------menu button funtionality ---------------

const siteNavigation = document.querySelector("#site-navigation")

const menuToggle = document.querySelector(".menu-toggle")

const menuButtonLine1 = document.querySelector(".line-1")

const menuButtonLine2 = document.querySelector(".line-2")

const menuOpenDiv = document.querySelector('.menu-menu-1-container')

menuToggle.addEventListener("click", (e)=> {
    
    if (!menuButtonLine1.classList.contains('rotate-span-1')) {
        menuButtonLine1.classList.add('rotate-span-1')
    } else {
        menuButtonLine1.classList.remove('rotate-span-1')
    }

    if (!menuButtonLine2.classList.contains('rotate-span-2')) {
        menuButtonLine2.classList.add('rotate-span-2')
    } else {
        menuButtonLine2.classList.remove('rotate-span-2')
    }

    menuOpenDiv.classList.toggle('menu-open')

})

document.addEventListener('click', function (event) {
    const isClickInside = siteNavigation.contains(event.target);

    if (!isClickInside) {
        menuButtonLine1.classList.remove('rotate-span-1')
        menuButtonLine2.classList.remove('rotate-span-2')
        // menuOpenDiv.classList.toggle('menu-open')
    }
    
})

// Lenis smooth scroll
const lenis = new Lenis()

lenis.on('scroll', (e) => {
    console.log(e)
})

lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time) => {
    lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0)
