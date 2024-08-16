let size;

function handleResize() {
    if (window.innerWidth <= 768) {
        size =3;
    } else {
        size = 5;
    }
    return (size)
}

document.addEventListener('DOMContentLoaded', function () {

    var splide1 = new Splide('.splide-1-1', {
        type:"loop",
        perPage: handleResize(),
        perMove: 1,
        focus: "center",
        drag: "free",
        rewind: true,
        rewindByDrag: true,
        autoplay: 'pause',
        speed:"800",
        intersection: {
            rootMargin: '200px',

            inView: {
                autoplay: true,
            },
            outView: {
                autoplay: false,
            },

        },
    });
    splide1.mount(window.splide.Extensions);

    var splide1 = new Splide('.splide-1-2', {
        type:"loop",

        perPage: handleResize(),
        perMove: 1,
        focus: "center",
        drag: "free",
        rewind: true,
        speed:"800",
        rewindByDrag: true,
        autoplay: 'pause',
        intersection: {
            rootMargin: '200px',

            inView: {
                autoplay: true,
            },
            outView: {
                autoplay: false,
            },

        },
    });

    splide1.mount(window.splide.Extensions);

    var splide2 = new Splide('.splide-2-1', {
        direction: 'ttb',
        height: '11rem',
        wheel: true,
        arrows: false
    });
    splide2.mount();

    var splide2 = new Splide('.splide-2-2', {
        direction: 'ttb',
        height: '11rem',
        wheel: true,
        arrows: false
    });
    splide2.mount();

    var splide2 = new Splide('.splide-2-3', {
        direction: 'ttb',
        height: '11rem',
        wheel: true,
        arrows: false
    });
    splide2.mount();
    var splide2 = new Splide('.splide-2-4', {
        direction: 'ttb',
        height: '11rem',
        wheel: true,
        arrows: false
    });
    splide2.mount();
})

