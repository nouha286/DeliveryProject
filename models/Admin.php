<?php

class Admin extends Dbconnect
{
    public $Nom;
    public $Email;
    public $Password;
    public $id;
    public $Nomstore;
    
   
    public function setId($id)
    {
        $this->id=$id;
    }

    public function setNom($Nom)
    {
         $this->Nom=$Nom;
    }


 

    public function setEmail($Email)
    {
         $this->Email=$Email;
    }

    public function setPassword($Password)
    {
         $this->Password=$Password;
    }
    

    public function setNomstore($Nomstore)
    {
         $this->Nomstore=$Nomstore;
    }
    



    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function getNomstore()
    {
        return $this->Nomstore;
    }

    
  public function insert()
  {

    try {

      $sql = "INSERT INTO inscription_admin  VALUES (null,?,?,?)";
      $prepare = $this->preparation($sql);
      $prepare = $prepare->execute([$this->getNom(), $this->getEmail(), $this->getPassword()]);

      if ($prepare) {
        header('location:connexion_admin');
      } else echo 'erreur!!!!';
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  public function affichNvColis()
  {
      $sql="SELECT * FROM colis";
    
      $result=$this->connect()->query($sql);
      return $result->fetchAll();
  }

  public function affichColisRamassage()
  {
      $sql="select colis.id, client.Nom_business , client.Numero , client.Adresse,client.Ville , colis.Produit ,colis.Poids,colis.Date_création from colis ,client,colis_a_rammasser WHERE colis.id_client = client.id and colis_a_rammasser.id_colis = colis.id and colis.Statut='Attente du rammasage' ";
      $prepare=$this->connect()->query($sql);
     
    
      return $prepare->fetchAll();
  }

  public function infoClient()
  {
      $sql="SELECT * FROM client INNER JOIN coli";
      $prepare = $this->preparation($sql);
      
      $ID_client=$_SESSION['id_client'];
       $prepare->execute([$ID_client]);
      return $prepare->fetch();

  }


  public function NomStore()
  {
    $sql="SELECT Nom_business FROM client WHERE id LIKE ?";
    $prepare=$this->preparation($sql);
    $id=$this->getNomstore();
    $prepare->execute([$id]);
   return $prepare->fetch();
  }

  public function affichNosClient()
  {
    $sql = "SELECT * FROM  client ORDER BY id DESC";
    return $prepare = $this->connect()->query($sql)->fetchALL();
  }



  public function statistiqueColis()
  {
    $sql="SELECT * FROM colis ";
    $prepare = $this->preparation($sql);
    $prepare->execute([]);
    $prepare=$prepare->fetchAll();
    return count($prepare);
    
  }

  public function statistiqueRamassage()
  {
    $sql="SELECT * FROM colis WHERE  Statut LIKE ?";
    $prepare = $this->preparation($sql);
    $prepare->execute(['Attente du rammasage']);
    $prepare=$prepare->fetchAll();
    return count($prepare);
    
  }

  public function statistiqueClient()
  {
    $sql="SELECT * FROM client";
    $prepare = $this->preparation($sql);
    $prepare->execute();
    $prepare=$prepare->fetchAll();
    return count($prepare);
    
  }
}