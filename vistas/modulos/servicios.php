<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar servicios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar servicios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarServicio">
          
          Agregar servicio

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre del Servicio</th>
           <th>Precio</th> 
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $servicios = ControladorServicios::ctrMostrarServicios($item, $valor);

          foreach ($servicios as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["nombre_servicio"].'</td>

                    <td>'.$value["precio"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarServicio" data-toggle="modal" data-target="#modalEditarServicio" idServicio="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger btnEliminarServicio" idServicio="'.$value["id"].'"><i class="fa fa-times"></i></button>

                      </div>  

                    </td>

                  </tr>';
          
            }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR servicio
======================================-->

<div id="modalAgregarServicio" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar servicio</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE del servio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoServicio" placeholder="Ingresar nombre de servicio" required>

              </div>

            </div>

             <!-- ENTRADA PARA  precio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="int" class="form-control input-lg" name="nuevoPrecio" placeholder="Ingresar Nuevo Precio" required>

              </div>

            </div>

           </div>
         </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar servicios</button>

        </div>

      </form>

      <?php

        $crearServicio = new ControladorServicios();
        $crearServicio -> ctrCrearServicio();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR servicio
======================================-->

<div id="modalEditarServicio" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar servicio</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE servicio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarServicio" id="editarServicio" required>
                <input type="hidden" id="idServicio" name="idServicio">
              </div>

            </div>

            <!-- ENTRADA PARA EL precio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="number" class="form-control input-lg" name="editarPrecio" id="editarPrecio" required>
               
              </div>

            </div>

            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarServicio = new ControladorServicios();
        $editarServicio -> ctrEditarServicio();

      ?>

    

    </div>

  </div>

</div>

<?php

  $eliminarServicio = new ControladorServicios();
  $eliminarServicio -> ctrEliminarServicio();

?>