<!DOCTYPE html>
<html hreflang="it">
<?php include 'header.php'; ?>

<body>

    <main></main>
    <section class="hero">
        <div class="container-home">
            <br>
            <h1>Welcome to Our Website</h1>
            <!-- <img src="img/ecommerce.png" alt="Welcome Image">-->
        </div>
    </section>

    <section class="grid-section">
        <h2>Ordini</h2>
        <div class="grid-containers">
            <div class="col-25 grid-item-ordini">
                <div class="ordini-vaschette">
                    <div class="ordini-vaschette-img">
                        <a href="CreaGelato.php"> <img href="CreaGelato.php" src="img/vaschettegelato.jpg"
                                alt="Popular 1"></a>
                    </div>
                    <div class="box1-ordini text-center ">
                        <h6> un classico </h6>
                        <h4>Vaschette Gelato</h4>
                        <a href="CreaGelato.php">Ordina</a>
                    </div>

                </div>

            </div>
            <div class="col-25 grid-item-ordini">
                <div class="ordini-creatorte">
                    <div class="ordini-creatorte-img">
                        <a href="elencoprodotti.php?prodotto=2"> <img href="CreaTorte.php" src="img/creatorteimge.jpg"
                                alt="Popular 2"></a>
                    </div>
                    <div class="box1-ordini text-center ">
                        <h6> Gelato e semifreddo </h6>
                        <h4>Torte</h4>
                        <a href="CreaGelato.php">Ordina</a>
                    </div>
                </div>

            </div>
            <div class="col-25 grid-item-ordini">
                <div class="ordini-creamilkshake">
                    <div class="ordini-creamilkshake-img">
                        <a href="elencoprodotti.php?prodotto=3"> <img href="CreaGelato.php" src="img/creamilkshake.jpg"
                                alt="Popular 3"></a>
                    </div>
                    <div class="box1-ordini text-center ">
                        <h6> Gelato e frappé </h6>
                        <h4>Milkshake</h4>
                        <a href="CreaGelato.php">Ordina</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="grid-section">
        <h2>Gusti più richiesti</h2>
        <div class="grid-containers">
            <div class="col-20 grid-item-gustirichiesti-vaschetta">
                <div class=" grid-item-gusti-vaschetta">
                    <img src="img/vaschetta.jpg" alt="Popular 1">
                </div>
                <div class="box1-richiesti-vaschetta text-center ">

                    <a href="CreaGelato.php">Vaschetta Gelato</a>
                </div>
            </div>
            <div class="col-20 grid-item-gustirichiesti-torta">
                <div class=" grid-item-gusti-torta">
                    <img src="img/torta-frutti.jpg" alt="Popular 2">
                </div>
                <div class="box1-richiesti-torta text-center ">
                    <a href="CreaGelato.php">Frutti di Bosco</a>
                </div>

            </div>
            <div class="col-20 grid-item-gustirichiesti-torta">
                <div class=" grid-item-gusti-torta">
                    <img src="img/torta-pistacchiosa.jpg" alt="Popular 3  ">
                </div>
                <div class="box1-richiesti-torta text-center ">

                    <a href="CreaGelato.php">Pistacchiosa</a>
                </div>
            </div>
            <div class="col-20 grid-item-gustirichiesti-torta">
                <div class=" grid-item-gusti-torta">
                    <img src="img/torta-nutellosa.jpg" alt="Popular 4">
                </div>
                <div class="box1-richiesti-torta text-center ">
                    <a href="CreaGelato.php">Nutellosa</a>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-section">
        <h2>Perché scegliere Ciocco Bisco</h2>
        
        <div class="grid-containers">
            <div class="col-20  grid-item-domicilio text-center">
                <img src="img/domicilio.jpg" alt="Delivery 1">
                <a>Domicilio</a>
            </div>
            <div class="col-20 grid-item-domicilio text-center">
                <img src="img/saltafila.jpg" alt="Delivery 2">
                <a>Salta la fila</a>
            </div>
            <div class="col-20 grid-item-domicilio text-center">
                <img src="img/fasceorarie.jpg" alt="Delivery 3">
                <a> Fasce orarie</a>
            </div>
            <div class="col-20 grid-item-domicilio text-center ">
                <img src="img/sicurezza.jpg" alt="Delivery 4">
                <a>Sicurezza</a>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="container">
            <div class="contenuto">
                <div class="container-contatti">
                    <h2>Orari e Contatti</h2>
                    <!-- Inserisci qui la mappa -->
                    <p>Orari di apertura: Lun-Ven 10:00 - 22:00, Sab-Dom 11:00 - 23:00</p>
                    <p>Indirizzo: Via Example, 12345, Città, Stato</p>
                    <p>Telefono: +123456789</p>
                    <div class="map-container">
                        <!-- Inserisci qui il codice di embed della tua mappa -->
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28322.539723064054!2d-95.68306111366195!3d37.24738851768735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bc8bf0302b7f29%3A0x3b38e0e58b05f659!2sKansas%20City%2C%20KS%2066112%2C%20USA!5e0!3m2!1sen!2s!4v1641215290829!5m2!1sen!2s"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<?php include 'footer.php'; ?>

</html>