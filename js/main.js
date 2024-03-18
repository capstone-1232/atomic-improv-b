// ---------menu button funtionality ---------------

const siteNavigation = document.querySelector("#site-navigation")

const menuToggle = siteNavigation.querySelector(".menu-toggle")

const menuButtonLine1 = siteNavigation.querySelector("span:nth-child(1)")

const menuButtonLine2 = siteNavigation.querySelector("span:nth-child(2)")

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
