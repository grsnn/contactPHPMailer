<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#1a237e" />
    <title>CONTACT PAGE</title>
    <link rel="shortcut icon" type="image/png" href="https://firebasestorage.googleapis.com/v0/b/discs-2b2e5.appspot.com/o/logo.png?alt=media&token=284a933a-e987-4e36-9ce1-4943fe86f8d2" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
    <div class="container">
        <h1 class="title">¿ DUDAS O SUGERENCIAS ?</h1>
        <h5 class="subtitle">Elige el medio que mas te convenga</h5>
        <div class="contact">
            <!--ICONS-->
            <div class="icons">
                <a href="https://github.com/discs-c" target="_blanck" class="box messenger">
                    <i class="fab fa-facebook-messenger"></i>
                    <span class="text">FB Messenger</span>
                </a>
                <a href="mailto:coreo@gmail.com" target="_blanck" class="box gmail">
                    <i class="fas fa-envelope"></i>
                    <span class="text">coreo@gmail.com</span>
                </a>
                <a href="https://api.whatsapp.com/send?phone=codigo de pais más tu número" target="_blanck" class="box whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <span class="text">(502) 4233 3212</span>
                </a>
            </div>
            <!--FORM-->
            <div class="cont-form">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
                    <?php if(!empty($error)): ?>
                        <div class="error">
                            <ul class="error-list">
                                <li class="error-list-item"><?php echo $error; ?></li>
                            </ul>
                        </div>
                    <?php elseif($success): ?>
                        <div class="success">
                            <ul class="success-list">
                                <li class="success-list-item"><?php echo $success; ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="cont-input">
                        <label for="name" class="icon-input name">
                            <i class="fas fa-user"></i>
                        </label>
                        <input type="text" class="input" name="name" id="name" placeholder="Nombre">
                    </div>
                    <div class="cont-input">
                        <label for="email" class="icon-input">
                            <i class="fas fa-envelope"></i>
                        </label>
                        <input type="text" class="input" name="email" id="email" placeholder="Correo">
                    </div>
                    <div class="cont-input">
                        <label for="subjet" class="icon-input">
                            <i class="fas fa-pencil-alt"></i>
                        </label>
                        <input type="text" class="input" name="subject" id="subjet" placeholder="Asunto">
                    </div>
                    <div class="cont-input">
                        <label for="text" class="icon-input">
                            <i class="fas fa-pen"></i>
                        </label>
                        <textarea class="textarea" id="text" name="text" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="cont-btn">
                        <input type="submit" value="ENVIAR" class="btn">
                    </div>
                </form>
            </div>
        </div>
        <!--FOOTER-->
        <div class="redes">
            <p class="copy">&copy; 2020 | Todos los derechos reservados. Diseño by Gerson Chali <br>Mis Redes Sociales</p>
            <div class="icons-redes">
                <a href="https://github.com/discs-c" class="item" target="_blanck"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/discs__c/" class="item" target="_blanck"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/discs_c" class="item" target="_blanck"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/ec9d120159.js"></script>
</body>

</html>