const formularioLogin = document.getElementById("formulario");

formularioLogin.addEventListener("submit", function (event) {
  event.preventDefault();

  let formData = new FormData(formularioLogin);

  fetch("./login.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Respuesta de red no ok");
      }
      return response.text();
    })
    .then((text) => {
      try {
        const data = JSON.parse(text);
        if (data.success) {
          formularioLogin.reset();
          document
            .getElementById("formulario__mensaje-exito")
            .classList.add("formulario__mensaje-exito-activo");
          setTimeout(() => {
            document
              .getElementById("formulario__mensaje-exito")
              .classList.remove("formulario__mensaje-exito-activo");
          }, 5000);
          document
            .querySelectorAll(".formulario__grupo-correcto")
            .forEach((icono) => {
              icono.classList.remove("formulario__grupo-correcto");
            });
          setTimeout(() => {
            window.location.href = "../index.php";
          }, 2000);
        } else if (data.error) {
          document
            .getElementById("formulario__mensaje")
            .classList.add("formulario__mensaje-activo");
          setTimeout(() => {
            document
              .getElementById("formulario__mensaje")
              .classList.remove("formulario__mensaje-activo");
          }, 5000);
        }
      } catch (error) {
        console.error("No se pudo parsear como JSON:", text);
        throw error;
      }
    })
    .catch((error) => {
      console.error("Error en fetch:", error);
    });
});
