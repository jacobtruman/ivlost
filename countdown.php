<SCRIPT LANGUAGE="JAVASCRIPT">
function start()
{
setup(document.forms["form1"].time2.value,"form1");
repeat()
}


function repeat() 
{
down("form1");
setTimeout("repeat()",1000);
}

function setup(day,box)
{
today = (new Date()).getTime();
the_day = (new Date(day)).getTime();
time = (the_day - today);
document.forms[box].time2.value=time;
}

function down(box)
{
document.forms[box].time2.value = document.forms[box].time2.value - 1000;
time = document.forms[box].time2.value;
days = (time - (time % 86400000)) / 86400000;
time = time - (days * 86400000);
hours = (time - (time % 3600000)) / 3600000;
time = time - (hours * 3600000);
mins = (time - (time % 60000)) / 60000;
time = time - (mins * 60000);
secs = (time - (time % 1000)) / 1000;
if(days==1) out = "1 day, ";
else out = days+" days, ";
if(hours < 10) out = out+"0";
out = out+hours+":";
if(mins < 10) out = out+"0";
out = out+mins+":";
if(secs < 10) out = out+"0";
out = out+secs;
if(days+hours+mins+secs> 1) document.forms[box].time.value = out;
else document.forms[box].time.value = ("wait");
}
// I'm back! -->
</SCRIPT>

<body>
<center>
<FORM name="form1">
<input type="text" name="time" size="18" value=" " class='countdown'> til the end of the world :)
<input type="hidden" name="time2" size="0" value="October 16, 2005 19:30:15">
</FORM>
</center>
<SCRIPT> start(); </SCRIPT>
</body>