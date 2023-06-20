git<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
</head>
<body>
    
    <form class="form">
        <span class="signup">ViveSano</span>
    
        <span class="title">Registro</span>
    
    
    <div class="grupo">
        <input type="text" id="Nombre" name="Nombre"  class="input" placeholder="Nombre" class="form--input" required>

          <input type="text" id="Apellido" name="Apellido"  class="input" placeholder="Apellido" class="form--input" required>
        </div>   
        
          <div class="separator">
            <hr class="line">
            <p>Email</p>
            <hr class="line">
          </div>
            <input type="text" id="Email" name="Email"  class="input" placeholder="Email" class="form--input" required>
           
            
          <div class="separator">
            <hr class="line">
            <p>Username</p>
            <hr class="line">
          </div>
            <input type="text" class="input" id="Username" name="Username" placeholder="Username" class="form--input">
    
            
          <div class="separator">
            <hr class="line">
            <p>Password</p>
            <hr class="line">
          </div>
            <input type="password" class="input" id="Password" name="Password"  placeholder="Password" class="form--input" required>


            <input type="text" class="input" id="estado" name="estado"  placeholder="estado" class="form--input" hidden>

            
        <button class="form--submit">
            Registrar
        </button>
    
    </form>

</body>
</html>