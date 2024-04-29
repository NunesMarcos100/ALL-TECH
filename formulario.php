
<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('State: ' . $_POST['state']);
        //print_r('<br>');
        //print_r('Endereco: ' . $_POST['endereco']);
        //print_r('Assunto: ' . $_POST['assunto']);

        include_once ('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $endereco = $_POST['endereco'];
        $subject = $_POST['assunto'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco,assunto) 
        VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$city','$state','$endereco','$subject')");
    
    }

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All-Tech - Formulário - Suporte</title>
        <script src="Security.js"></script>
        <link rel="stylesheet" href="EstiloCssFormulario.css"> <!-- EstiloCSS do Formulario -->
        
    </head>

    <body>
            <div class="box"> <!---https://formsubmit.co/ Para enviar as informações pro email----->
                <form action="https://formsubmit.co/triplxxx50@gmail.com" method="POST">
                    <fieldset>
                                <legend><b>Formulário de Contato</b></legend>
                                <br>
                                <div class="inputBox">
                                    <input type="text" name="nome" id="nome" class="inputUser" required>
                                    <label for="nome" class="labelInput">Nome completo</label>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <input type="text" name="email" id="email" class="inputUser" required>
                                    <label for="email" class="labelInput">Email</label>
                                </div>
                                <br><br>

                                <div class="inputBox">
                                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                                    <label for="telefone" class="labelInput">Telefone</label>
                                </div>

                                <br><br>
                                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                                <input type="date" name="data_nascimento" id="data_nascimento" required>
                                <br><br>
                                
                            <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo" required>
                            <option value="">Selecione</option>
                            <option name="genero" value="masculino">Masculino</option>
                            <option name="genero" value="feminino">Feminino</option>
                            <option name="genero" value="outro">Outro</option>
                        </select>
                            <br><br>
                    
                            <label for="state">Estado:</label>
                            <select id="state" name="state" required>
                            <option value="">Selecione</option>
                            <!-- Adicionei aqui uma lista de estados do Brasil -->
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                            <br><br>
                    
                            <label for="city">Cidade:</label>
                        <select id="city" name="city" required>
                            <option value="">Selecione o estado primeiro</option>
                        </select>
                        <br><br><br>

                            <div class="inputBox">
                                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                                <label for="endereco" class="labelInput">Endereço</label>
                            </div>
                            <br>
                            <label for="assunto">Assunto:</label>
                        <textarea id="assunto" name="assunto" rows="4" placeholder="Digite sua mensagem com até 255 caracteres"
                            maxlength="255" required></textarea>
                        <span id="contador"></span>

                            <input type="submit" name="submit" id="submit">
                    </fieldset>
                </form>
            </div>


        <script> 
            //Função para contar caracteres
            document.addEventListener("DOMContentLoaded", function() {
            var textarea = document.getElementById("assunto");
            var contador = document.getElementById("contador");

            textarea.addEventListener("input", function() {
            contador.textContent = textarea.value.length + "/255 caracteres";
            });
                });  

        </script>

        <script src="Folha.JsFormulario.js"></script>
    
    </body>
</html> 