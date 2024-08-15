// script.js
document.getElementById('formulario-medallas').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que se recargue la página al enviar el formulario
    
    const pais = document.getElementById('pais').value;
    const oro = parseInt(document.getElementById('oro').value, 10);
    const plata = parseInt(document.getElementById('plata').value, 10);
    const bronce = parseInt(document.getElementById('bronce').value, 10);
    const total = oro + plata + bronce;
    
    const tabla = document.getElementById('medallero').getElementsByTagName('tbody')[0];
    
    const nuevaFila = tabla.insertRow();
    const celdaPais = nuevaFila.insertCell(0);
    const celdaOro = nuevaFila.insertCell(1);
    const celdaPlata = nuevaFila.insertCell(2);
    const celdaBronce = nuevaFila.insertCell(3);
    const celdaTotal = nuevaFila.insertCell(4);
    
    celdaPais.textContent = pais;
    celdaOro.textContent = oro;
    celdaPlata.textContent = plata;
    celdaBronce.textContent = bronce;
    celdaTotal.textContent = total;
    
    // Limpiar los campos del formulario
    document.getElementById('formulario-medallas').rese