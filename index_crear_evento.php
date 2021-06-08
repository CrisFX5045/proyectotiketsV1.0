<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carmsi Events</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
<!--Jquery-->
</head>

<body>
    

<main>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
               

        <div class="container-fluid">

            <div class="navbar-toggler" >

                <div class="mobile-bar">

                     
                    <nav role="navigation">
                        <div id="menuToggle">
                       
                          <input type="checkbox" />
                       
                          <span></span>
                          <span></span>
                          <span></span>
                          
                          <ul id="menu">
                            <a aria-current="page" href="#"><li>Eventos</li></a>
                            <a href="#"><li>About</li></a>
                            <a href="#"><li>Info</li></a>
                            <a href="#"><li>Contact</li></a>
                            <a href="#" target="_blank"><li>Show me more</li></a>
                          </ul>
                        </div>
                      </nav>
                    
                    <div class="logo-mobile">
                        <a class="navbar-brand" href="index.html"> <img src="img/logos/LogoPrincipal.png" alt="Banner"> </a>
                         </div>
                         <div class="buttons-bar-mobile">
                            <input class="btn btn-primary" type="button" value="Crear Evento">

                             <a href="index_registrarse.html"><input class="btn btn-primary" type="button" value="Registrarse"></a>

                         </div>

                         <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                       
                </div>
              



                
            </div>
            
              <div class="collapse navbar-collapse">

           
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li>
                <a class="navbar-brand" href="index.html"> <img src="img/logos/LogoPrincipal.png" alt="Banner"> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Section</a>
              </li>
            </ul>

            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <input class="btn btn-primary" type="button" value="Crear Evento">

            <a href="index_registrarse.html"><input class="btn btn-primary" type="button" value="Registrarse"></a>
          </div>

         
          
        </div>

       
        
      </nav>
</main>


<main class="sesion">

  <section class="cuadro-evento">

        <div class="texto-inicio"> 
            <h5> CREACION DE EVENTOS <br><br> </h5>
            <P class="wh-border">
                Lorem ipsum dolor sit amet consectetur adipiscing. 
            </P>
        
            <div class="container">
              <div class="row">
      
                <div class="col-12 col-sm-4">
                  <form class="bd-example formulario-crear">
                    <fieldset>
                    <img class="iconos-numeros" src="img/Numero1.png" alt="facebook">
      
                      <legend>CREA TU EVENTO</legend>
      
                      <p>
                        <label for="input">Name event: <br></br></label>
      
                        <input type="text" id="input" placeholder="Example MusicPlace">
      
                      </p>
      
                      
                      <p>
                        <label for="input">Tikets price: <br></br></label>
      
                        <input type="text" id="input" placeholder="DOLARES $100">
      
                      </p>
      
                      <p>
                        <label for="input">Tikets caps: <br></br></label>
      
                        <input type="text" id="input" placeholder="10">
      
                      </p>
                    </fieldset>
                  </form>
      
      
                </div>

                <div class="col-12 col-sm-4">
                  <form class="bd-example formulario-crear">
                    <fieldset>
                      <img class="iconos-numeros" src="img/Numero 2.png" alt="facebook">
      
                      <legend>Describe tu evento</legend>
      
                      <p>
                        <label for="select">Categoria de evento: <br></br></label>
                        <select id="select">
                          <option value="">...</option>
                            <option value="">Music</option>
                            <option value="">Deportivo</option>
                            <option value="">Otro</option>
                          </optgroup>
                        </select>
                      </p>
      
                      
                      <p>
                          <label for="file">Imagen representativa: <br></br></label>
                          <input class="archivos" type="file" id="file">
                      </p>
      
                      <p>
                        <label for="input">Descripcion de evento:  <br></br><br></br></label>
      
                          <textarea id="textarea" rows="3"></textarea>
                      </p>
      
                      <p>
                        <button type="submit">Crear Evento</button>
                      </p>
                    </fieldset>
                  </form>
      
      
                </div>

                <div class="col-12 col-sm-4">
                  <form class="bd-example formulario-crear">
                    <fieldset>
                      <img class="iconos-numeros" src="img/numero 3.png" alt="facebook">
      
                      <legend>Lugar/Fecha</legend>
      
                      <p>
                        <label for="input">Lugar tu Evento: <br></br></label>
      
                        <input type="text" id="input" placeholder="Example Costa Rica/ Sanjose">
      
                      </p>
      
                      
                      <p>
                        <label for="date">Fecha de evento: </label>
                        <input type="date" id="date">
                      </p>
                      <p>
                        <label for="time">Hora de evento: </label>
                        <input type="time" id="time">
                      </p>
      
                      <p>
                        <label>
                          <label for="input">Forma de pago: <br></br></label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          PAGO
                        </label>
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                         GRATUITO
                        </label>
                      </p>
      
      
                    </fieldset>
                  </form>
      
      
                </div>
           
              </div>
             
              
          </div>

        </div>
       

    
 

</section>
    

   
</main>
  
<main>



<section>
 
  <div class="col-12 col-sm-12 formulario-crear">
    <section class="expertise-section">
      <div class="container">
          <div  class="row"  > 

            
            <div class="col-12 col-sm-12 texto-inicio" >
              <h5>BENEFICIOS</h5>
              <h6>Las diferentes caracteristicas que contiene su evento</h6>
            </div>

              <div class="col-12 col-sm-4" >


                  <div class="items">
                      <img class="img-fluid" src="img/icono1.png" alt="Banner 1">

                      <div class="txt-items">
                          <h5>WEB DESING & DEVELOPMENT</h5>
                      
                      <p >Lorem ipsum dolor sit amet consectetur adipiscing consectetur adipiscing consectetur 
                          adipiscing consectetur adipiscing. <br></br><br></br><br></br> </p>

                      </div>


                  </div>
              </div>

              <div class="col-12 col-sm-4">
                 
                  <div class="items">
                      <img class="img-fluid" src="img/icono2.png" alt="Banner 2" >

                      <div class="txt-items">
                          <h5>BRANDING IDENTITY</h5>
                      
                      <p >Lorem ipsum dolor sit amet consectetur adipiscing consectetur adipiscing consectetur 
                          adipiscing consectetur adipiscing. <br></br><br></br><br></br> </p>

                      </div>


                  </div>
              </div>

              <div class="col-12 col-sm-4">
                

                  <div class="items">
                      <img class="img-fluid" src="img/icono3.png" alt="Banner 3" >

                      <div class="txt-items">
                          <h5>MOBILE APP</h5>
                      
                      <p >Lorem ipsum dolor sit amet consectetur adipiscing consectetur adipiscing consectetur 
                          adipiscing consectetur adipiscing. <br></br><br></br><br></br> </p>

                      </div>


                  </div>
              </div>

              <div class="col-12 col-sm-4">
                
                  <div class="items">
                      <img class="img-fluid" src="img/icono4.png" alt="Banner 4" >

                      <div class="txt-items">
                          <h5>SERH ENGINE OPTIMATION</h5>
                      
                      <p >Lorem ipsum dolor sit amet consectetur adipiscing consectetur adipiscing consectetur 
                          adipiscing consectetur adipiscing. <br></br><br></br><br></br> </p>

                      </div>


                  </div>
              </div>

              <div class="col-12 col-sm-4">
                
                  <div class="items">
                      <img class="img-fluid" src="img/icono5.png" alt="Banner 5" >

                      <div class="txt-items">
                          <h5>GAME DEVELOPMENT</h5>
                      
                      <p >Lorem ipsum dolor sit amet consectetur adipiscing consectetur adipiscing consectetur 
                          adipiscing consectetur adipiscing. <br></br><br></br><br></br> </p>

                      </div>


                  </div>
              </div>

              <div class="col-12 col-sm-4">
                  
                  <div class="items">
                      <img class="img-fluid" src="img/icono6.png" alt="Banner 6" >

                      <div class="txt-items">
                          <h5>MADE WITH</h5>
                      
                      <p >Lorem ipsum dolor sit amet consectetur adipiscing consectetur adipiscing consectetur 
                          adipiscing consectetur adipiscing. <br></br><br></br><br></br> </p>

                      </div>


                  </div>
              </div>
         
             
          </div>
      </div>
  </section>
  </div>
</section>
    

</main>
</body>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
<script src="js/main.js" type="text/javascript"></script>






</html>


