
<?php
 require_once 'controller/UsuarioController.php';
 $var = new usuariocontroller;
 $resul= $var->modificarlistar(); 
?>


<div class="panel panel-primary col-md-8 col-md-offset-2">
    <div class="panel-heading">
        Actualizar usuarios
    </div>

    <div class="panel-body">

        <form action="index.php?controller=UsuarioController&action=actualizar" method="POST">

           <label class="control-label">id</label>
           <input type="hidden" class="form-control" type="text" name="txtid" value="<?php echo $resul= $var->modificarlistar();?>">

            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" name="txtNombre" value="">

            <label class="control-label">Apellido</label>
            <input class="form-control" type="text" name="txtApellido">

            <label class="control-label">Email</label>
            <input class="form-control"type="text" name="txtEmail">
            <a href="index.php?controller=UsuarioController&action=actualizar">
            <button class="btn btn-info" type="submit" >Actualizar</button>
            </a>
        </form>
    </div>
</div>