
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">


            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th><h4><p class="text-light-blue">Nombre</p></h4></th>
                        <th><h4><p class="text-light-blue">apellido</p></h4></th>
                        <th><h4><p class="text-light-blue">telefono</p></h4></th>
                        <th><h4><p class="text-light-blue">email</p></h4></th>
                        <th><h4><p class="text-light-blue"></p></h4></th>
                       
                    </tr>
                    <?php foreach ($informacion as $informacion_item) { ?>
                        <tr>
        
                            <td><?php echo $informacion_item['nombre']; ?></td>
                            <td><?php echo $informacion_item['apellido']; ?></td>
                            <td><?php echo $informacion_item['telefono']; ?></td>
                            <td><?php echo $informacion_item['email']; ?></td>
                            <td><a href="<?php echo site_url('datos/eliminarEmpleados/'.$informacion_item['id']);?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                        </tr>
                
                        
                    <?php } ?>

                </table>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
