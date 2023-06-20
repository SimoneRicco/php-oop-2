<?php
include 'products.php';
$f1 = new Foods("Croccantini", "Pesce", "Gatto", "https://ipcdn.freshop.com/resize?url=https://images.freshop.com/00829274502252/7342870756826f457bc9297575e1b076_large.png&width=256&type=webp&quality=80", 3.99);
$f2 = new Foods("Croccantini", "Pollo", "Cane", "https://m.media-amazon.com/images/I/81xyE8OZBqL.jpg", 4.50);
$g1 = new Games("Pallina", "Pallina per da lanciare al parco per giocare con il proprio cane", "Cane", "https://ipcdn.freshop.com/resize?url=https://images.freshop.com/00713080400454/2f36e7a3bde3f18c829cc09523e7292e_large.png&width=256&type=webp&quality=80", 4.90);
$g2 = new Games("Topo finto", "Il gatto si divertirà a colpirlo se lo muovi", "Gatto", "https://www.festivalmagiagiocoleria.it/19467-home_default/ratto-peloso-.jpg", 6);
$b1 = new Beds("Cuccia", "XL", "Cane", "https://cdn.shopify.com/s/files/1/0266/6761/4250/products/cuccia-casetta-per-cane-taglia-grande-cani-casa-giardino-98x75x70-cm_256x.jpg?v=1674012269", 13.50);
$b2 = new Beds("Lettino", "S", "Gatto", "https://s.cdnshm.com/catalog/it/t/592244104/trade-shop-cuccia-per-animali-cane-o-gatto-telato-46x32x9cm-tutte-le.jpg", 7.99);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Animal shop</h1>
        <div class="shop-items">
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-images">
                            <img src="<?php echo $f1->categoria->icon ?>" alt="animal img" class="images">
                            +
                            <img src="<?php echo $f1->immagine ?>" alt="animal img" class="images">
                        </div>
                        <div>Nome prodotto: <?php echo $f1->name ?></div>
                        <div>Gusto: <?php echo $f1->taste ?></div>
                        <div>Prezzo: <?php echo $f1->prezzo ?>€</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-images">
                            <img src="<?php echo $f2->categoria->icon ?>" alt="animal img" class="images">
                            +
                            <img src="<?php echo $f2->immagine ?>" alt="animal img" class="images">
                        </div>
                        <div>Nome prodotto: <?php echo $f2->name ?></div>
                        <div>Gusto: <?php echo $f2->taste ?></div>
                        <div>Prezzo: <?php echo $f2->prezzo ?>€</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-images">
                            <img src="<?php echo $g1->categoria->icon ?>" alt="animal img" class="images">
                            +
                            <img src="<?php echo $g1->immagine ?>" alt="animal img" class="images">
                        </div>
                        <div>Nome prodotto: <?php echo $g1->name ?></div>
                        <div>Descrizione: <?php echo $g1->description ?></div>
                        <div>Prezzo: <?php echo $g1->prezzo ?>€</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-images">
                            <img src="<?php echo $g2->categoria->icon ?>" alt="animal img" class="images">
                            +
                            <img src="<?php echo $g2->immagine ?>" alt="animal img" class="images">
                        </div>
                        <div>Nome prodotto: <?php echo $g2->name ?></div>
                        <div>Descrizione: <?php echo $g2->description ?></div>
                        <div>Prezzo: <?php echo $g2->prezzo ?>€</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-images">
                            <img src="<?php echo $b1->categoria->icon ?>" alt="animal img" class="images">
                            +
                            <img src="<?php echo $b1->immagine ?>" alt="animal img" class="images">
                        </div>
                        <div>Nome prodotto: <?php echo $b1->name ?></div>
                        <div>Taglia: <?php echo $b1->size ?></div>
                        <div>Prezzo: <?php echo $b1->prezzo ?>€</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-images">
                            <img src="<?php echo $b2->categoria->icon ?>" alt="animal img" class="images">
                            +
                            <img src="<?php echo $b2->immagine ?>" alt="animal img" class="images">
                        </div>
                        <div>Nome prodotto: <?php echo $b2->name ?></div>
                        <div>Taglia: <?php echo $b2->size ?></div>
                        <div>Prezzo: <?php echo $b2->prezzo ?>€</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>