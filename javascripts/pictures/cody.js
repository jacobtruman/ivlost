// CODY WYOMING PICTURES //
{
var codydesc1='Lotta Snow'
var codydesc2='Big Ram'
var codydesc3='Testerman, Me and Nettles'
var codydesc4='Gizmo Furbie'

function codypic_01(pic,loc,locn,pno){
if(pno != 'orig'){
temp = "midd.php";
}else{
temp = "../midd.php";
}
window.open(temp+"?pic="+pic+"&loc="+loc+"&locn="+locn+"&desc="+codydesc1+"&lend=yes&rend=no","midd");
}
function codypic_02(pic,loc,locn,pno){
if(pno != 'orig'){
temp = "midd.php";
}else{
temp = "../midd.php";
}
window.open(temp+"?pic="+pic+"&loc="+loc+"&locn="+locn+"&desc="+codydesc2+"&lend=no&rend=no","midd");
}
function codypic_03(pic,loc,locn,pno){
if(pno != 'orig'){
temp = "midd.php";
}else{
temp = "../midd.php";
}
window.open(temp+"?pic="+pic+"&loc="+loc+"&locn="+locn+"&desc="+codydesc3+"&lend=no&rend=no","midd");
}
function codypic_04(pic,loc,locn,pno){
if(pno != 'orig'){
temp = "midd.php";
}else{
temp = "../midd.php";
}
window.open(temp+"?pic="+pic+"&loc="+loc+"&locn="+locn+"&desc="+codydesc4+"&lend=no&rend=yes","midd");
}
}