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
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Demandes du rammassage</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">NOM VENDEUR</th>
          <th scope="col">Telephone du Vendeur</th>
          <th scope="col">Adresse Vendeur</th>
          <th scope="col">VILLE DU VENDEUR</th>
          <th scope="col">PRODUIT</th>
          
          <th scope="col">POIDS</th>
          <th scope="col">DATE DE CREATION</th>
          <th class="text-center" scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
                            $colis = new AdministrateurController();
                            $Nvcolis = $colis->affichRamassageAdmin();
                            
                            
                            foreach ($Nvcolis as $colis) {
                                echo '
                                <tr>
                                            <th>' . $colis[0] . '</th>
                                            <td>' .  $colis[1]. '</td>
                                            <td>' . $colis[2]. '</td>
                                            <td>' .$colis[3] . '</td>
                                            <td>' . $colis[4] . '</td>
                                            <td>' . $colis[5] . '</td>
                                            <td>' . $colis[6] . '</td>
                                            <td>' . $colis[7] . '</td>
                                            <form action="Tunnel" method="POST"><td class="text-center"> <button class="btn" style="text-decoration:none; color:white; background-color:red; " name="id_ramassage" value="'.$colis[0].'">Rammasser</button> </td>
                                            </form>
                                            
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