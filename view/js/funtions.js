

function validarForm(){
	return false;
}
function modificarDatosEmpresa(){
	var inputs=document.getElementsByTagName("input");
	for(var i=0;i<inputs.length;i++){
		inputs[i].removeAttribute("readonly", false);
		console.log(inputs[i]);			
	}
	document.getElementById("btnCancelar").removeAttribute("hidden",false);
	document.getElementById("btnGurdar").removeAttribute("hidden",false);
	document.getElementById("btnModificar").setAttribute("hidden",true);

};
function cancelarModificacion(){
	var inputs=document.getElementsByTagName("input");
	for(var i=0;i<inputs.length;i++){
				inputs[i].setAttribute("readonly", true);
			console.log(inputs[i]);			
	}
	document.getElementById("btnCancelar").setAttribute("hidden",true);
	document.getElementById("btnGuradar").setAttribute("hidden",true);
	document.getElementById("btnModificar").removeAttribute("hidden",false);
};
function evtModificationbtn(){
	var btnModificar=document.getElementById("btnModificar");
	btnModificar.classList.add("d-none");

	var btnGuardar=document.getElementById("btnGuardar");
	btnGuardar.classList.remove("d-none");

	var btnCancelar=document.getElementById("btnCancelar");
	btnCancelar.classList.remove("d-none");
}

function setSubmenu(ulsubmenu,ulspan){
					
					var submenu=document.getElementById(ulsubmenu);
					var span=document.getElementById(ulspan);					
					if(submenu.style.display!=="block"){
					submenu.style.display ="block";
					span.classList.replace("fa-sort-down","fa-sort-up");
					}
					
					else{
						span.classList.replace("fa-sort-up","fa-sort-down");
						submenu.style.display ="none";	
					}
				
};

function showMenu(){
    var fab=document.getElementById("arb-aside");
    fab.style.marginLeft="100px";
	console.log("sdasdasd");
}

var formlogin;
var button ;
function showLogin(){
	
	formlogin=document.getElementById("masagro-login");
	formlogin.className ='arb-agro-login  col-12 col-sm-6 d-md-block col-md-4 d-none pt-5 pb-5 ';
 	button = document.getElementById("toggle");
 	button.innerHTML="<i class=\"fas fa-minus\"></i>";
 	button.onclick=hideLogin;
	formlogin.style.WebkitAnimation = "animationLogin 2s 1";
	formlogin.addEventListener("webkitAnimationEnd", myEndFunction);
}
function myEndFunction() {
	//console.log(formlogin.style);
	formlogin.style.WebkitAnimation="";
	if(button.onclick===showLogin){
		console.log("asdasdasd");
		formlogin.className ="arb-agro-login d-none ";
	}


}
function hideLogin(){
	button.onclick=showLogin;
	button.innerHTML= "<i class=\"fas fa-user\"></i>";
	formlogin.style.WebkitAnimation = "animationHideLogin 2s 1";

}