<html>
    <head>
    <title>Tienda doña clemencia</title>
    </head>
    <body>
    <form action="insert_prod.php" method="post">  
        <table align="center">
            <tr>
                <td><h2>Codigo del producto</h2></td>
                <td><input type="text" name="codprod"></td>
            </tr>
            <tr>
                <td><h2>Nombre del producto</h2></td>
                <td><input type="text" name="nomprod"></td>
            </tr>
            <tr>
            <td><h2>cantidad</h2></td>
            <td><input type="number" name="cantprod"></td>
            </tr>
            <tr>
            <td><h2>estado</h2></td>
            <td><select name="estprod">
                    <option value="1">habilitado</option>
                    <option value="2">deshabilitado</option></td>
                </select>
            </tr>
            <tr>
            <td><center><input type="submit" value="Registrar"></td>
            </tr>
    </body>
    
</html>