<?php
include "includes/head_login.php"
 ?>

 <body>
     <div class="diviniciosesion">
         <div class="container">
             <div class="contcien">
                 <div class="cont">
                     <h1>Iniciar sesión<br>Pomabamaba.com</h1>
                     <?php include "helpers/messageError.php"; ?>
                     <?php include "helpers/messageSuccess.php"; ?>
                     <form action="" method="POST" >
                         <div class="form-group">
                             <label for="email">Email</label>
                             <input type="email" name="email" placeholder="email">
                         </div>
                         <div class="form-group">
                             <label for="email">Contraseña</label>
                             <input type="password" name="password" placeholder="Contraseña">
                         </div>
                         <div class="form-group text-center" >
                             <button class="btn green">Iniciar sesión</button>
                             <br><br>
                             <a href="recuperar_contrasenia.php">Recuperar contraseña</a>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </body>
 </html>
