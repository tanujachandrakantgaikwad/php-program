function addition(obj)
{
 var  XHRobj=new XMLHttpRequest();

var str1= "t1=" + document.getElementById("t1").value;
var str2= "&t2=" + document.getElementById("t2").value;


XHRobj.onreadystatechange = show;
XHRobj.open('POST', 'add.php', true);
XHRobj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XHRobj.send(str1+str2);

function show()
{
if (XHRobj.readyState == 4)
{
if (XHRobj.status == 200)
{
result = XHRobj.responseText;
document.getElementById('div1').innerHTML = result;
}}}} 