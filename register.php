<style>
<?php include 'style.css' ?>
</style>


<?php
    $nome= $_POST['namePerson'];
    $dataNasc= date("d/m/Y",strtotime($_POST['datePerson']));
    $sexo= $_POST['sexPerson'];
    $preferencia= $_POST['preferencePerson'];
    $curso= $_POST['course'];
    $email= $_POST['emailPerson'];
?>

<?php
    echo('<main>
                <section>
                    <h2>Sobre o aluno(a)</h2>
                    Aluno(a): '.$nome.'.<br>Data de nascimento: '.$dataNasc.'.<br>Sexo: '.$sexo.'<br>Preferência: '.$preferencia.'.<br>
                    Matriculado no curso: '.$curso.'.<br>Contato: '.$email.'
                </section>
            </main>');
?>