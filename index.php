<?php

require __DIR__ . '/inc/utils.inc.php';

$cities = json_decode(
    file_get_contents(__DIR__ . '/data/index.json'),
    true
)

?>

<?php include 'views/header.inc.php'; ?>

<ul class="city-list">
    <?php foreach ($cities AS $city): ?>
        <li>
            <a href="city.php?<?php echo http_build_query(['city' => $city['city']]); ?>">
                <span class="city-name"><?php echo e($city['city']); ?></span>
                <span class="city-country"><?php echo e($city['country']); ?></span>
                <span class="city-flag" aria-hidden="true"><?php echo e($city['flag']); ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</main>
</body>
</html>