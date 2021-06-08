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
    <nav class="navbar navbar-expand-lg navbar-light bg-light barra">
               

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

                             <a href="index_registrarse.html"><input class="btn btn-primary" type="button" value="Registrarse"></a>

                         </div>
                       
                </div>
              



                
            </div>
            
              <div class="collapse navbar-collapse">

           
            <ul class="navbar-nav barra-iniciar">
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

            <a href="index_registrarse.html"><input class="btn btn-primary" type="button" value="Registrarse"></a>
          </div>

         
          
        </div>

       
        
      </nav>
</main>



    <main class="sesion">

      <H5>INICIAR SESION</H5>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">

                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                         
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                          <a href="">Has olvidado la contraseña?</a>
                        </div>
                        <div class="mb-3 form-check">
                           
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                         
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a href="index_registrarse.html"><button type="button" class="btn btn-primary">Registrarse</button></a>
                      </form>

                </div>
              
            </div>
           
            
        </div>
     
    </main>
    


</body>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
<script src="js/main.js" type="text/javascript"></script>






</html>


