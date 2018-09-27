<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Verificar Materias<!--<small>Todos los clientes</small>--></h3>
              </div>             
            </div>

            <div class="clearfix"></div>

            <div class="row"> 

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Materias</h2>
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
                                    <th>Nombre de la Secci&oacute;n</th>
                                    <th>Descripci&oacute;n de la Secci&oacute;n</th>
                                    <th>Opciones</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($secciones)):?>
                                    <?php foreach($secciones as $secciones):?>
                                        <tr>
                                            <td><?php echo $secciones->id_seccion;?></td>
                                            <td><?php echo $secciones->nombre_seccion;?></td>
                                            <td><?php echo $secciones->descripcion_seccion;?></td>
                                            <td>
                                                    <a href="<?php echo base_url()?>secciones/edit/<?php echo $secciones->id_seccion;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>secciones/delete/<?php echo $secciones->id_seccion;?>" onclick=" return confirm('¿Estas  seguro de querer eliminarlo?');" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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