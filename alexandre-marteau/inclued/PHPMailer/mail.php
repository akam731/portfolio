<?php 
    
    if ($_SESSION['language'] == 'fr') {
        $lang = 'Français';
    }else{
        $lang = 'English';
    }
$date = date('d/m/Y'); 
$heure = date('H:i');
$heure = date('H:i', strtotime('+1 hour', strtotime($heure)));

$message = "<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Nouveau message</title>
<style type='text/css'>
     @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
     @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&display=swap');
     @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
     *{
         font-family: 'Varela Round';
         text-align: center;
     }
         
    </style>
<section style='
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
          '>
    <section style='
            height: 100%;
            width: 800px;
            background-color: #fff;
            margin: auto;
            padding: 20px 0 20px 0;
            '>
        <section style=' width: 100%; text-align: center; '> 
            <p style='font-weight: bold; font-family: Roboto; margin: 0;'>Marteau Alexandre</p>
            <p style='font-weight: bold; font-family: Roboto; margin: 10px 0 0 0;'>Développeur web</p>
        </section>
        <a style='display: block; text-align: center; background-color: #f4f4f4;width: 100%;height: 45px;margin: 30px 0 0 0;text-decoration: none;'target='about_blank' href='http://alex-marteau.com'>
            <p style='display: inline-block; text-decoration: none;color: #ADADAD; margin: 15px auto 0 auto; text-align: center;'>Accéder au site</p>
        </a>
        <b style='
            display: block;
            margin: 0 0 0 0;
            width: 100%;
            height: 20px;
            background-color: #FF5950;'
            ></b>
        <main style='
            width: 100%;
            height: 100%;
            padding: 20px;'>
            <h1 style='
            font-family: Roboto;
            font-size: 25px;'>Vous avez reçu un nouveau message</h1>
            <br>
            <span style='
            width: 600px;
            height: 1px;
            margin: auto;
            background-color: #f0f0f0;
            '></span>
            <br>
            <h2 style='
            font-family: Roboto;
            font-size: 20px;
            text-align: center;
            '>Un utilisateur à utilisé le fomulaire de contact</h2>
            <br>
            <label style='
            font-size: 18px;
            font-weight: bold;
            '>Nom : </label>
            <p style='
            width: 90%;
            overflow-wrap: break-word;
            '>".$nom."</p>
            <br>
            <label style='
            font-size: 18px;
            font-weight: bold;
            '>Adresse mail : </label>
            <p style='
            width: 90%;
            overflow-wrap: break-word;
            '>".$mail."</p>
            <br>
            <label style='
            font-size: 18px;
            font-weight: bold;
            '>Objet : </label>
            <p style='
            width: 90%;
            overflow-wrap: break-word;
            '>".$subject."</p>
            <br>
            <label style='
            font-size: 18px;
            font-weight: bold;
            '>Message :</label>
            <p style='
            width: 90%;
            overflow-wrap: break-word;
            '>".$msg."</p>
            <br>
            <infos style='display: flex;'>
                <article>
                    <label style='
            font-size: 18px;
            font-weight: bold;
            '>Date d'envoi :</label>
                    <p style='
            width: 90%;
            overflow-wrap: break-word;
            width: auto;
            margin: 0 50px 0 0;
            '>".$date." à ".$heure."</p>
                </article>
                <br>
                <article>
                    <label style='
            font-size: 18px;
            font-weight: bold;
            '>Langue d'usage :</label>
                    <p style='
            width: 90%;
            overflow-wrap: break-word;
            width: auto;
            margin: 0 50px 0 0;
            '>".$lang."</p>
                </article>
            </infos>
        </main>
        <br>
        <span style='
            width: 600px;
            height: 1px;
            margin: auto;
            background-color: #f0f0f0;
            '></span>
    </section>
    <section style='
            height: 70px;
            background-color: #000;
            display: block;
            width: 800px;
            margin: auto;
            '>
    </section>
</section>
"; 

$message2 = "
Bonjour, nous avons enregistré un nouveau message.
<br>
Voici le contenue du message :
<br>
Nom : ".$nom."!
<br>
Adresse e-mail : ".$mail."
<br>
Sujet : ".$subject."
<br>
message : ".$msg."
<br>
Envoyé le : ".$date." à ".$heure."
<br>
Langue du site : ".$lang."
<br>
<a href='http://alex-marteau.com' target='about_blank'>Acceder au site</a>
<br>
Ce mail à étais envoyé automatiquement suite à la validation du formulaire de contact.
"; ?>