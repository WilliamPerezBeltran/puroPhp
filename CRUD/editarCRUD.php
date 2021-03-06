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
  <form action="archivoEditarBaseDeDatos.php?ID=<?PHP echo $_GET['ID'];?>" method="post">
            <div class="row">            
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Editar palabra</h3>

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
                      $query="select present, past, participle, definition from palabras where ID= ".$_GET['ID']."  ";
                      $result= mysqli_query($link, $query);
                      var_dump($result);
                      echo "<br>";
                      $convertirAarreglo=mysqli_fetch_array($result);
                      var_dump($convertirAarreglo);
                      ?>
 
                    <table class="table table-hover">
                      <tr>
                        
                        <th>Present tense</th>
                        <th>Past tense</th>
                        <th>Participle tense</th>
                        <th>definition</th>
                      </tr>
                      <tr>
                       
                        <td><input type="text" name="present" placeholder="give me the present tense" value=" <?php echo $convertirAarreglo['present']; ?> " ></td>
                        <td><input type="text" name="past" placeholder="give me the past tense" value=" <?php echo $convertirAarreglo['past']; ?> " ></td>
                        <td><input type="text" name="participle" placeholder="give me the participle tense" value="<?php echo $convertirAarreglo['participle']; ?>  " ></td>
                        <td><textarea name="definition" rows="4" cols="50"><?php echo $convertirAarreglo['present']; ?> </textarea></td>
                      </tr>
                      
                    </table>

                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
             
            </div>
            <button type="" class="btn btn btn-primary">submit</button>
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
