let mostraUser = () => {
    let usersAjax = new XMLHttpRequest()
    usersAjax.open("GET","users.php")
    usersAjax.send()

    usersAjax.onreadystatechange = () => {

        if(usersAjax.readyState === 4 && usersAjax.status === 200){
            user = JSON.parse(usersAjax.responseText)
        let template =""
        user.forEach(dado => {
           template += `<tr>
                    <td>${dado.id}</td>
                    <td>${dado.nome} </td>
                    <td>${dado.sobreNome} </td>
                    <td>${dado.email} </td>
                    <td>${dado.nascimento} </td>
                    <td>${dado.pais} </td>
                    <td>${dado.sexo} </td>
                    <td><button class='btn btn-danger text-white delete' onclick="del(${dado.id})" >eliminar</button></td>
                    <td><button class='btn btn-warning text-white edit' onclick="editar(${dado.id})" >editar</button></td>
                    </tr>` 
        });
        usuarios.innerHTML = template
        }   
    }
}


let del = function(e){
    
    let ajaxDelete = new XMLHttpRequest()
    let conf = confirm("Deseja mesmo deletar este usuário?")
    form.reset()

    if(conf){

        ajaxDelete.open("POST", "delete.php")
        ajaxDelete.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        ajaxDelete.send(`id=${e}`)
        ajaxDelete.onreadystatechange = () => {
        if(ajaxDelete.readyState === 4 && ajaxDelete.status === 200){
            mostraUser()
            form.reset()
        }
    }
}
    
} 

let editar = function(e){
    edit = true
    let editAjax = new XMLHttpRequest()
    editAjax.open("POST","consulta.php")
    editAjax.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    editAjax.send(`id=${e}`)
    editAjax.onreadystatechange = () => {
        
       if(editAjax.readyState === 4 && editAjax.status === 200){

            let user = JSON.parse(editAjax.responseText)
            form.id.value = user[0].id
            form.nome.value = user[0].nome
            form.sobreNome.value = user[0].sobreNome
            form.email.value = user[0].email
            form.nascimento.value = user[0].nascimento
            form.sexo.value = user[0].sexo
            form.pais.value = user[0].pais
        } 
    }
    
}

