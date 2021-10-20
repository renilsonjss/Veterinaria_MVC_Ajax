let form = document.querySelector("#form-user")
let formPesquisa = document.querySelector("#pesquisar")
let usuarios = document.querySelector("#usuarios")
let resposta = document.querySelector("#resposta")
let inputPesquisa = document.querySelector(".pesquisa")
var edit = false

mostraUser()

document.addEventListener("keyup",(e) => {
    resposta.innerHTML = ""
})

form.addEventListener("submit", (e)=> {
    let url= edit === false? "envia.php": "actualiza.php"
    e.preventDefault()
    
    let nome = e.target.nome.value
    let sobreNome = e.target.sobreNome.value
    let pais = e.target.pais.value
    let email = e.target.email.value
    let nascimento = e.target.nascimento.value
    let sexo = e.target.sexo.value
    let senha = e.target.senha.value
    let confirmaSenha = e.target.confirmaSenha.value

    if(nome==="" || sobreNome ===""){
        resposta.innerHTML = `<span class="alert alert-warning">Preencha o nome e o sobre nome!</span>`

    }else if(pais===""){
        resposta.innerHTML = `<span class="alert alert-warning">Preencha o pais!</span>`
    }else if(email=== ""){
        resposta.innerHTML = `<span class="alert alert-warning">Preencha o email!</span>`

    }else if(nascimento === ""){
        resposta.innerHTML = `<span class="alert alert-warning">Preencha a data de nascimento!</span>`
    }else if(sexo===""){
        resposta.innerHTML = `<span class="alert alert-warning">Preencha o sexo!</span>`
    }else if(senha ==="" && confirmaSenha === ""){
        resposta.innerHTML = `<span class="alert alert-warning">Preencha a senha e confirma a senha!</span>`
    }else if(senha !== confirmaSenha){
        resposta.innerHTML = `<span class="alert alert-warning">As Senhas não conscidem!</span>`
    }else{
        const ajax = new XMLHttpRequest()
        let id = form.id.value
        ajax.open("POST",url)
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded")
        ajax.send(`id=${id}&nome=${nome}&sobreNome=${sobreNome}&senha=${senha}&pais=${pais}&sexo=${sexo}&nascimento=${nascimento}&email=${email}`)
        
        ajax.onreadystatechange = (e) => {
            if(ajax.readyState === 4 && ajax.status === 200){ 
                mostraUser()
                resposta.innerHTML = ajax.responseText
                form.reset()
            }else{
                console.log("não houve post")
            }
        }
    }     
})



