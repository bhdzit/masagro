<section class="agromas_menu col-10 p-5">
	<center>
		<h1 id="titulo">Usuarios Registrados <i onclick="getPDF()"  class="ml-5 fas fa-file-pdf"></i></h1>
            <select onchange="getSelecteProd()"id="prod_sel" class="custom-select">
            
            <?php


            require_once ("./controller/controllergetRoleUser.php");
            $controller= new controllergetRoleUser();
               $list =  $controller->getRoles();
              
          echo "  <option selected value=\"*\">Todos</option>";
           while ($role=$list->fetch_assoc()) {
                   echo "<option value=\"".$role["ma_usu_roles_id"]."\">".$role["ma_usu_role_name"]."</option>";
               }

    
            ?>
          </select>
		<table id="tablereport" class="table table-striped"   border="1" style="background: #fff;"><thead  class="thead-dark"><tr><th>RFC</th><th>Usuario</th><th>Razón Social</th><th>Nombre Completo</th><th>Email</th><th>Eliminar</th></tr></thead><tbody id="tableUser"></tbody>
        </table>
    
</center>
</section>

<script type="text/javascript">
    function getUser(id){
          $("#tableUser").html("");  
        $.ajax({
            url:"./ajax/getUserInfo.php",
            type:"GET",
            data:{"id":id}
        }).done(function(res){
            if(res!=""){
            res=res.substring(0,res.length-1).split(";");
           // alert(res[0]);
            
            for(var i=0;i<res.length;i++){
                var usu=res[i].split(",");
                var html="<tr>"+
                         "<th ><a href=\"usuarioinfo/"+usu[0]+"\">"+usu[0]+"</a></th>"+
                         "<td>"+usu[1]+"</td>"+
                         "<td>"+usu[2]+"</td>"+
                         "<td>"+usu[3]+"</td>"+
                         "<td>"+usu[4]+"</td>"+
                         "<td><i class=\"fas fa-trash\"></i></td>"
                         "<tr>"
                 $("#tableUser").append(html)

            }
        }
     
        });
    }
    function getSelecteProd(){
   getUser($("#prod_sel").val());
    }


    function getPDF(){
   alert($("#titulo").text()+$("#tablereport").html());
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

    getUser("*");

</script>