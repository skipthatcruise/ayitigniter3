<?php
$currentPage = $pager->getCurrentPage();
$perPage = $pager->getPerPage();
$totalItems = $totalStudents; // Use the dynamic total count from the controller
$start = ($currentPage - 1) * $perPage + 1;
$end = min($start + $perPage - 1, $totalItems);

// Generate URLs for previous and next pages
$previousPageUrl = $currentPage > 1 ? $pager->getPageURI($currentPage - 1) : null;
$nextPageUrl = $currentPage < $pager->getPageCount() ? $pager->getPageURI($currentPage + 1) : null;
?>

<div class="pagin text-center mt-3">
    <span><?= "{$start}-{$end} of {$totalItems}" ?> &nbsp;&nbsp;</span>
    <?php if ($previousPageUrl): ?>
        <a href="<?= $previousPageUrl ?>">&lt; Previous Page</a>&nbsp;&nbsp;
    <?php endif; ?>
    <?php if ($nextPageUrl): ?>
        <a href="<?= $nextPageUrl ?>">Next Page &gt;</a>
    <?php endif; ?>
</div>
