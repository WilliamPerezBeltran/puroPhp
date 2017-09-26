<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="AdminLTE-2.3.5/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-2.3.5/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="AdminLTE-2.3.5/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- =============================================== -->
  
<?php
include 'plantillaAdminSeccionada/header.php';
?>

  <!-- =============================================== -->
<?php
include 'plantillaAdminSeccionada/aside.php';
?>


  <!-- =============================================== -->


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <form action="williamCRUDBaseDeDatos.php" method="post">
            <div class="row">            
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Practicing english</h3>

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
                  <?php
                          $link= mysqli_connect("localhost", "root", "", "crudbasededatos") or die('error en la conexcion ');
                          $query="select ID, present, past, participle, definition from palabras limit 5";
                          $result= mysqli_query($link, $query);                          
                  ?>
                    <table class="table table-hover">
                      <tr>                        
                        <th>Present tense</th>
                        <th>Past tense</th>
                        <th>Participle tense</th>
                        <th>definition</th>
                        <th></th>
                        <th></th>
                        <th>ID</th>
                      </tr>
                       <?php 
                              while ($william=mysqli_fetch_array($result,MYSQLI_ASSOC)) {                                
                                echo"<br> ";
                        ?>
                      <tr>                       
                        <td> <?php echo $william["present"]; ?> </td>
                        <td> <?php echo $william["past"]; ?> </td>
                        <td> <?php echo $william["participle"]; ?></td>                        
                        <td> <?php echo $william["definition"]; ?></td>
                        <td><a href="editarCRUD.php?ID=<?php echo $william["ID"] ?>"><button type="button" class="btn btn btn-primary" >editar</button></a>   </td>                  
                        <td>  <a href="williamCRUDeliminarDeLaBaseDeDatos.php?ID=<?php echo $william["ID"] ?>" ><button type="button" class="btn btn btn-danger" >eliminar</button> </a> </td>

>                        <td> <?php echo $william["ID"]; ?></td>



                        

                      </tr>
                      <?php 
                          }                            
                      ?>                                     
                    </table>

                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
             
            </div>
            <td> <button type="button" class="btn btn btn-primary">editar</button>  </td>












                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                          Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                La vida es bella 
                              </div>
                              <div class="modal-body">
                                <input type="text" name="">
                              </div>
                              <div class="modal-body">
                                <input type="text" name="">
                              </div>
                              <div class="modal-body">
                                ...
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>














  </form>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- footer -->
 <?php
include 'plantillaAdminSeccionada/footer.php';
?>
<!-- footer -->



  <!-- Control Sidebar derecha -->
  <?php
include 'plantillaAdminSeccionada/Control_Sidebar_derecha.php';
?>
  <!-- /.control-sidebar derecha-->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="AdminLTE-2.3.5/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="AdminLTE-2.3.5/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="AdminLTE-2.3.5/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="AdminLTE-2.3.5/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-2.3.5/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-2.3.5/dist/js/demo.js"></script>
</body>
</html>
