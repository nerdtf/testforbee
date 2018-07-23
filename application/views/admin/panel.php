<h1>Welcome to admin panel!</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Имя пользователя</th>
        <th scope="col">Email</th>
        <th scope="col">Содержание Задачи</th>
        <th scope="col">Картинка</th>
        <th scope="col">Статус</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
<?foreach ($data['tasks'] as $task):?>
    <tbody>
    <tr>
        <th scope="row"><?=$task['id']?></th>
        <td><?=$task['user_name']?></td>
        <td><?=$task['email']?></td>
        <td><?=$task['task_text']?></td>
        <td><img src="images/<?=$task['image']?>" width="20" height="20" alt=""></td>
        <td><?=$task['status']?></td>
        <td><p><a href="/admin/edit/<?=$task['id'];?>" role = button class="btn bnt-dark">Edit</a></p></td>
    </tr>
    </tbody>
<? endforeach;?>
</table>
