<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .container {
      margin-bottom: 10px;
    }

    .reference-container {
      border: 2 solid black;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .item {


      display: inline;


    }

    div {
      font-size: 12px;
    }

    .in-container {
      display: inline-flex;
      margin-left: 25px;

      margin-bottom: -5px;

    }

    .inn-container {
      display: inline-flex;
      margin-left: 25px;
      margin-right: 60px;
      margin-bottom: -5px;

    }

    .in-item {
      flex: auto;

    }



    .detail-block {
      margin-bottom: 15px;
    }

    .title {
      font-weight: bold;
    }


    .info-block {
      border: 2 solid black;
      padding: 5;

      line-height: 1;
      font-size: smaller;
    }

    .title-item {


      display: inline-block;
      border: 2 solid black;
      margin-left: -5;
      margin-right: 0;


      padding: 7;


      text-align: center;
    }

    .info-block p {

      line-height: 1;
      font-size: 12px;

    }
  </style>
</head>

<body>

  <div class="container">
    <div class="item"><img src="c:/laragon/www/CARGOFINAL/public/logo.png" width="200" height="50" /></div>
    <div class="item">
      <div class="in-container">
        <div class="in-item title">Rotation Trans Logistics SPRL</div>
        <div class="in-item">Rue Uyttenhove 37 bte 827</div>
        <div class="in-item">1090 Jette - BELGIQUE</div>
        <div class="in-item">TVA : 
        984920392093
        </div>
      </div>
    </div>
    <div class="item">
      <div class="in-container">
        <div class="in-item">Tél :
         +237690596606
          </div>
        <div class="in-item">Fax :</div>
        <div class="in-item">Email : eric@gmail.com </div>
        <div class="in-item">N° de licence : 3731001
        </div>
      </div>
    </div>
  </div>
  <div class="title-block">
    <div class="title-item">le 02/08/2022</div>
    <div class="title title-item" style="width:37.2rem; ">CONFIRMATION AFFRÈTEMENT</div>

  </div>


  <h2 style="text-align:center; margin: -3 0 -3 0;">Référence à rappeler sur votre facture : 22080066</h2>

  <div class="reference-container">
    <div class="item">
      <div class="in-container">
        <div class="in-item">A l'attention de  <?=$transporteur['nom_transporteur'] ?> </div>
        <div class="in-item">Adresse : <?=$transporteur['ville_transporteur']?></div>
        <div class="in-item">N° TVA / VAT Number : <?=$transporteur['tva_transporteur'] ?>  </div>
      </div>
    </div>
    <div class="item">
      <div class="in-container">
        <div class="in-item">Tél : <?=$transporteur['tel_transporteur'] ?></div>
        <div class="in-item">Mail : <?=$transporteur['email_transporteur'] ?> </div>
      </div>
    </div>
  </div>
  <div class="reference-container">
    <div class="item">
      <div class="in-container">
        <div class="in-item title">Marchandises :</div>
        <div class="in-item">Marchandises Générales / Savoyarde / Tautliner / VUL</div>
        <!-- <div class="in-item">Support : 4.80 palette(s) - Poids : 1000.00kg</div> -->
      </div>
    </div>
    <div class="item">
      <div class="in-container">
        <div class="in-item title">Prix convenu HT : 600.00€</div>
      </div>
    </div>
  </div>
  <div class="detail-block">
    <div class="item">
      <div class="inn-container">
        <div class="in-item title">Marchandises :</div>
        <div class="in-item"><?=$chargement['date'] ?></div>
        <div class="in-item"><?=$chargement['time1'] ?> - <?=$chargement['time2'] ?></div>
      </div>
    </div>
    <div class="item">
      <div class="inn-container">
        <div class="in-item ">N° Commande : <?=$chargement['name'] ?></div>
        <div class="in-item">Site : <?=$chargement['noms']?></div>
        <!-- <div class="in-item">Marchandise : 4.80 palette(s) -- Poids : 1000.00kg</div> -->
      </div>
    </div>
  </div>
  <div class="detail-block">
    <div class="item">
      <div class="inn-container">
        <div class="in-item title">Livraison</div>
        <div class="in-item"><?=$chargement['datee'] ?></div>
        <div class="in-item"><?=$chargement['timee1'] ?> - <?=$chargement['timee2'] ?></div>
      </div>
    </div>
    <div class="item">
      <div class="in-container">
        <div class="in-item">N° Commande :  <?=$chargement['namee'] ?></div>
        <div class="in-item">Site :  <?=$chargement['nomss'] ?></div>
        <!-- <div class="in-item">Marchandise : 4.80 palette(s) -- Poids : 1000.00kg</div> -->
      </div>
    </div>
  </div>

  <div class="info-block">
    <p>Dans la réalisation de ce transport, le fournisseur s’oblige à respecter les conditions ci-dessous :
    </p>
    <p>- Avoir un matériel conforme, propre et en bon état (étanchéité) et en température et avoir en sa possession tous les accessoires demandés
      (paroi, sangles, équerres , etc…)</p>
    <p>- En cas de problème ou retard survenant lors du transport ou des opérations de chargement et déchargement (cas d’incident, d’accident, cas
      de réserves prises à l’enlèvement ou à la livraison), nous contacter impérativement afin d’en informer nos clients dans les meilleurs délais</p>
    <p>- Le conducteur doit avoir une attitude responsable, respecter les règles de sécurité liées aux consignes intérieures chez nos clients
      (protocoles de sécurité) et détenir les autorisations nécessaires ainsi que les documents obligatoires conformes à la législation.
      - sortie usine 40T au sol maximum.</p>
    <p>- les documents de transport émargés doivent impérativement nous parvenir avec la facture.
    </p>
    <p>- Tout ré-affrètement est formellement interdit sauf autorisation expresse et préalable de notre part.
    </p>
    <p>- Nous ne pouvons être tenus responsables pour les heures d’attente au chargement et au déchargement
    </p>
    <p>- Les instructions de ce document doivent être suivies dans le strict respect de la législation sociale (temps de conduite et de repos) et
      routière (limitation de vitesse).</p>
    <p>- L’acceptation de ce contrat de transport implique l’engagement des moyens nécessaires à sa bonne exécution.
    </p>
    <p>- Le transporteur reconnaît que le prix convenu entre les parties couvre ses coûts de revient tels que définis par la législation Belge.
    </p>
    <p>- Le transporteur certifie avoir souscrit une assurance tant en responsabilité civile et professionnelle que contractuelle, et être inscrit au
      registre des transporteurs</p>
    <p>- L’échange en euro palettes si mentionné est OBLIGATOIRE (faire noter impérativement sur le bordereau de chargement ou CMR). Vous
      devez vous présenter avec le nombre de palettes Europe 80*120 nécessaire pour faire l’échange. Les palettes non échangées pourront faire
      l’objet d’une facturation fin du mois.
    </p>
    <p>- Le voiturier, en acceptant les instructions de la présente confirmation d’affrètement, autorise RT LOGISTICS ou l’un de ses mandataires à
      procéder, parmi d’autres vérifications, au contrôle de conformité de véhicules et de documents de bord</p>
    <p>- les parties s’engagent, en cas de litige (quelque soit le litige), à recourir exclusivement aux tribunaux et à la législation Belge.
      Attention : Nous vous rappelons que vous vous engagez à respecter les délais de chargement et de livraison faute de quoi nous serons dans
      l’obligation de vous répercuter les frais engagés ainsi que les pénalités de retard. Conditions de règlement: 60 jours fin de mois , à compter
      de la date de réception de la facture et CMR par mail à comptabilite_fournisseurs@rtlogistics.eu</p>

  </div>
  <div style="margin-top:10px;"><span class="title">Exploitation :</span> Veuillez nous retourner ce fax avec votre "Bon pour Accord" et votre cachet.L'absence de réponse dans l'heure suivant l'émissiondu fax correspond à l'acceptation du transport.</div>
  <div class="title">FACTURE + CMR + BON(S) DE LIVRAISON(S) TAMPONNES A ENVOYER UNIQUEMENT PAR MAIL ET EN MÊME TEMPSSUR <span style="color: blue">comptabilite_fournisseurs@rtlogistics.eu</span> SOUS 7 JOURS</div>
</body>

</html>