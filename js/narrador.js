// Inicializar narrador
const narrador = {
  synth: window.speechSynthesis,
  utterThis: null,
  leerTexto: function (texto) {
    if (this.synth.speaking) {
      console.error("El narrador ya está leyendo.");
      return;
    }
    if (texto !== "") {
      this.utterThis = new SpeechSynthesisUtterance(texto);
      this.utterThis.onend = () => {
        console.log("Narración terminada.");
      };
      this.utterThis.onerror = (e) => {
        console.error("Ocurrió un error en la narración: ", e);
      };
      this.utterThis.lang = "es-MX"; // Configuración de idioma
      this.synth.speak(this.utterThis);
    }
  },

  pausarLectura: function () {
    if (this.synth.speaking && !this.synth.paused) {
      this.synth.pause();
      console.log("Narración pausada.");
    }
  },
  
  reanudarLectura: function () {
    if (this.synth.paused) {
      this.synth.resume();
      console.log("Narración reanudada.");
    }
  },

  detenerLectura: function () {
    if (this.synth.speaking || this.synth.paused) {
      this.synth.cancel();
      console.log("Narración detenida.");
    }
  },

  leerTextoSeleccionado: function () {
    const textoSeleccionado = window.getSelection().toString();
    if (textoSeleccionado) {
      this.leerTexto(textoSeleccionado);
    } else {
      console.log("No hay texto seleccionado.");
    }
  },
};

// Vincular botones con funciones
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("btnPlay").addEventListener("click", () => {
    const texto = document.body.innerText; // Obtiene todo el texto de la página
    narrador.leerTexto(texto);
  });
  
  document.getElementById("btnPause").addEventListener("click", () => {
    narrador.pausarLectura();
  });
  
  document.getElementById("btnResume").addEventListener("click", () => {
    narrador.reanudarLectura();
  });
  
  document.getElementById("btnStop").addEventListener("click", () => {
    narrador.detenerLectura();
  });

  // Leer texto seleccionado al hacer clic derecho
  document.addEventListener("mouseup", () => {
    narrador.leerTextoSeleccionado();
  });

  // Detener narración al cambiar de página
  window.addEventListener("beforeunload", () => {
    narrador.detenerLectura();
  });
});
