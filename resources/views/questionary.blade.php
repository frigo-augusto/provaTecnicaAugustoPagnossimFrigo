<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="{{route('post.questionary')}}">
        <label for = 'name' class = 'form-label'>Digite seu nome</label><br>
        <input type = 'text' class = 'form-input' id = 'name' name='name'>
        <div> {{$questions[0]->title}}</div>
        <input type = 'radio' class = 'form-input' name = 'q1-option' value = '1'>Verdadeiro</input><br>
        <input type = 'radio' class = 'form-input' name = 'q1-option' value ='0'>Falso</input><br>
        <input type = 'hidden' class = 'form-input' name = 'q1-option-id' value = <?php echo $questions[0]->id;?>>
        <div> {{$questions[1]->title}}</div>
        <input type = 'radio' class = 'form-input' name = 'q2-option' value = '1'>Verdadeiro</input><br>
        <input type = 'radio' class = 'form-input' name = 'q2-option' value ='0'>Falso</input><br>
        <input type = 'hidden' class = 'form-input' name = 'q2-option-id' value = <?php echo $questions[1]->id;?>>
        <div> {{$questions[2]->title}}</div>
        <input type = 'radio' class = 'form-input' name = 'q3-option' value = '1'>Verdadeiro</input><br>
        <input type = 'radio' class = 'form-input' name = 'q3-option' value ='0'>Falso</input><br-->
        <input type = 'hidden' class = 'form-input' name = 'q3-option-id' value = <?php echo $questions[2]->id;?>>

        <input type = 'reset' value = 'Cancelar'>
        <input type = 'submit' value = 'Responder'>
    </form>
</body>
</html>