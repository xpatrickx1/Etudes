
[...document.querySelectorAll('.program__item')]
    .reduce((accumulator, currentValue, currentIndex, array) => {
        if (currentIndex % 4 === 0) {
            accumulator.push(array.slice(currentIndex, currentIndex + 4));
        }
        return accumulator;
    }, [])
    .forEach(p => {
        let newGroup = '';
        if (p[0].outerHTML !== 'undefined') {
            newGroup += p[3].outerHTML;
        }
        console.log(newGroup);
        // let new_html = '<div class=\'program__group\'>' + p[0].outerHTML + p[1].outerHTML + p[2].outerHTML + p[3].outerHTML + '</div>';
        // document.querySelector('.program__list').innerHTML = new_html;
    });


// $('.program__slider')

//     .slick({
//         infinite: true,
//         speed: 300,
//         centerMode: false,
//         // variableWidth: true,
//         arrows: false,
//         slidesToScroll: 1,
//         prevArrow: '<button class="slick-prev slick-arrow arrow--main" aria-label="Previous" type="button"></button>',
//         nextArrow: '<button class="slick-next slick-arrow arrow--main" aria-label="Next" type="button"></button>',
//         dots: true,
//         responsive: [
//             {
//                 breakpoint: 767,
//                 settings: {
//                     slidesToShow: 1,
//                 }
//             },
//             {
//                 breakpoint: 9999,
//                 settings: 'unslick',
//             },
//         ]
//     })

//     .on('afterChange', e => {
//         $(window).scroll();
//     });


// <!-- <?php foreach ( array_chunk($program, 4) as $key => $group ) : ?> -->

//                 <!-- <?php $key++ ?> -->
//                 <!-- <?php if( ($key % 4) === 0 ) {
//                     // echo '<div class="program__group">';
//                 } ?> -->