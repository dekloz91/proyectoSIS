<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<style>
    #map{
        height:25em;
    }
    h1{
        text-align: center;
    }
</style>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DEL MEDICO </h2>
            </section>
            <section class="info_items">
                <p>Nombres: Dr. Joaquin Alberto<br></br></p>
                <p>Nombres: Dr. Joaquin Alberto<br></br></p>
                <p>Nombres: Dr. Joaquin Alberto<br></br></p>
                <p></p>
            </section>
        </section>

        <form action="" class="form_contact">
            <h2>Confirmación de cita</h2>
            <br></br>
            <div class="user_info">
                <label for="name">Nombres: </label>
                Dr. Joaquin Alberto<br></br>

                <label for="Especialidad">Especialidad: </label>
                Medicina General<br></br>

                <label for="salud">Centro de Salud:</label>
                Hospital 2 de Mayo<br></br>

                <label for="horario">Horario: </label>
                08:00 am - 08:15 am<br></br>

                <label for="carnet">Carnet medico: </label>
                000015231<br></br>
                <br></br>
                <br></br>


                <input type="button" value="Confirmar" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
