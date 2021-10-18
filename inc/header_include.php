<?php $ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false)) : ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php else : ?>
  <meta name="viewport" content="width=1200">
<?php endif; ?>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:image" content="[サイトのOGP画像]" /><!-- 絶対パス、1MG以下 -->
<meta property="og:image:alt" content="画像の説明文">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="summary" /><!-- summary_large_imageだと画像を大きく表示 -->
<meta content="#fff" name="theme-color"><!-- Androidでアドレスバーの色指定 -->
<meta name="format-detection" content="telephone=no"><!-- Edgeでのリンク定義回避 -->
<link rel="stylesheet" href="https://use.typekit.net/eyt3qqu.css">

<link href="/css/layout.css" media="all" rel="stylesheet">
<link href="/css/style.css" media="print" rel="stylesheet">
<link href="/css/style.css" media="only screen and (min-width: 900px)" rel="stylesheet">
<link href="/css/style_sp.css" media="only screen and (max-width: 899px)" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<script>
  (function(d) {
    var config = {
      kitId: 'cxd5aza',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>