<?php $pager->setSurroundCount(1) ?>
<nav aria-label="Page navigation">
    <ul class="inline-flex -space-x-px text-sm">
        <?php if ($pager->hasPreviousPage()): ?>
            <li>
                <a href="<?= $pager->getPreviousPage() ?>" 
                   class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li>
                <a href="<?= $link['uri'] ?>" 
                   class="px-3 py-2 leading-tight border border-gray-300 
                          <?= $link['active'] ? 'bg-blue-600 text-white' : 'bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-700' ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()): ?>
            <li>
                <a href="<?= $pager->getNextPage() ?>" 
                   class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
            </li>
        <?php endif ?>
    </ul>
</nav>
