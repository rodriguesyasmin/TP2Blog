{{include('layouts/header.php',{title: 'Create'})}}
<div class="container">
    <h2>Créer commentaire dossier/commentaire</h2>
    <form method="post">
        <label>Commentaire: </label>
        <textarea name="contenu" style="width: 100%;"> {{ commentaire.contenu }} </textarea>

        {% if errors.contenu is defined %}
        <span class="error">{{ errors.contenu }}</span>
        {% endif %}
        <label>Date:</label>
        <input type="date" name="date" value=" {{ commentaire.date }}">

        {% if errors.date is defined %}
        <span class="error">{{ errors.date }}</span>
        {% endif %}
        <label> ID article :</label>
        <input type="number" name="blog_article_id" value=" {{ commentaire.blog_article_id }}">

        {% if errors.blog_article_id is defined %}
        <span class="error">{{ errors.blog_article_id }}</span>
        {% endif %}

        <label>ID user </label>
        <input type="number" name="blog_user_id" value="{{commentaire.blog_user_id}}">

        {% if errors.blog_user_id is defined %}
        <span class="error">{{ errors.blog_user_id }}</span>
        {% endif %}

        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{include('layouts/footer.php')}}