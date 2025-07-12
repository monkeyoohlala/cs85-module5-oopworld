I am using Copilot for AI section of this assignment.







The prompt I used is this "I need to create a method for php using a Journal class which is for journal entries and I need AI to help me create a method. Can you create me one that does search entries?"







The raw AI-generated code is as follows:

class Journal {
    private array $entries = [];

    public function __construct(array $initialEntries = []) {
        $this->entries = $initialEntries;
    }

    public function addEntry(string $title, string $content): void {
        $this->entries[] = [
            'title' => $title,
            'content' => $content,
            'timestamp' => date('Y-m-d H:i:s')
        ];
    }

    public function searchEntries(string $keyword): array {
        $matches = [];

        foreach ($this->entries as $entry) {
            if (
                stripos($entry['title'], $keyword) !== false ||
                stripos($entry['content'], $keyword) !== false
            ) {
                $matches[] = $entry;
            }
        }

        return $matches;
    }
}










I had to change my code a little bit to add this method to my assignment.
Added an array as a property. Added the entry to that array in the construct. Created a searchEntries() method. Stores results in an array called $results. Uses foreach loop to output every entry with the search phrase inside.