<!DOCTYPE html>
<html>

<head>
 <link href="./include/style/style.css" rel="stylesheet" type="text/css">  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
<img src="https://geograppe.fr/wp-content/uploads/vignoble-vallee-de-la-loire.jpg" alt="Photo en ligne" class="paysage">
<div class="bandeau"> </div>
<a href="" class="titre" > Domaine Desloges </a>
<a href= "/src/Le_Domaine" class="bouton1"> Le Domaine </a>
<a href= "/src/Nos_Vins" class="bouton2"> Nos Vins </a>
<a href= "/src/Contact" class="bouton3"> Contact </a>
<a href= "/src/Actus" class="bouton4"> Actus </a>
<a href= "/src/francais" class="bouton5"> 🇫🇷 </a>
<a href= "/src/anglais" class="bouton6"> 🇬🇧 </a>
<div class="bandeau2"> </div>
<div class="sous-titre"> Le Domaine </div>
<div class="texte1"> Le Domaine Desloges, niché dans la magnifique Vallée du Cher, à Monthou-sur-Cher, est le cœur battant de notre famille depuis trois générations. Ce lieu, où tradition et passion se rencontrent, est le témoin de notre engagement à préserver l’héritage viticole et à offrir le meilleur de nos terres. Chaque vendange, chaque vin produit est le fruit d’un savoir-faire transmis de génération en génération. Nous sommes fiers de partager avec vous notre histoire, notre passion et bien sûr, nos vins, reflet d’un terroir exceptionnel. </div>
<div class="texte2"> Au Domaine Desloges, nous cultivons avec passion 25 nectars de vigne, chacun soigneusement élaboré pour refléter la richesse et l'authenticité de notre terroir. En tant que producteur engagé, nous sommes fiers de notre certification HVE (Haute Valeur Environnementale), gage de notre respect pour l'environnement et de notre engagement en faveur d'une viticulture durable. Chaque bouteille que nous produisons incarne notre dévouement à l'excellence et à la préservation de notre magnifique région.</div>
<img src="https://routetouristiquedelavalleeducher.fr/wp-content/uploads/2018/02/desloges.png" alt="ded" class="cabane">
<img src="https://medias.reussir.fr/horizons/styles/normal_size/azblob/2023-11/26373-cyril-desloges3.JPG?itok=R8fFAR9M" alt="de" class="papa">
<div class="bandeau-bas"> </div>
<div class="bandeau-bas">
    <a href="https://facebook.com" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" class="social-icon">
    </a>
    <a href="https://twitter.com" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Twitter_Logo_2012.svg" alt="Twitter" class="social-icon">
    </a>
    <a href="https://instagram.com" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png" alt="Instagram" class="social-icon">
    </a>

</div>




<style>
     @font-face {
        font-family:"scriptina";
        src: url("scriptina.ttf");
    }

    .bandeau {
        background-color: #2F4F4F;
        padding: 35px ;
        position: fixed ;
        color: #FFEFD5 ;
        width: 100% ;
        text-align: left ;
        top: 0 ;
        left: 0px ;
        font-size : 27px ;
        font-family: 'Courier New', Courier, monospace;
        z-index: 10;
    }

    .titre {
        position: fixed ;
        color: #FFEFD5 ;
        text-align: left ;
        top:-29px ;
        left: 10px ;
        font-size : 39px ;
        font-family: scriptina;
        z-index: 10;
        text-decoration: none;

    }

    .bouton1 {
        position: absolute;
        color :#FFEFD5;
        top : 15px ;
        position: fixed ;
        right : 550px ;
        padding : 10px ;
        z-index:1000;
        font-size: 19px;
        font-family: 'Courier New', Courier, monospace;
        text-decoration: NONE;
        z-index: 11;
    }

    .bouton2 {
        position: absolute;
        color :#FFEFD5;
        top : 15px ;
        right : 390px ;
        position: fixed ;
        padding : 10px ;
        z-index:1075;
        font-size: 19px;
        font-family: 'Courier New', Courier, monospace;
        text-decoration: NONE;
        z-index: 11;
    }

    .bouton3 {
        position: absolute;
        color :#FFEFD5;
        top : 15px ;
        position: fixed ;
        right : 250px ;
        padding : 10px ;
        z-index:1175;
        font-size: 19px;
        font-family: 'Courier New', Courier, monospace;
        text-decoration: NONE;
        z-index: 11;
    }

    .bouton4 {
        position: absolute;
        color :#FFEFD5;
        top : 15px ;
        right : 125px ;
        position: fixed ;
        padding : 10px ;
        font-size: 19px;
        font-family: 'Courier New', Courier, monospace;
        text-decoration: NONE;
        z-index: 11;
    }

    .bouton5 {
        position: absolute;
        top : 18px;
        right :60px;
        position: fixed ;
        font-size: 21px;
        text-decoration: NONE;
        z-index: 11;
    }

    .bouton6 {
        position: absolute;
        top : 18px;
        right :15px;
        position: fixed ;
        font-size: 21px;
        text-decoration: NONE;
        z-index: 11;
    }

    .paysage {
        position: absolute;
        top : -90px;
        left :0px;
        font-size: 21px;
        text-decoration: NONE;
        width:100%;
        height: auto;
        
    }

    .sous-titre {
        position: absolute;
        top :200px;
        left:200px;
        font-family: 'Courier New', Courier, monospace;
        color:#FFEFD5;
        font-size: 50px;
    }

    .bandeau2 {
        position: absolute;
        background-color: #2F4F4F;
        color: #FFEFD5 ;
        text-align: left ;
        top: 485px ;
        left: 0px ;
        right: 0px;
        height: 3000px;
        font-size : 27px ;
        font-family: 'Courier New', Courier, monospace;
        z-index: 1;
    }

    .texte1 {
        text-align: left;
        font-family:'Times New Roman', Times, serif;
        color: #FFEFD5;
        font-size: 20px;
        margin-top: 565px;
        margin-left: 300px;  
        margin-right: 300px;
        z-index: 2;
        box-sizing: border-box;
        position: absolute;
    }

    .texte2 {
        text-align: left;
        font-family:'Times New Roman', Times, serif;
        color: #FFEFD5;
        font-size: 20px;
        margin-top: 710px;
        margin-left: 300px;  
        margin-right: 300px;
        z-index: 2;
        box-sizing: border-box;
        position: absolute;
    }

    .cabane {
        position: absolute;
        top: 965px;
        left: 0px;
        height: auto;
        width: 50%;
        z-index: 3;
    }

    .papa {
        position: absolute;
        top: 1540px;
        right: 0px;
        height: auto;
        width: 50%;
        z-index: 3;
    }

    .bandeau-bas {
        position: absolute;
        top: 3485px;
        left: 0px;
        width: 100%;
        height: 300px;
        background-color: #FFEFD5;
        z-index: 5;
    }


    .social-icon {
        width: 40px;  
        margin: 0 15px; 
        transition: transform 0.3s ease;
    }

    .social-icon:hover {
        transform: scale(1.1); 
    }

   



    

</style>  
<script>



</script>
</body>

</html>