<?php

class Client extends Dbconnect
{
    public $Nom;
    public $Nom_business;
    public $Type_business;
    public $Numero;
    public $Ville; 
    public $Adresse;
    public $Email;
    public $Password;
    public $id;
  
    
   
    public function setId($id)
    {
        $this->id=$id;
    }

    public function setNom($Nom)
    {
         $this->Nom=$Nom;
    }

    public function setNom_business($Nom_business)
    {
         $this->Nom_business=$Nom_business;
    }

    public function setType_business($Type_business)
    {
         $this->Type_business=$Type_business;
    }
    public function setNumero($Numero)
    {
         $this->Numero=$Numero;
    }

    public function setAdresse($Adresse)
    {
         $this->Adresse=$Adresse;
    }
    public function setVille($Ville)
    {
         $this->Ville=$Ville;
    }

    public function setEmail($Email)
    {
         $this->Email=$Email;
    }

    public function setPassword($Password)
    {
         $this->Password=$Password;
    }
    



    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getNom_business()
    {
        return $this->Nom_business;
    }

    public function getType_business()
    {
        return $this->Type_business;
    }
    public function getNumero()
    {
        return $this->Numero;
    }

    public function getAdresse()
    {
        return $this->Adresse;
    }
    public function getVille()
    {
        return $this->Ville;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    
  public function insert()
  {

    try {

      $sql = "INSERT INTO inscription_client  VALUES (null,?,?,?,?,?,?,?,?)";
      $prepare = $this->preparation($sql);
      $prepare = $prepare->execute([$this->getNom(), $this->getNom_business(), $this->getType_business(), $this->getNumero(), $this->getVille(), $this->getAdresse(), $this->getEmail(), $this->getPassword()]);

      if ($prepare) {
        header('location:connexion_client');
      } else echo 'erreur!!!!';
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  public function affichNvClient()
  {
    $sql = "SELECT * FROM  inscription_client ORDER BY id DESC";
    return $prepare = $this->connect()->query($sql)->fetchALL();
  }
  

  public function statistiqueColis()
  {
    $sql="SELECT * FROM colis WHERE id_client LIKE ? ";
    $prepare = $this->preparation($sql);
    $prepare->execute([$_SESSION['id_client']]);
    $prepare=$prepare->fetchAll();
    return count($prepare);
    
  }

  public function statistiqueRamassage()
  {
    $sql="SELECT * FROM colis WHERE id_client LIKE ? AND Statut LIKE ?";
    $prepare = $this->preparation($sql);
    $prepare->execute([$_SESSION['id_client'],'Attente du rammasage']);
    $prepare=$prepare->fetchAll();
    return count($prepare);
    
  }

  public function statistiqueRetour()
  {
    $sql="SELECT * FROM colis WHERE id_client LIKE ? AND Etat LIKE ?";
    $prepare = $this->preparation($sql);
    $prepare->execute([$_SESSION['id_client'],'Retour']);
    $prepare=$prepare->fetchAll();
    return count($prepare);
    
  }
}