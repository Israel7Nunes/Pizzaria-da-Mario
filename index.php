<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://cdn.icon-icons.com/icons2/281/PNG/256/Pizza-icon_30282.png">
        <link rel="stylesheet" href="style.css">
        

        <!-- coisas bootstrap-->
     
    <!-- fim coisas bootstrap-->
    <!-- fontes maneras -->
    
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    
    <!-- Days One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    
    <!--Gloria Hallelujah -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Gloria+Hallelujah&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    
    
    
        <title>Pizzaria da Mario</title>
</head>

<body>

    <script src="script.js" defer></script>
    <!-- nav bar start-->
<nav>
    <div class="pizzaLogo">
        <img src="https://cdn.icon-icons.com/icons2/281/PNG/256/Pizza-icon_30282.png">
    </div>

    <div class="mainTitle">
        <h1>Pizzaria da Mario</h1>
        </div>
        
        <div class="containerHamb" onclick="MyFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
</nav>

<!-- nav bar end-->
 <div class="header">
    <h1><br> As melhores pizzas<br> feitas diretamente <br> da Mario Quintana!</h1>
    </div>

    <div class="headerText">
        <p> Pizzas caseiras saindo direto do forno. <br><b> Vai querer?</b></p>
    </div>

<div class="slideshowContainer">

 <!--- algumas bolinhas que podem ser selecionadas.-->
 <div class="imagens">
    <input type="radio" name="radio" id="imagem1" checked>
    <!-- checked utilizado pra ser a primeira opção selecionada ao entrar na pagina.-->
    <input type="radio" name="radio" id="imagem2">
    <input type="radio" name="radio" id="imagem3">
    <input type="radio" name="radio" id="imagem4">
    <input type="radio" name="radio" id="imagem5">
    <input type="radio" name="radio" id="imagem6">


    <!-- cada imagem que pode ser selecionada, mais detalhes no css-->

    <div class="imagem img1">
        <img src="https://panfleteria.sfo2.digitaloceanspaces.com/uploads/ofertas/img/01-Desconto-Rodizio-Pizzas-Domicilio-Pizzaria-Crystalia_3.jpg"
            alt="stageRockHowardGarou">
    </div>

    <div class="imagem img2">
        <img src="https://images.squarespace-cdn.com/content/v1/5e6a52644e433409c3c4031e/ce3b6244-4fdf-45c0-b3bb-9a2250f21dc7/Pizza+Calabresa.jpg"
            alt="stageAoF">
    </div>

    <div class="imagem img3">
        <img src="https://revistamenu.com.br/wp-content/uploads/sites/24/2023/05/pizza-doce-1.jpg"
            alt="zappaStageGGXX">
    </div>
    <div class="imagem img4">
        <img src="https://assets.delirec.com/images%2F2re4OZn8tAVcJujtmBcNRFL69Kx1%2Frecipe%2F411da181-2736-4ae2-94b2-d1783f67481a-Pizzas-de-apresentado-e-mussarela-gallery-0"
            alt="slayerStageGGX">
    </div>

    <div class="imagem img5">
        <img src="https://static.ndmais.com.br/2021/07/pizza.jpg"
            alt="stageSF6Select">
    </div>

    <div class="imagem img6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShBPlU-dRiv1Hj8EhjOS2ii0y1-bfiJd2Y9w&s"
            alt="schoolStageP4A">
    </div>
</div>

<div class="navegacao">
    <label for="imagem1" class="bar"> </label>
    <label for="imagem2" class="bar"> </label>
    <label for="imagem3" class="bar"> </label>
    <label for="imagem4" class="bar"> </label>
    <label for="imagem5" class="bar"> </label>
    <label for="imagem6" class="bar"> </label>
</div>

</div>


    <!-- <div class="buttonAsk">
        <button id="buttonAsk" onclick="show()">FAÇA SEU PEDIDO!</button>  
    </div> -->

    <!-- <button id="bAparecer" onclick="aparecer()" class="bAparecer" >botao</button> -->




    <?php

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbname = "pizzaria_is_gui";

        //Criar a conexão

        $conn = new mysqli($serverName, $userName, $password, $dbname );

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereço"];

            $sql1 = "INSERT INTO usuario (nome, telefone, endereco) VALUES ('$nome', '$telefone', '$endereco')";

            if ($conn->query($sql1) === TRUE) {
                echo "Infos do user recebidas <br>";
            } else {
                echo "Erro: " . $sql1 . "<br>" . $conn->error;
            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $cpf = $_POST["cpf"];
            $pizza = $_POST["pizza"];
            $tamanho = $_POST["tamanho"];
            $quant = $_POST["quant"];
            $bebida = $_POST["bebida"];
            $extra = $_POST["extra"];

            $sql2 = "INSERT INTO pedido (cpf, pizza, tamanho, quantidade, bebida, extra) VALUES ('$cpf', '$pizza', '$tamanho', '$quant', '$bebida', '$extra')";

            if ($conn->query($sql2) === TRUE) {
                echo "Infos do pedido recebidas <br>";
            } else {
                echo "Erro: " . $sql2 . "<br>" . $conn->error;
            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $fPagam = $_POST["fPagam"];
            $banco = $_POST["banco"];
            $nBancario = $_POST["nBancario"];

            $sql3 = "INSERT INTO pagamento (fPagamento, banco, nBancario) VALUES ('$fPagam', '$banco', '$nBancario')";

            if ($conn->query($sql3) === TRUE) {
                echo "<div class=''> Pagamento realizado! </div> <br>";
            } else {
                echo "Erro: " . $sql3 . "<br>" . $conn->error;
            }
        }


        $conn->close();
    ?>

    <button  id="bAparecer" onclick="aparecer()" class="bAparecer" >FAÇA SEU PEDIDO!</button>

<div class="formularioPizza" id="formularioPizza">

    <form action="" method="post" id="formulario" class="hidden">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required autocomplete="off"><br>

        <label for="telefone">Telefone:</label><br>
        <input type="number" name="telefone" id="telefone" required><br>

        <label for="endereço">Endereço:</label><br>
        <input type="text" name="endereço" id="endereço" required autocomplete="off"><br>

        <label for="cpf">CPF:</label><br>
        <input type="number" name="cpf" id="cpf" required><br>

        <label for="pizza">Pizza:</label><br>
        <input type="text" name="pizza" id="pizza" required autocomplete="off"><br>

        <label for="tamanho">Tamanho (cm):</label><br>
        <input type="number" name="tamanho" id="tamanho" required><br>

        <label for="quant">Quantidade:</label><br>
        <input type="number" name="quant" id="quant" required><br>

        <label for="bebida">Bebida:</label><br>
        <input type="text" name="bebida" id="bebida"><br>

        <label for="extra">Extra:</label><br>
        <input type="text" name="extra" id="extra"><br>

        <label for="fPagam">Forma de Pagamento</label><br>
        <select name="fPagam" id="fPagam">Forma de Pagamento
            <option value="pix" id="fPagam">Pix</option>
            <option value="credito" id="fPagam">Crédito</option>
            <option value="debito" id="fPagam">Débito</option>
        </select><br>


        <label for="banco">Banco:</label><br>
        <input type="text" name="banco" id="banco" required autocomplete="off"><br>

        <label for="nBancario">Número Bancário:</label><br>
        <input type="number" name="nBancario" id="nBancario"required><br>

    <div class="finalizar">
        <input type="submit" value="Finalizar o pedido">
    </div>
    </form>
</div>

<footer>
    <p>Feito por Guilherme Reis e Israel Nunes | Desenvolvimento Web | Junho 2024</p>
</footer>

</body>
</html>