<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Verificar Usuario<!--<small>Todos los clientes</small>--></h3>
              </div>             
            </div>

            <div class="clearfix"></div>

            <div class="row"> 

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Usuarios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                     
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> <!--CONTENIDO-->
							         <table id="example1" class="table table-bordered table-hover bulk_action dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre del Usuario</th>
                                    <th>C&eacute;dula Usuario</th>
                                    <th>Edad del Usuario</th>
                                    <th>Descripcion</th>
                                    <th>Opciones</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuarios):?>
                                        <tr>
                                            <td><?php echo $usuarios->id_usuario;?></td>
                                            <td><?php echo $usuarios->nombre_usuario;?></td>
                                            <td><?php echo $usuarios->cedula_usuario;?></td>
                                            <td><?php echo $usuarios->edad_usuario;?></td>
                                            <td><?php echo $usuarios->descripcion;?></td>
                                            <td>
                                                    <a href="<?php echo base_url()?>usuarios/edit/<?php echo $usuarios->id_usuario;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>usuarios/delete/<?php echo $usuarios->id_usuario;?>" onclick=" return confirm('¿Estas  seguro de querer eliminarlo?');" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>                  	
                </div><!--CONTENIDO-->

             </div>       
          </div>             
        </div>
     </div>  
</div>
        <!---------