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
      <th>NOMBRE</th>
      <th>PRODUCTOR</th>
      <th>Ubicacion</th>
      <th>SUPERFICIE</th>
      <th>OPCIONES</th>
    </tr>
  </thead>
  <tbody id="tbodyreport">
    <tr>
      <th><a href="<?php echo SERVERURL?>parcelasmap/1">1</a></th>
      <td>PARCELA 1</td>
      <td>PRODUCTOR 1</td>
      <td>PROGRESO</td>
      <td>10 hect</td>
      <td><i class="fas fa-trash-alt"></i>      <i class="fas fa-edit"></i></td> 
    </tr>

    <tr>
      <th><a href="<?php echo SERVERURL?>parcelasmap/2">2</a></th>
      <td>PARCELA 2</td>
      <td>PRODUCTOR 2</td>
      <td>PROGRESO</td>
      <td>20 hect</td>
      <td><i class="fas fa-trash-alt"></i>      <i class="fas fa-edit"></i></td> 
    </tr>
    
    <tr>
      <th><a href="<?php echo SERVERURL?>parcelasmap/3">3</a></th>
      <td>PARCELA 3</td>
      <td>PRODUCTOR 3</td>
      <td>PROGRESO</td>
      <td>30 hect</td>
      <td><i class="fas fa-trash-alt"></i>      <i class="fas fa-edit"></i></td> 
    </tr>


     <tr>
      <th><a href="<?php echo SERVERURL?>parcelasmap/4">4</a></th>
      <td>PARCELA 4</td>
      <td>PRODUCTOR 4</td>
      <td>PROGRESO</td>
      <td>40 hect</td>
      <td><i class="fas fa-trash-alt"></i>      <i class="fas fa-edit"></i></td> 
    </tr>
    <?php ?>
  </tbody>
</table>
	</center>
</section>
<script type="text/javascript">
  function getSelecteProd(){
    getData($("#prod_sel").val());
  }
  function getData(id){

  $.ajax({
    url:"./ajax/getParcelasReport.php",
    data:{"id":id},
    type:"GET"
  }).done(function(res){
    res=res.substring(0,res.length-1).split(";");
    var a="";
    for(var i = 0; i<res.length;i++){
      var td=res[i].split(",");
      a+="<tr>"+
            "<th>"+td[0]+"</th>"+
            "<td>"+td[1]+"</td>"+
            "<td>"+td[2]+"</td>"+
              "<td>1</td>"+
            "<td>"+td[3]+"</td>"+
            "<td><i class=\"fas fa-trash-alt\"></i><i class=\"fas fa-edit\"></i></td> "+
            "</tr>";
    }
            $("#tbodyreport").html(a);
  });
}
getData("*");
</script>