<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
</head>

<body>
    <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
                        unset($_SESSION['status']);
                    }
                ?>

    <form action="action2.php" method="post">

<!-- Chargement -->
        <div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:210px;
    background-color:blue; margin-top:30px; ">

            <div class="main-form mt-3 d-inline  border-bottom">
                <div class=" row">
                    <div class="col-md-4"
                        style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-18px;background-color:white; ">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name[]"
                                style="width:298px; height:30px; margin-left:-11px; margin-top:20px;" required
                                placeholder="Nom du client"><br>
                            <input type="text" class="form-control" name="ref[]"
                                style="width:298px; height:30px; margin-left:-11px; margin-top: -10px; " required placeholder="Référence">
                            <input type="text" class="form-control" name="tip[]"
                                style="width:298px; height:30px; margin-left:-11px; " required
                                placeholder="type marchandise">
                            <input type="text" class="form-control" name="spec[]"
                                style="width:298px; height:30px; margin-left:-11px; " required
                                placeholder="Spécificités">
                            <input type="text" class="form-control" name="pay[]"
                                style="width:298px; height:30px; margin-left:-11px; " required placeholder="Pay">


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-2"
                            style=" width:90px; margin-top:-18px; margin-left:-10px; background-color:white;">

                            <input type="date" name="date[]" class="form-control"
                                style="margin:1px ; width:90px; background-color:white;">
                            <input type="time" name="time1[]" class="form-control" required placeholder="Enter Name"
                                style="margin:1px ;width:90px;">
                            <input type="time" name="time2[]" class="form-control" required placeholder="Enter Name"
                                style="margin:1px ; width:90px;">

                        </div>
                    </div>
                    <div class="col-md-4"
                        style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-18px; margin-left:-322px; background-color:white;">
                        <div class="form-group mb-2">



                            <input type="text" name="noms[]" class="form-control" required placeholder="Nom du site"
                                style="width:297px; height:30px;margin-left:-11px;">
                            <input type="text" name="adresse[]" class="form-control" required placeholder="Adresse"
                                style="width:297px; height:30px;margin-left:-11px;">
                            <input type="text" name="inter[]" class="form-control" required placeholder="interlocuteur"
                                style="width:297px; height:30px;margin-left:-11px;">
                            <input type="text" name="email[]" class="form-control" required placeholder="email"
                                style="width:297px; height:30px;margin-left:-11px;">
                            <input type="text" name="tel[]" class="form-control" required placeholder="Tel"
                                style="width:297px; height:30px;margin-left:-11px;">
                            <input type="text" name="ville[]" class="form-control" required placeholder="ville"
                                style="width:150px; height:30px;margin-left:-11px;">
                            <input type="text" name="code[]" class="form-control" required placeholder="Code Postal"
                                style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

                        </div>
                    </div>



                </div>
            </div>

        </div><br><br>

        <div class="paste-new-form-chargement"></div>
        <!-- End Chargement -->

<!-- livraison -->
  <div class="card-body1"
        style="border: 1px s  black;  border-style:groove; width:75%; height:210px; background-color:red; ">

        <div class="main-form mt-3 d-inline  border-bottom">
            <div class=" row">
                <div class=" col-md-4"
                    style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-3px;background-color:white; margin-left:18px;">
                    <div class="form-group">
                        <input type="text" class="form-control" name="namee[]" autocomplete="off"
                            style="width:298px; height:30px; margin-left:-11px; " required
                            placeholder="Nom du client"><br>
                        <input type="text" class="form-control" name="reff[]" autocomplete="off"
                            style="width:298px; height:30px; margin-left:-11px; " required placeholder="Référence">
                        <input type="text" class="form-control" name="tipp[]" autocomplete="off"
                            style="width:298px; height:30px; margin-left:-11px; " required
                            placeholder="type marchandise">
                        <input type="text" class="form-control" name="specc[]" autocomplete="off"
                            style="width:298px; height:30px; margin-left:-11px; " required placeholder="Spécificités">
                             <input type="text" class="form-control" name="payy[]"
                                style="width:298px; height:30px; margin-left:-11px; " required placeholder="Pay">
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-2"
                        style=" width:90px; margin-top:-4px; margin-left:-10px; background-color:white;">

                        <input type="date" name="datee[]" class="form-control"
                            style="margin:1px ; width:90px; background-color:white;">
                        <input type="time" name="timee1[]" class="form-control" required placeholder="Enter Name"
                            style="margin:1px ;width:90px;">
                        <input type="time" name="timee2[]" class="form-control" required placeholder="Enter Name"
                            style="margin:1px ; width:90px;">

                    </div>
                </div>
                <div class="col-md-4"
                    style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-3px; margin-left:-330px; background-color:white;">
                    <div class="form-group mb-2">



                        <input type="text" name="nomss[]" class="form-control" required placeholder="Nom du site"
                            style="width:297px; height:30px;margin-left:-11px;">
                        <input type="text" name="adressee[]" class="form-control" required placeholder="Adresse"
                            style="width:297px; height:30px;margin-left:-11px;">
                        <input type="text" name="interr[]" class="form-control" required placeholder="interlocuteur"
                            style="width:297px; height:30px;margin-left:-11px;">
                        <input type="text" name="emaill[]" class="form-control" required placeholder="email"
                            style="width:297px; height:30px;margin-left:-11px;">
                        <input type="text" name="tell[]" class="form-control" required placeholder="Tel"
                            style="width:297px; height:30px;margin-left:-11px;">
                        <input type="text" name="villee[]" class="form-control" required placeholder="ville"
                            style="width:150px; height:30px;margin-left:-11px;">
                        <input type="text" name="codee[]" class="form-control" required placeholder="Code Postal"
                            style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

                    </div>
                </div>




            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group mb-2">



                <input type="text" name="prix[]" class="form-control" required placeholder="PRIX"
                    style="width:90px; height:30px; margin-left:1150px; position:relative; top:-105px; ">

            </div>
        </div>
    </div>



        <div class="paste-new-form-livraison"></div>
     


    
<!-- Fin livraison -->

        <div
            style="border:1px s black; border-style:groove; float:right; width:20%; height:650px; background-color:light-blue; margin-top:-250px;">
            <h6>Ajouter Une Etape de:</h6>



            <div><ahref=" javascript:void(0) class="add-more-form-chargement  btn btn-primary" style="margin-left: 100px; margin-top:10px;">CHARGEMENT</a><br><br></div>
            
            <div><ahref=" javascript:void(0)  class="add-more-form-livraison  btn btn-danger" >LIVRAISON</a></div>
            
            


        </div>

    
        <button type="submit" name="save_multiple_data" class="btn btn-primary mt-5">Enregistrer</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
    // Remove Chargement
    $(document).ready(function() {
        $(document).on('click', '.remove-btn-chargement', function() {

            $(this).closest('.card-body').remove();
        });
        // Remove Livraison
         $(document).on('click', '.remove-btn-livraison', function() {

            $(this).closest('.card-body1').remove();
        });

        // ADD CHARGEMENT

        $(document).on('click',
            '.add-more-form-chargement',
            function() {
                $('.paste-new-form-chargement').append('<div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:210px;background-color:blue; margin-top:30px; ">\
             <div class="main-form mt-3 d-inline  border-bottom">\
                <div class=" row">\
                    <div class="col-md-4"style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-18px;background-color:white; ">\
                        <div class="form-group">\
                            <input type="text" class="form-control" name="name[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px ; margin-top:20px;" required placeholder="Nom du client">\<br>\
                            <input type="text" class="form-control" name="ref[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; margin-top:-10px;" required placeholder="Référence">\
                            <input type="text" class="form-control" name="tip[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="type marchandise">\
                            <input type="text" class="form-control" name="spec[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Spécificités">\
                            <input type="text" class="form-control" name="pay[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Pay">\
                             </div>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group mb-2" style=" width:90px; margin-top:-18px; margin-left:-10px; background-color:white;">\
                            <input type="date" name="date[]" class="form-control"style="margin:1px ; width:90px; background-color:white;">\
                            <input type="time" name="time1[]" class="form-control" required placeholder="Enter Name" style="margin:1px ;width:90px;">\
                            <input type="time" name="time2[]" class="form-control" required placeholder="Enter Name"style="margin:1px ; width:90px;">\
                        </div>\
                    </div>\
                    <div class="col-md-4"style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-18px; margin-left:-322px; background-color:white;">\
                        <div class="form-group mb-2">\
                           <input type="text" name="noms[]" class="form-control" required placeholder="Nom du site" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="adresse[]" class="form-control" required placeholder="Adresse" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="inter[]" class="form-control" required placeholder="interlocuteur"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="email[]" class="form-control" required placeholder="email"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="tel[]" class="form-control" required placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="ville[]" class="form-control" required placeholder="ville"style="width:150px; height:30px;margin-left:-11px;">\
                            <input type="text" name="code[]" class="form-control" required placeholder="Code Postal" style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">\
                         </div>\
                    </div>\
                </div>\
            </div>\
<a href="javascript:void(0)" class="remove-btn-chargement float-end btn btn-danger" style="margin-top: -210px; margin-left:20px;">Remove</a>\
     </div><br><br>');


            });

            //LIVRAISON
             $(document).on('click',
            '.add-more-form-livraison',
            function() {
                $('.paste-new-form-livraison').append('<div class="card-body1" style=" border: 1px s black; border-style:groove; width:75%; height:200px;background-color:red; margin-top:30px; ">\
             <div class="main-form mt-3 d-inline  border-bottom">\
                <div class=" row">\
                    <div class="col-md-4"style="border: 1px s black; border-style:groove; width:305px; height:200px; margin-top:-3px;background-color:white; ">\
                        <div class="form-group">\
                            <input type="text" class="form-control" name="namee[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; margin-top:10px;" required placeholder="Nom du client">\<br>\
                            <input type="text" class="form-control" name="reff[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Référence">\
                            <input type="text" class="form-control" name="tipp[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="type marchandise">\
                            <input type="text" class="form-control" name="specc[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Spécificités">\
                            <input type="text" class="form-control" name="payy[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Pay">\
                             </div>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group mb-2" style=" width:90px; margin-top:-4px; margin-left:-10px; background-color:white;">\
                            <input type="date" name="datee[]" class="form-control"style="margin:1px ; width:90px; background-color:white;">\
                            <input type="time" name="timee1[]" class="form-control" required placeholder="Enter Name" style="margin:1px ;width:90px;">\
                            <input type="time" name="timee2[]" class="form-control" required placeholder="Enter Name"style="margin:1px ; width:90px;">\
                        </div>\
                    </div>\
                    <div class="col-md-4"style="border: 1px s black;  border-style:groove; width:305px; height:200px; margin-top:-3px; margin-left:-330px; background-color:white;">\
                        <div class="form-group mb-2">\
                           <input type="text" name="nomss[]" class="form-control" required placeholder="Nom du site" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="adressee[]" class="form-control" required placeholder="Adresse" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="interr[]" class="form-control" required placeholder="interlocuteur"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="emaill[]" class="form-control" required placeholder="email"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="tell[]" class="form-control" required placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="villee[]" class="form-control" required placeholder="ville"style="width:150px; height:30px;margin-left:-11px;">\
                            <input type="text" name="codee[]" class="form-control" required placeholder="Code Postal" style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">\
                         </div>\
                    </div>\
                </div>\
            </div>\
            <div class="col-md-4">\
            <div class="form-group mb-2">\
          <input type="text" name="prix[]" class="form-control" required placeholder="PRIX"  style="width:90px; height:30px; margin-left:1150px; position:relative; top:-105px; ">\
        </div>\
        </div>\
        <a href="javascript:void(0)" class="remove-btn-livraison float-end btn btn-danger" style="margin-top: -230px; margin-left:-550px;">Remove</a>\
    </div>\
</div><br><br>');


            });
    });
    </script>
</body>


</html>