<?php include('include/head.php');?>

<body>
<main role="main">
<!-- COMIENZO DEL HEADER -->
      <div class="head-line">
        <div class="container">
          <div class="contacto">
            <li><i class="fas fa-phone-square"></i> <a href="tel:9395799929">939-579-9929</a></li>
            <li> | </li>
            <li><i class="fas fa-envelope-square"></i> <a href="mailto:info@procreativo">info@procreativo.com</a></li>
          </div>
        </div>
      </div>
    	<div class="container">
    		<div class="text-center">
    			<img class="logohome" src="img/logo.png">
        </div>
      </div>
<!-- FIN DEL HEADER -->

      <div class="jumbotron jumbo text-center">
        <div class="container">
          <h1 class="display-3">Anibal Bonilla</h1>
          <p class="bodytext">Freelance Graphic Designer &amp; Full Stack Developer</p>
          <p><a class="btn btn-primary btn-sm" href="docs\resume.pdf" role="button" target="_blank ">Resume</a></p>
        </div>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-3 text-center ">
              <div class="box">
                <img src="img/design.png">
                <h3>Diseño Gráfico</h3>
              </div>
            </div>
            <div class="col-md-3 text-center">
              <div class="box">
                <img src="img/code.png">
                <h3>Web App</h3>
              </div>
            </div>
            <div class="col-md-3 text-center ">
              <div class="box">
                <img src="img/app.png">
                <h3>Diseño de App</h3>
              </div>
            </div>
            <div class="col-md-3 text-center">
              <div class="box">
                <img src="img/social.png">
                <h3>Social Media</h3>
              </div>
            </div>
        </div>
        <div class="linea"></div>
        <div class="container link">
          <div class="row">
              <div class="col-md-6 col-lg-3 ">
                <a href="http://www.behance.net/procreativo" target="_blank">
                <div class="cuadro blue text-center project">
                  <img class="social-size" src="img/be.svg">
                  <p>Behance</p>
                  <span>Portfolio de diseños y conceptos de arte.</span>
                </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-3">
              <a href="https://codepen.io/anibalbonilla" target="_blank">
                <div class="cuadro black text-center project">
                  <img class="social-size" src="img/code.svg">
                  <p>CodePen</p>
                  <span>Diseños Front-end y experimentos.</span>
                </div>
              </a>
              </div>
              <div class="col-md-6 col-lg-3">
              <a href="https://github.com/procreativo" target="_blank">
                <div class="cuadro gray text-center project">
                  <img class="social-size" src="img/git.svg">
                  <p>Git Repos</p>
                  <span>Repositorios y colaboraciones en código.</span>
                </div>
              </a>
              </div>
              <div class="col-md-6 col-lg-3 ">
                <a href="https://www.instagram.com/procreativo/" target="_blank">
                  <div class="cuadro rose text-center project">
                    <img class="social-size" src="img/insta.svg">
                    <p>Instagram Blog</p>
                    <span>Sigue de cerca mis procesos de trabajo.</span>
                  </div>
                </a>
              </div>
            </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Suscribete a mi listado</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Recibe ofertas de Procreativo y mantente al día de lo increíble que es mi trabajo.</p>
                  <form>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Correo Electronico">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>
<!--
<div class="listado">
  <div class="container">
    <div class="caja-formulario">
        <p>Suscribete a mi listado</p>
        <div class="linea"></div>
        <span>Recibe ofertas de Procreativo y mantente al día
de lo increíble que es mi trabajo.</span>
                  <form>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Correo Electronico">
                      </div>
                    </div>
                  </form>
          Button trigger modal 
        <div class="form text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Suscribete
        </button>
        
        </div>
        -->
    </div>
  </div>
</div>
<?php include('include/footer.php');?>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>