$(function() {
    var tl = gsap.timeline();
    $('#reg-trigger').click(() => {
        tl.to('.modal', {display: 'flex', duration: 0.1})
        .fromTo('.modal', {opacity: 0, duration: 0.5}, {opacity: 1}, '-=0.1')
        .from('#register-1', {x:-100, duration: 0.8}, '-=0.6')
    });

    $('#reg-submit-1').click(() => {
        tl.to('#register-1', {opacity: 0, duration:0.5})
        .to('#register-1', {display: 'none', duration:0.1})
        .to('#register-2', {display: 'block', duration:0.1})
        .fromTo('#register-2', {opacity: 0, duration:0.8}, {opacity: 1}, '-=0.1')
    });

    $('#modal-back-1').click(() => {
        tl.to('.modal', {opacity: 0, duration:0.5})
        .to('.modal', {display: 'none', duration:0.1})
    })

    $('#modal-back-2').click(() => {
        tl.to('#register-2', {opacity: 0, duration:0.5})
        .to('#register-2', {display: 'none', duration:0.1})
        .to('#register-1', {display: 'block', duration:0.1})
        .fromTo('#register-1', {opacity: 0, duration:0.8}, {opacity: 1}, '-=0.1')
    })
});