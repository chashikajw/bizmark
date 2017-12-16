<ul id="myUL" class="span3">
    <?php foreach ($categorylist as $item): ?>
        <?= "<li ><a href=" . base_url('/Client/categary_view/') . $item->id . ">" . $item->name ."</a></li>" ?>
    <?php endforeach; ?>
</ul>
