<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_basicList()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "2";

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2), $result);
        }
        function test_makePingPong_basicList_with_ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "3";

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,"ping"), $result);
        }
        function test_makePingPong_basicList_with_pong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "5";

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,"ping",4,"pong"), $result);
        }
        function test_makePingPong_basicList_with_pingpong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "15";

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"pingpong"), $result);
        }
    }
 ?>
