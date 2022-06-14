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
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Nos Clients</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
            <th scope="col">N°</th>
          <th scope="col">NOM</th>
          <th scope="col">NOM DU BUSINESS</th>
          <th scope="col">TYPE DU CLIENT</th>
          

          <th scope="col"> N° TEL</th>
          <th scope="col">VILLE</th>
          <th scope="col">ADRESSE</th>
          
          <th scope="col">EMAIL</th>
          
          


          
        </tr>
      </thead>
      <tbody>
      <?php
                            $Nvclient = new AdministrateurController();
                            $Nvclient = $Nvclient->affichClientAdmin();

                            foreach ($Nvclient as $client) {
                                echo '
                                        <tr>
                                            <th>' . $client['id'] . '</th>
                                            <td>' . $client['Nom'] . '</td>
                                            <td>' . $client['Nom_business'] . '</td>
                                            <td>' . $client['Type_business'] . '</td>
                                            <td>' . $client['Numero'] . '</td>
                                            <td>' . $client['Ville'] . '</td>
                                            <td>' . $client['Adresse'] . '</td>
                                            <td>' . $client['Email'] . '</td>
                                            
                                            
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