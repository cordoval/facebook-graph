<?php
namespace Facebook\Tests\Fixtures;

class Note
{
    private $from;
    private $message;
    private $date;

    /**
     * @return Facebook\Tests\Fixtures\Owner
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
