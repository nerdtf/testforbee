    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">Email</th>
            <th scope="col">Содержание Задачи</th>
            <th scope="col">Картинка</th>
            <th scope="col">Статус</th>
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
        </tr>
        </tbody>
        <?endforeach;?>
    </table>


<p><a href="/Task/show/<?=$data['tasks'][0]['id'] - 3;?>" role="button" class="btn btn-primary">Предыдущая страница</a></p>
    <p><a href="/Task/show/<?=$data['tasks'][0]['id'] +  3;?>" role="button" class="btn btn-secondary">Следующая страница</a></p>
    <p><a href="/Task/show/1" role="button" class="btn btn-danger">Начало</a></p>

