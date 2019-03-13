<?php

class Box
{
    private $serialNumber;
    private $item;
    private $quantity;
    private $priceForBox;

    public function __construct($serialNumber, Item $item, $quantity, $priceForBox)
    {
        $this->serialNumber = $serialNumber;
        $this->item = $item;
        $this->quantity = $quantity;
        $this->priceForBox = $priceForBox;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getItem(): Item
    {
        return $this->item;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPriceForBox()
    {
        return $this->priceForBox;
    }
}

class Item
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
$boxes = [];

while (($input = readline()) != "end") {
    $data = explode(" ", $input);
    $serialNumber = $data[0];
    $itemName = $data[1];
    $itemQuantity = intval($data[2]);
    $itemPrice = floatval($data[3]);
    $priceForBox = $itemQuantity * $itemPrice;

    $item = new Item($itemName, $itemPrice);
    $box = new Box($serialNumber, $item, $itemQuantity, $priceForBox);
    array_push($boxes, $box);
}
usort($boxes, function ($firstBox, $lastBox) {
    /**
     * @var Box $firstBox
     * @var Box $lastBox
     */
    return ($lastBox->getPriceForBox() - $firstBox->getPriceForBox());
});

foreach ($boxes as $box) {
    /**
     * @var Box $box
     */
    $boxSerialNumber = $box->getSerialNumber();
    $boxItemName = $box->getItem()->getName();
    $boxItemPrice = number_format($box->getItem()->getPrice(), 2, ".", "");
    $boxItemQuantity = $box->getQuantity();
    $boxPrice = number_format($box->getPriceForBox(), 2, ".", "");

    echo $boxSerialNumber . PHP_EOL;
    echo "-- $boxItemName - $$boxItemPrice: $boxItemQuantity" . PHP_EOL;
    echo "-- $$boxPrice" . PHP_EOL;
}

