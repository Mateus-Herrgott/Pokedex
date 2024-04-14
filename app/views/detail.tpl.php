<?php $pokemon = $viewData['pokemon'];
      $types = $viewData['types'] ?>
    <section class="detail">
            <div class="card_container">
                <div class="card_header">              
                            <ul>
                                <div>
                                    <?php foreach ($types as $type): ?>
                                        <li class = "type" style="background-color: #<?= $type->getColor()?>;" ><?= $type->getName() ?></li> 
                                    <?php endforeach ?>  
                                    <p class="pokemonName">#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></p>        
                                </div>                              
                                <p>pv <?= $pokemon->getHp()?></p>
                            </ul>                       
                    </div>
                <div class="card">

                    
                        <img src="<?= $absoluteURL ?>/img/<?= $pokemon->getNumber() ?>.png" alt="">
                    <div class="card_stats">
                        <h2>Statistiques</h2>    
                            <div class="stat">
                                <div class="label">Attaque </div>
                                <div class="value"><?= $pokemon->getAttack()?></div>
                                <div class="stat_container">
                                    <div class="bar_value" style="width:<?= ($pokemon->getAttack() * 100) / 255 ?>%"></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="label">Défense</div>
                                <div class="value"><?= $pokemon->getDefense()?></div>
                                <div class="stat_container">
                                    <div class="bar_value" style="width:<?= ($pokemon->getDefense() * 100) / 255 ?>%"></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="label">Attaque Spé.</div>
                                <div class="value"><?= $pokemon->getSpe_attack()?></div>
                                <div class="stat_container">
                                    <div class="bar_value" style="width:<?= ($pokemon->getSpe_Attack() * 100) / 255 ?>%"></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="label">Défense Spé. <span></div>
                                <div class="value"><?= $pokemon->getSpe_defense()?></div>
                                <div class="stat_container">
                                    <div class="bar_value" style="width:<?= ($pokemon->getSpe_defense() * 100) / 255 ?>%"></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="label">Vitesse</div>
                                <div class="value"><?= $pokemon->getSpeed()?></div>
                                <div class="stat_container">
                                    <div class="bar_value" style="width:<?= ($pokemon->getSpeed() * 100) / 255 ?>%"></div>
                                </div>
                            </div>                
                        </div>
                </div>

            </div>
        <div>
            <a href="<?= $absoluteURL ?>/">Revenir à la liste</a>
        </div>       
    </section>   
</body>
</html>