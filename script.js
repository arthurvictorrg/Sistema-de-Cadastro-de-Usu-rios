    'use strict';

    const myusuarios = document.getElementById("myusuarios");
    myusuarios.addEventListener('submit', gravar);

    function gravar(e){
        e.preventDefault();
        const formData = new FormData(this);
        const searchParams = new URLSearchParams();

        for(const par of formData){
            searchParams.append(par[0],par[3]);
        }

        fetch('cadastrodeusuario.php',{
            method:'POST',
            body:formData
        }).then(function(response){
            document.getElementById('nome_usuario').value="";
            document.getElementById('email').value="";
            document.getElementById('senha').value="";
            return alert('Dados gravados com sucesso!');
        }).catch(function(error){
            console.log(error);
        })
}
