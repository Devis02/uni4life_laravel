<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/styleCadastro.css') }}">
</head>
<body>
    <div id="Container">

        <div id="Cadastro">

            <div id="Branco"></div>
        
                <form id="formCad" method="post" action="/cadastro/create">
                    @csrf
                    <label for="Nome">Nome</label>
                    <input id="Nome" name="Nome" placeholder="">
                    
                    <label for="Email">Email</label>
                    <input id="Email" type="email" name="Email" placeholder="">
                    
                    <label for="Senha">Senha</label>
                    <input type="password" name="Senha" id="Senha" placeholder="">

                    <label for="dataNascimento">Data de nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento" placeholder="">

                    <button id="Botao" type="submit">Criar Conta</button>
                    <br>

                </form>
                <a id="loginLink" href="/">Já está cadastrado? clique aqui!</a>
            </div>



        </div>


    </div>
    
</body>
</html>