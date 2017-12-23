<?php
// public 在哪里都可以
// private 只能在类只能访问
// protected 可以在子类中访问。
class Mother
{
    protected function getEyesCount()
    {
        return 2;
    }

}

class Child extends Mother
{
//    public function getEyes()
//    {
//        return $this->getEyesCount();
//    }
    public function getEyesCount()
    {
        return 3;// 二郎神有三只眼
    }
}

$child = new Child();

var_dump($child->getEyesCount());

