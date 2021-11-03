<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nama Pelanggan</title>
</head>
<body>
  <a href="/customer/add_new">Add New Customer</a>
  <table border="1">
    <thead>
      <tr>
        <th>Nama Pertama</th>
        <th>Nama Kedua</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($customer as $row) : ?>
        <tr>
          <td><?= $row['customer_firstname']; ?></td>
          <td><?= $row['customer_lastname']; ?></td>
          <td><a href="/customer/edit/<?= $row['customer_id']; ?>">Edit</a></td>
          <td><a href="/customer/delete/<?= $row['customer_id']; ?>">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>