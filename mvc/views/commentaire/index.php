{{include('layouts/header.php', {title: 'Index'})}}
<h1>Commentaires:</h1>
<table>
    <thead>
        <tr>
            <th>Commentaire</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        {% for commentaire in commentaires %}
        <tr>
            <td><a href="{{ base }}/commentaire/show?id={{ commentaire.id }}">{{ commentaire.contenu }}</a></td>
            <td>{{ commentaire.date }}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<a href="{{ base }}/commentaire/create" class="block">Créer commentaire</a>

{{include('layouts/footer.php')}}