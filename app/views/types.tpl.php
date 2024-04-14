
<div class="types_list">
    <p>Cliquez sur un type pour voir tous les Pokémon de ce type</p>
    <?php  $types = $viewData['types'];

    if(!$types) {
        echo "Oups, aucun type trouvé !";
    } else {
        echo "<ul>";
        foreach ($types as $type): ?>
            <li class="type" style="background: #<?= $type->getColor() ?>;">
                <a href="<?= $absoluteURL . '/type/' . $type->getId() ?>"><?php echo $type->getName() ?></a>
            </li>
        <?php endforeach;
        echo "</ul>";
    }?>
</div>