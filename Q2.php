<script src='//ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js' type='text/javascript'></script>
<div class="gallery-images">
  <ul class="small-image"><li><a href="javascript:;" class="product-more-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/a32785f299d1d6627cb18126779d91a2/p/0/p00001244.jpg"></a></li><li><a href="javascript:;" class="product-more-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/a32785f299d1d6627cb18126779d91a2/p/0/p00001244_1.png"></a></li><li><a href="javascript:;" class="product-more-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/a32785f299d1d6627cb18126779d91a2/p/0/p00001244_2.png"></a></li><li><a href="javascript:;" class="product-more-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/a32785f299d1d6627cb18126779d91a2/p/0/p00001244_3.png"></a></li></ul>
</div>
<div class="main-image-container" id="main-image-placeholder">
  <ul class="main-image"><li><a href="javascript:;" class="product-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/p/0/p00001244.jpg"></a></li><li><a href="javascript:;" class="product-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/p/0/p00001244_1.png"></a></li><li><a href="javascript:;" class="product-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/p/0/p00001244_2.png"></a></li><li><a href="javascript:;" class="product-image"><img src="http://everlast.nxcli.test/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/p/0/p00001244_3.png"></a></li></ul>
</div>
<script>
jQuery(document).ready(function(){
  jQuery(".gallery-images ul.small-image").find('li').each(function(index){
      jQuery(this).find('a').click(function(){
        $('html, body').animate({
                  scrollTop: jQuery(".main-image-container ul.main-image").find('li').eq(index).offset().top
              }, 200);
      });
  });
});
</script>
