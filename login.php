<!-- <form method="post">
    <input type="text" name="login">
    <input type="password" name="senha">
    <input type="submit" name="acao" value="enviar">
</form> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #2E2532;
            height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: 50px;
            max-width: 600px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Atividade PHP</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!-- FORMULARIO -->
                        <form id="login-form" class="form" method="POST">
                            <h3 class="text-center">Login</h3>

                            <!-- MENSAGEM DE ERRO [INICIO] * Só exibir se tiver falhado no login -->
                            <!-- <p class="alert alert-danger">Login ou senha inválidos</p> -->
                            <!-- MENSAGEM DE ERRO [FIM] -->
                            
                            <!-- EMAIL -->
                            <div class="form-group">
                                <label>Email:</label><br>
                                <input type="text" name="login" class="form-control">
                            </div>

                            <!-- SENHA -->
                            <div class="form-group">
                                <label>Senha:</label><br>
                                <input type="password" name="senha" class="form-control">
                            </div>

                            <!-- SUBMIT -->
                            <div class="form-group">
                                <input type="submit" name="acao" class="btn btn-danger btn-md" value="Enviar">
                            </div>
                        </form>
                        <!-- FORMULÁRIO[FIM] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
