<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-danger" href="/Task/create">Создать задачу </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link btn btn-info" href="/Admin">Войти</a>
            </li>
        </ul>
    </div>
</nav>
<h1>Tasks</h1>


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
        <?for ($i =0; $i<=2; $i++):?>
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



<p><a href="/Task/show/4" role="button" class="btn btn-success" >Следующая страница</a></p>
<p><a href="/Task/show/<?=count($data['tasks'])?>" role="button" class="btn btn-dark" >Перейти в конец</a></p>
<p><a href="/SortTasks" role="button" class = "btn btn-primary">Сортировать по имени</a></p>














