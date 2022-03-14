<?php
setcookie("Auction_Item","Luxury_Car",time()+(2*24*60*60));

if (isset($_COOKIE["Auction_Item"])) {
  echo "Auction item is a luxury car";
}
else {
  echo "No auction items";
}

?>
