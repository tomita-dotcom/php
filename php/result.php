<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print"私の名前は、".$name."<br/>";
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
?>

<p>私の名前は、<?php echo $name; ?></p>
<p>ご希望商品は、<?php echo $product; ?></p>
<p>注文数は、<?php echo $order; ?></p>

