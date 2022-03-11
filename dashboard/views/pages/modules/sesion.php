<?php

$reservas = ControllerReservas::ctrMostrarReservas();

?>

<?php foreach($reservas as $key => $value): ?>
<?php if($value['cliente'] == $_SESSION['cliente']): ?>
<div class="col-md-4 ms-5 bg-white p-3" style="border-radius: 10px;">
    <a href="" class="text-danger p-2">
        <img src="views/assets/images/gif/circulo3.gif" width="40px">
      <b>Ir a mi sesión</b>
    </a>
</div>
<?php endif ?>
<?php endforeach ?>