
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
        <?foreach($data['sortTasks'] as $task):?>
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


<p><a href="/SortTasks/show/<?=$data['sortTasks'][0]['id'] - 3;?>" role="button" class="btn btn-success">Предыдущая страница</a></p>
    <p><a href="/SortTasks/show/<?=$data['sortTasks'][0]['id'] +  3;?>" role="button" class="btn btn-info">Следующая страница</a></p>
    <p><a href="/SortTasks/show/1" role="button" class="btn btn-dark">Начало</a></p>

