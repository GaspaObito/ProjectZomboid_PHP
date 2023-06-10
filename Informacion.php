<?php include ("template/cabeceraIndex.php");?>
        <section class="hero pt-3">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li ><a href="index.php" id="TextoDirec">Inicio</a></li>
                    <li class="separacion" id="TextoDirec">Nosotros</li>
                </ul>
                <!-- Hero Content-->
                <div class="hero-content pb-5 text-center">
                    <div class="titulo pt-3"><h1> Contactanos </h1></div>
                    <div class="row">   
                        <div class="col-xl-8 offset-xl-2"><p class="lead text-black pt-3">Para alguna queja, reclamo, solicitud pongase en contacto con nosotros</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-6 pb-5">   
            <div class="container">       
                <div class="row">
                    <div class="col-md-4 text-center text-md-start">
                        <img src="img/GpsImg.png" alt="" width="100px" height="100px">
                        <h4 class="ff-base">Direccion</h4>
                        <p id="TextoDirec">Cra 18o # 10b - 35<br>Ciudad Verde, 45Y 73J<br>Cundinamarca Soacha, <strong>Colombia</strong></p>
                    </div>
                    <div class="col-md-4 text-center text-md-start">
                        <img src="img/TelefonoImg.png" alt="" width="100px" height="100px">   
                        <h4 class="ff-base">Telefono</h4>
                        <p id="TextoDirec">Contactanos atravez de linea telefonica y seras atendido por un asistente personal.</p>
                        <p id="TextoDirec"><strong>+57 3013831273</strong></p>
                    </div>
                    <div class="col-md-4 text-center text-md-start">  
                        <img src="img/CorreoImg.png" alt="" width="100px" height="100px">
                        <h4 class="ff-base">Correo Electronico</h4>         
                        <p id="TextoDirec">Por favor, siéntase libre de escribirnos un correo electrónico o utilizar su sistema de emisión de boletos electrónicos.</p>
                        <ul id="TextoDirec">
                            <li>PruebaNoexiste@gmail.com</li>
                            <li>support@sell.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Formulario Rellenar -->
            <div class="container">   
                <header class="mb-5">
                    <h2 class="text-uppercase h5">Formulario</h2>
                </header>
                <div class="row">               
                    <div class="col-md-7 mb-5 mb-md-0">
                        <form action="ConexionBD/conectar_Nosotros.php" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <label class="form-label">Nombre *</label>
                                            <input class="form-control" type="text" name="nombref" placeholder="Ingrese su nombre" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <label class="form-label">Apellido *</label>
                                            <input class="form-control" type="text" name="apellidof" placeholder="Ingrese su apellido" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Correo Electronico *</label>
                                    <input class="form-control" type="email" name="emailf" placeholder="Ingrese su Correo" required="required">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Descripcion *</label>
                                    <textarea class="form-control" rows="4" name="descripcionf" placeholder="ingrese su Descripcion" required="required"></textarea>
                                </div>
                                <button class="btn btn-outline-dark" type="submit" name="enviarf">Enviar</button>
                                
                        </form>
                    </div>             
                    <div class="col-md-5">
                        <p id="TextoDirec">Los mensajes se envian sólo a números de línea telefónica fija elegibles dentro de EE. UU (se excluyen los territorios y dominios de los EE. UU.). No disponible con roaming internacional, incluso si la mensajería de texto está disponible. Debes seleccionar cada número de teléfono fijo de forma individual para enviar mensajes a ese número. Una vez que hayas seleccionado un número, todos los mensajes de texto futuros enviados a ese número se enviarán como mensajes de texto a línea telefónica fija y se facturarán como tal solo si se reciben correctamente. </p>
                        <p id="TextoDirec">Al acceder o utilizar cualquier parte de GremioTech, usted declara haber leído, comprendido y aceptado estar sujeto a estos Términos y Condiciones, incluyendo cualquier modificación futura. GremioTech podrá actualizar o modificar estos Términos y Condiciones</p>
                        <div class="social">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>              
            </div>           
        <!-- Formulario Rellenar -->
        <div class="bg-gray-100 text-dark-700 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 service-column">
                        <img src="img/CarritoEnvioImg.png" alt="" width="60px" height="60px">
                        <div class="service-text dropdown-item">
                            <h6 class="text-uppercase text-black">Envío gratis y devoluciones</h6>
                            <p id="TextoDirec">Envío gratis a partir de $300</p>
                        </div>
                    </div>
                    <div class="col-lg-4 service-column">
                        <img src="img/ReembolsoImg.png" alt="" width="60px" height="60px">
                        <div class="service-text">
                            <h6  class="text-uppercase text-black">Garantía de reembolso</h6>
                            <p id="TextoDirec">Garantía de devolución de dinero de 30 días</p>
                        </div>
                    </div>
                    <div class="col-lg-4 service-column">
                        <img src="img/AtencionClienteImg.png" alt="" width="60px" height="60px">
                        <div class="service-text">
                            <h6  class="text-uppercase text-black">020-800-456-747</h6>
                            <p id="TextoDirec">24/7 Soporte disponible</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include ("template/pieIndex.php");?>
