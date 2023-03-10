<?php  

if(isset($_POST["message"])){

    $message = "Ce mesage vous a été envoyé par  
     Nom : " .$_POST["name"] ."
     Email : ".$_POST["email"] ."
     Message : " .$_POST["message"];
   

    $retour = mail("garcianahos9@gmail.com",$_POST["subject"],$message);

    if($retour){
        echo "Message envoyé avec success!!";
    }else {
        echo "Erreur!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okoume Consulting</title>
    <link rel="stylesheet" href="../ok1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-5">
        <div class="container-fluid">
            <a class="navbar-brand titre-ok text-white" href="">Okoumé<span class="titre-jaune">Consulting</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active lien text-white" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lien text-white" href="#secteurs">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lien text-white" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn btn-danger button" href="#contact">Prendre rendez-vous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/scott.jpg" class="d-block w-100" alt="photo" height="700px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Okoumé Consulting</h5>
                    <p>Nous vous aidons dans la formation.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/hunters.jpg" class="d-block w-100" alt="photo" height="700px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Découvrir nos offres</h5>
                    <p>Une large game de Services conçue pour vous.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets//img//mediensturmer.jpg" class="d-block w-100" height="700px" alt="photo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Competences</h5>
                    <p>Nous vous donnons l'occasion d'avoir des compétences dans divers domaine.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Section présentation -->
    <div class="container text-center">
        <section class="sect1 mb-5">
            <p class="titre-section1 text-uppercase fw-bold">Qui sommes-nous?</p>

            <p>Nous sommes un cabinet de conseils spécialisé dans la formation et l'analyse de donnée.</p>
            <p>Nous accompagnons les professionnels et les étudiants dans l'acquisition des compétences <br> les plus
                demandées sur le marché de l'emploi afin de booster leur carrière.</p>
            <p>Notre pôle Data Analysic accompagne des entreprise dans l'analyse de leur données <br> afin de faciliter
                la
                prise de déscisions stratégiques et l'optimisation de la performance.</p>
        </section>
    </div>
    <!-- Section secteur d'activité -->
    <section class="secteur-activite mt-5 container mb-5" id="secteurs">
        <p class="titre-sec text-uppercase fw-bold">Nos services</p>
        <div class="row mx-0">
            <div class="col-md-3 card p-3 ">
                <i class="fas fa-database"></i>
                <p class="mt-2 text-uppercase fw-bold">Analyse de données</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-md-3 card p-3">
                <i class="fas fa-handshake"></i>
                <p class="mt-2 text-uppercase fw-bold">Enquetes de Satisfaction</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-md-3 card p-3">
                <i class="fas fa-chart-line"></i>
                <p class="mt-2 text-uppercase fw-bold">Tableaux de Bord</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-md-3 card p-3">
                <i class="far fa-newspaper"></i>
                <p class="mt-2 text-uppercase fw-bold">Reporting</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
        </div>

    </section>
    <section class="nous-contacter" id="contact">
        <div class="row mx-0 justify-content-between px-5">
            <div class="col-md-6 p-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7719.050544017753!2d-17.454582873461113!3d14.682861659000377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1725f3676fa21%3A0x147bc7f1291d491!2zTcOpZGluYSwgRGFrYXI!5e0!3m2!1sfr!2ssn!4v1675853505928!5m2!1sfr!2ssn"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 w-50">
                <p class="contact-titre ">Contactez-nous</p>
                <form action="" method="post">
                    <p class="text-white">Laissez nous un message, notre équipe vous recontactera dans les meilleurs délais</p>
                    <div class="mb-3">
                        <input type="text" placeholder="Votre Nom complet" class="form-control" name="fullname">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Votre Email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Votre Numéro de téléphone" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Votre sujet" class="form-control" name="subject">
                    </div>
                    <div class="mb-3">
                        <textarea id="" cols="30" rows="10" placeholder="Votre message" class="form-control" name="message">

                        </textarea>
                        <input type="submit" name="" id="" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer mt-5">
        <div class="row mx-0 justify-content-center px-5">
            <div class="col-md-3 text-center">
                <p class="footer-titre">Travail avec nous</p>
                <ul>
                    <li>Actualité</li>
                    <li>A propos</li>
                    <li>Partenaire</li>
                    <li>Actualité</li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <p class="footer-titre">Métiers</p>
                <ul>
                    <li>Formation inter et intra entreprise</li>
                    <li>Data Analysic</li>
                    <li>Conseil en orientation</li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <p class="footer-titre">Nous suivre</p>
                <i class="fab fa-whatsapp-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
            <div class="col-md-3">
                <p class="footer-titre">Nous contacter</p>
            <ul>
                <li class="pb-2"> <i class="far fa-envelope"></i> okoumeconsulting.sn@gmail.com</li>
                <li><i class="fas fa-phone"></i>  +211 77 115 73 77</li>
            </ul>
                
            </div>
        </div>
        <div class="row text-center mx-0 mt-5">
            <p>	Copyright  &copy; tout droit réservé by OkouméConsulting 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>