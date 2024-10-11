// Hola
/*
comentario de varias líneas
*/

// alert("HOLA soy un alert")

// Variables

var nombre = "Fco Javier Vazquez Sandoval";

// Recomendado
let nombre21 = "nombre2";

// Variables
var nombre = "JAVIER";
let nombre2 = "AJA";
let edad = 20;
let estatura = 1.80;
let logico = true;

// Mostrar en consola
console.log("Hola estoy en la consola");
console.log("Hola tengo " + edad + " años");

// Mostrar en pantalla con document.write
document.write("Hola estoy en la pantalla <br>");
document.write("<h2>Hola tengo " + edad + " años</h2>");

// Mostrar en pantalla con getElementById
let datos = document.getElementById("informacion");
datos.innerHTML = "Hola este es el contenido de innerHTML";
datos.innerHTML += "<hr><h3>Hola este es el contenido de innerHTML</h3>";
datos.innerHTML += "<hr><h3>Mido: " + estatura + " metros</h3>";

datos.innerHTML += `
<br>
<hr>
<h1>Hola, soy contenido de innerHTML. Mi nombre es: ${nombre} 
y mi estatura es: ${estatura} metros</h1>
`;

// Condicionales
if (edad >= 18)
    datos.innerHTML += `
    <hr>
    Soy mayor de edad
    <hr>
    `;
else
    datos.innerHTML += `<hr> Soy menor de edad<hr>`;

// Ciclos

for (let i = 1; i <= 5; i++) {
    datos.innerHTML += `<hr><h3>El número es ${i}</h3>`;
}

let i = 1;
while (i <= 1) {
    datos.innerHTML += `<hr><h3>El número es ${i}</h3>`;
    i++;
}

i = 1;
do {
    datos.innerHTML += `<hr><h3>El número es ${i}</h3>`;
    i++;
} while (i <= 5);

// Funciones 

// 1.- Función que no recibe parámetros y no regresa valor
function suma1() {
    let n1 = 2;
    let n2 = 3;
    let suma = n1 + n2;
    datos.innerHTML += `<hr><h3>El resultado de la suma1 es: ${suma}</h3>`;
}
suma1();

// 2.- Función que no recibe parámetros y regresa valor
function suma2() {
    let n1 = 2;
    let n2 = 3;
    let suma = n1 + n2;
    return suma;
}
let sum = suma2();
datos.innerHTML += `<hr><h3>El resultado de la suma2 es: ${sum}</h3>`;

// 3.- Función que recibe parámetros y no regresa valor
function suma3(numero1, numero2) {
    let n1 = numero1;
    let n2 = numero2;
    let suma = n1 + n2;
    datos.innerHTML += `<hr><h3>El resultado de la suma3 es: ${suma}</h3>`;
}
suma3(4, 4);




let animales=[];
animales[0]="perro";
animales[1]="gato";
animales[2]="Ave";

let animales2=["Tigre","Leon","Elefante"];
for(let i=0;i<3;i++)
{
    datos.innerHTML+=`<hr> <h1>El animal es ${animales[i]}</h1>`
}

animales2.forEach(element =>{
    datos.innerHTML+=`<hr> <h1>El animal es ${element}</h1>`
})