 <section class="agromas_menu col-10 table-responsive">
               <center>
                <h1>Productores</h1>
        <table class="table table-striped"  border="1" style="background: #fff;">
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
            $controller->getProdutoresList();
       
            ?>
           
        </tbody>
        </table>
    </center>

            </section>  