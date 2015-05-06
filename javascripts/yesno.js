function getInfo() {
doyou = confirm("Do you like ivlost.com? (OK = Yes   Cancel = No)"); //Your question.

if (doyou == true)
alert("Cool!"); //If your question is answered Yes.

if (doyou == true)
return (false)
//window.location="../main.php";

else

if (doyou == false)
alert("Well then, go away!"); //If your question is answered No.

if (doyou == false)
//history.go(-1); //After answered No, the action. (In < this < case, it sends you back 1 page!)
window.location="../lost.php";
}

getInfo();