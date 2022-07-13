<!DOCTYPE html>
<html>

    <head>
        <title>enviar datos</title>
    </head>
    <h2>registre datos</h2>
    <body>
        <form action="recibir2.php" method="POST">
            <label>matricula</label>
            <input type="text" name="matricula" placeholder="introduce aqui tu malitricula" required>
            <br>

            <label>mombre</label>
            <input type="text" name="nombre" placeholder="introduce aqui tu nombre" required>
            <br>

            <label>fecha</label>
            <input type="date" name="fecha" placeholder="introduce aqui tu fecha" required>
            <br>
            <button>enviar</button>


        </form>
    </body>

</html>