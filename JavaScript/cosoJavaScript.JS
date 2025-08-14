var nombre = "Yulitoo"; //Ambito de funcion (evitar)
let edad = 21; //Ambito de bloque (recomendado)
const PI = 3.1416; //Constate (inmutable)


let radio = prompt("Ingrese el radio del circulo");
let radioEnNumero = parseInt(radio);


function circuloAreaYPerimetro(radio){
    const perimetro = Math.PI * radio;
    const area = Math.PI * Math.pow(radio, 2);
    return {area: area.toFixed(2), perimetro: perimetro.toFixed(2)};
}

console.log(circuloArea(radio));