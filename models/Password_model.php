<?php



class Password_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }



    public function NewPWAchse($password)
    {
        //Datenbankzugriff über die Klasse PDO (Test ob es überhaupt funktioniert) (bestanden)
        try {
            $stmt = $this->db->prepare("UPDATE `pass` SET `Achse`='$password' WHERE 1");

            $stmt->execute();

        } catch (PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }

    }
    public function NewPWAllies($password)
    {
        //Datenbankzugriff über die Klasse PDO (Test ob es überhaupt funktioniert) (bestanden)
        try {
            $stmt = $this->db->prepare("UPDATE `pass` SET `Allies`='$password' WHERE 1");

            $stmt->execute();

        } catch (PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }

    }

    public function getRootPW(){
        try{
            $stmt = $this->db->prepare('SELECT * FROM `pass`');
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $Root=$row['root'];

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";
        }
        if (isset($Root)){
            return $Root;
        } else { return false;}

    }




}
