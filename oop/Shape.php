<?php

// 抽象类只是用来继承的，不能用来实例化对象
// 构造函数可以给一个默认值，在实例化的时候可以传参数覆盖默认值，也可以不传参数就用默认值
abstract class Shape
{
    protected $color;

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
}

class Square extends Shape
{
    protected $length;

    /**
     * Square constructor.
     * @param int $length
     */
    public function __construct($length)
    {
        $this->length = $length;
        parent::__construct();
//        $this->color = $color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

$shape = new Square(4);
$shape->setColor('blue');
//$shape = new Square();

var_dump($shape->getColor());
echo '<br>';
var_dump($shape->getArea());