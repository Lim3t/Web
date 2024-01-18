const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

const expresiones = {
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  newPassword: /^[A-Za-z\d@$!%*?&]{8,15}$/,
};

const campos = {
  newPassword: false,
};

let formularioEnviado = false;

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "newPassword":
      validarCampo(expresiones.newPassword, e.target, "newPassword");
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
  submitBtn.disabled = sending;
  submitBtn.textContent = sending ? "Enviando mensaje..." : "Enviar";
  loadingIcon.style.display = sending ? "block" : "none";
};

formulario.addEventListener("submit", (e) => {
  e.preventDefault();

  const formValid = Object.values(campos).every((campo) => campo);

  if (formValid) {
    toggleFormState(true);
    formularioEnviado = true;

    let formData = new FormData(formulario);
    const urlParams = new URLSearchParams(window.location.search);
    formData.append("token", urlParams.get("token"));

    fetch("resetPasswordBd.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        toggleFormState(false);
        formularioEnviado = false;
        if (data.error) {
          document.getElementById("formulario__mensaje").textContent =
            data.error;
          document
            .getElementById("formulario__mensaje")
            .classList.add("formulario__mensaje-activo");
        } else if (data.success) {
          document
            .getElementById("formulario__mensaje-exito")
            .classList.add("formulario__mensaje-exito-activo");
          setTimeout(() => {
            window.location.href = "./iniciarsesion.php";
          }, 2000);
          formulario.reset();
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        formularioEnviado = false;
        toggleFormState(false);
      });
  } else {
    document
      .getElementById("formulario__mensaje")
      .classList.add("formulario__mensaje-activo");
  }
});
