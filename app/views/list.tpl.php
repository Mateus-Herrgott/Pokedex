    <section class="PokemonGallery">
        <div class="container">
            <?php $pokemons = $viewData['pokemons'];
             foreach ($pokemons as $key => $pokemon): ?> 
                <a href="<?= $router->generate("page_detail", ["id" => $pokemon->getNumber()]) ?>">
                    <img src="<?= $absoluteURL ?>/img/<?= $pokemon->getNumber() ?>.png" alt=""> 
                    <p>#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></p>
                </a>           
            <?php endforeach ?>
        </div>  
    </section>  
</body>
</html>