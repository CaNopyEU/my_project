<h2>User list</h2>

<table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
    </thead>

    <tbody>
        <?php foreach ($authors as $author) { ?>
        <tr>
            <td><?=$author->name;?></td>
            <td><?=$author->email;?></td>
            <td><a href="/author/permissions?id=<?=$author->id;?>">Edit Permission</a><td>
        </tr>
    <?php } ?>
    </tbody>
</table>
