<?php

namespace KoineTests;

use PHPUnit_Framework_TestCase;
use Dummy\City;
use Dummy\State;

class MethodDelegatorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function delegateMethodWithNoArguments()
    {
        $state = new State('State Name');
        $city  = new City('Some City', $state);

        $this->assertEquals('State Name', $city->getStateName());
    }
}
