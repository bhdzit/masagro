<section class="agromas_menu col-10  p-5 ">
	<center>
		<h1 id="titulo">Reporte de Parcelas     <i onclick="getPDF()" class="ml-5 fas fa-file-pdf"></i></h1>
      <div class="form-row m-2  ">
        	<select onchange="getSelecteProd()" id="prod_sel" class="custom-select">
            
            <?php


            require_once ("./controller/controllerProductores.php");
            $controller= new controllerProductores();
         $list =  $controller->getProdutoresList();

          echo "  <option selected value=\"*\">Todos</option>";
      while ($productor = $list->fetch_assoc()) {
            echo "<option value=\"".$productor["ma_user_id"]."\">".$productor["ma_usu_name"]."</option>"; 
            }      

            ?>
          </select>
      </div>
<table id="tablereport" class="table table-striped"   border="1" style="background: #fff;"><thead  class="thead-dark"><tr><th>ID</th><th>NOMBRE</th><th>PRODUCTOR</th><th>Ubicacion</th><th>SUPERFICIE</th><th>OPCIONES</th></tr></thead><tbody id="tbodyreport"><tr><td colspan="6">No hay datoas que mostrar</td></tr>
  
  </tbody>
</table>
	</center>
</section>
<script type="text/javascript">
  var objeto;
  function getSelecteProd(){
    getData($("#prod_sel").val());
  }
  function getData(id){

  $.ajax({
    url:"./ajax/getParcelasReport.php",
    data:{"id":id},
    type:"GET"
  }).done(function(res){
    var a="";
    if(res!=""){
    res=res.substring(0,res.length-1).split(";");
    
    for(var i = 0; i<res.length;i++){
      var td=res[i].split(",");
      a+="<tr>"+
            "<th>"+td[0]+"</th>"+
            "<td>"+td[1]+"</td>"+
            "<td>"+td[2]+"</td>"+
              "<td>1</td>"+
            "<td>"+td[3]+"</td>"+
            "<td><i onclick=\"delectParce("+td[0]+")\" class=\"fas fa-trash-alt\"></i><i onclick=\"editParce("+td[0]+")\"  class=\"fas fa-edit\"></i></td> "+
            "</tr>";

    }
  }else{
    a="<tr><td colspan=\"6\">No hay datoas que mostrar</td></tr>"
  }
            $("#tbodyreport").html(a);
  });
}
function getPDF(){
//    alert($("#titulo").text()+$("#tablereport").html());
var text=$("#tablereport").html();
text=text.replace("th>OPCIONES</th>","");
text=text.replace("\n","");
text=text.replace("<td><i class=\"fas fa-trash-alt\"></i><i class=\"fas fa-edit\"></i></td>"," ")
 
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
function editParce(id){
  alert("Editar Parcela "+id); 
}
function delectParce(id){
  alert("Eliminar Parcela "+id);
  $.ajax({
    url:"./ajax/eliminarColumna.php",
    data:{"sql":"delete from ma_parcelas where ma_parce_id="+id+";"},
    type:"POST"
  }).done(function(res){
  alert(res);
  });
}
getData("*");
</script>