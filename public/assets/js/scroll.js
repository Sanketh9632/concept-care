

    function run_gsap(){
        let gsap_loaded = setInterval(function(){
            const eleBuilder = document.querySelector('body').classList.contains("elementor-editor-active");
            const screenSize = window.screen.width >= 1025;
            if(window.gsap && window.ScrollTrigger && !eleBuilder && screenSize){
                gsap.registerPlugin(ScrollTrigger);
                overlay_zoom();
                clearInterval(gsap_loaded);
            }
        }, 900);

        function overlay_zoom(){
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: '.content-scroll',
                    start: '-105px top',
                    end: '750px center',
                    scrub:true,
                    pin: true,
                    duration:3
                }
            });
            tl.to('.overlay-zoom', {scale:100, duration:1});
            tl.to('.scroll-headline', {y: -20, opacity:1}, '<20%');
            tl.to('.scroll-des', {y: -20, opacity:1},'<50%');
            tl.to('.scroll-button',{y: -20, opacity:1},'<50%' );
            tl.to('.overlay-zoom', {display:'none'}, '<');
        }
    }
    run_gsap();