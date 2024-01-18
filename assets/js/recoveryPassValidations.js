const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

const expresiones = {
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  contraseña: /^[A-Za-z\d@$!%*?&]{8,15}$/,
};

const campos = {
  correo: false,
};

let formularioEnviado = false;

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "correo":
      validarCampo(expresiones.correo, e.target, "correo");
      break;
  }
};

const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    document
      .getElementById(`grupo__${campo}`)
      .classList.remove("formulario__grupo-incorrecto");
    document
      .getElementById(`grupo__${campo}`)
      .classList.add("formulario__grupo-correcto");
    document
      .querySelector(`#grupo__${campo} i`)
      .classList.add("fa-check-circle");
    document
      .querySelector(`#grupo__${campo} i`)
      .classList.remove("fa-times-circle");
    document
      .querySelector(`#grupo__${campo} .formulario__input-error`)
      .classList.remove("formulario__input-error-activo");
    campos[campo] = true;
  } else {
    document
      .getElementById(`grupo__${campo}`)
      .classList.add("formulario__grupo-incorrecto");
    document
      .getElementById(`grupo__${campo}`)
      .classList.remove("formulario__grupo-correcto");
    document
      .querySelector(`#grupo__${campo} i`)
      .classList.add("fa-times-circle");
    document
      .querySelector(`#grupo__${campo} i`)
      .classList.remove("fa-check-circle");
    document
      .querySelector(`#grupo__${campo} .formulario__input-error`)
      .classList.add("formulario__input-error-activo");
    campos[campo] = false;
  }
};

inputs.forEach((input) => {
  input.addEventListener("keyup", validarFormulario);
  input.addEventListener("blur", validarFormulario);
});

const submitBtn = document.getElementById("submit-btn");
const loadingIcon = document.getElementById("loading-icon");

const toggleFormState = (sending) => {
  if (sending) {
    submitBtn.disabled = true;
    submitBtn.textContent = "Enviando mensaje...";
    loadingIcon.style.display = "block";
  } else {
    submitBtn.disabled = false;
    submitBtn.textContent = "Enviar";
    loadingIcon.style.display = "none";
  }
};
formulario.addEventListener("submit", (e) => {
  e.preventDefault();
  if (formularioEnviado) {
    return;
  }

  const formValid = Object.values(campos).every((campo) => campo);

  if (formValid) {
    let formData = new FormData(formulario);

    fetch("recoveryPasswordBd.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.error) {
          // Mostrar mensaje de error
          document.getElementById("formulario__mensaje").textContent =
            data.error;
          document
            .getElementById("formulario__mensaje")
            .classList.add("formulario__mensaje-activo");
        } else if (data.success) {
          // Mostrar mensaje de éxito
          document
            .getElementById("formulario__mensaje-exito")
            .classList.add("formulario__mensaje-exito-activo");
        }
        setTimeout(() => {
          document
            .querySelectorAll(
              ".formulario__mensaje-activo, .formulario__mensaje-exito-activo"
            )
            .forEach((el) =>
              el.classList.remove(
                "formulario__mensaje-activo",
                "formulario__mensaje-exito-activo"
              )
            );
        }, 5000);
        formularioEnviado = false;
        toggleFormState(false);
      })
      .catch((error) => {
        formularioEnviado = false;
        toggleFormState(false);
      });

    document
      .querySelectorAll(".formulario__grupo-correcto")
      .forEach((icono) => {
        icono.classList.remove("formulario__grupo-correcto");
      });
    formulario.reset();
  } else {
    document
      .getElementById("formulario__mensaje")
      .classList.add("formulario__mensaje-activo");
    setTimeout(() => {
      document
        .getElementById("formulario__mensaje")
        .classList.remove("formulario__mensaje-activo");
    }, 5000);
  }
});
