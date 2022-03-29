<!DOCTYPE html>
<html>
<head>
<title>Lovely Pets Photography</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS.'style.css');?>" type="text/css" charset="utf-8" />
<!--[if lte IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8" /><![endif]-->
<!-- css de esta pagina -->
<?= $this->renderSection("css")?>
</head>

<body>
<div id="page">
  <div id="header">
    <div id="connect"> <a href="#" class="facebook"></a> <a href="#" class="twitter"></a> </div>
    <a href="index.html" id="logo"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'logo.jpg');?>" alt="" /></a>
    <ul id="navigation">
      <li class="selected"><a href="index.html">home</a></li>
      <li><a href="<?= route_to('mas');?>">mas</a></li>
      <li><a href="<?= route_to('galeria');?>">gallery</a></li>
      <li><a href="<?= route_to('raza');?>">raza</a></li>
      <li><a href="<?= route_to ('contacto');?>">contacto</a></li>
      <li><a href="<?= route_to ('ayuda');?>">ayuda</a></li>
    </ul>
  </div>
  <!-- /#header -->
  <!-- aqui va el contenido principal -->
  <?= $this->renderSection("contenido")?>
  <!-- aqui termina el contenido principal -->
  <!-- /#page -->
<div id="footer">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">FreeWebsiteTemplates.com</a></div>
<!-- /#footer -->
</body>
</html>