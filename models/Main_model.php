<?php



class Main_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }



    public function getPW($from){
        try{
            $stmt = $this->db->query('SELECT * FROM `pass`');
            

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $PW=$row[$from];

            }

        }catch(PDOException $ex) {
            echo "error at Database";
        }


        if (isset($PW)){
            return $PW;
        }
        else{
            return false;
        }
    }




}
