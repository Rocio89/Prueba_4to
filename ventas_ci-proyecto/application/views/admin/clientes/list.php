
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/clientes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Clientes</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover dt-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Tipo de Cliente</th>
                                    <th>Tipo de Documento</th>
                                    <th>Numero de Documento</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                 
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($clientes)):?>
                                    <?php foreach($clientes as $key => $cliente):?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <!-- <td><?php echo $cliente->id;?></td> -->
                                            <td><?php echo $cliente->nombre;?></td>
                                            <td><?php echo $cliente->tipocliente;?></td>
                                            <td><?php echo $cliente->tipodocumento;?></td>

                                            <!-- <td><?php echo number_format(($cliente->num_documento),0,",",".");?></td> -->

                                            
                                            <td><?php echo $cliente->num_documento;?></td> 
                                            <td><?php echo $cliente->telefono;?></td>
                                            <td><?php echo $cliente->direccion;?></td>
                                            <?php $datacliente = $cliente->id."*".$cliente->nombre."*".$cliente->tipocliente."*".$cliente->tipodocumento."*".$cliente->num_documento."*".$cliente->telefono."*".$cliente->direccion;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info 
                                                    </button>
                                                    <!-- <?php if($permisos->update == 1):?> -->
                                                    <a href="<?php echo base_url()?>mantenimiento/clientes/edit/<?php echo $cliente->id;?>" class="btn btn-success"><span class="fa fa-pencil"></span></a>
                                                    <!-- <?php endif;?> -->
                                                    <!-- <?php if($permisos->delete == 1):?> -->
                                                    <a href="<?php echo base_url();?>mantenimiento/clientes/delete/<?php echo $cliente->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                   <!--  <?php endif;?> -->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Categoria</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


