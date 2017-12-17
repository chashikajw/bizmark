
<div style="width: 100%" class="main-content">
    <ul id="horizontal-style">
        <?php foreach ($categorylist as $item): ?>
            <?= "<li ><a href=" . base_url('/Client/categary_view/') . $item->id . ">" . $item->name ."</a></li>" ?>
        <?php endforeach; ?>
    </ul>
</div>
