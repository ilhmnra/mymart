<?php foreach ($customers as $customer) { ?>
    <h3><?= $customer->nama ?></h3>
    <?php foreach ($orders as $order) { ?>
        <?php if ($order->customer_id == $customer->id) { ?> <!-- Corrected comparison operator == -->
            <h5>Order id : <?= $order->id ?></h5> <!-- Display the order ID -->
            <h5>Item: </h5>
            <?php foreach ($order_items as $order_item) { ?> <!-- Corrected variable name $order_item -->
                <?php foreach ($items as $item) { ?>
                    <?php if ($order_item->item_id == $item->id && $order->id == $order_item->order_id) { ?>
                        <li><?= $item->name ?></li> <!-- Display the item name -->
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <hr>
<?php } ?>
