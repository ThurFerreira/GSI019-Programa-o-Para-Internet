window.onload = function (){
    document.forms.mensagem.onsubmit = validateForm
}
  setTimeout(abreModal, 1000);

function validateForm(element){
    let form = element.target
    let formValido = true

    const alertBox = document.getElementById("enviar")
    
    const span = document.querySelectorAll("span")

    span[0].textContent = ""//nome
    span[1].textContent = ""//email
    span[2].textContent = ""//mensagem

    if(form.nome.value === ""){
        span[0].textContent = "Nome nao foi preenchido"
        formValido = false
    }if(form.email.value === ""){
        span[1].textContent = "Email nao foi preenchido"
        formValido = false
    }if(form.mensagem.value === ""){
        span[2].textContent = "Mensagem nao foi preenchido"
        formValido = false
    }

    if(!formValido)
        element.preventDefault()
    else{
        
    }

}
