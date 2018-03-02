<?php

require_once('manager.php');

class test extends \PHPUnit\Framework\TestCase {

    public function test_export_user_data() {
        $mock = $this->getMockBuilder(\core_privacy\manager::class)
            ->setMethods(['get_component_list'])
            ->getMock();

        $mock->expects($this->any())
            ->method('get_component_list')
            ->will($this->returnValue(['a', 'b', 'c']));

        $this->assertTrue($mock->export_user_data());
    }
}
