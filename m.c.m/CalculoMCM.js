class CalculoMCM
{
  calcular(cant)
  {
    var arreglo = new Array(cant);
    var x = 0;
    var sum = 0;

    for(x=0; x < cant; x++)
    {
      sum++;
      arreglo[x] = parseInt(prompt("digite el numero " + sum));
    }

    document.write("el m.c.m de: ");

    if(cant == 0)
    {
      document.write("0 ");
    }

    for(x=0; x<cant; x++)
    {
      document.write(arreglo[x]  + ", ");
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
      }
      else
      {
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
    document.write(" = " + "<strong>" + cont + "</strong>");
  }
}
