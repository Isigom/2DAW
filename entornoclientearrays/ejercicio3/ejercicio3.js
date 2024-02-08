/*Teniendo un array muy grande con elementos de la siguiente estructura: 
“28924;Estepona”
Crea un texto y un botón que ponga buscar que muestre el CP y el nombre de la ciudad que coincida 
o contenga el texto del campo creado. No importan las mayúsculas y minúsculas en la búsqueda*/

//Creo un array donde introduzco los datos, en este caso código postal y ciudad.
var datos = [
  "28924:Estepona",
  "28001:Madrid",
  "08001:Barcelona"
];

// creo una función llamada buscar. Esta función será llamada cuando se realice la acción de buscar y mostrara el resultado.

function buscar() {
  // Creo las variable en la que introduzco el contenido de mi label y el contenido de mi div de HTML.
  var contenido = document.getElementById("buscarDentro").value.toLowerCase();
  var resultados=document.getElementById("resultado");

  /* creo una variable de tipo boolean y lo inicializo a false. Esta variable la utilizaré para controlar 
  si se ha encontrado una coincidencia durante la búsqueda en el array.*/
  var encontrada = false;

  /*Utilizo un bucle forEach para recorrer cada elemento del array datos. En cada iteración, se divide 
  la cadena en código postal y ciudad utilizando split(":"). 
  utilizo split (":") para dividir la cadena dato en dos partes en cada aparición del carácter
  ":" (dos puntos). Esto me devuelve un array en dos partes. 
  La primera parte del array ([0]) sería el código postal,
  la segunda parte ([1]) sería el nombre de la ciudad.*/


  datos.forEach(function(dato){
      var ciudad = dato.split(":")[1];

      /*Si la ciudad coincide con el contenido introducido (ignorando mayúsculas y minúsculas), 
      se actualiza el contenido del elemento con id "resultado" con la información del código postal y la ciudad.*/
      if(contenido===ciudad.toLocaleLowerCase()){
          resultados.textContent = "CP: " + dato.split(":")[0] + " Ciudad: " + dato.split(":")[1];

          // La variable encontrada se establece en true para indicar que se encontró una coincidencia.
          encontrada = true;
      }

  });
      //Si no se encontra ninguna coincidencia, se actualiza el contenido del elemento con id "resultado" 
      // con el mensaje "no hay resultado"
      if(!encontrada){
        resultados.textContent = "no hay resultado";
      }


}



    
  

 
  