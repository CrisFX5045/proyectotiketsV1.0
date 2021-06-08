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
    

<main >
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
                          <a href="index_crear_evento.html"><input class="btn btn-primary" type="button" value="Crear Evento"></a>

                             <a href="index_iniciar_sesion.html"><input class="btn btn-primary" type="button" value="Inciar Sesion"></a>

                         </div>
                       
                </div>
              



                
            </div>
            
              <div class="collapse navbar-collapse">

           
            <ul class="navbar-nav barra-registro">
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

           
            <a href="index_crear_evento.html"><input class="btn btn-primary" type="button" value="Crear Evento"></a>

            <a href="index_iniciar_sesion.html"><input class="btn btn-primary" type="button" value="Iniciar Sesion"></a>
          </div>

         
          
        </div>

       
        
      </nav>
</main>



    <main class="sesion">


      <H5>REGISTRARSE</H5>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">

                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="validationCustom01" value="Nombre" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Apellido</label>
                          <input type="text" class="form-control" id="validationCustom02" value="apellido" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">Lugar de procedencia</label>
                          <input type="text" class="form-control" id="validationCustom03" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">Edad</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">0</option>
                            <option>15-20</option>
                            <option>20-25</option>
                            <option>25-35</option>
                            <option>35></option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom05"  class="form-label">Numero Telefono</label>
                          <input type="text" class="form-control" value="+" id="validationCustom05" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Registrar</button>
                        </div>
                      </form>

                </div>
              
            </div>
           
            
        </div>
     
    </main>
    


</body>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
<script src="js/main.js" type="text/javascript"></script>






</html>


