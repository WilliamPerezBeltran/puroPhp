<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      div{
        
        float: left;
        border:1px solid black;
      }

      .pagina{
        margin-left:20px; 
      }

      .header{

        width: 1000px;
        height: 100px;
        

      }

      .nav{
        width: 1000px;
        height: 300px;
        clear: left;
      }

      #basic-addon1{
        width: 100px;
      }
      #randonBoton{
        clear: left;
        
      }

      #palabraRando{
        clear: left;
        margin-top: 5px;
      }

      #textArea{
        margin-left: 125px;
        margin-bottom: 20px;
      
       
        
      }

      .barSide{
        width: 200px;
        height: 2000px;
        clear: left;
      }

      .contenido{
        width: 800px;
        height: 2000px;
       
        
      }
      .divBotonEnviar{


      }
      .divDelContenido{
        width: 200px;
        height: 50px;
        margin-left: 10px;
        margin-top: 10px;
      }

      #divQueContienelos3div{
        
        margin-left: 90px;
        margin-top: 5px;
        
      }

      #divtext{
        margin-left: 90px;
        margin-top: 5px;
      }

      #textAreaDelContenido{
        margin-left: 100px;
        margin-bottom: 20px;
      
       
        
      }



      
    </style>





  </head>
  <body>





  <div class="pagina">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>hey bro!</strong> ALways in life you have to think before you act.
        </div>






        <div class="header" class="bg-primary" >
            <h1 class="text-center" class="bg-primary"> Practicing english</h1>
        </div>

        <div class="nav">
            <div id="randonBoton">
              <button type="button" class="btn btn-primary btn-lg " id="botonRando">Randon word</button>
            </div>

            <div id="palabraRando">
                <div class="input-group">
                    
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>
            </div>   

            

                <div id="textArea">
                   <label for="comment" id=""></label>
                   <textarea class="form-control"  id="comment"
                   rows="10" cols="90" placeholder="word definition"></textarea>                  
                </div>
                       
               
              

           

            
        </div>
        <div class="barSide">barSide



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
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

           <form action="inglesBaseDeDAtos.php" method="get">
                  <h4 class="text-center" class="bg-primary"> Present Tense</h4>            
                  <input name="presentTense" type="text" class="form-control" placeholder="Text input" value="">
                  <h4 class="text-center" class="bg-primary"> Past tense</h4>            
                  <input name="pastTense" type="text" class="form-control" placeholder="Text input" value="">
                  <h4 class="text-center" class="bg-primary"> Participle tense</h4>            
                  <input name="participleTense" type="text" class="form-control" placeholder="Text input" value="">
                  
                  <button type="submit" class="btn btn-primary">Guardar en la base de datos </button>
            </form>


        </div>




        <div class="contenido">contenido


         <div id="divtext">


                    <div class="divDelContenido">
                        <div id="randonBoton">
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                         </div>                  
                    </div>

                    <div class="divDelContenido">
                        <div id="randonBoton">
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                         </div>                  
                    </div>

                    <div class="divDelContenido">
                        <div id="randonBoton">
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                         </div>                  
                    </div>
          </div>


          <div id="divQueContienelos3div">
                      <div class="divDelContenido">
                          <div id="divBotonEnviar">
                              <button type="button" class="btn btn-primary btn-lg " id="divBotonEnviar">ENVIAR</button>
                           </div>                  
                      </div>                   
                      
            </div>







          <div id="divQueContienelos3div">
                    <div class="divDelContenido">
                        <div id="randonBoton">
                            <button type="button" class="btn btn-primary btn-lg " id="botonRando">Randon word</button>
                         </div>                  
                    </div>

                    <div class="divDelContenido">
                        <div id="randonBoton">
                            <button type="button" class="btn btn-primary btn-lg " id="botonRando">Randon word</button>
                         </div>                  
                    </div>

                    <div class="divDelContenido">
                        <div id="randonBoton">
                            <button type="button" class="btn btn-primary btn-lg " id="botonRando">Randon word</button>
                         </div>                  
                    </div>
          </div>


          <div id="textAreaDelContenido">
                   <label for="comment" id=""></label>
                   <textarea class="form-control"  id="comment"
                   rows="30" cols="90" placeholder="examples many examples my friend HERE IN THIS PART"
                   ></textarea>                  
                </div>
                       



          

        </div>    
  </div>

      
      

  

<!-- aqui va lo otro oeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->

 <div>

           <form action="inglesBaseDeDAtos.php" method="get">
 
              <h3>Nombres</h3><input type="text" name="firstName" maxlength="50" placeholder="Primer nombre" autofocus="autofocus">  <input type="text" name="SecondName" maxlength="50" placeholder="segundo nombre">
              <h3>Apellidos</h3><input type="text" name="apellidos" maxlength="50" placeholder="primer apellido">  <input type="text" name="segundoApellido" maxlength="50" placeholder="Segundo apellido">
              <h3>celular</h3><input type="number" name="celular" placeholder="Ingrese su celular" ><br>
              <h3>e-mail</h3><input type="email" name="email" placeholder="ingrese su e-mail"><br>

           
              <h3>Como encontro nuestra pagina de internet</h3>
              
              <label for="internet">Internet</label>
              <input type="radio" name="radioInternet" id="internet">

              <label for="facebook">facebook</label>
              <input type="radio" name="radioFacebook" id="internet">

              <label for="television">television</label>
              <input type="radio" name="radioTelevision" id="radioTelevision">

              <label for="radio">Radio</label><br>
              <input type="radio" name="radioRadio" id="radio">

              <label for="otro">Otro</label>
              <textarea  placeholder="indique otro medio "></textarea><br><br>


              <h3>Recomendaria la pagina</h3>
              
              <label for="recomendacion">Si</label>
              <input type="radio" name="recomendacion" id="recomendacion" value="Si"  >

              <label for="recomendacion">No</label>
              <input type="radio" name="recomendacion" id="recomendacion" value="No">

              

              <h3>Enumere por favor los servicios que utilizaria</h3>
              <textarea rows="11" cols="50" placeholder="escribir aqui"></textarea>
              
             <table></table>
              <button>Enviar Datos</button>


              



   </div>



   <div>


        <h3>Le fue facil navegar por la pagina web</h3>
        <label for="si">Si</label>
        <input type="radio" name="radioSi" id="si" ">

        <label for="no">No</label>
        <input type="radio" name="radioNo" id="no" ">

        <label for="Maso">Mas o menos </label>
        <input type="radio" name="Maso" id="Maso" "><br>
        <textarea placeholder="Que fue lo que mas le parecio dificil "></textarea>

        <h3>Indique su fecha de nacimiento</h3>
        <input type="date" name=""><br><br>

        <h3>Indique su deporte favorito </h3>
        <label for="natacion">Natacion</label>
        <input type="radio" name="deporte" id="natacion" value="natacion">
        <label for="futbol">futbol</label>
        <input type="radio" name="deporte" id="futbol" value="futbol">
        <label for="basketball">basketball</label>
        <input type="radio" name="basketball" id="basketball" ">
        <label for="atletismo">atletismo</label>
        <input type="radio" name="atletismo" id="atletismo" ">
        <h3>Especifique con sus palabras la utilidad de esta pagina </h3>
        <textarea rows="6" cols="60" placeholder="escriba aqui"></textarea><br>
        <h3>Cómo valora las carateristicas a la hora de comprar</h3><br>



        <table id="t01" >  
                  <td>     </td> <td>importante  </td> <td>poco importante</td> <td>nada importante</td><td>sustancial  </td> <td>caracteristico</td> <td>feliz</td>

                  <tr>
              <td>Precio</td>
              <td><input type="radio" name="precio" value="importante"></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>                         
            </tr>
            <tr>
              <td>tamana</td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>                         
            </tr>
            <tr>
              <td>diseno</td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>                         
            </tr>
            <tr>
              <td>calidad</td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td> 
              <td><input type="radio" name=""></td>
              <td><input type="radio" name=""></td>                         
            </tr>

            

            
        </table><br><br><br>

        <button>Enviar Datos</button>

       

        </form>

   </div>



<!-- aqui va lo otro oeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->






















































    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>