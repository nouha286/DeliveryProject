<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>
     @media screen and (max-width: 1400px)
 {
     .btn-nav
     {
         display: none;
     }
     .n{
        display: none;

     }
     .d{
        text-align: center;
       
     }

    .card
    {
        margin: auto;
    }
   
 }
 .client
 {
     display: none;
 }

 
 
</style>
<body style="overflow-x:hidden;">




    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Etat Des Colis</h1>
    
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">DESTAINATAIRE</th>
          <th scope="col">STATUT</th>
          <th scope="col">Ville.DES</th>
          <th scope="col">Disponibilite_Des</th>
          <th scope="col">Produit</th>
          <th scope="col">Poids</th>
          <th scope="col">Prix</th>
          <th scope="col">Nom business</th>
          <th scope="col" class="text-center">ACTIONS</th>
          
          
          
        </tr>
      </thead>
      <tbody>
      <?php
                            $Admin = new AdministrateurController();
                            $Nvcolis = $Admin->affichColisAdmin();
                            
                            foreach ($Nvcolis as $colis) {
                              $id=$colis['id_client'];
                              $Admin=new Admin();
                              $Admin->setNomstore($id);
                              $nom_store=$Admin->NomStore();
                                echo '
                                        <tr>
                                            <th>' . $colis['id'] . '</th>
                                            <td>' . $colis['Destinataire'] . '</td>
                                            <td>' . $colis['Statut'] . '</td>
                                            
                                            <td>' . $colis['Ville_Des'] . '</td>
                                           
                                            <td>' . $colis['Disponibilite_Des'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                            <td>' . $colis['Prix'] . '</td>
                                            <td>' . $nom_store['Nom_business'] . '</td>
                                            <form action="Tunnel" method="POST"><td colspan="4" class="text-center"><button type="submit" class="btn  btn-lg" style="text-decoration:none; color:white; background-color:greenyellow; " name="id_Livré" value="'.$colis['id'].'">Livré</button> <button type="submit" class="btn  btn-lg" style="text-decoration:none; color:white; background-color:red; " name="id_Retour" value="'.$colis['id'].'">Retour</button> </td>
                                            </form>
                                            
                                           
                                        </tr>
                                        
                                        ';
                            }




                            ?>
       
        
        
      </tbody>
    </table>
    </div>
  
        
    </section>
</div>

</body>
</html>