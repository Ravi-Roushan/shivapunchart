 <?php include "common/header.php" ?>
<!-- Start Breadcrumb Area -->
<div class="breadcrumb-area" style="background-image: url('assets/img/product.png');">
<div class="container">
<div class="row">
<div class="col-12">
<div class="breadcrumb-content text-center">
<h2>Our Product</h2>
</div>
</div>
</div>
</div>
</div>
<!-- End Breadcrumb Area -->
<!-- Start Services Area -->
<section class="services-area section-padding-2">
<div class="container">
<!-- Section Headding -->
<div class="row">
<div class="col-lg-12 mb-50 text-center">
<div class="section-headding">
<h5>Our Product</h5>
<h2>
                                Our IT Solutions &amp; Services for <br/>
                                Your Business
                            </h2>
</div>
</div>
</div>
<div class="row">
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal1">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/laser-die/die1.png"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/laser-die/die2.jpeg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/laser-die/die3.jpeg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal1" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal1" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Laser Die</h3>
<p>
                    Flat Bed Or Laser Die are high-precision industrial tools used for paper, cardboard, PVC Sheets, Rigid Boxes and foam. using precision laser technology, these dies often feature steel rule blades set into plywood bases for applications in packaging

                </p>
</div>
</div>
</div>
</div>
<!-- Image Popup Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-body text-center position-relative">
<button type="button" id="productModalPrev" class="product-lightbox-nav product-lightbox-prev" aria-label="Previous image">‹</button>
<img class="img-fluid" id="popupImage" src=""/>
<button type="button" id="productModalNext" class="product-lightbox-nav product-lightbox-next" aria-label="Next image">›</button>
<div id="productModalCounter" class="product-lightbox-counter"></div>
</div>
</div>
</div>
</div>
<script>
(function(){
  var currentItems=[], currentIndex=0;
  window.showImage=function(src,alt){
    var img=null;
    document.querySelectorAll('.our-products-grid img.product-img').forEach(function(x){
      if(x.src===src || x.getAttribute('src')===src || x.src.endsWith(src.split('/').pop())) img=x;
    });
    var carousel=img ? img.closest('.carousel') : null;
    var imgs=carousel ? carousel.querySelectorAll('.carousel-item .product-img') : [];
    currentItems=Array.prototype.map.call(imgs,function(x){return {src:x.src,alt:x.alt||''};});
    if(!currentItems.length) currentItems=[{src:src,alt:alt||''}];
    currentIndex=Math.max(0,currentItems.findIndex(function(x){return x.src===src;}));
    renderProductModal();
    var modal=document.getElementById('imageModal');
    if(modal && window.bootstrap && bootstrap.Modal) bootstrap.Modal.getOrCreateInstance(modal).show();
  };
  function renderProductModal(){
    var item=currentItems[currentIndex]||{};
    var p=document.getElementById('popupImage');
    if(p){p.src=item.src||'';p.alt=item.alt||'Product image';}
    var c=document.getElementById('productModalCounter');
    if(c)c.textContent=(currentIndex+1)+' / '+currentItems.length;
  }
  document.addEventListener('click',function(e){
    var b=e.target.closest && e.target.closest('#productModalPrev,#productModalNext');
    if(!b || currentItems.length<2)return;
    currentIndex=(currentIndex+(b.id==='productModalNext'?1:-1)+currentItems.length)%currentItems.length;
    renderProductModal();
  });
})();
</script>
<!-- Single -->
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal2">
<div class="carousel-inner"><div class="carousel-item active"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/01-pre-rubber-dies.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/02-pre-rubber-dies-1.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/03-pre-rubber-dies-2.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/04-pre-rubber-dies-3.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/05-pre-rubber-dies-4.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/07-pre-rubber-dies-6.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/08-pre-rubber-dies-7.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/09-pre-rubber-dies-8.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/10-pre-rubber-dies-9.jpg"/></div><div class="carousel-item"><img alt="Pre-rubberized Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/pre-rubberized-die/11-pre-rubber-dies-10.jpg"/></div></div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal2" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal2" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Pre-rubberized Die</h3>
<p>
                    Pre-rubberized cutting dies are specialized, high-speed steel rule dies with pre-applied rubber ejection material, designed to increase die life, reduce setup time by up to 90%, and ensure clean, dust-free, accurate cutting (no "angel hair"). They are ideal for high-speed, high-volume production of packaging, folding cartons, and gaskets.


                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal3">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pre-embossed-debossed-Die/emd1.jpeg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pre-embossed-debossed-Die/em2.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pre-embossed-debossed-Die/emd2.jpeg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pre-embossed-debossed-Die/emd3.jpeg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal3" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal3" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Pre-embossed &amp; debossed Die</h3>
<p>
                    Pre-embossed &amp; debossed Dies are specialized, paired male/female tools—often supplied as pre-registered cassettes used to create raised (embossed) or sunken (debossed) or detailed designs on paper, cardboard, PVC Sheets They are crucial for adding tactile quality, depth, and elegance to labels and Branding packaging.


                </p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal4">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Sticker-Label-Dies/label1.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Sticker-Label-Dies/label2.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Sticker-Label-Dies/sitcker3.png"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Sticker-Label-Dies/sticker1.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Sticker-Label-Dies/sticker2.jpg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal4" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal4" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Sticker &amp; Label Dies</h3>
<p>
                    Sticker Or label die are specialized high-accuracy cutting tools used to produces for punching labels and stickers on adhesive papers. For all types of cutting tools ranging from height 8mm, 12mm, and 23.80 mm.


                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal5">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Corrugation-Die/cor2.png"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Corrugation-Die/cor3.png"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal5" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal5" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Corrugation Die</h3>
<p>
                    Corrugation Die are high-precision industrial tools used for corrugated boards (3, 4, 5-ply,and flutes) for packaging. using precision laser technology


                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal6">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Corrugation-Die/cor2.png"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Corrugation-Die/cor3.png"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal6" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal6" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Sealing Cutting Die</h3>
<p>
                    Sealing cutting dies are specialized, precision tools used to cut, form, or seal materials—such as gaskets, foam, rubber, or plastic—into exact shapes for automotive, electronics, and industrial applications. 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal7">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Critical-Die/shape1.jpeg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Critical-Die/shape2.png"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Critical-Die/shape3.jpg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal7" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal7" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Critical Die</h3>
<p>
                    Critical Or Shape cut laser dies are high-precision, computer-controlled tools used to cut complex shapes in materials Like paper, cardboard, PVC Sheets, and foam. often for packaging industry These dies offer superior flexibility and accuracy for intricate designs
 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal8">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Critical-Die/shape1.jpeg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Critical-Die/shape2.png"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Critical-Die/shape3.jpg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal8" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal8" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Metal Base Die</h3>
<p>
                    Metal Basedies are specialized, precision tools used To Avoid Die Expansion And They are essential for Embossing Level, long runs Jobs To  providing superior quality, and high-speed
 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal9">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pertinax/P1.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pertinax/P2.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pertinax/P3.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Pertinax/P4.jpg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal9" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal9" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Pertinax</h3>
<p>
                    Pertinax (often spelled Pertinax or Pertinex in industrial contexts) primarily refers to a durable material used in die-cutting for packaging, Used as a counter sheet/plate in die-cutting machines for folding carton production.

 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal10">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S1.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S2.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S3.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S4.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S5.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S6.jpg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal10" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal10" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Steel Counter Plate</h3>
<p>
                    Steel counter plates are high-precision, durable, and thin (often 1 mm) metal tools used in die-cutting for packaging. They are essential for long runs, providing superior creasing quality, minimal setup times, and high-speed, error-free production.

 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal11">
<div class="carousel-inner"><div class="carousel-item active"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/01-stipping-die-male-female.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/02-stripping-die-male-female.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/03-stipping-die-male-female-1.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/04-stripping-die-male-female-1.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/05-stipping-die-male-female-2.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/06-stripping-die-male-female-2.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/07-stipping-die-male-female-3.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/08-stripping-die-male-female-3.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/10-stripping-die-male-female-4.jpg"/></div><div class="carousel-item"><img alt="Stripping Tool" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/stripping-tool/11-stipping-die-male-female-5.jpg"/></div></div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal11" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal11" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Stripping Tool</h3>
<p>
                    Male &amp; Female Stripping Die are specialized tooling used in automatic packaging machinery to automatically remove waste material (scrap) from cartons, increasing production speeds and reducing manual labor. Consisting of matched upper (male) and lower (female)

 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal12">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S1.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S2.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S3.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S4.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S5.jpg"/>
</div>
<div class="carousel-item">
<img class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/Steel-Counter-Plate/S6.jpg"/>
</div>
</div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal12" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal12" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Steel Counter Plate</h3>
<p>
                    Steel counter plates are high-precision, durable, and thin (often 1 mm) metal tools used in die-cutting for packaging. They are essential for long runs, providing superior creasing quality, minimal setup times, and high-speed, error-free production.

 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal13">
<div class="carousel-inner"><div class="carousel-item active"><img alt="Embossing &amp; Debossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/embossing-debossing-die/01-emboss-dies.jpg"/></div><div class="carousel-item"><img alt="Embossing &amp; Debossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/embossing-debossing-die/02-emboss-dies-1.jpg"/></div></div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal13" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal13" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Embossing &amp; Debossing Die</h3>
<p>
                    Embossing &amp; Debossing blocks are high-strength tools created via CNC engraving And  chemical etching used to produce raised (embossing) or recessed (debossing) designs on paper and cardboard. They typically consist of a metal female die and a nylon or metal male die, often used for security, luxury packaging, and detailed branding.

 
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<!-- Single -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1">
<div class="info-box-1-inner">
<!-- Image Carousel -->
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal14">
<div class="carousel-inner"><div class="carousel-item active"><img alt="Braille Embossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/braille-embossing-die/01-braille-emboss.jpg"/></div><div class="carousel-item"><img alt="Braille Embossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/braille-embossing-die/02-braille-emboss-1.jpg"/></div><div class="carousel-item"><img alt="Braille Embossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/braille-embossing-die/03-braille-emboss-2.jpg"/></div><div class="carousel-item"><img alt="Braille Embossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/braille-embossing-die/04-braille-emboss-3.jpg"/></div><div class="carousel-item"><img alt="Braille Embossing Die" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/braille-embossing-die/05-braille-emboss-4.jpg"/></div></div>
<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarouselFinal14" type="button">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarouselFinal14" type="button">
<span class="carousel-control-next-icon"></span>
</button>
</div>
<!-- Title & Description -->
<div class="content mt-3">
<h3>Braille Embossing Die</h3>
<p>
                    Braille embossing dies are specialized, high-precision tools—typically brass, Alloy, or steel—used (Accu Braille) to create raised, tactile Braille dots on packaging, pharmaceuticals, and documents. These tools include matched male and female sets to ensure crisp, durable, and readable dots
                </p>
</div>
</div>
</div>
</div>
<!-- Single -->
<!-- Newly added products: existing product cards above remain unchanged -->
<!-- New Product: 3D Emboss -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal15"><div class="carousel-inner"><div class="carousel-item active"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/01-3d-emboss.jpeg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/02-3d-emboss.jpg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/03-3d-emboss.png"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/04-3d-emboss-1.jpg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/05-3d-emboss-2.jpg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/06-3d-emboss-3.jpg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/07-3d-emboss-4.jpg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/08-3d-emboss-5.jpg"/></div><div class="carousel-item"><img alt="3D Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/3d-emboss/09-3d-emboss-6.jpg"/></div></div></div>
<div class="content mt-3"><h3>3D Emboss</h3><p>3D Emboss dies are precision tooling solutions used to create multi-level, sculpted and highly detailed raised effects on paper, board, packaging and premium print products. They provide controlled depth, sharp definition and repeatable production results.</p></div>
</div></div>
</div>
<!-- New Product: Punch + Emboss Online -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal16"><div class="carousel-inner"><div class="carousel-item active"><img alt="Punch + Emboss Online" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/punch-emboss-online/01-punch-emboss-online.jpg"/></div><div class="carousel-item"><img alt="Punch + Emboss Online" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/punch-emboss-online/02-punch-emboss-online-1.jpg"/></div><div class="carousel-item"><img alt="Punch + Emboss Online" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/punch-emboss-online/03-punch-emboss-online-2.jpg"/></div><div class="carousel-item"><img alt="Punch + Emboss Online" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/punch-emboss-online/04-punch-emboss-online-3.jpg"/></div><div class="carousel-item"><img alt="Punch + Emboss Online" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/punch-emboss-online/05-punch-emboss-online-4.jpg"/></div><div class="carousel-item"><img alt="Punch + Emboss Online" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/punch-emboss-online/06-punch-emboss-online-5.jpg"/></div></div></div>
<div class="content mt-3"><h3>Punch + Emboss Online</h3><p>Punch + Emboss Online tooling combines punching and embossing operations in a coordinated setup, helping achieve accurate registration, consistent forming and efficient production for packaging, labels and printed materials.</p></div>
</div></div>
</div>
<!-- New Product: Sandwich Dies -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal17"><div class="carousel-inner">
<div class="carousel-item active"><img alt="Sandwich Dies" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/sandwich-dies.jpg"/></div>
</div></div>
<div class="content mt-3"><h3>Sandwich Dies</h3><p>Sandwich Dies are precision-built tooling assemblies designed to work with layered die-cutting and embossing components. They provide accurate alignment, stable pressure distribution and repeatable results for demanding packaging applications.</p></div>
</div></div>
</div>
<!-- New Product: Blanking Die Male Female -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal18"><div class="carousel-inner">
<div class="carousel-item active"><img alt="Blanking Die Male Female" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/blanking-die-male-female.jpg"/></div>
</div></div>
<div class="content mt-3"><h3>Blanking Die Male Female</h3><p>Male and Female Blanking Dies are matched precision tools used to separate and blank finished pieces cleanly from sheets after die-cutting. They support accurate registration, clean edges and efficient production for cartons, labels and packaging.</p></div>
</div></div>
</div>
<!-- New Product: Creasing Counter Plate -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal19"><div class="carousel-inner">
<div class="carousel-item active"><img alt="Creasing Counter Plate" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/creasing-counter-plate.jpg"/></div>
</div></div>
<div class="content mt-3"><h3>Creasing Counter Plate</h3><p>Creasing Counter Plates are precision-made counter systems that work with creasing rules to produce clean, consistent fold lines. They help maintain accurate crease depth and improve folding quality in cartons, folders and premium packaging.</p></div>
</div></div>
</div>
<!-- New Product: Elecro Etg Foil Block -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal20"><div class="carousel-inner"><div class="carousel-item active"><img alt="Electro Etched Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/electro-etched-foil-block/01-elecro-etg-foil-block.jpg"/></div><div class="carousel-item"><img alt="Electro Etched Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/electro-etched-foil-block/02-elecro-etg-foil-block-3.jpg"/></div><div class="carousel-item"><img alt="Electro Etched Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/electro-etched-foil-block/03-elecro-etg-foil-block-4.jpg"/></div><div class="carousel-item"><img alt="Electro Etched Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/electro-etched-foil-block/04-elecro-etg-foil-block-5.jpg"/></div></div></div>
<div class="content mt-3"><h3>Electro Etched Foil Block</h3><p>Electro-etched foil blocks are precision tooling blocks produced for hot foil stamping and decorative finishing. They deliver crisp lettering, logos, fine patterns and detailed graphic effects with consistent impression quality.</p></div>
</div></div>
</div>
<!-- New Product: Mag Etg Foil Block -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal21"><div class="carousel-inner">
<div class="carousel-item active"><img alt="Mag Etg Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/mag-etg-foil-block.jpg"/></div>
</div></div>
<div class="content mt-3"><h3>Mag Etg Foil Block</h3><p>Mag Etched Foil Blocks are precision tooling solutions for hot foil stamping and decorative effects. They are designed for sharp detail, clean foil transfer and reliable repeat production across labels, cartons and premium packaging.</p></div>
</div></div>
</div>
<!-- New Product: Texter Foil Block -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal22"><div class="carousel-inner"><div class="carousel-item active"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/01-texter-foil-block.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/02-texter-foil-block-1.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/03-texter-foil-block-2.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/04-texter-foil-block-3.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/05-texter-foil-block-4.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/06-texter-foil-block-5.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/07-texter-foil-block-6.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/09-texter-foil-block-8.jpg"/></div><div class="carousel-item"><img alt="Texter Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/texter-foil-block/10-texter-foil-block-9.jpg"/></div></div></div>
<div class="content mt-3"><h3>Texter Foil Block</h3><p>Texter Foil Blocks are precision-made blocks used to transfer text, logos and fine decorative elements through hot foil stamping. They provide clear detail, consistent pressure and reliable foil reproduction.</p></div>
</div></div>
</div>
<!-- New Product: CNC Foil Block -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal23"><div class="carousel-inner"><div class="carousel-item active"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/01-cnc-foil-block.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/02-cnc-foil-block.png"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/03-cnc-foil-block-1.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/04-cnc-foil-block-2.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/05-cnc-foil-block-3.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/06-cnc-foil-block-4.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/07-cnc-foil-block-5.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/08-cnc-foil-block-6.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/09-cnc-foil-block-7.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/10-cnc-foil-block-8.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/11-cnc-foil-block-9.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/12-cnc-foil-block-10.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/13-cnc-foil-block-11.jpg"/></div><div class="carousel-item"><img alt="CNC Foil Block" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/cnc-foil-block/15-cnc-foil-block-13.jpg"/></div></div></div>
<div class="content mt-3"><h3>CNC Foil Block</h3><p>CNC Foil Blocks are precision-machined tooling blocks used for high-quality hot foil stamping. CNC engraving enables accurate reproduction of logos, typography and detailed designs with consistent depth and finish.</p></div>
</div></div>
</div>
<!-- New Product: Foil + Emboss One Shot -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal24"><div class="carousel-inner"><div class="carousel-item active"><img alt="Foil + Emboss One Shot" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/foil-emboss-one-shot/01-foil-emboss-one-shot.jpg"/></div><div class="carousel-item"><img alt="Foil + Emboss One Shot" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/foil-emboss-one-shot/02-foil-emboss-one-shot-1.jpg"/></div></div></div>
<div class="content mt-3"><h3>Foil + Emboss One Shot</h3><p>Foil + Emboss One Shot tooling combines foil stamping and embossing in a single operation, helping achieve precise registration, premium tactile effects and efficient production for high-end packaging and labels.</p></div>
</div></div>
</div>
<!-- New Product: Micro Effect Dies -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal25"><div class="carousel-inner"><div class="carousel-item active"><img alt="Micro Effect Dies" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/micro-effect-dies/01-micro-effect-dies.jpg"/></div><div class="carousel-item"><img alt="Micro Effect Dies" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/micro-effect-dies/02-micro-effect-dies-1.jpg"/></div></div></div>
<div class="content mt-3"><h3>Micro Effect Dies</h3><p>Micro Effect Dies are high-precision tools developed to create extremely fine textures, micro patterns and detailed surface effects. They are suitable for premium packaging, security features and specialty finishing applications.</p></div>
</div></div>
</div>
<!-- New Product: Step Emboss -->
<div class="col-lg-4 col-md-6 mb-30">
<div class="info-box-1"><div class="info-box-1-inner">
<div class="carousel slide" data-bs-ride="carousel" id="productCarouselFinal26"><div class="carousel-inner"><div class="carousel-item active"><img alt="Step Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/step-emboss/01-step-emboss.jpg"/></div><div class="carousel-item"><img alt="Step Emboss" class="d-block w-100 product-img" data-bs-target="#imageModal" data-bs-toggle="modal" onclick="showImage(this.src)" src="assets/img/our-products/step-emboss/02-step-emboss-1.jpg"/></div></div></div>
<div class="content mt-3"><h3>Step Emboss</h3><p>Step Emboss dies create controlled multi-level embossing effects through graduated tooling heights. They are used to produce dimensional graphics, layered textures and premium tactile finishes with precise depth control.</p></div>
</div></div>
</div>
</div>
</div>
</section>
<!-- End Services Area -->
<!-- Start Subscriber Area -->
<div class="subscribe-area pt-70 pb-70" style="background-image: url('assets/img/sub.jpg');">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="subscribe-content">
<h2>Why Businesses Trust Shiva Punch Art</h2>
<p>
                        We deliver precision-engineered punch tools and die solutions for the printing and packaging industry. 
                        Our commitment to quality, advanced Shiva Punch Art, and timely delivery makes us a trusted manufacturing partner.
                    </p>
<div class="row mt-4">
<div class="col-md-6">
<ul class="list-unstyled text-white">
<li>✔ High-Precision Manufacturing</li>
<li>✔ Advanced CNC &amp; Laser Shiva Punch Art</li>
<li>✔ Customized Die Solutions</li>
</ul>
</div>
<div class="col-md-6">
<ul class="list-unstyled text-white">
<li>✔ High-Precision Manufacturing</li>
<li>✔ Advanced CNC &amp; Laser Shiva Punch Art</li>
<li>✔ Customized Die Solutions</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
<a class="button-1" href="about.html">Read More</a>
</div>
</div>
</div>
</div>
<!-- End Subscriber Area -->
<?php include "common/footer.php" ?>
