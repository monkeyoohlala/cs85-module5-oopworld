<?php

    class Journal {
        //properties
        private $name;
        private $date;
        private $entry;
        private static $entryCount = 0;
        private $isNewEntry;
        private static $entries = [];

        //construct
        //construct should create a journal entry with your name, date, and journal entry
        public function __construct($name, $entry, $date, $initialEntries=[]) {
            $this->name = $name;
            $date = getDate();
            $this->entry = $entry;
            $this->isNewEntry = false;
            Journal::$entryCount++;

            //added this part using COPILOT, stores entries in an array for searching
            Journal::$entries[] = [
                'toSearch' => $entry
            ];

        }

        //methods
        //getName function will assign yor name to the property $name
        public function getName () {
            return "Name: " . $this->name . "<br>";
        }
        //getDate calculates the timezone based on where you are and returns month, day, and year
        public function getDate () {
            date_default_timezone_set('America/Los_Angeles');
            return "Date: " . date("F-d-Y") . "<br>";
        }
        //getEntry returns whatever is in entry, entry is inserted when construct loads
        public function getEntry () {
            return $this->entry . "\n";
        }
        //getEntryCount gets the number of entries that is also created when construct loads
        public function getEntryCount() {
            return "Entry #" . Journal::$entryCount . "<br>";
        }
        //updates an entry
        public function updateEntry($entry) {
            if ($entry === "") {
                $isNewEntry = true;
            } 
            $this->entry = $entry;
        }
        //sets entry to ""
        public function deleteEntry() {
            $this->entry = "";
        }
        //displays the name, date, number of the current entry, and the journal entry
        public function display() {
            return $this->getName() . $this->getDate() . $this->getEntryCount() . $this->getEntry () . "<br><br>";
        }
        
        //added searchEntries using COPILOT, searches all entries for a keyword and returns an array
        public function searchEntries($keyword) {
            $matches = [];

            foreach (Journal::$entries as $entry) {
                if (stripos($entry['toSearch'], $keyword) !== false){
                    $matches[] = $entry;
                }
            }

            return $matches;
        }
        
    }

    //journal entry #1
    $day1 = new Journal("Harold", "Today..", getDate());
    echo $day1->display();

    //journal entry #2, also uses updateEntry() to replace the text inside
    $day2 = new Journal("Harold", "I did this and that", getDate());
    $day2->updateEntry("I changed this part of the entry");
    echo $day2->display();
    
    //journal entry #3
    $day3 = new Journal("Harold", "Twas a beautiful, happy day today", getDate());
    echo $day3->display();

    //journal entry #4
    $day4 = new Journal("Harold", "I am happy, very", getDate());
    echo $day4->display();
    
    //added this with COPILOT, searches all entries for a search phrase which I chose as "happy" and outputs every entry found with that search word
    $results = $day4->searchEntries("happy");
    foreach ($results as $found) {
        echo $found['toSearch'] . "<br>";
    }