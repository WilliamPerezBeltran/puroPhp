 <?php include('templates/header.php');?>
 <?php include('templates/aside.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Some english verbs to study parcero</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

        <?php
        $link=mysqli_connect("localhost","root","","ingles") or die('error en la conexcion ');
        $query="select * from verbos";
        $result=mysqli_query($link,$query);
        if ($result) {
          echo "la conexion ha sido exitosa";
        } else {
          echo "BURRO mire a ver que hizo mal ";
        }
        ?>
      

          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="ingles1.php"><button type="button" class="btn btn-block btn-info btn-lg">Practica los verbos has click <h3>AQUI</h3></button></a></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>present</th>
                  <th>Past</th>
                  <th>Participle</th>
                  <th>Traduction</th>
                </tr>

                <?php while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {?>

                

                <tr>
                  <td><?php echo $row['present'] ?></td>
                  <td><?php echo $row['past'] ?></td>
                  <td><?php echo $row['participle'] ?></td>
                  <td><?php echo $row['traduction'] ?></td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <?php  }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
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
  </div>
  <!-- /.content-wrapper -->
<?php include('templates/footer.php'); ?>
 