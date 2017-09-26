
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
                
                <div class="box-body table-responsive no-padding">
                    
                    
                    
                    
                    
                    
                    
                    <table class="table table-hover">
                        <tr>
                            <th>
                                    
                                    <a href="<?php echo site_url('Datos/buscarTituloComics'); ?>"><button type="submit" class="btn btn-primary">Buscar titulo de comics</button></a>
                                                           
                            </th>
                              <th><a href="<?php echo site_url('Datos/agregarComics'); ?>"><button type="button" class="btn btn-primary">Agregar nuevo comics</button></a></th>

                        </tr>
                    </table>
                </div>
                <?php foreach ($comics as $item_comics){?>
              <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-white">
                      
                        
                      
                         <h1><img src="<?php echo base_url('imagenesComics/'.$item_comics['foto']); ?>" alt="logo"></h1>
                    <div class="inner">
                      <h3><?php echo $item_comics['nombre']; ?></h3>

                    </div>
                    
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
               <?php }?> 
                
                
                
                
                
                
                
                
                
                
                
                
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
