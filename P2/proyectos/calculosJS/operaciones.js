
function operacion()
{
   let n1,n2,tipoope,ope,resul;

   n1=parseFloat(document.getElementById("n1").value);
   n2=parseFloat(document.getElementById("n2").value);
   tipoope=document.getElementById("tipo").value;

   if (isNumber(n1) && isNumber(n2))
   {
      switch (tipoope)
      {
         case "+":ope=n1+n2;break;
         case "-":ope=n1-n2;break;
         case "*":ope=n1*n2;break;
         case "/":ope=n1/n2;break;
      }
   
      resul=document.getElementById("resultado").innerHTML=`<h2>${n1} ${tipoope} ${n2} = ${ope}</h2>`
   }
   else
   {
      resul=document.getElementById("resultado").innerHTML=`<h2>Ingresa solo numeros ...</h2>`
      alert('Ingresa solo numeros ...');
   }

}

function isNumber(n)
{
   return !isNaN(parseFloat(n) && isFinite(n))
}