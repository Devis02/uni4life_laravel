<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div id="Azul_Login">

        <div id="tituloDiv">
            <h1 id="Titulo">BEM-VINDO A REDE SOCIAL<br>FAVORITA DOS UNIVERSITARIOS</h1>
        </div>
        <div id="Formulario">



            <div class="flex-container">
                <form id="formlogin" method="post">
                    @csrf
                    <label for="Email">Email</label>
                    <input id="Email" name="Email" type="email" placeholder="">
                    
                    <label for="password" >Senha</label>
                    <input type="password" name="Senha" id="Senha" placeholder="">
                    
                    <button id="Botao" type="submit">Entrar</button>
                    <br>
                    <a id="SemSenha" href="">Esqueceu a Senha?</a>
                </form>

            </div>
        </div>

        <div id="Cria">
        <p id="CriaConta">Não tem uma conta? <a href="/cadastro">Crie uma Conta</a></p>

        </div>
    </div>
</body>

</html>