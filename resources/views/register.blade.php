<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    #register{
        top: 50%;
        left: 50%;
        position: relative;
        vertical-align: middle;
    }


    .form-text{
        border: 3px solid;
        margin-bottom: 20px;
    }

    .form-label{
        font-size: 12px;
    }


</style>
<body>
    <div id = 'register'>
        <form method = 'GET' action ="{{route('register')}}">
            <label for='name' class = form-label>Digite aqui a pergunta a ser cadastrada</label><br>
            <input type='text' class = 'form-text' id = 'question-title' name='question-title'><br>
            <label for='correct-option' class = form-label>Selecione a opção verdadeira</label><br>
            <select id = 'correct-option' name = 'correct-option' class = 'form-text'>
                <option value = '1'>Verdadeiro</option>
                <option value = '0'>Falso</option>
            </select><br>
            <label for = 'question-weight' class = 'form-label'>Digite o peso da questão</label><br>
            <input type = 'text' class = 'form-text' id = 'question-weight' name = 'question-weight'><br>
            <input type = 'submit' label = 'Cadastrar'>
        </form>
    </div>
    
</body>
</html>