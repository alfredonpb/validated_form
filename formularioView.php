<!DOCTYPE html>
<head>
        <meta name="google-site-verification" content="cUI41KHpyy72nDELART-NtAu6c0YTr769c-Wy2wYO5Y" />
        <meta name="keywords" content="diseño web, codigo, programacion, html, css, javascript, tutoriales">
        <meta name="author" content="Migracion-Venezuela-Argentina">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon2.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Formulario Validado con PHP</title>	
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- <script src="https://kit.fontawesome.com/f47412a73a.js" crossorigin="anonymous"></script> -->
            
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">	
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">       
        <!-- CDN de Jquery en GOOGLE -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/estilosFormularios.css">
        
</head>
 
<body>      
    <!--FORMULARIO--> 
        <div class="container wrap mt-5">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" id="formulario" name="formulario">
                        
                            <label for="nombre">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" placeholder="Escribe tu nombre y apellido">

                            <label for="correo" class="mt-3">Correo</label>                           
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>" placeholder=" Escribe tu correo">

                            <label for="mensaje" class="mt-3">Mensaje</label>
                            <textarea  class="form-control textarea" id="mensaje" name="mensaje" cols="20" placeholder="Escribe tu mensaje"> <?php if(!$enviado && isset($mensaje)) echo $mensaje ?> </textarea>
                        
                            <?php if (!empty($errores)): ?> 
                                <div class="alert error text-center">                                   
                                    <?php echo $errores; ?>
                                </div>
                            <?php elseif($enviado): ?>
                               <div class="alert success">
                                    <p class="text-center h6 pt-2"> Enviado Correctamente</p>
                               </div>
                           <?php endif ?>                            

                            <button type="submit" name="submit" class="btn btn-block btn-primary mt-3" value="Enviar" >Enviar</button> 
            
                    </form>
                </div>
            </div>
        </div>

    <hr>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
                    