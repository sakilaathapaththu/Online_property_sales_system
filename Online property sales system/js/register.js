/*password fun*/

function checkpassword(){
	if(document.getElementById("pwd").value!=document.getElementById("conform").value)
		{
			alert("Password Mismatch!!");
			return false;
	}
	else{ alert("Registration success!");
		return true;

	}

}
function enableButton(){
	if(document.getElementById("checkBox").checked){
		document.getElementById("submitbtn").disabled=false;
	}else{
		document.getElementById("submitbtn").disabled=true;
	}
}