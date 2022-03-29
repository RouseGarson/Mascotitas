<?= $this->extend("plantillas/portal_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
 <!-- /#header -->
 <div id="body">
    <hr class="contact"/>
    <h1 class="contact">Informacion de contacto</h1>

    <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'P.jpg');?>" style="max-width: 100%; height: 400px; width: 80%;">
    <div id="contents">
      <p>Usted puede contactarnos atravez de los numeros de telefono a continucion y los medios que se dejean aqui abajo.</p>
      <p> <b>Esta plantilla de sitio web ha sido diseñada por Rous Garson Sandoval<br/>
        La magdalena tlaltelulco tlax.</b><br/>
        Poxtla segunda seccion, pregunte por nuestros servicios de adiestramiento<br/>
        Tel: + 7958 917 9747 2481 000<br/>
        Fax: + 7958 917 9747 2481 000<br/>
        Email: emailus@thisemail.com </p>
      <p> <b>Maria del rosario sandoval melendez, encargada, pregunte por nuestro servicio medico<br/>
        Somos la mejor opcion para el cuidado de su mascota</b><br/>
        Pregunte por el doctor Juan pablo Diaz Torres<br/>
        Tel: + 7958 917 9747 2481 000<br/>
        Fax: + 7958 917 9747 2481 000<br/>
        Email: emailus@thisemail.com </p>
      <p> <b>Tambien puede preguntar mas hacerca sobre la raza de sus mascota y las especificacion necesarias de cuidado<br/>
        nosotros podremos ayudarle de la mejor manera.</b><br/>
        para cualquier servicio puede marcar, agendar una cita y preguntar lo mas oportuno para su mascota<br/>
        Tel: + 7958 917 9747 2481 000<br/>
        Fax: + 7958 917 9747 2481 000<br/>
        Email: emailus@thisemail.com </p>
    </div>
  </div>
  <!-- /#body -->
</div>
<!-- /#page -->
<?= $this->endSection(); ?>

<!-- JS -->
<!-- <?= $this->section("js") ?>
<?= $this->endSection(); ?> -->