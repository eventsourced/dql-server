<?php namespace Test\EventStore;

use App\EventStore\StreamID;

class EventRepository implements \App\EventStore\EventRepository
{
    private $rows = [];
    
    public function set_row_count($row_count)
    {
        if ($row_count == 0) {
            return;
        }
        $this->rows = range(0, $row_count-1);
    }
    
    public function fetch(StreamID $aggregate_id, $offset, $limit)
    {
        return $this->fetch_all($offset, $limit);
    }
    
    public function fetch_all($offset, $limit)
    {
        return array_slice($this->rows, $offset, $limit);
    }

    public function store(array $events)
    {
        
    }
}