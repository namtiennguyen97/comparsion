<?php
include "Circle.php";
include "Comparable.php";
class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }
    public function compareTo($circleTwo)
    {
        $circleTwoRadius = $circleTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 'Circle 1 lon hon Circle 2';
        }  else if($this->getRadius() < $circleTwoRadius) {
            return 'Circle 1 nho hon Circle 2';
        } else {
            return 'Bang nhau';
        }
    }
}