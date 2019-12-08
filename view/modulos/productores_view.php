 <section class="agromas_menu col-10 table-responsive">
               <center>
                <h1  id="titulo">Productores<i onclick="getPDF()" class="ml-5 fas fa-file-pdf"></i></h1>
        <table  id="tablereport" class="table table-striped"   border="1" style="background: #fff;">
<thead class="thead-dark"><tr><th>RFC</th><th>Razón Social</th><th>Representante</th><th>Email</th><th>Teléfono</th><th>No. Trampas</th></tr></thead><tbody>

    
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
      var text=$("#tablereport").html();
text=text.replace("<th>Eliminar</th>","");
text=text.replace("\n","");
text=text.replace("<td><i class=\"fas fa-trash\"></i></td>"," ")
 
      var xhr = new XMLHttpRequest();
      xhr.open('get', "./ajax/genPDF.php?titulo="+$("#titulo").text()+"&data="+text, true);
      xhr.responseType = 'blob';
      xhr.onload = function(e) {

        if (this.status == 200) {

          var blob = new Blob([this.response], {type: 'application/pdf'});
          var link = document.createElement('a');
          link.href = window.URL.createObjectURL(blob);
          link.download = "report.pdf";
          link.click();
        }
      };

      xhr.send();


     }
 </script>