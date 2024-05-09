<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CatDogCare</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="STYLE.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>



    </body>
     <header>
        

        <nav>
            <a href="clinicaprincipal.php">Inicio</a>
            <a href="quienesomos.php">¿Quiénes somos?</a>

            <a href="Especialidades.php">Especialidades</a>
            <a href="ubicacion.php">Clínica</a>
            <a href="Login.php">¿Tienes una cuenta? O Registrate aquí</a>
        
        </nav>
        <style>
           
        nav a:hover {
            background-color: #2c3e50;
        }
        nav {
        background-color: #3498db;
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: #fff;
        transition: background-color 0.3s ease, transform 0.3s ease;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        margin: 0 10px; 
        padding: 10px 15px;  
        border-radius: 5px; 
        transition: background-color 0.3s ease;
    }

    nav a:hover {
        background-color: #2c3e50; 
        transform: scale(1.1);

    }
    body {
    background-color: #fff;
}

.textos-header h1,
.textos-header h2 {
    background-color: #fff; 
    color: #3498db;
    font-weight: bold; 
    padding: 10px; 
    border: 2px solid #000; 
    border-radius: 10px; 
    transition: background-color 0.3s ease; 
}

.textos-header h1:hover,
.textos-header h2:hover {
    background-color: #1a237e;
    transform: scale(1.05);
    cursor: pointer; 
    animation: shakePaws 0.5s ease infinite; 
}

@keyframes shakePaws {
    0%, 100% {
        transform: translateY(0);
    }
    25%, 75% {
        transform: translateY(-5px);
    }
    50% {
        transform: translateY(0);
    }
}

.galeria-port .imagen-port {
    position: relative;
    overflow: hidden;
}


.galeria-port .imagen-port::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); 
    opacity: 0; 
    transition: opacity 0.3s ease; 
}


.galeria-port .imagen-port:hover::before {
    opacity: 1; 
}


.galeria-port .imagen-port:hover {
    cursor: pointer;
}


.galeria-port .imagen-port.clicked::before {
   
}
.galeria-port .imagen-port img {
    transition: transform 0.3s ease;
}






    
    </style>
    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var galeriaItems = document.querySelectorAll('.galeria-port .imagen-port');
        galeriaItems.forEach(function (item) {
            item.addEventListener('click', function () {
                
                window.location.href = 'Especialidades.php';
            });
        });
    });
  

</script>

        
        <section class="textos-header">
            <h1>¡Bienvenido a CatDogCare!</h1>
            <h2>Tu agenda médica</h2>
        </section>


       
    </header>
   
    

        <section class="galeria-port">
            <div id="imagenCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="1.png" alt="">
                    </div>
                    <div class="carousel-item">
                    <img src="2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="3.png" alt="">
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#imagenCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#imagenCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>

                </a>
            </div>
         

        </section>

        <section class="about-services">
      
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Tu mejor amigo merece lo mejor</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="h.jfif" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Citas médicas</h3>
                    <p>Nuestro departamento de consulta externa se encuentra compuesto por Médicos Cardiólogos, Oncología, Fisioterapia, Rehabilitación, Fauna salvaje, Imagenología, Médico general y Oftalmología altamente calificados para proveer un servicio humano, seguro y oportuno para tu mascota.
                        </p>
                    <h3><span>2</span>Horarios de atención:</h3>
                    <p>Lunes a viernes de 07:00 a.m. a 11:00 p.m. y de 4:00 p.m. a 11:00 p.m.</p>
                    <h3><span>3</span>Doctores</h3>
                    <p>En CatDog Care, nos enorgullece ser reconocidos como los mejores médicos veterinarios. Nuestra dedicación y experiencia aseguran el bienestar de tus mascotas. Confía en nosotros para proporcionar la atención veterinaria de la más alta calidad para tus adorados amigos peludos.</p>
                </div>
            </div>
        </section>
        <section class="Nuestro Trabajo">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios que ofrecemos</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="https://veterinariadelmar.com/wp-content/uploads/2017/12/Captura-de-pantalla-2017-12-18-10.46.21-e1521822842248.png" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.K12ibkZ7u2K1.3zS4.Ut?w=270&h=270&c=6&r=0&o=5&pid=ImgGn" alt="">
                            <p>Oncología</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://www.vetpraxis.net/wp-content/uploads/2016/08/dia-do-veterinario-200x150@2x.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.SxhKD6dt0Cvjsb1eaIvO?pid=ImgGn" alt="">
                            <p>Cardiología</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://www.portalveterinaria.mx/upload/20220922141645Fisioterapiayrehabilitacionunaoportunidad.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.QStrSOdc.7LTrjz2WjjX?w=270&h=270&c=6&r=0&o=5&pid=ImgGn" alt="">
                            <p>Fisioterapia</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://media.v2.siweb.es/uploaded_thumb_big/5895f3b690f226f26f4b1325606a570a/img_1715.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.2HqhZ0_Wb4JKisS3HZ0L?w=270&h=270&c=6&r=0&o=5&pid=ImgGn" alt="">
                            <p>Rehabilitación</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://www.cimformacion.com/blog/wp-content/uploads/2013/09/aguila-rehabilitacion-veterinaria-min.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.4ssdMUhfvCdlu.0QOyM6?w=270&h=270&c=6&r=0&o=5&pid=ImgGn" alt="">
                            <p>Fauna Silvestre</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://fundacioncarlosslim.org/wp-content/uploads/2022/03/imagenologia-basica-vet-2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.21GTeRfYQWlejAoKtNL4?pid=ImgGn" alt="">
                            <p>Imagenología</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://carreirafacil.com/wp-content/uploads/2022/07/veterinario-no-trabalho.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.cWUa0JRIR0KHr862vGBp?pid=ImgGn&w=1024&h=1024&rs=1" alt="">
                            <p>Médico General</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://www.animalhome.com.mx/wp-content/uploads/2021/03/Oftalmologia-Veterinaria-Mexico-CDMX1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="https://th.bing.com/th/id/OIG.xiemBDSAfPJMv6q8ZUDu?w=270&h=270&c=6&r=0&o=5&pid=ImgGn" alt="">
                            <p>oftalmología</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
       
            
        </section>
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>TELÉFONO</h4>
                <p>52 653-121-121-12</p>
            </div>
            <div class="content-foo">
                <h4>CORREO ELECTRÓNICO</h4>
                <p>CatDogCare@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>ESTABLECIDOS EN:</h4>
                <p>Av Amapolas 34 y 35</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Derecho reservados | CatDogCare</h2>
    </footer>
</body>

</html>