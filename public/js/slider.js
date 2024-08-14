let size;

function handleResize() {
    if (window.innerWidth <= 768) {
        size = 2;
    } else {
        size = 4;
    }
    return (size)
}

document.addEventListener('DOMContentLoaded', function () {

    var splide1 = new Splide('.splide-1', {
        perPage: handleResize(),
        perMove: 1,
        focus: "center",
        drag: "free",
        rewind: true,
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

    var splide2 = new Splide('.splide-2', {
        direction: 'ttb',
        height: '11rem',
        wheel: true,
        arrows: false
    });
    splide2.mount();

    var splide3 = new Splide('.splide-3', {
        direction: 'ttb',
        height: '11rem',
        wheel: true,
        arrows: false
    });
    splide3.mount();
})

