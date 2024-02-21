{{include('layouts/header.php',{title: 'Create'})}}
<div class="container">
    <h2>Créer commentaire dossier/commentaire</h2>
    <form method="post">
        <label>Commentaire:
            <textarea name="contenu" style="width: 100%;"></textarea>
        </label>
        {% if errors.contenu is defined %}
        <span class="error">{{ errors.contenu }}</span>
        {% endif %}
        <label>Date:
            <input type="date" name="date" value="">
        </label>
        {% if errors.date is defined %}
        <span class="error">{{ errors.date }}</span>
        {% endif %}
        <label>Clé Étrangère article :
            <input type="number" name="blog_article_id" value="">
        </label>
        {% if errors.blog_article_id is defined %}
        <span class="error">{{ errors.blog_article_id }}</span>
        {% endif %}

        <label>Clé Étrangère user
            <input type="number" name="blog_user_id" value="">
        </label>
        {% if errors.blog_user_id is defined %}
        <span class="error">{{ errors.blog_user_id }}</span>
        {% endif %}

        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{include('layouts/footer.php')}}