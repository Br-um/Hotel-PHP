<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/css.css">
    <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/986/497/png-transparent-omega-logo-omega-sa-symbol-greek-miscellaneous-text-logo.png"/>
    <title>HotelOlimpus</title>
</head>

<body>
    <div id="body">
        <h1>Hotel</h1>
        <form action="models/suites-class.php" method="POST">
            <h3>Registro de Usario</h3>
            <fieldset>
                <legend for="name">Nome: </legend>
                <input name="name" type="text" placeholder="Digite seu nome: ">
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
                <legend for="phone">Telefone: </legend>
                <input name="phone" type="number" placeholder="Digite seu telefone: ">
            </fieldset>
            <fieldset>
                <legend for="days">Diarias: </legend>
                <input name="days" type="number" placeholder="Numero de diárias: ">
            </fieldset>
            <fieldset>
                <legend for="suite">Suite: </legend>
                <select name="suite" id="">
                    <option value="">Escolha sua suite</option>
                    <option value="Suíte Double Master">Suíte Double Master</option>
                    <option value="Suíte Família">Suíte Família</option>
                    <option value="Suíte Single">Suíte Single</option>
                </select>
            </fieldset>
            <fieldset>
                <button type="submit">Registrar</button>
                <button type="reset">Limpar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>