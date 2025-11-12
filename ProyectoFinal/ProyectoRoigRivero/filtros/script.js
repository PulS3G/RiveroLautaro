document.getElementById("filtrosForm").addEventListener("submit", async (e) => {
  e.preventDefault();

  console.log("Intentando fetch...");
const res = await fetch("api_filtros.php");
console.log("Respuesta del fetch:", res.status);
  const formData = new FormData(e.target);
  try {
    const res = await fetch("api_filtros.php", {
      method: "POST",
      body: formData,
    });
    const data = await res.json();

console.log("Respuesta del servidor:", data);
    const contenedor = document.getElementById("resultado");
    contenedor.innerHTML = "";

    if (data.success && data.data.length > 0) {
      data.data.forEach(moto => {
        const card = document.createElement("div");
        card.classList.add("moto-card");
        card.innerHTML = `
          <h3>${moto.nombre}</h3>
          <p>Combustible: ${moto.combustible} L </p>  
          <p>Potencia: ${moto.potencia} HP </p> 
          <p>Tipo: ${moto.tipo}  </p> 
          <p>Presupuesto: ${moto.presupuesto}  </p> 
          <p>Cilindrada: ${moto.cilindrada}  </p>
          <p>Peso: ${moto.peso} KG </p> 
            </div>
              <img src="${moto.ruta_imagen}" alt="${moto.nombre}" class="moto-img">
          </div>
          `;
        contenedor.appendChild(card);
      });
    } else {
      contenedor.innerHTML = "<p>No se encontraron resultados.</p>";
    }
  } catch (error) {
    console.error("Error cargando resultados:", error);
  }
});
