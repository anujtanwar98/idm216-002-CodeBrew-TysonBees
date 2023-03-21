<?php
$str = $item['items_ordered'];
if ($str != null)
{
    $meals = array();
    $quantities = array();
    $prices = array();

    foreach (explode(',', $str) as $item) {
        if (preg_match('/^(.*?)\((\d+)\)\s*-\s*(\$\d+(?:\.\d{1,2})?)/', $item, $matches)) {
            $meals[] = trim($matches[1]);
            $quantities[] = (string) $matches[2];
            $prices[] = (string) $matches[3];
        } else {
            // Debugging line: Print the item that couldn't be parsed
            echo "Unable to parse item: $item<br>";
        }
    }

    $i =0;
    while($i < count($meals)) {
        echo "
        <div class='order-history-item-food'>
        <div class='order-history-item-food-name'>
            <div class='order-history-item-food-name-text'>
            Name:{$meals[$i]} 
            <br>
            <span class='order-history-item-food-name-text-quantity'>
            Quantity: {$quantities[$i]} 
            </span>
            </div>
        </div>
            <div class='order-history-item-food-price'>
            {$prices[$i]}
            </div>
        </div>
        ";
    $i++;
}
}

?>

<!-- <div class='order-history-item-box'>
    <div class='order-history-item-order-number'>Order= {$item['id']}</div>
        <hr>
        
        <hr>
        <div class='order-history-item-total'>
            <div class='order-history-item-total-text'>Total</div>
            <div class='order-history-item-total-price'>
                <div class='order-history-item-total-price-text'>". price_with_dollar_sign($item['final_total']) ."</div>
        </div>
    </div>
</div> -->
