<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

App::uses('Model1', 'Model');

class Model1Test extends TestCase
{
    public function testExample()
    {
        (new Model1())->find('first');
        $this->assertTrue(true);
    }
}