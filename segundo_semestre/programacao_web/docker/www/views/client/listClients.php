<section class="container py-5">
  <h1 class="p-0 m-0">Listagem de clientes</h1>
</section>
<section class="container card">
  <table class="table">
    <thead>
      <tr>
        <th>ID do cliente</th>
        <th>E-mail</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </thead>
    <tbody>
      <?php
      foreach ($arrayClients as $client) {
      ?>
      <tr>
        <td>
          <?= $client['id_client'] ?>
        </td>
        <td>
          <?= $client['name'] ?>
        </td>
        <td>
          <?= $client['phone'] ?>
        </td>
        <td>
          <?= $client['email'] ?>
        </td>
        <td>
          <?= $client['address'] ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
    </tr>
</section>

</table>