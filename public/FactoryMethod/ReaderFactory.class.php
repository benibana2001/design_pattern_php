<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-18
 * Time: 07:52
 */
require_once 'Reader.class.php';
require_once 'CSVFileReader.class.php';
require_once 'XMLFileReader.class.php';

class ReaderFactory
{
    public function create($filename)
    {
        $reader = $this->createReader($filename);

        return $reader;
    }

    private function createReader($filename)
    {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if($poscsv !== false) {

            $r = new CSVFileReader($filename);
            return $r;

        } elseif ($posxml !== false) {

            return new XMLFileReaer($filename);

        } else {

            die('This filename is not supported : ' . $filename);

        }
    }
}
