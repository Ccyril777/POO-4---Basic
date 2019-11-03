<?php

interface rechargeableInterface
{
    public function charge(int $percentage) :int;
    public function unLoad(int $percentage) :int;
}