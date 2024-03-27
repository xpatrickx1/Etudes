<?php $counters = [
    [
        'title' => 'Authors',
        'count' => 317
    ],
    [
        'title' => 'Clients',
        'count' => 1757
    ],
    [
        'title' => 'Orders Delivered',
        'count' => 4506
    ],
    [
        'title' => 'Good feedback',
        'count' => 86,
        'percent' => true
    ],
] ?>

<div class="counters">
    <div class="container counters__flex">
        <?php foreach ($counters as $item): ?>
           <div class="counters__item counter">
               <div class="counter__number">
                   <span class="countTo" data-from="0" data-to="<?php echo $item['count'] ?>">0</span>
                   <?php echo $item['percent'] ? '%' : '' ?>
               </div>
               <div class="counter__title">
                   <?php echo $item['title'] ?>
               </div>
           </div>
        <?php endforeach; ?>
    </div>
</div>