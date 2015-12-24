<?php
namespace Home\Behaviors;
class TestBehavior extends \Think\Behavior {
    public function run(&$param) {
        echo 'testbehavior';
    }
}