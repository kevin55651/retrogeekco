var i = 0;

for(i=1; i<=100; i++)
{
  if(i % 3 == 0 && i % 5 == 0)
  {
    document.write("<center><strong>fizz-buzz</strong></center>");
  }
  else
  {
    if(i % 3 == 0)
    {
      document.write("<center><strong>fizz</strong></center>");
    }
    else
    {
      if(i % 5 == 0)
      {
        document.write("<center><strong>buzz</strong></center>")
      }
      else
      {
        document.write("<h1>" + i+ "</h1>");
      }
    }
  }
  //document.write("<br />");
}
