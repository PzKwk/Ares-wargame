<?php



class Krause_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    public function NewRoot($password)
    {



            //Datenbankzugriff über die Klasse PDO (Test ob es überhaupt funktioniert) (bestanden)
            try {
                $stmt = $this->db->prepare("UPDATE `pass` SET `root`='$password' WHERE 1");

                $stmt->execute();
            } catch (PDOException $ex) {
                echo "Fehler bei Datenbankanbindung";

            }

    }





}