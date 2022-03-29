<?= $this->extend("plantillas/portal_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>

<div id="body">
  <div id="content">
    <div class="search">

    </div>
    <div class="content">
      <ul>
        <li> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'koi2.jpg');?>" width="140" height="250" alt=""></a>
          <h2>Area de comida</h2>
          <span><a href="#">Comida para perro</a></span> <span><a href="#">Comida de gato</a></span> <span><a href="#">Comida de aves</a></span> <span><a href="#">Comida de pescado</a></span> <span><a href="#">Comida para reptiles</a></span> <span><a href="#">Comida para mascotas pequeñas</a></span> <span><a href="#">Alimentos para mascotas grandes</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'cat3.jpg');?>" width="140" height="250" alt=""></a>
          <h2>Accesorios</h2>
          <span><a href="#">Oder Control Liners Scoops & Mats Collares Arneses Etiquetas ID Correas.</a></span> <span><a href="#">    </a></span> <span><a href="#">     </a></span> <span><a href="#">        </a></span> <span><a href="#">     </a></span> <span><a href="#">   </a></span> <span><a href="#">   </a></span> <span><a class="more" href="#">   </a></span> </li>
        <li> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'dog2.jpg');?>" width="140" height="240" alt=""></a>
          <h2>Entrenamiento y Comportamiento</h2>
          <span><a href="#">Comida para perros Comida para gatos Comida para pájaros Comida para peces Comida para reptiles Comida para mascotas pequeñas</a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a class="more" href="#"></a></span> </li>
        <li> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'bird3.jpg');?>" width="140" height="240" alt=""></a>
          <h2>Centro de salud</h2>
          <span><a href="#">  Multivitaminas Cuidado dental Botiquines de primeros auxilios Medicamentos Suplementos Cuidado de ojos y oídos Salud de caderas y articulaciones     </a></span> <span><a href="#">          </a></span> <span><a href="#">      </a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a class="more" href="#"></a></span> </li>
        <li> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'bird-in-cage.jpg');?>" width="140" height="250" alt=""></a>
          <h2>Esenciales de viaje</h2>
          <span><a href="#">   Barreras para automóviles Fundas para asientos de automóviles Rampas para asientos de automóviles Cinturones de seguridad y arneses Cochecitos Artículos de viaje y portacachorros     </a></span> <span><a href="#"></a></span> <span><a href="#">       </a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a class="more" href="#"></a></span> </li>
        <li> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'puppy3.jpg');?>" width="140" height="240" alt=""></a>
          <h2>Aseo</h2>
          <span><a href="#">     Cepillos y peines Desodorantes Colonias Limpiadores de oídos y ojos Cortaúñas Champú Acondicionadores Shed Controls   </a></span> <span><a href="#"></a></span> <span><a href="#">       </a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a href="#"></a></span> <span><a class="more" href="#"></a></span> </li>
      </ul>
    </div>
    <div id="sidebar"> <a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'discount.jpg');?>" width="300" height="790" alt=""></a> </div>
  </div>
  <div class="featured">
    <ul>
      <li><a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'organic-and-chemical-free.jpg');?>" width="300" height="90" alt=""></a></li>
      <li><a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'good-food.jpg');?>" width="300" height="90" alt=""></a></li>
      <li class="last"><a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'pet-grooming.jpg');?>" width="300" height="90" alt=""></a></li>
    </ul>
  </div>
</div>

<?= $this->endSection(); ?>

<!-- JS -->
<!-- <?= $this->section("js") ?>
<?= $this->endSection(); ?> -->
  