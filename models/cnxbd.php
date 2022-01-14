<?php


class cnxDB
{

    private $cnx;

    public function __construct()
    {
        try {
            $this->cnx = new PDO('mysql:host=localhost;dbname=bdrestaurant', 'root', '');
           
           echo "Conectado";

        } catch (PDOException $cnx) {
        	print "Error: ".$cnx->getMessage() ."<br/>";
        	die();
          
        }
    }

    function getCnx()
    {
        return $this->cnx;
    }
}

?>