 <section class="agromas_menu col-10 table-responsive">
               <center>
                <h1>Productores<i onclick="getPDF" class="ml-5 fas fa-file-pdf"></i></h1>
        <table class="table table-striped"   border="1" style="background: #fff;">
          <thead class="thead-dark">
            <tr>
                <th>RFC</th>
                <th>Razón Social</th>
                <th>Representante</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>No. Trampas</th>
                
            </tr>
            </thead>

             <tbody>

    
            <?php
            require_once ("./controller/controllerProductores.php");
            $controller= new controllerProductores();
            $list=$controller->getProdutoresList();
                while ($prodcutor = $list->fetch_assoc()) { 

      //  echo "<script>alert(".$list->num_rows .")</script>";  
            

      
           echo '<tr class="fila_resaltada">
                <td><a href="productoresinfo/'.$prodcutor["ma_usu_rfc"].'">'.$prodcutor["ma_usu_rfc"].'</a></td>
                <td>'.$prodcutor["ma_usu_business_name"].'</td>
          <td>'.$prodcutor["ma_usu_name"]." ".$prodcutor["ma_usu_last_name"]." ".$prodcutor["ma_usu_sec_last_name"].'</td>
    <td>'.$prodcutor["ma_usu_mail"].'</td>
                <td>'.$prodcutor["ma_usu_tel"].'</td>
                <td><a href="trampas_provedor">#</a></td>';
              
        }
       
            ?>
           
        </tbody>
        </table>
    </center>
 </section>  
 <script type="text/javascript">
     function getPDF(){

     }
 </script>