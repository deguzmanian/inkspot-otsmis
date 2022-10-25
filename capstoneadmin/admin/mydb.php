<?php

class MyDb
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $link;

        function __construct()
        {
            $this->host ="localhost";
            $this->username ="root";
            $this->password ="";
            $this->database ="tattoo_db";

            $this->link = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if(mysqli_connect_errno())
            {
                $log = 'MYSQL Error:' .mysqli_connect_error();
                exit($log);
            }
        }

        
        function __destruct()
        {
            if(isset($this->link))
            {
                mysqli_close($this->link);
            }
        }
        
        public function ann_records() 
        {
                $qstr = "SELECT * FROM announcements";
                $result = mysqli_query($this->link, $qstr);
                $records = array();

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $records[] = [
                            'announce_id' => $row['announce_id'],
                            'shopname' => $row['shopname'],
                            'event' => $row['event'],
                            'dateTime' => $row['dateTime'],
                        ];
                    }
                }else {
                    $records = null;
            }
            mysqli_free_result($result);
            return $records;
        }
        public function announce_add($shopname,$event, $dateTime)
        {
            $shopname = mysqli_real_escape_string($this->link, $shopname);
            $event = mysqli_real_escape_string($this->link, $event);
            $dateTime = mysqli_real_escape_string($this->link, $dateTime);

            $qstr = "INSERT INTO announcements (shopname, event, dateTime) VALUES ('$shopname','$event', '$dateTime')";
            return mysqli_query($this->link, $qstr);
        
        
        }
}