<?= $this->extend("plantillas/portal_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
<div id="body">



    <div id="main"> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'bulldog.jpg');?>" alt="" />
      <div class="details">
        <h3> Esta plantilla web nos muestra mas acerca de nuestras mascotas <span class="author"><i>Una sonrrisa</i> "Los amigos no se compran, se adoptan". </span> </h3>
        <p><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Mia.jpg');?>" alt="" />
        
        <p>    Las mascotas pueden disminuir el estrés y la sensación de soledad y mejorar la salud del corazón </p>
      </div>
      <div id="favorites">
        <h2>SEMANA <span>FAVORITA</span>de Fotos con tu mascota</h2>
        <p><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'cat.jpg');?>" alt="" /><span class="author"><i>AMA</i> A TUS GATOS</span></p>
        <p><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'owl.jpg');?>" alt="" /><span class="author"><i>ADOPTA UN</i> BUO</span></p>
        <p><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'turtle.jpg');?>" alt="" /><span class="author"><i>CUIDA</i>UNA TORTUGA</span></p>
        <a href="#">visita galeria</a> </div>
    </div>
    <div id="sidebar">
      <ul id="featured">
        <h4>Llevalos al medico, mantelos activos</h4>
        <li> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'dogs.jpg');?>" alt="" /> <em> Nulla y Nick Son dos mascotas de raza pillbull </em> <span class="author"><i>love</i>Pet</span> </li>
        <li> <em>Está demostrado que practicar ejercicio físico de manera regular ayuda a reducir el estrés y la ansiedad en los perros.</em> <span class="author"><i>love</i>pets</span> </li>
        <li> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'horse.jpg');?>" alt="" /> <em>Compañia y medio de trasporte y compañia</em> <span class="author"><i>by</i> Morbi Indiam</span> </li>
        <li class="last"> <em>Antiguamente era uno de los pocos medios de transporte y de carga siendo además una importante herramienta de combate.</em> <span class="author"><i>love</i> pets</span> </li>
      </ul>
    </div>
    <div id="articles">
      <div id="blogs">
        <h4>Categoria Razas</h4>
        <ul>
          <li>
            <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'OIP.jpg');?>" alt="" /> 
            <a href="#">Raza pastor aleman</a>
            <p> <a href="#">inteligentes</a> <span class="author"><i>De</i> Facil adiestramiento</span>Ideales para defensa personal </p>
          </li>
          <li>
            <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Hus.jpg');?>" alt="" /> <a href="#">husky siberiano</a> <span class="author"><i>TOP</i> Amigables</span>Ideales para compañia </p>
          </li>
        </ul>
      </div>
      <div id="news">
        <h4>Juguetes &amp; accesorios</h4>
        <ul>
          <li> <a href="#">Mordedera para perros</a> <span class="day">$200$</span>
          <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Mor.jpg');?>" alt="" />
          </li><br/>
          <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'R.png');?>" alt="" /><br/>
          <li> <a href="#">Pelota para perros</a> <span class="day">$60$</span>
            
            
            
          </li>
          </li>
        </ul>
      </div>
      <div id="updates">
        <h4>Actualizaciones diarias</h4>
        <p>La pagina de mascotas, busca que nososcas mas sobre tu mascota del tipo que sea, en especial enfocada a dogs, para que puedas saber mas sobre los cuidados, necesidades y como mantener feliz a tu mascotas.</p>
        <form action="#" method="post">
          <input type="text" value="Name" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
          <input type="text" value="Enter Email Address" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
          <input type="submit" value="" class="button" />
        </form>
        <ul class="navigation">
          <li class="selected"><a href="index.html">home</a></li>
          <li><a href="news.html">raza</a></li>
          <li><a href="about.html">about</a></li>
          <li><a href="gallery.html">gallery</a></li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="contacts.html">contact us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /#body -->
</div>
<?= $this->endSection(); ?>

<!-- JS -->
<!-- <?= $this->section("js") ?>
<?= $this->endSection(); ?> -->
  
