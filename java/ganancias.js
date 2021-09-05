function calcular(){
	
    var vc = document.form1.vc.value;
	var pu = document.form1.pu.value;
	var pi = document.form1.pi.value;
	v1=parseFloat(vc)*parseFloat(pu)/100;
	v1=parseFloat(vc)+parseFloat(v1);
	v2=parseFloat(v1)*parseFloat(pi)/100;
	rventa=parseFloat(v1)+parseFloat(v2);
	document.form1.vv.value=rventa;
	rganancia=parseFloat(vc)*parseFloat(pu)/100;
	document.form1.vg.value=rganancia;
	
}






