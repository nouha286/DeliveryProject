
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
 .admin 
 {
     display: none;
 }

 
 
</style>
<body style="overflow-x:hidden;">


    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Suivi des colis</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">DESTAINATAIRE</th>
          <th scope="col">STATUT</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">PRIX</th>

          <th scope="col">TEL.DES</th>
          <th scope="col">VILLE.DES</th>
          <th scope="col">Desponibilité.DES</th>
          <th scope="col">PRODUITS</th>
          <th scope="col">POIDS</th>
          <th scope="col">ETAT</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
                            $Admin = new AdministrateurController();
                            $Nvcolis = $Admin->suiviClient();
                            
                            foreach ($Nvcolis as $colis) {
                              
                              
                                echo '
                                        <tr>
                                            <th>' . $colis['id'] . '</th>
                                            <td>' . $colis['Destinataire'] . '</td>
                                            <td>' . $colis['Statut'] . '</td>
                                            <td>' . $colis['Date_création'] . '</td>
                                            <td>' . $colis['Prix'] . '</td>
                                            <td>' . $colis['Telephone_Des'] . '</td>
                                            <td>' . $colis['Ville_Des'] . '</td>
                                           
                                            <td>' . $colis['Disponibilite_Des'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                            
                                            <td style="color:red;">' . $colis['Etat'] . '</td>
                 
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