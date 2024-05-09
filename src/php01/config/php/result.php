<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$set_select = htmlspecialchars($_POST["set_select"], ENT_QUOTES);
$orderNumber = htmlspecialchars($_POST["order_number"], ENT_QUOTES);

echo '私の名前は、' . $name;
echo '<br/ >';
echo 'ご希望の商品は、' . $set_select;
echo '<br/ >';
echo '注文数は、' . $orderNumber;
