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

    <form action="code.php" method="post">


        <div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:200px;
    background-color:blue; margin-top:30px; ">

            <div class="main-form mt-3 d-inline  border-bottom">
                <div class=" row">
                    <div class="col-md-4"
                        style="border: 1px s black; border-style:groove; width:305px; height:200px; margin-top:-25px;background-color:white; ">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nomc[]" autocomplete="off"
                                style="width:298px; height:30px; margin-left:-11px; margin-top:30px;" required
                                placeholder="Nom du client"><br>
                            <input type="text" class="form-control" name="ref[]" autocomplete="off"
                                style="width:298px; height:30px; margin-left:-11px; " required placeholder="Référence">
                            <input type="text" class="form-control" name="tip[]" autocomplete="off"
                                style="width:298px; height:30px; margin-left:-11px; " required
                                placeholder="type marchandise">
                            <input type="text" class="form-control" name="spec[]" autocomplete="off"
                                style="width:298px; height:30px; margin-left:-11px; " required
                                placeholder="Spécificités">
                            <input type="text" class="form-control" name="nomc" autocomplete="off"
                                style="width:298px; height:30px; margin-left:-11px; ">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-2"
                            style=" width:90px; margin-top:-25px; margin-left:-10px; background-color:white;">

                            <input type="date" name="date[]" class="form-control"
                                style="margin:1px ; width:90px; background-color:white;">
                            <input type="time" name="time1[]" class="form-control" required placeholder="Enter Name"
                                style="margin:1px ;width:90px;">
                            <input type="time" name="time2[]" class="form-control" required placeholder="Enter Name"
                                style="margin:1px ; width:90px;">

                        </div>
                    </div>
                    <div class="col-md-4"
                        style="border: 1px s black;  border-style:groove; width:305px; height:200px; margin-top:-25px; margin-left:-322px; background-color:white;">
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
    
    <div class="paste-new-form"></div>


    <div
        style="border:1px s black; border-style:groove; float:right; width:20%; height:650px; background-color:light-blue; margin-top:-250px;">
        <h6>Ajouter Une Etape de:</h6>



        <ahref=" javascript:void(0) class="add-more-form  btn btn-primary" style="margin-left: 5px;">CHARGEMENT</a>

    </div>


    <button type="submit" name="save_multiple_data" class="btn btn-primary mt-5">Enregistrer</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
  
$(document).ready(function() {
     $(document).on('click','.remove-btn', function () {
        
          $(this).closest('.card-body').remove();
   });
    
       


      $(document).on('click',
            '.add-more-form',
            function() {
                $('.paste-new-form').append('<div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:200px;background-color:blue; margin-top:30px; ">\
             <div class="main-form mt-3 d-inline  border-bottom">\
                <div class=" row">\
                    <div class="col-md-4"style="border: 1px s black; border-style:groove; width:305px; height:200px; margin-top:-25px;background-color:white; ">\
                        <div class="form-group">\
                            <input type="text" class="form-control" name="nomc[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; margin-top:30px;" requiredplaceholder="Nom du client">\<br>\
                            <input type="text" class="form-control" name="ref[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Référence">\
                            <input type="text" class="form-control" name="tip[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="type marchandise">\
                            <input type="text" class="form-control" name="spec[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Spécificités">\
                            <input type="text" class="form-control" name="nomc" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; ">\
                        </div>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group mb-2" style=" width:90px; margin-top:-25px; margin-left:-10px; background-color:white;">\
                            <input type="date" name="date[]" class="form-control"style="margin:1px ; width:90px; background-color:white;">\
                            <input type="time" name="time1[]" class="form-control" required placeholder="Enter Name" style="margin:1px ;width:90px;">\
                            <input type="time" name="time2[]" class="form-control" required placeholder="Enter Name"style="margin:1px ; width:90px;">\
                        </div>\
                    </div>\
                    <div class="col-md-4"style="border: 1px s black;  border-style:groove; width:305px; height:200px; margin-top:-25px; margin-left:-322px; background-color:white;">\
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
<a href="javascript:void(0)" class="remove-btn float-end btn btn-danger" style="margin-top: -190px;">Remove</a>\
     </div><br><br>')


            });
    });
    </script>
</body>


</html>