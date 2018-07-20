<form action="/Admin/update" method="POST">

    <div class="form-group">
    <label for='user_name'>Enter User Name:</label>
    <textarea class="form-control" name='user_name' id="user_name"><?=$data['task']['user_name']?></textarea>
    </div>

    <div class="form-group">

    <label for='email'>Enter email:</label>
    <textarea class="form-control" name='email' id="email"><?=$data['task']['email']?></textarea>
    </div>

    <div class="form-group">
    <label for='task_text'>Enter task text:</label>
    <textarea class="form-control" name='task_text' id="task_text"><?=$data['task']['task_text']?></textarea>
    </div>

    <div class="form-group">
    <label for='status'>Enter status:</label>
    <textarea class="form-control" name='status' id="status"><?=$data['task']['status']?></textarea>
    </div>

    <div class="form-group">
    <input type="hidden" name="id" value='<?=$data['task']['id']?>'>
    </div>
    <div class="form-group">
        <button type='submit' class="btn btn-primary">Save</button>
    </div>
</form>
