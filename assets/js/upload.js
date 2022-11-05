
//evento formulario
const form = document.getElementById("form");
form.addEventListener("submit", async (e) => {
  e.preventDefault();

  //pega dados dos inputs
  const formData = new FormData(form);
  const searchParams = new URLSearchParams();

  for (const par of formData) {
    searchParams.append(par[0], par[1]);
  }

  await fetch("./src/uploadController.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((json) => {
      // console.log(json);
      alert('Arquivo enviado');      
    }).catch(error => alert('Erro ao enviar o arquivo'))
    .finally(() =>{
      window.location.reload(true);
    });

   
});
