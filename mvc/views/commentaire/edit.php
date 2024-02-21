{{include('layouts/header.php',{title: 'Modifier'})}}
<div class="container">
    <h2>Modifier commentaire:</h2>
    <form method="post">
        <label>Commentaire:
            <input type="text" name="contenu" value="{{ commentaire.contenu }}">
        </label>
        {% if errors.name is defined %}
        <span class="error">{{ errors.name }}</span>
        {% endif %}
        <label>Address
            <input type="date" name="date" value="{{ commentaire.date }}">
        </label>
        {% if errors.address is defined %}
        <span class="error">{{ errors.address}}</span>
        {% endif %}

        <input type="submit" class="btn" value="Update">
    </form>
</div>
{{include('layouts/footer.php')}}