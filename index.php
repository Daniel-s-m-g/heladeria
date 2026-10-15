<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heladeria Malesas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php

$nombre = "Malesas";
$Propietario = "Daniel Males";
$ciudad = "Pasto";


$edad = 19;


$dia = "martes";

$disponible = true;
?>
 <header>
        <img src="img/logo.jpg" alt="logo"width=300>
        <h1><?php echo $nombre; ?></h1>
        <p>Helados para disfrutar cada momento</p>
    </header>

    <main>

        <section class="presentacion">
            <h2>Bienvenidos a nuestra heladeria</h2>
            <p>
                Somos una heladeria que ofrece deliciosos
                helados para compartir con amigos y familia.
            </p>

            <p>
                Dueño De Negocio: <?php echo $Propietario; ?>
            </p>

            <p>
                Ciudad: <?php echo $ciudad; ?>
            </p>
        </section>

        <section>
            <h2>Nuestros sabores</h2>

            <div class="productos">

                <div class="Sabor">
                    <img src="img/vainilla.jpg" alt="vainilla">
                    <h3>Vainilla</h3>
                    <p>Helado suave y cremoso.</p>
                    <p class="precio">$3.000</p>
                </div>

                <div class="Sabor">
                   <img src="img/chocolate.jpg" alt="chocolate">
                    <h3>Chocolate</h3>
                    <p>Un sabor dulce y delicioso.</p>
                    <p class="precio">$3.500</p>
                </div>

                <div class="Sabor">
                    <img src="img/fesa.jpg" alt="fresa">
                    <h3>Fresa</h3>
                    <p>Un helado con sabor a fruta.</p>
                    <p class="precio">$3.000</p>
                </div>

                <div class="Sabor">
                   <img src="img/napolitano.jpg" alt="napolitano">
                    <h3>Napolitano</h3>
                    <p>Una mezcla de sabores.</p>
                    <p class="precio">$4.000</p>
                </div>

            </div>
        </section>

        <section class="mensaje">
            <h2>Mensaje de bienvenida</h2>

            <?php
            if ($edad >= 18) {
                echo "<p>¡Bienvenido! Conoce nuestras promociones especiales seniur</p>";
            } else {
                echo "<p>¡Bienvenido! Descubre nuestros deliciosos sabores junior</p>";
            }
            ?>
        </section>

        <section class="mensaje">
            <h2>Promocion del dia</h2>

            <?php
            if ($dia == "martes") {
                echo "<p>¡Hoy tenemos 2x1 en conos!</p>";
            } else {
                echo "<p>Hoy puedes disfrutar de nuestros sabores habituales</p>";
            }
            ?>
        </section>

        <section class="mensaje">
            <h2>Disponibilidad del sabor</h2>

            <?php
            if ($disponible == false) {
                echo "<p>¡Este sabor esta disponible!</p>";
                 echo "<p>Vainilla</p>";
                 echo "<p>napolitano</p>";
            } else {
                echo "<p>Lo sentimos, este sabor esta agotado</p>";
                echo "<p>chocolate</p>";
                echo "<p>frresa</p>";

            }
            ?>
        </section>

        <section class="promocion">
            <h2>Nuestras promociones</h2>
            <p>Los martes tenemos 2x1 en conos.</p>
            <p>Ven con tus amigos y disfruta nuestros helados.</p>
        </section>

    </main>

    <footer>
        <p>Contacto: 300 123 4567</p>
        <p>Correo: Malesa@gmail.com.com</p>
        <p><?php echo $nombre; ?> - Pasto, Colombia</p>
    </footer>
</body>
</html>