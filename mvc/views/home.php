{{include('layouts/header.php',{title: 'Accueil'})}}

<div class="container">
    <div class="image-container">

        <img class="imgWelcome" src="{{ asset }}/img/logo.png" alt="Imagem de Destino Europeu">
    </div>
    <div class="welcome-text">
        <h2>Bienvenue sur notre blog - Découvrez l'Europe à travers nos yeux !</h2>
        Nous sommes passionnés par le voyage et avons créé ce blog pour partager avec vous nos expériences uniques à
        travers l'Europe. Que vous soyez un amateur d'histoire, un gourmand avide ou un amoureux de la nature, vous
        trouverez ici des conseils utiles, des récits de voyage inspirants et des recommandations exclusives.
    </div>
</div>

{{include('layouts/footer.php')}}