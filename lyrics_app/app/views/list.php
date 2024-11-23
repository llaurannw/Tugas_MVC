<h2>Submitted Lyrics</h2>
<?php if (empty($lyrics)): ?>
    <p>No lyrics submitted yet!</p>
<?php else: ?>
    <?php foreach ($lyrics as $lyric): ?>
        <div>
            <strong><?= htmlspecialchars($lyric['name']) ?></strong><br>
            <?= nl2br(htmlspecialchars($lyric['lyrics'])) ?>
        </div>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>
