<?php

    class Journal {
        public $name;
        public $date;
        public $entry;
        public $media;
        public $entryCount;
        public $newEntry;
        
        public function getName () {
            return $this->name . "\n";
        }
        public function getDate () {
            date_default_timezone_set('America/Los_Angeles');
            return date("F-d-Y") . "\n";
        }
        public function getEntry () {
            return $this->entry;
        }
        public function getEntryCount() {
            return $entryCount . "\n";
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
        public display() {
            
        }
        
        
    }

    $day1 = new Journal();
    $day1->name="Harold";
    $day1->entry="love";

    echo $day1->getName();
    echo $day1->getDate();
    echo $day1->addEntry("TEST");
    echo $day1->deleteEntry();
    echo $day1->entry;
    echo $day1->updateEntry("LOVEYOU");


