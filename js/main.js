// ---------menu button functionality ---------------
document.addEventListener('DOMContentLoaded', (event) => {
    const siteNavigation = document.querySelector("#site-navigation")

    const menuToggle = document.querySelector(".menu-toggle")

    const menuButtonLine1 = document.querySelector(".line-1")

    const menuButtonLine2 = document.querySelector(".line-2")

    const menuOpenDiv = document.querySelector('.menu-menu-1-container')

    const header = document.querySelector('.site-header')


    menuToggle.addEventListener("click", (e) => {

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

    let lastScroll = 0

    window.addEventListener('scroll', () => {
        let currentScroll = window.scrollY || document.documentElement.scrollTop

        if (currentScroll <= 0) {
            header.classList.remove('header-scroll')
        }

        if (currentScroll > lastScroll) {
            header.classList.add('header-scroll')
        } else {
            if (currentScroll < lastScroll) {
                header.classList.remove('header-scroll')
            }
        }

        lastScroll = currentScroll
    })

    // animation delay for the heading

    const taglinePart1 = document.querySelectorAll('.tagline-part-1>span')
    const taglinePart2 = document.querySelectorAll('.tagline-part-2>span')

    taglinePart1.forEach((letter, index) => {
        letter.style.animationDelay = `${index * 0.02}s`
    })

    taglinePart2.forEach((letter, index) => {
        letter.style.animationDelay = `${index * 0.02}s`
    })

    // lenis smooth scroll

    const lenis = new Lenis()

    lenis.on('scroll', (e) => {
        // console.log(e)
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)

})

// tl.to('.tagline', { y: 20, opacity: 0 })

// animation for the tagline to appear on page load

document.addEventListener('DOMContentLoaded', (event) => {
    
    // Gsap

    /* const tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".tagline",
        start: 'top 20%',
        end: '70% 20%',
        scrub: true,
        // markers: true
        }
    })

    // GSAP timelines
    const taglineTl = gsap.timeline({ defaults: { ease: 'expo' } })

    taglineTl.fromTo('.tagline-part-1>span>span', { visibility: 'hidden', y: '100%' }, { visibility: 'visible', y: 0, stagger: 0.03 })

    taglineTl.fromTo('.tagline-part-2>span>span', { visibility: 'hidden', y: '100%' }, { visibility: 'visible', y: 0, stagger: 0.03 }, "<")

    taglineTl.fromTo('.tagline>a', { opacity: 0, y: '100%' }, { opacity: 1, y: 'unset' })

    taglineTl.fromTo('.site-header .site-branding', {x:'-200%'}, {x: 0}, "<")

    taglineTl.fromTo('.site-header .menu-toggle', {x:'200%'}, {x: 0}, "<") */

    // desktop hero banner animation scroll up

    /* document.addEventListener('resize', ()=> {
        if ((window.innerWidth || document.documentElement.clientWidth) >= 1100) {
            const heroBannerTimeline = gsap.timeline({
                ScrollTrigger: {
                    trigger: ".light-bg",
                    start: "top center",
                    end: "bottom center",
                    scrub: true,
                    markers: true,
                }
            })

            heroBannerTimeline.to('.tagline *', { y: '-20', opacity: 0.5 })
        }
    }) */

})
