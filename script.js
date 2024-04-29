window.addEventListener('scroll', scrollFunction);

function scrollFunction() {
    if (window.scrollY > 5) {
        document.querySelector("footer").classList.add("hidden");
    } else {
        document.querySelector("footer").classList.remove("hidden");
    }
}

document.getElementById("formulario").addEventListener("submit", function(event){
    event.preventDefault();
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const tipo_de_pele = document.getElementById("tipo_de_pele").value;
    const rotinas_cuidados = document.getElementById("rotinas_cuidados").value;
    const alergia = document.getElementById("alergia").value;
    const protetor_solar = document.getElementById("protetor_solar").value;
    const melasma_familia = document.getElementById("melasma_familia").value;
    const contraindicacao = document.getElementById("contraindicacao").value;

    console.log("Nome: " + nome);
    console.log("Email: " + email);
    console.log("Tipo de pele: " + tipo_de_pele);
    console.log("Rotinas de Cuidados: " + rotinas_cuidados);
    console.log("Alergia: " + alergia);
    console.log("Protetor Solar: " + protetor_solar);
    console.log("Melasma: " + melasma_familia);
    console.log("Contraindicacao: " + contraindicacao);

    document.getElementById("formulario").reset();
});