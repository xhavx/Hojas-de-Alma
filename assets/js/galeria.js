// Forzamos al navegador a esperar que todo el diseño e imágenes carguen por completo
window.addEventListener("load", () => {
    
    // Seleccionamos la tarjeta
    const tarjetas = document.querySelectorAll(".tarjeta-producto");
    
    console.log("Tarjetas encontradas por JavaScript:", tarjetas.length); // Verificación

    tarjetas.forEach((tarjeta) => {
        tarjeta.addEventListener("click", (evento) => {
            // Buscamos el contenedor interno tridimensional de la tarjeta actual
            const tarjetaInnerActual = tarjeta.querySelector(".tarjeta-inner");
            
            if (tarjetaInnerActual) {
                // 1. Buscamos si existe OTRA tarjeta-inner que ya esté rotada en la galería
                const tarjetaRotadaPrevia = document.querySelector(".tarjeta-inner.rotada");
                
                // 2. Si existe otra y no es la misma que estamos tocando ahora, la desvolteamos
                if (tarjetaRotadaPrevia && tarjetaRotadaPrevia !== tarjetaInnerActual) {
                    tarjetaRotadaPrevia.classList.remove("rotada");
                    console.log("Se restableció la tarjeta anterior.");
                }

                // 3. Volteamos o desvolteamos la tarjeta actual
                tarjetaInnerActual.classList.toggle("rotada");
                console.log("¡Tarjeta girada con éxito!");
            } else {
                console.error("Error: No se encontró la clase .tarjeta-inner dentro de la tarjeta.");
            }
        });
    });
    
});