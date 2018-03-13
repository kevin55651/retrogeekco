class CalculoMCM
{
  calcular(cant)
  {
    var arreglo = new Array(cant);
    var a = new Array(cant);
    var x = 0;

    for(x=0; x < cant; x++)
    {
      var sum = x + 1;
      if(parseInt(arreglo[x] = prompt("digite el numero " + sum)) > 0)
      {
        a[x] = arreglo[x];
        console.log(a[x]);
      }else{
        arreglo[x] = 0;
        a[x] = arreglo[x];
      }
    }

    var i = 2, j = 0, suma = 0, cont = 1, divisible = 0;

    if(cant > 0)
    {
    do
    {
      j = 0;
      do
      {
        if(arreglo[j] % i == 0)
        {
          arreglo[j] = arreglo[j] / i;
          divisible = divisible + 1;
        }
        suma = suma + arreglo[j];
        j++;
      } while(j != cant);

      if(divisible == 0)
      {
        i++;
      }else{
        divisible = 0;
        cont = cont * i;
      }

      if(suma > cant)
      {
        suma = 0;
      }
    }while(suma != cant);
  }
  else
  {
    cant = 0;
    cont = 0;
  }

    document.write("el m.c.m de ");
    for(x=0; x<cant; x++)
    {
      document.write(a[x]  + ", ");
    }
    document.write("es de: " + "<strong>" + cont + "</strong>");
  }
}
