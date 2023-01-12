<?php

class Product
{
    private $title;
    private $price;
    private $components;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
        $this->components = array();
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addComponent(Product $product)
    {
        $this->components[] = $product;
    }

    public function removeComponent(Product $product)
    {
        $key = array_search($product, $this->components);
        if ($key !== false) {
            unset($this->components[$key]);
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        $price = $this->price;
        foreach ($this->components as $product) {
            $price += $product->getPrice();
        }
        return $price;
    }

    public function getComponents()
    {
        return $this->components;
    }
}

class Cart
{
    private $items = array();

    public function addItem(Product $product)
    {
        $this->items[] = $product;
    }

    public function removeItem(Product $product)
    {
        $key = array_search($product, $this->items);
        if ($key !== false) {
            unset($this->items[$key]);
        }
    }

    public function getTotalCost()
    {
        $totalCost = 0;
        foreach ($this->items as $product) {
            $totalCost += $product->getPrice();
        }
        return $totalCost;
    }
}
