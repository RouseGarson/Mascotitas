<?= $this->extend("plantillas/portal_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
<div id="body">
    <hr class="about"/>
    <h1 class="about">Necesitas ayuda?</h1>
    <div id="contents">
      <h3>Tu mascota no parece muy contenta?</h3>
      <p> Lo primero que debes sabes es que no se trata solo de tener una mascota de alimentarlos, de darles reglas y ordenarles que hacer todo el momento, se trata de darle cariño, atencion de juegar con ellos de hablar con ellos, de llevarlos al medico, de buscar metodos de adiestramientro buenos y no solo acudir a los regaños </p>
      <h3>Si te parece nuestra empresa te ofrece los mejores servicios</h3>
      <p>  </p>
      <h3>Consejos para el cuidado de tu mascota, recomendaciones de alimentacion, de adiestramiento, los mejores accesorios juguetes, entre otros servicios</h3>
      <p> No lo pienses mas somos tu mejor opcion</p>
      <h3>Necesitas conocer mas acerca de nuestros servicios y trayectoria en el area de mascotas</h3>
      <p> Somos una empresa con amplia trayectoria y conocimiento en el tema,<br/>
        Estamos hubicados en tlaxcala numero 23 sur, esquina carranza y villa nueva en horarios de 3 9pm<br/>
        Trae a tu mascota, quiza sea una nueva y mejor experiencia.<br/>
        numero de telefono: 2462611904. </p>



        <div class="featured">
    <ul>
      <li><a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'organic-and-chemical-free.jpg');?>" width="300" height="90" alt=""></a></li>
      <li><a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'good-food.jpg');?>" width="300" height="90" alt=""></a></li>
      <li class="last"><a href="#"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'pet-grooming.jpg');?>" width="300" height="90" alt=""></a></li>
    </ul>
    </div>
  </div>
  <!-- /#body -->
</div>
<!-- /#page -->
<?= $this->endSection(); ?>

<!-- JS -->
<!-- <?= $this->section("js") ?>
<?= $this->endSection(); ?> -->
  
