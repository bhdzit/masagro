<section class="agromas_menu col-10  p-5 ">
	<center>
		<h1>Reporte de Parcelas     <i class="ml-5 fas fa-file-pdf"></i></h1>
      <div class="form-row m-2  ">
        	<select onchange="getSelecteProd()"id="prod_sel" class="custom-select">
            
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
<table  class="table table-striped"   border="1" style="background: #fff;">
  <thead  class="thead-dark">
    <tr>
      <th>ID</th>
      <th>FECHA DE REGISTRO</th>
      <th>ESTADO</th>
      <th>LATITUD</th>
      <th>LONGITUD</th>
      <th>MARIPOSAS ATRAPADAS</th>
       <th>ELIMINAR</th>
    </tr>
  </thead>
  <tbody id="tbodyTramp">
    
  </tbody>
</table>
</center>
</section>
<script type="text/javascript">
  function getTramps(id){
   $.ajax({
   url:"./ajax/getTrampasInfo.php",
   data:{"id":id},
   type:"GET"
   }).done(function(res){
   // alert(res);
    if(res!=""){
    res=res.substring(0,res.length-1).split(";");
 
    var html="";
    for(var i=0;i<res.length;i++){
         var tramp=res[i].split(",");
      html+="<tr>"
          +"<th>"+tramp[0]+"</th>"
          +"<td>"+tramp[1]+"</td>"
          +"<td>"+tramp[2]+"</td>"
          +"<td>"+tramp[3]+"</td>"
          +"<td>"+tramp[4]+"</td>"
          +"<td>"+tramp[5]+"</td>"
          +"<td></td>"
          +"</tr>";

    }
    $("#tbodyTramp").html(html);
   }else{
    $("#tbodyTramp").html("");
   }
   }); 

  }
  function getSelecteProd(){
    getTramps($("#prod_sel").val());
  }
  getTramps("*");
  
</script>
