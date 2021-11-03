<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Customer</title>
</head>
<body>
  <form action="/customer/update" method="post">
    <p>First Name : <input type="text" name="customer_firstname" value="<?= $customer->customer_firstname; ?>"></p>
    <p>Last Name : <input type="text" name="customer_lastname" value="<?= $customer->customer_lastname; ?>"></p>
    <input type="hidden" name="customer_id" value="<?= $customer->customer_id; ?>">
    <button type="submit">Update</button>
  </form>
</body>
</html>