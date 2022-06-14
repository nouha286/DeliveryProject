
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
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Colis à rammasser</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">Nom du Store</th>
          <th scope="col">Adresse.Vend</th>
          <th scope="col">Ville.Vend</th>
          <th scope="col">TELEPHONE.vend</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">PRODUITS</th>
          <th scope="col">Poids</th>
         
          
          <th scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
      <?php
                            $colis = new AdministrateurController();
                            $Nvcolis = $colis->affichRamassageClient();
                            $info_client=$colis->InfoClient();
                            
                            foreach ($Nvcolis as $colis) {
                                echo '
                                <tr>
                                            <th>' . $colis['id'] . '</th>
                                            <td>' .  $info_client[2]. '</td>
                                            <td>' . $info_client[6]. '</td>
                                            <td>' .$info_client[5] . '</td>
                                            <td>' . $info_client[4] . '</td>
                                            <td>' . $colis['Date_création'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                           <td class="text-center"> <form action="Tunnel" method="POST"><button name="edit_ram" type="submit" value="'.$colis['id'].'" ><i class="fa fa-lg fa-pencil-square-o text-success" aria-hidden="true"></i></button></form>
                                           </td> </tr>;
                            
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