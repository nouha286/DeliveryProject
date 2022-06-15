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
 
    <title>home</title>
</head>
<style>
 @media screen and (max-width: 1000px)
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
    
    
   
 }
 .client
 {
     display: none;
 }
   
</style>
<body>
  



<section class=" col-9 px-4">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Acceuil</h1>
            <div class="row mt-5 gx-5">
                <div class="col-lg-4" >
                <div class="p-4  border shadow-lg p-3 mb-5  rounded " style="background-color: #ACE1AF;"><span class="fs-3 fw-bold font-monospace">Somme des colis</span><i class="fa fa-2x ms-2 fa-bolt" aria-hidden="true"></i><div class="fs-1 fw-bold text-end " style="color:#317D35;"><?php echo $Admin->sommeColisAdmin();  ?></div></div>
                </div>

                <div class="col-lg-4">
                <div class="p-4 border shadow-lg p-3 mb-5  rounded" style="background-color: #FBCEB1;"><span class="fs-3 fw-bold font-monospace">Demmande de ramassage</span><i class="fa ms-2 fa-2x fa-cubes" aria-hidden="true"></i><div class="fs-1 fw-bold text-end" style="color:#BB6C39;"><?php echo $Admin->statistiqueRamssageAdmin();  ?></div></div>
                </div>

                <div class="col-lg-4">
                <div class="p-4 border shadow-lg p-3 mb-5  rounded " style="background-color: #F0E68C;"><span class="fs-3 fw-bold font-monospace">Nombre des clients</span><i class="fa ms-2 fa-2x fa-user-o" aria-hidden="true"></i><div class="fs-1 fw-bold text-end" style="color: #C2B32A;"><?php echo $Admin->statistiqueClientAdmin();  ?></div></div>
                </div>
            </div>
        

</section>
</div>

   
</body>
</html>