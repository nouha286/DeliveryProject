<?php 
$Admin=new AdministrateurController();
$Admin->autorisationAdmin();
$Admin->separationClient();
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
       <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Nouveaux Colis</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">DESTAINATAIRE</th>
          <th scope="col">STATUT</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">VILLE.DES</th>

          <th scope="col">ADRESSE.DES</th>
          <th scope="col">Desponibilité.DES</th>
          <th scope="col">PRODUIT</th>
          <th scope="col">POIDS</th>
          <th scope="col">PRIX</th>
          <th scope="col">Statut</th>
          <th scope="col">Vendeurs</th>
          
        </tr>
      </thead>
      <tbody>
       
        <tr>
        <?php
                           
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
                                            <td>' . $colis['Telephone_Des'] . '</td>
                                            <td>' . $colis['Ville_Des'] . '</td>
                                            <td>' . $colis['adresse_Des'] . '</td>
                                            <td>' . $colis['Disponibilite_Des'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                            <td>' . $colis['Prix'] . '</td>
                                            <td><span style="color:orange;">' . $colis['Etat'] . '</span></td>
                                            <td>' . $nom_store['Nom_business'] . '</td>
                                          
                                           
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