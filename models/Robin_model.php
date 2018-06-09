<?php



class Robin_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }



    public function getRobinPW(){
        try{
            $stmt = $this->db->prepare('SELECT * FROM `pass`');
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $Robin=$row['Robin'];
                //echo  $Robin;
            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";
        }
        if (isset($Robin)){
            return $Robin;
        } else { return false;}

    }




}
