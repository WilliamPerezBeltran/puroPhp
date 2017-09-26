
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">

            <div class="box box-warning">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php $attributes=array('autocomplete'=>'off'); echo form_open_multipart('Datos/registroEmpleado',$attributes);?>
                        <!-- text input -->
                        <div class="form-group <?php echo (form_error('nombre') == null) ? '' : 'has-error'; ?>">
                            <label>nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Enter nombre..."value="<?php echo set_value('nombre') ?>">
                            <?php echo '<span class="help-block">' . form_error('nombre') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('apellido') == null) ? '' : 'has-error'; ?>">
                            <label>apellido</label>
                            <input name="apellido" type="text" class="form-control" placeholder="Enter apellido..." value="<?php echo set_value('apellido') ?>">
                            <?php echo '<span class="help-block">' . form_error('apellido') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('telefono') == null) ? '' : 'has-error'; ?>">
                            <label>celular</label>
                            <input name="telefono" type="text" class="form-control" placeholder="Enter celular..." value="<?php echo set_value('telefono') ?>">
                            <?php echo '<span class="help-block">' . form_error('telefono') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('password') == null) ? '' : 'has-error'; ?>">
                            <label>password</label>
                            <input name="password" type="text" class="form-control" placeholder="Enter password..." value="<?php echo set_value('password') ?>">
                            <?php echo '<span class="help-block">' . form_error('password') . '</span>'; ?>
                        </div>
                        
                        <div class="form-group <?php echo (form_error('email') == null) ? '' : 'has-error'; ?>">
                            <label>email</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter email..." value="<?php echo set_value('email') ?>">
                            <?php echo '<span class="help-block">' . form_error('email') . '</span>'; ?>
                        </div>
                        <button type="submit" class="btn  btn-success">enviar</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <!-- Footer-->
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

</section>
<!-- /.content -->
