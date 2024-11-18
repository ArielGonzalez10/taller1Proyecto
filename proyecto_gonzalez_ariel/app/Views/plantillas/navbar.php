<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- Logotipo o Nombre -->
    <a class="navbar-brand text-white" href="principal.html">FrikiVerse</a>
    
    <!-- Botones de la barra -->
    <div class="d-flex">
        
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('principal.php');?>">Principal</a>
      </li>  

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('comercializacion.php');?>">Comercialización</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('quienesSomos.php');?>">Quiénes Somos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contacto.php');?>">Contacto</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('terminosyUsos.php');?>">Términos y Usos</a>
      </li>
      
    </div>

    <!-- Botones de registro e inicio de sesión -->
    <form class="container-fluid justify-content-start p-0" role="search">
          <div class="d-flex justify-content-end">
              <button class="btn btn-success me-2" type="button">Registrarse</button>
              <button class="btn btn-sm btn-outline-light" type="button">Iniciar Sesion</button>
            </div>
    </form>

  </div>
</nav>

<?php