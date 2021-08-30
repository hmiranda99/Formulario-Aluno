<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulário</title>
</head>

<body>
    <main>
        <section class="inicial">
            <h2>Formulário de cadastro</h2>

            <form action="register.php" method="post">
                <div class="input">
                    <label>Nome</label>
                    <input type="text" id="namePerson" name="namePerson" placeholder="Digite seu nome">
                </div>

                <div class="input">
                    <label>Data de nascimento</label>
                    <input type="date" id="datePerson" name="datePerson">
                </div>

                <div class="input-diferent">
                    <p>Sexo</p>

                    <input type="radio" id="sexPerson" name="sexPerson" value="feminino">
                    <label>Feminino</label>

                    <input type="radio" id="sexPerson" name="sexPerson" value="masculino">
                    <label>Masculino</label>

                    <input type="radio" id="sexPerson" name="sexPerson" value="outros">
                    <label>Outros</label>
                </div>

                <div class="input-diferent">
                    <p>Preferências</p>

                    <input type="checkbox" id="preferencePerson" name="preferencePerson" value="esportes">
                    <label>Esportes</ label>

                        <input type="checkbox" id="preferencePerson" name="preferencePerson" value="danca">
                        <label>Dança</label>

                        <input type="checkbox" id="preferencePerson" name="preferencePerson" value="literatura">
                        <label>Literatura</label>
                </div>

                <div class="input">
                    <label>Curso</label>
                    <select name="course" id="course">
                        <option value="administration">Administração</option>
                        <option value="developement">Desenvolvimento de sistemas</option>
                        <option value="nutrition">Nutrição</option>
                    </select>
                </div>

                <div class="input">
                    <label>Email</label>
                    <input type="text" id="emailPerson" name="emailPerson" placeholder="Email">
                </div>

                <input class="button" type="submit" value="Cadastrar">
            </form>
        </section>
    </main>
</body>

</html>