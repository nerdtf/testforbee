<?$i = 0;?>
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
    <?for ($i; $i<=2; $i++):?>
    <tbody>
    <tr>
        <th scope="row"><?=$data['tasks'][$i]['id']?></th>
        <td><?=$data['tasks'][$i]['user_name']?></td>
        <td><?=$data['tasks'][$i]['email']?></td>
        <td><?=$data['tasks'][$i]['task_text']?></td>
        <td><img src="images/<?=$data['tasks'][$i]['image']?>" width="20" height="20" alt=""></td>
        <td><?=$data['tasks'][$i]['status']?></td>
    </tr>
    </tbody>       
    <?endfor;?>    
</table>

<a href="/SortTasks/show/3" role="button" class="btn btn-success">Следующая страница</a>
