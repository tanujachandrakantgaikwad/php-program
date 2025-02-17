function display(obj)
{
 var  XHRobj=new XMLHttpRequest();


 XHRobj.onreadystatechange = show;
XHRobj.open('POST', 'File1.php', true);
XHRobj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XHRobj.send();

function show()
{
if(XHRobj.readyState == 4)
{
  if (XHRobj.status == 200)
  {
    result = XHRobj.responseText;
    document.getElementById('aa').innerHTML = result;
  }
 }
 }
} 