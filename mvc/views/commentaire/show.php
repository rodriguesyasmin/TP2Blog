{{include('layouts/header.php', {title: 'Show'})}}
<div class="container">
    <h2>Commentaire Show</h2>
    <hr>
    <div class="commentaires">
        <p><strong>Commentaire:</strong> {{ commentaire.contenu }}</p>
        <p><strong>Date:</strong> {{ commentaire.date }}</p>
    </div>

    <a href="{{base}}/commentaire/edit?id={{commentaire.id}}" class="btn block">Edit</a>
    <form action="{{base}}/commentaire/delete" method="post">
        <input type="hidden" name="id" value="{{ commentaire.id }}">
        <button class="btn block red">Delete</button>
    </form>
</div>
{{include('layouts/footer.php')}}