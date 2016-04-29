<br>
<div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6">
        <br>
        <input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre Usuario">
        <br>
        <input type="password" class="form-control" id="pass" placeholder="Contraseña">
        <br>
        <input type="email" class="form-control" id="email" placeholder="Email">
        <br>
        <input type="text" class="form-control" id="DNI" placeholder="DNI">
        <br>  
        <div class="dropdown">
            <button id="botonTipo" class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown">Tipo
                <span class="caret"></span></button>
            <ul class="dropdown-menu btn-block" >
                <li><a href="#" onclick="cambiaTipo('1','Cliente')">1 - Cliente</a></li>
                <li><a href="#" onclick="cambiaTipo('2','Administrador')">2 - Administrador</a></li>
                <li><a href="#" onclick="cambiaTipo('3','Peluquero')">3 - Peluquero</a></li>
                <li><a href="#" onclick="cambiaTipo('4','Veterinario')">4 - Veterinario</a></li>
            </ul>
        </div>
        <br>  
 
    </div>
    <div class="col-xs-3"></div>
</div>
<script>
    var tipo=0;
    function cambiaTipo(_valor, _texto){
        $('#botonTipo').html(_texto);
        tipo = _valor;
        console.log(tipo);
    }
</script>
<?php



