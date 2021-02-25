<?php

class TeHelperTest extends \PHPUnit\Framework\TestCase
{
    public function testWillExpireAt()
    {
        $te_helper = new TeHelper();
        $current_time = time();
        $due_time = $current_time;

        $created_at_1hr_ago = $current_time - (1 * 60 * 60); // 1 hour difference
        $created_at_24hr_ago = $current_time - (24 * 60 * 60); // 24 hours difference
        $created_at_72hr_ago = $current_time - (72 * 60 * 60); // 72 hours difference
        $created_at_90hr_ago = $current_time - (90 * 60 * 60); // 90 hours difference
        $created_at_95hr_ago = $current_time - (95 * 60 * 60); // 95 hours difference


        $this->assertEquals($due_time, $te_helper->willExpireAt($due_time, $created_at_1hr_ago));
        $this->assertEquals($due_time, $te_helper->willExpireAt($due_time, $created_at_24hr_ago));
        $this->assertEquals($due_time, $te_helper->willExpireAt($due_time, $created_at_72hr_ago));
        $this->assertEquals($due_time, $te_helper->willExpireAt($due_time, $created_at_90hr_ago));

        $result = $due_time - (48 * 60 * 60); // 48 hours difference
        $this->assertEquals(($result, $te_helper->willExpireAt($due_time, $created_at_95hr_ago));
    }
}