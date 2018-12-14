function comparar(){
	var pass=$("#pass").val();
    var repass=$("#repass").val();
    if( pass !== repass ){
    	$("#nocoinciden").show();
    	$("#botonaceptar").hide();
    }
    else{
    	$("#nocoinciden").hide();
    	$("#botonaceptar").show();	
    }
}