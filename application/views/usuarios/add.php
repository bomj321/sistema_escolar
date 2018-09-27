<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Crear Seccion<!--<small>Todos los clientes</small>--></h3>
              </div>             
            </div>

            <div class="clearfix"></div>

            <div class="row"> 

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Añadir Seccion</h2>
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

							 echo form_open('usuarios/create',$formulario); 

							 ?>
								<div class="form-group">
									<?php 
										$label_usuario = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Nombre de Usuario','usuario',$label_usuario)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_usuario = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'usuario',
									 			'placeholder'  => 'Nombre de Usuario',
									 			'name'         => 'usuario',
									 			'value'        =>  set_value("usuario")
									 		);

									 		echo form_input($input_usuario);
									 		echo form_error("usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")

									 	 ?>
									 </div>
					
								</div>


								<div class="form-group">
									<?php 
										$label_cedula = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Cédula','cedula',$label_cedula)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_cedula = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'cedula',
									 			'placeholder'  => 'Cedula del Usuario',
									 			'name'         => 'cedula_usuario',
									 			'value'        =>  set_value("cedula_usuario")
									 		);

									 		echo form_input($input_cedula);
									 		echo form_error("cedula_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")

									 	 ?>
									 </div>
					
								</div>

								<div class="form-group">
									<?php 
										$label_edad = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Edad','edad',$label_edad)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_edad = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'edad',
									 			'placeholder'  => 'Edad del Usuario',
									 			'name'         => 'edad_usuario',
									 			'value'        =>  set_value("edad_usuario")
									 		);

									 		echo form_input($input_edad);
									 		echo form_error("edad_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")

									 	 ?>
									 </div>
					
								</div>


								<div class="form-group">
									<?php 
										$label_descripcion = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Descripcion','descripcion',$label_descripcion)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_descripcion = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'descripcion',
									 			'placeholder'  => 'Descripcion',
									 			'name'         => 'descripcion',
									 			'value'        =>  set_value("descripcion")

									 		);

									 		echo form_input($input_descripcion);
									 		echo form_error("descripcion","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")


									 	 ?>
									 </div>
					
								</div>
							
								<div class="form-group">
									<?php 
										$label_profesor = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Tipo Usuario','tipo_usuario',$label_profesor)
									 ?>
									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<select name="tipo_usuario" required="true" class="form-control" id="tipo_usuario">
											<option value=""  <?php echo set_select('tipo_usuario','');?>>Seleccione una Opcion</option>
											<option value="1" <?php echo set_select('tipo_usuario','1');?> >Administrador</option>
											<option value="2" <?php echo set_select('tipo_usuario','2');?>>Profesor</option>
											<option value="3" <?php echo set_select('tipo_usuario','3');?>>Alumno</option>
									 	</select>
									 	<?php 									 	
                						echo form_error("tipo_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
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
												        'content'       => 'Registrar Usuario'
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