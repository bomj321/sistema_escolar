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

							 echo form_open('secciones/create',$formulario); 

							 ?>
								<div class="form-group">
									<?php 
										$label_seccion = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Nombre de la Sección','seccion',$label_seccion)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_seccion = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'seccion',
									 			'placeholder'  => 'Nombre de la Sección',
									 			'name'         => 'seccion',
									 			'value'        =>  set_value("seccion")
									 		);

									 		echo form_input($input_seccion);
									 		echo form_error("seccion","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")

									 	 ?>
									 </div>
					
								</div>


								<div class="form-group">
									<?php 
										$label_descripcion = array(
						                    'class'        => 'col-sm-2 col-xs-12 col-md-2 control-label',
                						);


                						echo form_label('Descripción','descripcion_seccion',$label_descripcion)
									 ?>

									 <div class="col-md-10 col-sm-12 col-xs-12">
									 	<?php 
									 		$input_descripcion = array(
									 			'required'     => true,
									 			'class'        => 'form-control', 
									 			'id'           => 'descripcion_seccion',
									 			'placeholder'  => 'Descripcion de la Sección',
									 			'name'         => 'descripcion_seccion'
									 		);

									 		echo form_input($input_descripcion);

									 	 ?>
									 </div>
					
								</div>




								<div class="col-md-12 col-sm-12 col-xs-12">									
										<center>
												<?php
													$button = array(
														'required'      => true,
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