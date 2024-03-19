<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <?php

    function calcular() {
        if(isset($_POST['adicao'])) {
            // Verifica se a caixa adicao foi marcada.
            echo $_POST['numx'] . " + " . $_POST['numy'] . " = " . ($_POST['numx'] + $_POST['numy']) . "<br>";
        }

        if(isset($_POST['subtracao'])) {
            echo $_POST['numx'] . " - " . $_POST['numy'] . " = " . ($_POST['numx'] - $_POST['numy']) . "<br>";
        }

        if(isset($_POST['multiplicacao'])) {
            echo $_POST['numx'] . " * " . $_POST['numy'] . " = " . ($_POST['numx'] * $_POST['numy']) . "<br>";
        }

        if(isset($_POST['divisao'])) {
            echo $_POST['numx'] . " / " . $_POST['numy'] . " = " . ($_POST['numx'] / $_POST['numy']) . "<br>";
        }

        if(isset($_POST['potenciacao'])) {
            echo $_POST['numx'] . " ^ " . $_POST['numy'] . " = " . (pow($_POST['numx'], $_POST['numy'])) . "<br>";
        }
    }

    /* É necessário colocar o formulário html em um echo do PHP, porque o como este é um arquivo PHP, ele irá rodar em um servidor(apache), então se você escrever o formulário
       HTML fora do echo, ele será carregado APÓS a execução do PHP, então uma interação de formulário com exibição de resultados na mesma página seria impossível de realizar,
       porque o PHP já teria terminado seu trabalho.
    */
    echo '
        <div class="container bg-light rounded my-5">
            <div class="row">
                &nbsp;
            </div>
            <div class="row text-center">
                <h1>Formulário Interativo - Calculadora com PHP</h1>
                <h5>Por Lucas Tino Rosa</h5>
                &nbsp;
            </div>
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="numx" class="form-label text-start h3">Insira um número:</label>
                            <input type="number" class="form-control" id="numx" name="numx">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="numy" class="form-label text-start h3">Insira outro número:</label>
                            <input type="number" class="form-control" id="numy" name="numy">
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="row text-center">
                    <h3>Escolha uma ou mais operações:</h3>
                </div>
                <div class="row h5">
                    <div class="col">
                        <input class="form-check-input" type="checkbox" name="adicao" value="adicao" id="adicao">
                        <label class="form-check-label" for="adicao">
                            Adição (+)
                        </label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" name="subtracao" value="subtracao" id="subtracao">
                        <label class="form-check-label" for="subtracao">
                            Subtração (-)
                        </label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" name="multiplicacao" value="multiplicacao" id="multiplicacao">
                        <label class="form-check-label" for="multiplicacao">
                            Multiplicação (*)
                        </label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" name="divisao" value="divisao" id="divisao">
                        <label class="form-check-label" for="divisao">
                            Divisão (/)
                        </label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" name="potenciacao" value="potenciacao" id="potenciacao">
                        <label class="form-check-label" for="potenciacao">
                            Potenciação (^)
                        </label>
                    </div>
                </div>
                &nbsp;
                <div class="row w-50 mx-auto">
                    <div class="col w-100">
                        <input type="submit" name="Calcular" value="Calcular" class="btn btn-success w-100">
                    </div>
                </div>
                &nbsp;
                <h4>Resultados:</h4>
                <div class="border bg-white rounded h5">';
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        calcular();
                    } else {
                        echo "<br>";
                    }
                    /* Verifica se o método de requisição POST foi utilizado, e se esse for o caso, executa a função calcular.
                       Neste código, não existem outros métodos de requisição além do POST, então existem apenas duas opções:
                       - POST foi utilizado: significa que valores foram inseridos e uma ou mais operações podem ser realizadas.
                       - POST não foi utilizado: significa que valores não foram inseridos, então nada pode ser feito.
                    */
          echo '</div>
            &nbsp;
            </form>
        </div>';

    

    ?>
</body>
</html>