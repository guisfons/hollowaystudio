$(document).ready(function () {
    window.addEventListener('resize', function () {
        wrapperDistance()
    })

    loader()
    wrapperDistance()
    header()
    projects()
    cursor()
    scrollbar()
    fadeIn()
    // scrollTop()
    // banner()
})

function wrapperDistance() {
    let distance = $('.wrapper').offsetLeft

    $('.wrapper-left').each(function (item) {
        item.style.paddingLeft = `${distance}px`
    })
    $('.wrapper-left').each(function (item) {
        item.style.paddingRight = `${distance}px`
    })
}

function header() {
    $(window).scroll(function () {
        let header = $('.header'),
            scroll = $(window).scrollTop()

        if (scroll >= 100) header.addClass('header--fixed')
        else header.removeClass('header--fixed')
    })
}

function banner() {
    gsap.registerPlugin(ScrollTrigger)

    gsap.to('.banner__scroll', {
        yPercent: -200, // Move para cima (passe por 3 seções)
        ease: 'none',
        scrollTrigger: {
            trigger: '.banner__scroll',
            start: 'top top', // Quando o topo do banner__scroll atinge o topo da janela
            end: '+=200%', // Dura 200% da altura da tela
            scrub: true, // Sincroniza com a rolagem
            pin: true, // Fixa a seção durante a rolagem
        }
    })

    // Animação fade-in para as seções
    gsap.utils.toArray('.banner__content').forEach((section) => {
        gsap.from(section, {
            opacity: 0, // Começa invisível
            y: 50, // Move para baixo inicialmente
            duration: 1,
            scrollTrigger: {
                trigger: section,
                start: 'top 80%', // Inicia a animação quando a seção atinge 80% da altura da janela
                toggleActions: 'play none none none', // Executa a animação apenas uma vez
            }
        })
    })

    // Controla a navegação com botões
    const buttons = document.querySelectorAll('.banner__nav button')
    buttons.forEach((button, index) => {
        button.addEventListener('click', function () {
            gsap.to(window, {
                scrollTo: { y: window.innerHeight * index, autoKill: false },
                duration: 1
            })
        })
    })

    // Função para destacar o botão ativo
    ScrollTrigger.create({
        trigger: '.banner__scroll',
        start: 'top top',
        end: '+=200%',
        onUpdate: self => {
            let currentSection = Math.round(self.progress * (buttons.length - 1))
            buttons.forEach(btn => btn.classList.remove('active'))
            buttons[currentSection].classList.add('active')
        }
    })
}

function projects() {
    gsap.registerPlugin(ScrollTrigger)

    gsap.to('.projects__inner', {
        x: () => {
            const lastCard = document.querySelector('.projects__card:last-child')
            const lastCardPos = lastCard.getBoundingClientRect().top
            const viewportHeight = window.innerHeight
            return `-${lastCardPos - viewportHeight / 2}px`
        },
        ease: 'power1.inOut',
        scrollTrigger: {
            trigger: '.projects',
            start: 'top top',
            end: '+=2000',
            scrub: 1,
            pin: true,
            anticipatePin: 1
        }
    })
}

function scrollTop() {
    $('.footer__social').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 1000)
        return false
    })
}

function cursor() {
    if (window.matchMedia('(pointer: coarse)').matches) {
        return
    }

    window.addEventListener('scroll', () => {
        return
    })

    const customCursor = document.querySelector('.holloway-cursor')

    let mouseX = 0, mouseY = 0
    let cursorX = 0, cursorY = 0

    document.addEventListener('mousemove', (e) => {
        mouseX = e.pageX
        mouseY = e.pageY
    })

    function animateCursor() {
        const distX = mouseX - cursorX
        const distY = mouseY - cursorY

        // Aproxima o cursor da posição do mouse de forma suave
        cursorX += distX * 0.1 // O valor 0.1 controla a suavidade (quanto menor, mais suave)
        cursorY += distY * 0.1

        // Atualiza a posição do cursor customizado
        customCursor.style.left = `${cursorX}px`
        customCursor.style.top = `${cursorY}px`

        // Chama a animação no próximo frame
        requestAnimationFrame(animateCursor)
    }

    // Inicia a animação
    animateCursor()

    // Detectar hover em elementor restritos
    const elements = document.querySelectorAll('a, button, .loader')

    elements.forEach(element => {
        element.addEventListener('mouseenter', () => {
            customCursor.style.width = '4rem'
            customCursor.style.height = '4rem'
            customCursor.style.borderWidth = '.7rem'
        })

        element.addEventListener('mouseleave', () => {
            customCursor.style.width = '2rem'
            customCursor.style.height = '2rem'
            customCursor.style.borderWidth = '.3rem'
        })
    })
}

function scrollbar() {
    var isScrolling

    function showScrollbarThumb() {
        $('body').addClass('scrolling')

        clearTimeout(isScrolling)

        isScrolling = setTimeout(function () {
            $('body').removeClass('scrolling')
        }, 1000)
    }

    $(window).on('scroll', showScrollbarThumb)
}

function fadeIn() {
    gsap.registerPlugin(ScrollTrigger)

    gsap.utils.toArray('section').forEach(function (section) {
        gsap.fromTo(section,
            {
                opacity: 0,
                y: 50
            },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 75%',
                    toggleActions: 'play none none none',
                    once: true
                }
            }
        )
    })
}

function loader() {
    gsap.to('.loader > svg path', {
        strokeDashoffset: 0,
        duration: 2,
        ease: 'power2.inOut',
        stagger: 0.2,
        onComplete: function () {
            gsap.to('.loader > svg path:first-of-type', { fill: '#003AFF', duration: 1 })
            gsap.to('.loader > svg path:last-of-type', { fill: '#fff', duration: 1 })

            checkIfPageLoaded()
        }
    })
}

function checkIfPageLoaded() {
    if (document.readyState === 'complete') {
        setTimeout(() => {
           $('.loader').removeClass('loader--active') 
        }, 3000)
    } else {
        $(window).on('load', function () {
            setTimeout(() => {
               $('.loader').removeClass('loader--active') 
            }, 3000)
        })
    }
}