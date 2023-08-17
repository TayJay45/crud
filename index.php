<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <div class="container">
  <body>
    <h1>This is my CRUD App</h1>
    <p>Enter information below to create, read, update and delete.</p>
    <table>
      <tbody>
        <?php include 'read.php';?>
      </tbody>
    </table>
    <form class="form-inline m-2"action="create.php" method="POST">
      <label for="name">Name:</label>
      <input class ="form-control m-2"type="text" id="name" name="name">
      <label for="score">Score:</label>
      <input  class ="form-control m-2"type="number" id="score" name="score">
      <button class="btn btn-primary"type="submit">Add</button>
    </form>
    </div>
  </body>
</html>
