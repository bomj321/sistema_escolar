<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Crear Materias<!--<small>Todos los clientes</small>--></h3>
              </div>             
            </div>

            <div class="clearfix"></div>

            <div class="row"> 

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Añadir Materia</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                     
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">                  	<!--CONSULTA SQL-->

                  	<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>                                
                             </div>
                       		 <?php endif;?>

							<?php
							$formulario = array('class' => 'form-horizontal');

							 echo form_open('materias/create',$formulario); 

							 ?>
								<div class="form-group">
									<?php 
										$label_materia = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Nombre de la Materia','materia',$label_materia)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_materia = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'materia',
									 			'placeholder'  => 'Nombre de la Materia',
									 			'name'         => 'materia',
									 			'value'        =>  set_value("materia")
									 		);

									 		echo form_input($input_materia);
									 		echo form_error("materia","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")

									 	 ?>
									 </div>
					
								</div>


								<div class="form-group">
									<?php 
										$label_descripcion = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Descripción','descripcion_materia',$label_descripcion)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_descripcion = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'descripcion_materia',
									 			'placeholder'  => 'Descripcion de la Materia',
									 			'name'         => 'descripcion_materia',
									 			'value'        =>  set_value("descripcion_materia")
									 		);

									 		echo form_input($input_descripcion);

									 	 ?>
									 </div>
					
								</div>


								<div class="form-group">
									<?php 
										$label_profesor = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Profesor','profesor',$label_profesor)
									 ?>
									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<select name="profesor" required="true" class="form-control" id="profesor">
											<?php if(!empty($profesores)): ?>
										 		<option value="">Seleccione una Opcion</option>
										 		<?php foreach ($profesores as  $profesor): ?>
										 		<option value="<?php echo $profesor->id_usuario?>" <?php echo set_select('profesor',$profesor->id_usuario);?>>
										 			<?php echo $profesor->nombre_usuario?>										 				
										 		</option>
										 		<?php endforeach; ?>
										 	<?php else: ?>	
													<option value="">No hay Profesores</option>
										 <?php endif; ?>
									 	</select>
									 	<?php 									 	
                						echo form_error("profesor","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
									    ?>
									 </div>					
								</div>




								<div class="col-md-12 col-sm-12 col-xs-12">									
										<center>
												<?php
													$button = array(
														'class'         => 'btn btn-primary',
												        'name'          => 'button',
												        'id'            => 'button',
												        'value'         => 'true',
												        'type'          => 'submit',
												        'content'       => 'Registrar'
													);

												 echo form_button($button)
												 ?>
										</center>
								</div>	


							<?php echo form_close(); ?>					
							
						</div>
                 </div>

                  	
<!--CONTENIDO-->
                </div>
              </div>       
             </div>             
            </div>
          </div>  
</div>
        <!---------