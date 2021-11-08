$(function () {

  $(window).on("load scroll", function () {
    var t = $(this).scrollTop();
    if (t > 100) {
      $('#pageTop').addClass('active');
      $('header').addClass('scroll');
    } else {
      $('#pageTop').removeClass('active');
      $('header').removeClass('scroll');
    };
  });

  $('#menu-toggle').click(function () {
    $('header').toggleClass('open');
    $(this).find('.line').toggleClass('show');
    $('header nav').slideToggle();
    $('html').toggleClass('no_move');
  });

  var w = $(window).width();
  if (w < 900) {

  }

});


// $('.sect_4 .wrapper .row .col img').click(function () {
//   $('.video_modal').fadeToggle();
//   var filmwidth = $('.video_frame iframe').width();
//   var filmheight = filmwidth / 16 * 9;
//   $('.video_frame iframe').height(filmheight);
// });

// $('.video_modal .overlay').click(function () {
//   $('.video_modal').fadeToggle();
// });

// $('.btn_modal_close').click(function () {
//   $('.video_modal').fadeToggle();
// });

$('.menu').click(function () {
  $('.big_menu').fadeToggle();
  $('.big_menu').toggleClass('active');
  $('header').toggleClass('active');
  if($('header').hasClass('active')){
    $("header .logo a img").attr("src","/images/common/header_logo_w.svg").fadeIn(5000);
    $('.svg_menu_btn').attr("stroke", "#fff");
  }else{
    $("header .logo a img").attr("src","/images/common/header_logo.svg").fadeIn(5000);
    $('.svg_menu_btn').attr("stroke", "#000");
  }
});


function menu_btn(){
  const POINTS_COUNT = 8;
  const MAX_Y = 200
  const WIDTH = 600
  const HEIGHT = 400
  const EASE = 0.4
  const SPEED = 0.002
  const WAVE_SCALE = (1 / Math.PI) * 1.5

  /**
   * 0〜1と-1〜0の乱数で交互に埋めた値配列を生成します
   */
  const generateValues = () => {
    // return new Array(POINTS_COUNT + 1)
    // 	.fill(0)
    // 	.map((_, index) => Math.random() * ((index % 2) ? 1 : -1))

    return new Array(POINTS_COUNT).fill(0).map((_, index) => {
      const x = index / POINTS_COUNT // x座標(0-1)
      const yBase = index % 2 === 0 ? 1 : -1 // y座標(-1と1を交互に設定)
      const y = Math.sin(x / WAVE_SCALE - this.time * SPEED) * yBase // sin波を掛ける
      return y
    })
  }

  const valuesToPathStr = (values) => {
    // if (!values.length) { console.log('no lenth'); return 'M0,0' }
    // const points = values.map((y, x) => ({
    // 	x: x / (POINTS_COUNT - 1) * WIDTH,
    // 	y: y * MAX_Y + HEIGHT / 2
    // }))
    // const p0 = points.shift()
    // const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
    // // 全ての座標に制御点を追加しながら曲線（三次ベジェ曲線）を描画するための文字列を生成
    // return `M${p0.x},${p0.y} S` +
    // 	points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')

    if (!values.length) { return 'M0,0' }
    const points = values.map((y, x) => ({ x: x / (POINTS_COUNT - 1) * WIDTH, y: y * MAX_Y + HEIGHT / 2 }))
    const firstPoint = points.shift()
    const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
    return `M${firstPoint.x},${firstPoint.y} S` +
      points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')
  }
  // let execount = 0;
  // let exe = setInterval(function() {
  // 	let values = generateValues();
  // 	let pathStr = valuesToPathStr(values);
  // 	document.querySelector('.svgtest').setAttribute("d", pathStr);
  // }, 2000);

  const startTime = Date.now()
  const update = () => {
  this.time = Date.now() - startTime
    requestAnimationFrame(update);
    let values = generateValues();
    let pathStr = valuesToPathStr(values);
    document.querySelector('.svg_menu_btn').setAttribute("d", pathStr);
  }
  update()
}
menu_btn();

function index_btn(){
  const POINTS_COUNT = 4;
  const MAX_Y = 200
  const WIDTH = 600
  const HEIGHT = 400
  const EASE = 0.4
  const SPEED = 0.002
  const WAVE_SCALE = (1 / Math.PI) * 50

  /**
   * 0〜1と-1〜0の乱数で交互に埋めた値配列を生成します
   */
  const generateValues = () => {
    // return new Array(POINTS_COUNT + 1)
    // 	.fill(0)
    // 	.map((_, index) => Math.random() * ((index % 2) ? 1 : -1))

    return new Array(POINTS_COUNT).fill(0).map((_, index) => {
      const x = index / POINTS_COUNT // x座標(0-1)
      const yBase = index % 2 === 0 ? 1 : -1 // y座標(-1と1を交互に設定)
      const y = Math.sin(x / WAVE_SCALE - this.time * SPEED) * yBase // sin波を掛ける
      return y
    })
  }

  const valuesToPathStr = (values) => {
    // if (!values.length) { console.log('no lenth'); return 'M0,0' }
    // const points = values.map((y, x) => ({
    // 	x: x / (POINTS_COUNT - 1) * WIDTH,
    // 	y: y * MAX_Y + HEIGHT / 2
    // }))
    // const p0 = points.shift()
    // const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
    // // 全ての座標に制御点を追加しながら曲線（三次ベジェ曲線）を描画するための文字列を生成
    // return `M${p0.x},${p0.y} S` +
    // 	points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')

    if (!values.length) { return 'M0,0' }
    const points = values.map((y, x) => ({ x: x / (POINTS_COUNT - 1) * WIDTH, y: y * MAX_Y + HEIGHT / 2 }))
    const firstPoint = points.shift()
    const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
    return `M${firstPoint.x},${firstPoint.y} S` +
      points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')
  }
  // let execount = 0;
  // let exe = setInterval(function() {
  // 	let values = generateValues();
  // 	let pathStr = valuesToPathStr(values);
  // 	document.querySelector('.svgtest').setAttribute("d", pathStr);
  // }, 2000);

  const startTime = Date.now()
  const update = () => {
  this.time = Date.now() - startTime
    requestAnimationFrame(update);
    let values = generateValues();
    let pathStr = valuesToPathStr(values);
    var btn = document.querySelectorAll('.svg_btn')
    for (let i = 0; i < btn.length; i++) {
      btn[i].setAttribute("d", pathStr);
    }
  }
  update()
}
index_btn();

// シンプルローディング
const spinner = document.querySelector('#loading');
window.addEventListener('load', function() {
  spinner.classList.add('loaded');
});
setTimeout( function () {
  spinner.classList.add('loaded');
}, 2000);


// スクロールアニメーション
var callback = function callback(entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('move');
      observer.unobserve(entry.target);
    }
  });
};
var items_list = document.querySelectorAll('.c-anim-up');
var items = Array.prototype.slice.call(items_list, 0);
var observer = new IntersectionObserver(callback, {
  // 出現タイミングの調整はrootMarginを調整
  rootMargin: '-10%',
  threshold: [0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1]
});
items.forEach(function (item) {
  return observer.observe(item);
});


// [画面に入る前に画像を遅延読み込み]
// タグの記述例 classに[lazy-load]をつけ[data-src]に画像のパスを指定する
// <img class="lazy-load" src="" data-src="images/example.jpg" alt="">
document.addEventListener("DOMContentLoaded", function () {
  let lazyImages = [].slice.call(document.querySelectorAll(".lazy-load"));
  var imgObserver = new IntersectionObserver(callback, {
    rootMargin: '100%',
  });
  let lazyImageObserver = new IntersectionObserver(function (entries, imgObserver) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        let lazyImage = entry.target;
        if (lazyImage.dataset.hasOwnProperty('src')) {
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.dataset.src = '';
          delete lazyImage.dataset.src;
        }
        if (lazyImage.dataset.hasOwnProperty('srcset')) {
          lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.dataset.srcset = '';
          delete lazyImage.dataset.srcset;
        }
        lazyImage.classList.remove("lazy-load");
        lazyImageObserver.unobserve(lazyImage);
      }
    });
  });
  lazyImages.forEach(function (lazyImage) {
    lazyImageObserver.observe(lazyImage);
  });
});


// Webfont読込
// window.WebFontConfig = {
//   google: {
//     families: ['Futura+PT:500','Ryo+Gothic+PlusN:500,700&subset=japanese']
//   },
//   active: function () {
//     sessionStorage.fonts = true;
//   }
// };

// (function () {
//   var wf = document.createElement('script');
//   wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
//   wf.type = 'text/javascript';
//   wf.async = 'true';
//   var s = document.getElementsByTagName('script')[0];
//   s.parentNode.insertBefore(wf, s);
// })();
