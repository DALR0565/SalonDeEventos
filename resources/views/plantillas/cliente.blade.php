<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/dark.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
</head>
<style>
    * {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

h1{
    text-align: center;
    padding: 10px;
    color: rgb(97, 96, 96);
}
.descripcion{
    text-align: center;
    padding: 5px 25px;
    color: rgb(53, 53, 53);
}

.card{
    width: 100%;
    display: flex;
    gap: 50px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 30px;
}
.card__perfil{
    width: 310px;
    padding: 20px;
    box-shadow: 1px 1px 5px rgb(201, 201, 201);
    border: solid rgba(3, 133, 255, 0) 2px;
    border-radius: 10px;
}
.card__perfil:hover{
    border: solid rgb(3, 133, 255) 2px;
}

img{
    width: 140px;
    border-radius: 50%;
    box-shadow: 2px 2px 5px rgb(216, 216, 216);
    transition: all .3s;
}
.card__nombre{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
}
hr{
    width: 100%;
    height: 4px;
    background: rgb(223, 221, 221);
    margin: 20px 5px;
}
.card__button{
    text-align: center;
}
.enlace{
    background: rgb(0, 110, 255);
    padding: 8px 20px;
    color: white;
    text-decoration: none;

}
.text-danger{
    color: red;
}
</style>
<body class="">
    <h1>Bienvenido a nuestra pagina de salon de eventos</h1>
    <p class="descripcion">Pagina para crear, registrar o eliminar eventos</p>
    <section class="card">
    @yield('contenido')
    </section>
</body>

</html>
