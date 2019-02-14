var q;
var b=document.getElementsByTagName('q');
function repeat1()
{
for(var j=0;j<b.length;j++)
{
  if(b[j].className=="visible1")
  {
    b[j].className="";
    q=j+1;
  }
}
if(q==b.length)
{
  q = 0;
}
b[q].className="visible1";
}
setInterval(repeat1,4000);
