<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controlador_db.php" method="post">
        <!-- <select name="" id=""></select> -->
        <!-- <input name="cliente" type="number"> -->
        <label for="clientes">Nombre de cliente</label>
        <select name="cliente" id="clientes">
            <option value="1">Fransisco</option>
            <option value="2">Mauricio</option>
            <option value="3">Orlando</option>
        </select>
        <input name="total" type="number">
        <input type="submit">
    </form>
</body>
</html>