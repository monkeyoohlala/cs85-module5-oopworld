<?php

    class Journal {
        //properties
        public $name;
        public $date;
        public $entry;
        public $media;
        public $entryCount = 0;
        public $newEntry;

        //construct
        public function __construct($name, $entry, $date) {
            $this->name = $name;
            $this->entry = $entry;
            $date = getDate();
            $this->newEntry = false;
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
            
            return $this->entryCount++ . "\n";;
        }
        public function addEntry ($entry) {
            $this->entry = $entry;
        }
        public function deleteEntry () {
            $this->entry = "";
        }
        public function updateEntry ($updateEntry) {
            $this->entry = $updateEntry;
        }
        public function addMedia() {
            $this->media;
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
    // $day1->name="Harold";
    // $day1->entry="love";

    // echo $day1->getName();
    // echo $day1->getDate();
    // echo $day1->addEntry("TEST");
    // echo $day1->deleteEntry();
    // echo $day1->entry;
    // echo $day1->updateEntry("LOVEYOU");


