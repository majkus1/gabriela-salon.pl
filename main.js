let burger = document.getElementById('burger'),
	nav = document.getElementById('main-nav'),
	item = document.getElementById('items')

burger.addEventListener('click', function (e) {
	this.classList.toggle('is-open')
	nav.classList.toggle('is-open')
})

item.addEventListener('click', function () {
	nav.classList.remove('is-open')
	burger.classList.remove('is-open')
})


const menuItems = document.querySelectorAll('.links a')
const scrollSpySections = document.querySelectorAll('.section')


const handleScrollSpy = () => {
    if(document.body.classList.contains('main-page')) {

        const sections = []

        scrollSpySections.forEach(section => {
            // console.log(window.scrollY);
            // wartość scrolla
            // console.log(section.offsetTop);
            // odległośc danej sekcji od górnej krawędzi przeglądarki
            // console.log(section.offsetHeight);
            // wysokość każdej z sekcji

            if(window.scrollY <= section.offsetTop + section.offsetHeight -103) {
                sections.push(section)
               
                const activeSection = document.querySelector(`[href*="${sections[0].id}"]`)
                
                menuItems.forEach(item => item.classList.remove('active'))

                activeSection.classList.add('active')
            }
        })
    }
}

window.addEventListener('scroll', handleScrollSpy)

const openstylebtn = document.querySelector('.expand')
const stylization = document.querySelector('.showstyle')
const closestylebtn = document.querySelector('.closestylization')

const open = () => {
    if (!(stylization.style.display === 'block')) {
       stylization.style.display = 'block'
       openstylebtn.style.display = 'none'
       closestylebtn.style.display = 'flex'
    }
}

const close = () => {
    if (!(stylization.style.display === 'none')) {
        stylization.style.display = 'none'
        openstylebtn.style.display = 'block'
        closestylebtn.style.display = 'none'
     }
}

openstylebtn.addEventListener('click', open)
closestylebtn.addEventListener('click', close)

