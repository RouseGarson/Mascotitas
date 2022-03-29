<?= $this->extend("plantillas/portal_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>

<div id="body">
  <div id="content">
    <div class="content">
      <h2>Razas de mascotas</h2>
      <div>
      </div>
      <ul class="section">
        <li>
          <h2>Dog Pastor Aleman</h2> 
          <div id="articles">
      <div id="blogs">

        <ul>
          <li>
            <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'OIP.jpg');?>" alt="" />
          </li>
        </ul>
      </div> <br><br>
<p>Esperanza de vida: De 9 a 13 años
Tipo: canino
Orejas: Altas y un poco puntiagudas
Temperamento: Inteligente, Obstinado, Alerta, Obediente, Leal, Confiado, Curioso, Protector, Vigilante, Valiente
Peso: Macho: 30–40 kg, Hembra: 22–32 kg
Altura: Macho: 60–65 cm, Hembra: 55–60 cm
Colores: Negro, Negro y canela, Sable, Negro y fuego, Negro con plata, Gris </p>
        </li>




        <h2>Cat Maine Coon</h2> 
          <div id="articles">
      <div id="blogs">

        <ul>
          <li>
            <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'y.jpg');?>" alt="" />
          </li>
        </ul>
      </div> <br><br>
<p>Peso: machos: 6,8-11 kg; hembras: 4,5-6,8 kg
Longitud: 48 – 100 cm (Adulto, De la nariz hasta la cola)
Tipo: raza de gato
Orejas: largas y puntiagudas, y con pinceles
Cabeza: ligeramente cuadrada
Masa Corporal: 5.9 – 8.2 kg (Adulto), 3.6 – 5.4 kg (Adulto)
Origen: Maine, Estados Unidos </p>
        </li>


        <br><br><br><br><br><br><br><br><br>


        <h2>Hourse  frisón</h2> 
          <div id="articles">
      <div id="blogs">

        <ul>
          <li>
            <p> <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'c.jpg');?>" alt="" />
          </li>
        </ul>
      </div> <br><br>
<p>Origen: Frisia
Peso: 600 a 900 kg
Tipo: Caballo
Cabeza: Noble y expresiva
Carácter: calmado
Cola: larga
Nomenclatura biológica: equus ferus caballus </p>
        </li>






        
      </ul>
      <div class="paging"> <a class="active" href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a class="next" href="#"></a> </div>
    </div>
    <div id="sidebar">
      <div id="section">
        <div>
          <div>
            <h2></h2>
            <ul>
              






              <li><a href="#"><span></span> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
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
  