<!-- <script>
  (function(d) {
    var config = {
      kitId: 'phj1mzz',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f%7C%7Ca&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/js/jquery.matchHeight-min.js"></script>
<script src="/js/polyfill.js"></script>
<script src="/js/smooth-scroll.polyfills.min.js"></script>
<script src="/js/lazysizes.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/circletype.min.js"></script>
<script src="/js/snap.svg.js"></script>
<script>
  $(window).on("load", function() {
    let scroll = new SmoothScroll('a[href*="#"]', {
      header: "header",
      speedAsDuration: true,
      speed: 650,
      easing: 'easeInOutQuint',
    });
  });
  $('.fot_top nav li').matchHeight();
</script>

<script>
  // Constructor function for SVG animation objects
  function AnimateBlink(elem,interval, ...args) {
      this.path = args[0] ?? "M978.14,314H924.52c-122.38-.41-200.25,572.79-416.9,0-218-576.35-296.64,0-405.45,0H21.86" ;
      this.nextSequencePath = args[1] ?? "M 978.14 314 H 924.52 c -122.38 -0.41 -176.52 0 -416.9 0 c -282.62 0 -296.64 0 -405.45 0 H 21.86";
      this.elem = elem;
      this.elementSnap = Snap(elem);
      this.interval = interval;
      this.animatePath;
      this.animateGroup;
      this.mount = function(...args) {
          let path = args[0] === undefined ? this.path : args[0];
          let circle_1 = this.animatePath = this.elementSnap.path(path);
          let circles = this.animateGroup = this.elementSnap.group(circle_1);
          circles.attr({
              fill: 'none',
              stroke: "#000",
              strokeWidth:75
          });
          return this;
      };
      this.start = function(...args){
        setInterval(() => {
            let g = this.animatePath;
            let line1 = this.nextSequencePath;
            let line = this.path;
            console.log([line1, line]);
            g.animate({d: line1 }, 100, function(){
            g.animate({d: line}, 500, mina.elastic);
        });
        }, this.interval);    
        return this;
      };
  }
  let d = document.querySelectorAll(".btn_svg");
  
  d.forEach((e) =>{
      e = new AnimateBlink(e, 3000).mount().start();  
  });
</script>