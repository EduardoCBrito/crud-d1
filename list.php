<?php 
require_once('./db/connection.php');
require_once('./model/customers.php');

$conn = getConnection();
$customers = getCustomers($conn);

?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">CPF</th>
      <th scope="col">RG</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($customers as $customer) {?>
      <tr>
        <th scope="row"><?php echo $customer['id'] ?></th>
        <td><?php echo $customer['name'] ?></td>
        <td><?php echo $customer['dob'] ?></td>
        <td><?php echo $customer['cpf'] ?></td>
        <td><?php echo $customer['rg'] ?></td>
        <td>
            <a href="/index.php?page=edit&id=<?php echo $customer['id']?>">Editar</a>
        </td>
      </tr>
    <?php }?>
  </tbody>
</table>