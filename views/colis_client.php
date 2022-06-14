<?php
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="i18n/fr.js"></script>
    <script src="i18n/it.js"></script>

   

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
 .parsley-errors-list
  {
    color: red;
  }  

 
</style>
<body style="overflow-x:hidden;">

 
    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Création des colis</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">DESTAINATAIRE</th>
          <th scope="col">STATUT</th>
          <th scope="col">TEL.DES</th>
          <th scope="col">Ville.DES</th>
          <th scope="col">ADRESSE.DES</th>

          <th scope="col">Desponibilité.DES</th>
          <th scope="col">PRODUIT</th>
         
          <th scope="col">POIDS</th>
          <th scope="col">PRIX</th>
         
          <th scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
        
      <?php
                            $Nvcolis = new Colis();
                            $Nvcolis = $Nvcolis->affichNvColis();
                            
                            foreach ($Nvcolis as $colis) {
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
                                           
                                             <td><form action="Tunnel" method="POST"><button type="submit" name="id_del" value="'.$colis['id'].'" class="me-3" ><i class="fa fa-lg fa-trash text-danger" aria-hidden="true"></i></button><button type="submit" name="id" value="'.$colis['id'].'" ><i class="fa fa-lg fa-pencil-square-o text-success" aria-hidden="true"></i></button></form>
                                             </td>
         
                                        </tr>
                                        
                                        ';
                            }




                            ?>
         
        
        
      </tbody>
    </table>
    
    </div>
   <!-- Button trigger modal -->
   
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Ajouter une colis
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
      <form data-parsley-validate action="Tunnel" method="POST">
          <div class="mb-3">
                        
                        <input required	data-parsley-required="true" name="nom"  pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" type="text" class="form-control" data-parsley-trigger="change" placeholder="Destinataire" id="exampleInputEmail6" >
                        
              </div>

              <div class="mb-3">
                       <label for="" class="mb-1">Statut</label>
                       <select name="statut" required	data-parsley-required="true" class="form-select" aria-label="Default select example">
                          <option value="Nouveau colis" selected>Nouveau colis</option>
                          <option value="colis du stock">colis du stock</option>
                          <option value="Attente du rammasage">Attente du ramassage</option>
                        </select>
                        
              </div>


              <div class="mb-3">
                       
                        <input data-parsley-required="true" name="Tel" required pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" data-parsley-trigger="change" data-parsley-pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$"	 type="text"  placeholder="Numéro de téléphone du destinataire" class="form-control" id="exampleInputEmail7" >
                        
              </div>
              <div class="mb-3">
                        <input type="text" data-parsley-required="true" name="Ville" required class="form-control" pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-trigger="change"	 placeholder="Ville"  >
                        
              </div>
              <div class="mb-3">
                        <input type="text" data-parsley-required="true" name="Adresse" required class="form-control"  placeholder="Adresse du destinatair" data-parsley-trigger="change" id="exampleInputEmail5">
                        
              </div>
              
              <div class="mb-3">
                        <label for="" class="mb-2">Disponibilité du destinaire</label>
                        <input data-parsley-required="true" name="Dis" required type="date" class="form-control" placeholder="Disponibilité du client" data-parsley-trigger="change" id="exampleInputEmail4" >
                        
              </div>
              <div class="mb-3">
                        <input data-parsley-required="true" name="Prod" required type="text" class="form-control"  pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-trigger="change" placeholder="Produit" id="exampleInputEmail1" >
                        
              </div>
              
              <div class="mb-3">
                        <label for="" class="mb-2">Poids Du Produis</label>
                        <input data-parsley-required="true" name="Poid" max="30"	data-parsley-max="30" required type="number" class="form-control" data-parsley-trigger="change" max="30" min="0" id="exampleInputEmail2" >
                        
              </div>
              <div class="mb-3">
                        
                        <input data-parsley-required="true" name="Prix" required type="text" pattern="/^(-)?[0-9]+([.,][0-9]+(e(-)?[0-9]+)?)?$/" data-parsley-pattern="/^(-)?[0-9]+([.,][0-9]+(e(-)?[0-9]+)?)?$/" placeholder="Prix" data-parsley-trigger="change" class="form-control"  id="exampleInputEmail3" >
                        
              </div>
              

                      
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="saveColis" class="btn btn-primary">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div>
        
    </section>
</div>

</body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script type="text/javascript" src="parsly_fr.js"></script>
