<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>" class="mt-4 mb-4">
	<ul class="pagination justify-content-center">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="page-item me-2">
				<a class="page-link btn btn-outline-primary px-3 py-2" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
					<span aria-hidden="true">« First</span>
				</a>
			</li>
			<li class="page-item me-2">
				<a class="page-link btn btn-outline-primary px-3 py-2" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
					<span aria-hidden="true">‹ Previous</span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li class="page-item me-1 <?= $link['active'] ? 'active' : '' ?>">
				<a class="page-link btn <?= $link['active'] ? 'btn-primary' : 'btn-outline-primary' ?> px-3 py-2" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li class="page-item ms-2">
				<a class="page-link btn btn-outline-primary px-3 py-2" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true">Next ›</span>
				</a>
			</li>
			<li class="page-item ms-2">
				<a class="page-link btn btn-outline-primary px-3 py-2" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
					<span aria-hidden="true">Last »</span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>