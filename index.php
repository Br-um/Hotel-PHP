<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/css.css">
    <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/986/497/png-transparent-omega-logo-omega-sa-symbol-greek-miscellaneous-text-logo.png"
    <title></title>
</head>

<body>
    <div id="body">
        <h1>Hotel</h1>
        <form action="models/suites-class.php" method="POST">
            <h3>Registro de Usario</h3>
            <fieldset>
                <legend for="nome">Nome: </legend>
                <input name="nome" type="text" placeholder="Digite seu nome: ">
            </fieldset>
            <fieldset>
                <legend for="email">Email: </legend>
                <input name="email" type="email" placeholder="Digite seu email: ">
            </fieldset>
            <fieldset>
                <legend for="rg">RG: </legend>
                <input name="rg" type="number" placeholder="Digite seu RG: ">
            </fieldset>
            <fieldset>
                <legend for="telefone">Telefone: </legend>
                <input name="telefone" type="number" placeholder="Digite seu telefone: ">
            </fieldset>
            <fieldset>
                <button type="submit">Registrar</button>
                <button type="reset">Limpar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>