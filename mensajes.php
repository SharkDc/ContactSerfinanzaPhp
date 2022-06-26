
<?php
//Registro de Alumno con exito.
if(isset($_REQUEST['a'])){ ?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="imgs/logo.png" class="rounded me-2 logo" alt="Logo">
      <strong class="me-auto">Web Developer - Luis Tafur</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      <h6 class="text-center msjexito">Contacto registrado con exito.</h6>
    </div>
  </div>
</div>
<?php } ?>


