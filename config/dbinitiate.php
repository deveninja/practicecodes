<?php

class Dbinitiate {

    protected $host = 'localhost1';
    protected $user = 'virtualworker';
    protected $pass = '';
    protected $dbase = 'music';

    public function setConnection($sethost, $setuser, $setpass, $setdbase)  {
        $this->host = $sethost;
        $this->user = $setuser;
        $this->pass = $setpass;
        $this->dbase = $setdbase;

        
    }

    public function getConnection() {
        return $this->host;
        return $this->user;
        return $this->pass;
        return $this->dbase;

        mysqli_connect($host, $user, $pass, $dbase);

        
        

    }

    

        


    public function newConnection($host, $user, $pass, $dbase) {
        return $this->host;
        return $this->user;
        return $this->pass;
        return $this->dbase;

        mysqli_connect($host, $user, $pass, $dbase);



    }

    
}

