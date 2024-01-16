const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

const expresiones = {
  nombre: /^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/,
  apellido: /^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/,
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  edad: /^[0-9]+$/,
  departamento: /^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/,
  username: /^.+$/,
  contraseña: /^[A-Za-z\d@$!%*?&]{8,15}$/,
};

const campos = {
  nombre: false,
  apellido: false,
  correo: false,
  edad: false,
  departamento: false,
  username: false,
  contraseña: false,
};

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "nombre":
      validarCampo(expresiones.nombre, e.target, "nombre");
      break;
    case "apellido":
      validarCampo(expresiones.apellido, e.target, "apellido");
      break;
    case "correo":
      validarCampo(expresiones.correo, e.target, "correo");
      break;
    case "edad":
      validarCampo(expresiones.edad, e.target, "edad");
      break;
    case "departamento":
      validarCampo(expresiones.departamento, e.target, "departamento");
      break;
    case "username":
      validarCampo(expresiones.username, e.target, "username");
      break;
    case "contraseña":
      validarCampo(expresiones.contraseña, e.target, "contraseña");
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

formulario.addEventListener("submit", (e) => {
  e.preventDefault();

  const formValid = Object.values(campos).every((campo) => campo);

  if (formValid) {
    // Aquí construyes el objeto FormData basado en el formulario
    let formData = new FormData(formulario);

    // Configuración de la petición fetch
    let configFetch = {
      method: "POST",
      body: formData,
    };

    // Realizando la petición al servidor
    fetch("components/encuestaBd.php", configFetch)
      .then((response) => response.text())
      .then((data) => {
        console.log(data); // Muestra la respuesta del servidor en la consola
        formulario.reset();
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
      })
      .catch((error) => {
        console.error("Error:", error);
      });

    formulario.submit();
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
