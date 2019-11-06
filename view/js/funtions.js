

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