<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="libroporta.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <?php require 'login.php';?>
    <div class="cont">
        <?php require 'header.php';?>
        <div class="banner"></div>
       
        <div class="categorias_fotos">
           <div class="catpa r1">1</div>
            <div class="catpa r2 ">2</div>
            <div class="catpa r3" >3</div>
            <div class="catpa r4">4</div>
            <div class="catpa r5 ">5</div>
            
        </div>
       <div class="subca">
            <h2 class="subtitulo">
                Productos de Categoria
            </h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis debitis alias distinctio neque veniam corporis quasi ut aliquid consequatur quia expedita tempora, natus animi ab voluptatem vero! Commodi, dolorem repellendus?
            </p>
        </div>
        <section class="categorias_texto">
            <ul>
                <li> CATEGORIA 1</li>
                <li>CATEGORIA 2</li>
                <li>CATEGORIA 3</li>
            </ul>
        </section>
        <div class="ventalibros"> 
            <div class="libro">1</div>
            <div class="libro">2</div>
            <div class="libro">3</div>
            <div class="libro">4</div>
            <div class="libro">5</div>
            <div class="libro">6</div>
            <div class="libro">7</div>
            <div class="libro">8</div>

        </div>
        <div class="ad">
            PUBLICIDAD CAMBIAR
        </div>
        
        <section class="reco">
            <div class="textoreco"><p>Featured</p></div>
            <div class="textoreco"><p>Most View</p></div>
            <div class="textoreco"><p>On sale</p></div>
            <div class="cartelito">cartelito</div>
            <div class="libroreco ab"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco ab"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco ab"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco ab"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco ab"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco ab"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco sb"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco sb"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            <div class="libroreco sb"><div class="book3d " id="otro"><img src="IMG/harrypotter.png" alt=""></div></div>
            
        </section>
        <div id="recentp"> 
            <h2>RECENT POSTS</h2>
            <div class="imaga"><div class="estoseriaunimg"></div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatum ipsa ratione vitae officiis at nulla iste fugiat eveniet? Reprehenderit repellat, iure dolore consequuntur dolorem alias excepturi! Officiis, nesciunt at.</p></div>
            <div class="imaga"><div class="estoseriaunimg"></div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatum ipsa ratione vitae officiis at nulla iste fugiat eveniet? Reprehenderit repellat, iure dolore consequuntur dolorem alias excepturi! Officiis, nesciunt at.</p></div>
            <div class="imaga"><div class="estoseriaunimg"></div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatum ipsa ratione vitae officiis at nulla iste fugiat eveniet? Reprehenderit repellat, iure dolore consequuntur dolorem alias excepturi! Officiis, nesciunt at.</p></div>
        </div>
       
        <div id="cualidades">
        <h3>Free Shiping item</h3>
        <h3>Money Back Guarantee</h3>
        <h3>Cash On Delivery</h3>
        <h3>Help And support</h3>
        </div>
        <div id="contactar"></div>
        <?php require 'footer.php';?>
    </div>
</body>
</html>