<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar habitaciones
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar habitaciones</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarHabitacion">
          
          Agregar habitacion

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaHabitaciones">
         
        <thead>
         
         <tr>
          
           <th style="width:10px">#</th>
           <th>N°habitacion</th>
           <th>Categoria</th>
           <th>Nivel</th>
           <th>Detalle</th>
           <th>Precio</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        

       </table>

      </div>  

    </div>

  </section>

</div>
<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarHabitacion" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar habitacion</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoNumeroHabitacion" placeholder="Ingresar el numero de habitacion" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                  
                  <option value="">Selecionar Categoria</option>

                  <?php
                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    foreach ($categorias as $key => $value) {
                      
                      echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';
                    }
                  ?>
                </select>

              </div>

            </div>
            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" id="nuevoPiso" name="nuevoPiso" required>
                  
                  <option value="">Selecionar Nivel</option>

                  <?php
                    $item = null;
                    $valor = null;

                    $pisos = ControladorPiso::ctrMostrarPisos($item, $valor);

                    foreach ($pisos as $key => $value) {

                      echo '<option value="'.$value["nro"].'">'.$value["nro"].'</option>';
                    }
                  ?>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDetalle" placeholder="Ingresar Detalle" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio" placeholder="Ingresar precio" required>

              </div>

            </div>

            

            <!-- ENTRADA PARA SUBIR FOTO -->

            

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

      </form>

        <?php

          $crearHabitacion = new ControladorHabitaciones();
          $crearHabitacion -> ctrCrearHabitacion();
        ?>

    </div>

  </div>

</div>


