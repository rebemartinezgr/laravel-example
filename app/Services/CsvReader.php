<?php

namespace App\Services;

use League\Csv\Reader;

class CsvReader
{
    /**
     * Basic example of reading csv file
     *
     * @param $filePath
     * @return \Iterator
     * @throws \League\Csv\Exception
     */
    public function execute($filePath)
    {
        $result = [];
        $csv = Reader::createFromPath($filePath, 'r');
        $csv->setHeaderOffset(0);
        // Get the header line
        $header = $csv->getHeader();
        $records = $csv->getRecords();
        foreach ($records as $line => $data) {
            // Iterate though file line by line
            $result[$line] = $data;
        }
        return $result;
    }
}

