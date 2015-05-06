// COWLEY WYOMING PICTURES //
{
var cowleydesc1='Me, Kimmy and Caswell'
var cowleydesc2='Me and Caswell'

function cowleypic_01(pic,loc,locn,pno){
if(pno != 'orig'){
temp = "midd.html";
}else{
temp = "../midd.html";
}
window.open(temp+"?pic="+pic+"&loc="+loc+"&locn="+locn+"&desc="+cowleydesc1+"&lend=yes&rend=no","midd");
}
function cowleypic_02(pic,loc,locn,pno){
if(pno != 'orig'){
temp = "midd.html";
}else{
temp = "../midd.html";
}
window.open(temp+"?pic="+pic+"&loc="+loc+"&locn="+locn+"&desc="+cowleydesc2+"&lend=no&rend=yes","midd");
}
}