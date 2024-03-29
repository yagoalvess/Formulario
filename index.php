<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Fotos/formulario.png" type="image/x-icon">
    <title>Formulario</title>
</head>
<body>
    <div id="bloco">
        <header>Cadastro Formulario</header>

        <form method="GET" action="dados.php">

            <article>Nome:</article>
            <input required placeholder="Nome" type="text" class="lista" name="nome" id="nome"  pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">


            <article>Sobrenome:</article>
            <input required placeholder="Sobrenome" type="text"  class="lista"  name="sobrenome" id="sobrenome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">

            <article>Sexo:</article>
            <div>
                <input checked type="radio" name="sexo" id="masculino" value="M">
                <label for="masculino">Masculino</label>
            </div>
           
            <div>
               <input type="radio" name="sexo" id="feminino" value="F">
               <label for="feminino">Feminino</label> 
            </div>
           



            
            <article>Idade:</article>
            <input required placeholder="99" type="number" class="lista" name="idade" maxlength="2" min="10" max="99" id="" pattern="[1-9]+$">

            
            <article>Email:</article>
            <input required placeholder="you@email.com" type="email" class="lista" name="email" id="">

            <article>Telefone:</article>
            <input required placeholder="0000-00000" type="number" class="lista" name="telefone" id="" minlength="9" maxlength="9" max="999999999" pattern="[0-9]+$">


            

            <input id="botao" type="submit" value="Confimar">
        </form>

        
        
    
    </div>

</body>
</html>