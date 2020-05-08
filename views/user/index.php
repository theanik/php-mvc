<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($users as $user) : ?>
        <tr>
        <td><?=$user->name?></td>
        <td><?=$user->email?></td>
        <td><button>Delete</button></td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>


</body>
</html>