<?php

class Product
{
    protected $_type = '';
    protected $_size = '';
    protected $_color = '';

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->_size = $size;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    public function __toString()
    {
        $str = "product info - type:$this->_type, size:$this->_size, color:$this->_color";

        return $str;
    }
}

class ProductBuilder
{
    protected $_product = NULL;
    protected $_configs = array();

    public function __construct($configs)
    {
        $this->_product = new Product();
        $this->_configs = $configs;
    }

    public function build()
    {
        $this->_product->setType($this->_configs['type']);
        $this->_product->setSize($this->_configs['size']);
        $this->_product->setColor($this->_configs['color']);
    }

    public function getProduct()
    {
        return $this->_product;
    }
}

class Client
{
    public static function main()
    {
        $productConfig = array('type' => 'shirt', 'size' => 'XL', 'color' => 'white');

        $builder = new ProductBuilder($productConfig);
        $builder->build();
        $product = $builder->getProduct();
        echo $product->__toString();

//        $product = new Product();
//        $product->setType($productConfig['type']);
//        $product->setSize($productConfig['size']);
//        $product->setColor($productConfig['color']);
    }
}

Client::main();