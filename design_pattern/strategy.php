<?php

abstract class Lesson
{
    private $_duration;
    private $_cost_strategy;

    function __construct($duration, $cost_strategy)
    {
        $this->_duration = $duration;
        $this->_cost_strategy = $cost_strategy;
    }

    public function get_duration()
    {
        return $this->_duration;
    }


    function cost()
    {
        return $this->_cost_strategy->cost($this);
    }
}

class Lecture extends Lesson
{}

class Seminar extends Lesson
{}

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);
}

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return ($lesson->get_duration() * 5);
    }
}

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return 120;
    }
}

$lesson = new Lecture(6, new FixedCostStrategy());
echo $lesson->cost();