<?php

namespace Tests\Integration;

use App\Services\CsvReader;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCsvReader()
    {
        $filePath='/tmp/randomstring.csv';
        // Create file
        file_put_contents($filePath, "Header1,Header2,Header3\n");
        file_put_contents($filePath, "A,B,C\n", FILE_APPEND);
        file_put_contents($filePath, "D,E,F\n", FILE_APPEND);
        file_put_contents($filePath, "G,H,I\n", FILE_APPEND);

        $reader = new CsvReader();
        $result = $reader->execute($filePath);
        //var_dump($result);die;
        $this->assertEquals('A', $result[1]['Header1']);
        $this->assertEquals('E', $result[2]['Header2']);
        $this->assertEquals('I', $result[3]['Header3']);
    }
}
