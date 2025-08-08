<?php $pager->setSurroundCount(1) ?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>" class="mt-6 flex justify-center">
    <ul class="inline-flex items-center space-x-1">
        <?php if ($pager->hasPreviousPage()) : ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" 
                   class="px-3 py-1 rounded-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 transition"
                   aria-label="<?= lang('Pager.first') ?>">
                    « First
                </a>
            </li>
            <li>
                <a href="<?= $pager->getPreviousPage() ?>" 
                   class="px-3 py-1 rounded-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 transition"
                   aria-label="<?= lang('Pager.previous') ?>">
                    ‹ Prev
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li>
                <a href="<?= $link['uri'] ?>" 
                   class="px-3 py-1 rounded-md border <?= $link['active'] 
                       ? 'bg-blue-500 text-white border-blue-500' 
                       : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100' ?> transition">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li>
                <a href="<?= $pager->getNextPage() ?>" 
                   class="px-3 py-1 rounded-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 transition"
                   aria-label="<?= lang('Pager.next') ?>">
                    Next ›
                </a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" 
                   class="px-3 py-1 rounded-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 transition"
                   aria-label="<?= lang('Pager.last') ?>">
                    Last »
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>
