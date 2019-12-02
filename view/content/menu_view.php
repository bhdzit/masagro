<?php 
    
    $item=explode("/",$_GET[views]);
    session_name("login_sesion");
    session_start();
                   
?>
<div id="arb-page" onclick="showOrHideMenu(this)"> <a href="#" class="fas fa-bars "><i></i></a></div>
<div id="arb-page-block" onclick="showOrHideMenu(this)"><i class="fas fa-arrow-left"></i></div>
            <div class="row">
            <div id="menu-contenier" class="col-2 d-none d-md-block col-md-2 p-0">
           
            <aside id="arb-aside" class="arb-maxagro-menu-cont ">
                <img src="<?php echo SERVERURL?>./view/img/MasAgro.png">
                <ul class="arb-maxagro-menu">
                <li class="arb-maxagro-menu-item<?php if($item[0]=="noticias") echo " li_active";?>"><a  href="<?php echo SERVERURL ?>noticias">Inicío</a></li>
                <li class="arb-maxagro-menu-item <?php if($item[0]=="informacion") echo " li_active";?>"><a href="<?php echo SERVERURL ?>informacion">Informacion</a></li>
                
                <li onclick="setSubmenu('parcelas-submenue-ul','agromas-submenue-span')" class="arb-maxagro-menu-item <?php if($item[0]=="parcelas") echo " li_active";?>"><a href="<?php echo SERVERURL?>parcelas">parcelas</a>
                    <span id="agromas-submenue-span"  class="fa fa-angle-left  pull-right-container" ></span>
                    <ul id="parcelas-submenue-ul" class="submenu">
                         <li class="arb-maxagro-menu-item"><a href="<?php echo SERVERURL ?>parcelasrep"><i class="fa fa-circle-o fa-xs"></i>Reporte</a></li>
                    </ul>
                </li>

                <li  onclick="setSubmenu('productores-submenue-ul','agromas-submenue-span')"  class="arb-maxagro-menu-item <?php if($item[0]=="productores") echo " li_active";?>"><a href="<?php echo SERVERURL ?>productores">Productores</a> 
                    <span id="agromas-submenue-span"class="fa fa-angle-left pull-right-container" ></span>
                    <ul id="productores-submenue-ul" class="submenu ">
                        <li class="arb-maxagro-menu-item"><a href="<?php echo SERVERURL ?>productoresinfo"><i class="fa fa-circle-o fa-xs"></i>Informacion</a></li>
                    </ul>
                </li>

                <li onclick="setSubmenu('trampas-submenue-ul','agromas-submenue-span')" class="arb-maxagro-menu-item <?php if($item[0]=="trampas") echo " li_active";?>"><a href="<?php echo SERVERURL ?>trampas">Trampas</a>
                    <span id="agromas-submenue-span"  class="fa fa-angle-left pull-right-container" ></span>
                     <ul id="trampas-submenue-ul" class="submenu">
                        <li class="arb-maxagro-menu-item <?php if($item[0]=="usuarios") echo " li_active";?>"><a href="<?php echo SERVERURL ?>instalartrampa"><i class="fa fa-circle-o fa-xs"></i>Instalar</a></li>
                        <li class="arb-maxagro-menu-item"><a href="<?php echo SERVERURL ?>inventariotrampas"><i class="fa fa-circle-o fa-xs"></i>Inventario</a></li>
                    </ul>
                 </li>

                <li onclick="setSubmenu('usu-submenue-ul','agromas-submenue-span')" class="arb-maxagro-menu-item"><a href="<?php echo SERVERURL ?>usuarios">Usuarios</a>
                    <span id="agromas-submenue-span"  class="fa fa-angle-left pull-right-container" ></span>
                    <ul id="usu-submenue-ul" class="submenu">
                        <li class="arb-maxagro-menu-item"><a href="<?php echo SERVERURL ?>buscar"><i class="fa fa-circle-o fa-xs"></i>Buscar</a></li>
                        
                    </ul>
                </li> 

                <li class="arb-maxagro-menu-item"><a href="<?php
                //session_unset();
                echo SERVERURL ?>logout">Salir</a></li>

                </ul>

             <div class="arb-footer" >
              
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                         <center>
                                          <p><small>© 2019 hecho por <a href="http://arbsoluciones.com">LAMP</a></small></p>
                                         </center>
                                    </div>
               
            </aside>
        </div>