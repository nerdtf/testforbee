<h1 >Create Task:</h1>
<form action="/Task/store" enctype="multipart/form-data" method="POST">

    <div class="form-group">
        <label for="user_name">User Name:</label>
        <input class="form-control"  type="text" name="user_name" id="user_name">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control"  type="text" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="task_text">Task Text:</label>
        <textarea class="form-control"  name="task_text" id="task_text"></textarea>
    </div>

    <div class="form-group">
        <label for="image">Upload image:</label>
        <input class="form-control" type="file" name="image" id="image">
    </div>

    <div class="form-group">
        <button class="btn btn-warning" type="submit">Create</button>
    </div>
</form>