$(function() {
    var tl = gsap.timeline();
    $('.ham').click(() => {
        tl.to('aside', {display: 'block', duration: 0.1})
        .fromTo('aside', {opacity: 0, duration: 0.5}, {opacity: 1})
        .fromTo('.menu-body', {x: -250, duration: 0.8}, {x: 0}, "-=0.6")
    });
    $('.menu-close').click(() => {
        tl.to('.menu-body', {x: -250, duration: 0.5})
        .to('aside', {opacity: 0, duration: 0.5}, "-=0.3")
        .to('aside', {display: 'none', duration: 0.1}, "-=0.4")
    });
    
    $('.toggle-trigger').on('click',() => {
        if ($('.hide-section').css('display') == 'none') {
            tl.to('.hide-section', {display: 'block', duration: 0.1})
            .fromTo('.hide-section', {opacity: 0, y: 300, duration: 0.8}, {opacity: 1, y: 0});
        } else if ($('.hide-section').css('display') == 'block') {
            tl.to('.hide-section', {opacity: 0, y: 300, duration: 0.5})
            .to('.hide-section', {display: 'none', duration: 0.1})
        } 
    });
});