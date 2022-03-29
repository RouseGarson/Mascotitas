<?= $this->extend("plantillas/portal_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>

<div class="gallery_main layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="about_taital"><strong><span style="color: #ffffff;">Our</span> Dogs</strong></h1>
            <h1 class="about_taital"><strong><span style="color: #ffffff;">Our</span> Tu mejor compañia</strong></h1>
            

          </div>
        </div>
        <div class="gallery_images">
          <div class="row">
            <div class="col-sm-7">
            <div class="gallery_blog">
            
                           <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'gallery-img1.jpg');?>" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>      </strong></div>
                        </div>
              </div>
            </div>
            <div class="col-sm-5">
            <div class="gallery_blog">
                           <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'gallery-img2.jpg');?>"  style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>        </strong></div>
                        </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gallery_images">
          <div class="row">
            <div class="col-sm-5">
            <div class="gallery_blog">
                        <div class="overlay">
                            <div class="text"><strong>        </strong></div>
                        </div>
              </div>
            </div>
            <div class="col-sm-7">
            <div class="gallery_blog">
                           <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'gallery-img4.jpg');?>" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>       </strong></div>
                        </div>
              </div>
            <div class="gallery_blog">
                           <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'gallery-img5.jpg');?>" style="max-width: 100%; height: 297px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>    </strong></div>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gallery_section_2">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <p class="lorem_text"> </p>
          <div class="banner_bt">
          
        </div>
        <div class="box_3">
         
        </div>
          </div>
          <div class="col-sm-4">
            
          </div>
        </div>
      </div>
    </div>
  <!-- section gallery end -->


<?= $this->endSection(); ?>

<!-- JS -->
<!-- <?= $this->section("js") ?>
<?= $this->endSection(); ?> -->
  
