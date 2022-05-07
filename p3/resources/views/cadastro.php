<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="app.css">

</head>
<!-- fazer depois o css funcionar que nao está por algum motivo !-->
<body>
    <div class="d-flex align-items-center flex-column">
        <div class="p-2" >
            <p style="margin-top: 40%; font-size: 35px; margin-bottom: 0;">Meu@IC</p>
        </div>
        <div class="p-1">
            <p style="margin-top:2px;">Cadastro</p>
        </div>
        <div class="p-2">
            <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill " id="floatingInput" placeholder="usuario" style="padding-right: 60px;padding-left:60px;border-color: #12E58D !important;">
                <label for="floatingInput" style="padding-left: 40%;color: grey;">Nome </label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill" id="floatingPassword" placeholder="senha" style="padding-right: 60px;padding-left:60px;border-color: #12E58D !important;">
                <label for="floatingPassword" style="padding-left: 40%;color: grey;">Usuário</label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control rounded-pill " id="floatingInput" placeholder="usuario" style="padding-right: 60px;padding-left:60px;border-color: #12E58D !important;">
                <label for="floatingInput" style="padding-left: 40%;color: grey;">Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="number" class="form-control rounded-pill" id="floatingPassword" placeholder="senha" style="padding-right: 60px;padding-left:60px;border-color: #12E58D !important;">
                <label for="floatingPassword" style="padding-left: 40%;color: grey;">Matrícula</label>
                
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control rounded-pill" id="floatingPassword" placeholder="senha" style="padding-right: 60px;padding-left:60px;border-color: #12E58D !important;">
                <label for="floatingPassword" style="padding-left: 40%;color: grey;">Senha</label>
            </div>


        </div>
        <div class="p-2" ><button style="padding-right: 130px;padding-left:130px; background-color: #12E58D !important; border-color: #12E58D !important;" class="btn btn-primary rounded-pill largurabotoes" type="submit" >Cadastrar</button></div>

        <div class="p-2">
            <p>Voltar para <a href=".">Login</a></p>
        </div>
        <div class="p-2" style="position: fixed; bottom: 0;">
            <p>© 2022 MeuIC. Todos os direitos reservados.</p>
        </div>

    </div>

</body>

</html>