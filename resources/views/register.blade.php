<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        top: 10%;
        left: 10%;
        right: 10%;
        bottom: 10%;
        align-items: center;
        position: absolute;
    }
    #register{
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .form-input{
        border: 1px solid;
        font-size: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .form-label{
        font-size: 12px;
    }

    #reset-button{
        justify-content: flex-start;
    }

    #submit-button{
        justify-content: flex-end;
    }

    



</style>
<body>
    <div id = 'register'>
        <form method = 'get' action ="{{route('post.register')}}">
            <div id = question-1>
                <h1> Digite aqui a pergunta 1</h1><br>
                <label for='name' class = form-label>Digite aqui a pergunta a ser cadastrada</label><br>
                <input type='text' class = 'form-input' id = 'question-title' name='question-title[]' size=><br>
                <label for='correct-option' class = form-label>Selecione a opção verdadeira</label><br>
                <select id = 'correct-option' name = 'correct-option[]' class = 'form-input'>
                    <option value = '1'>Verdadeiro</option>
                    <option value = '0'>Falso</option>
                </select><br>
                <label for = 'question-weight' class = 'form-label'>Digite o peso da questão</label><br>
                <input type = 'text' class = 'form-input' id = 'question-weight' name = 'question-weight[]'><br>
            </div>

            <div id = question-2>
                <h1> Digite aqui a pergunta 2</h1><br>
                <label for='name' class = form-label>Digite aqui a pergunta a ser cadastrada</label><br>
                <input type='text' class = 'form-input' id = 'question-title' name='question-title[]'><br>
                <label for='correct-option' class = form-label>Selecione a opção verdadeira</label><br>
                <select id = 'correct-option' name = 'correct-option[]' class = 'form-input'>
                    <option value = '1'>Verdadeiro</option>
                    <option value = '0'>Falso</option>
                </select><br>
                <label for = 'question-weight' class = 'form-label'>Digite o peso da questão</label><br>
                <input type = 'text' class = 'form-input' id = 'question-weight' name = 'question-weight[]'><br>
            </div>

            <div id = question-3>
                <h1> Digite aqui a pergunta 3</h1><br>
                <label for='name' class = form-label>Digite aqui a pergunta a ser cadastrada</label><br>
                <input type='text' class = 'form-input' id = 'question-title' name='question-title[]'><br>
                <label for='correct-option' class = form-label>Selecione a opção verdadeira</label><br>
                <select id = 'correct-option' name = 'correct-option[]' class = 'form-input'>
                    <option value = '1'>Verdadeiro</option>
                    <option value = '0'>Falso</option>
                </select><br>
                <label for = 'question-weight' class = 'form-label'>Digite o peso da questão</label><br>
                <input type = 'text' class = 'form-input' id = 'question-weight' name = 'question-weight[]'><br>
            </div>
            <input type = 'reset' id = 'reset-button' value = 'Cancelar'>
            <input type = 'submit' id = 'submit-button' value = 'Cadastrar'>

        </form>
    </div>
    
</body>
</html>