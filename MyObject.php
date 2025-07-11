<?php

    class Journal {
        //properties
        public $name;
        public $date;
        public $entry;
        public static $entryCount = 0;
        public $isNewEntry;

        //construct
        public function __construct($name, $entry, $date) {
            $this->name = $name;
            $date = getDate();
            $this->entry = $entry;
            $this->isNewEntry = false;
            self::$entryCount++;
        }

        //methods
        public function getName () {
            return $this->name . "\n";
        }
        public function getDate () {
            date_default_timezone_set('America/Los_Angeles');
            return date("F-d-Y") . "\n";
        }
        public function getEntry () {
            return $this->entry . "\n";
        }
        public function getEntryCount() {
            return self::$entryCount . "\n";
        }
        public function addEntry ($entry) {
            if ($entry === "") {
                $isNewEntry = true;
            } 
            $this->entry = $entry;
        }
        public function deleteEntry () {
            $this->entry = "";
        }
        public function display() {
            return $this->getName() . $this->getDate() . $this->getEntryCount() . $this->getEntry ();
        }
        
        
    }

    $day1 = new Journal("Harold", "Today..", getDate());
    echo $day1->display();
    echo "<br>";

    $day2 = new Journal("Harold", "I did this and that", getDate());
    echo $day2->display();

