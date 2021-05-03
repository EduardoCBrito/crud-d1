<?php
require_once('./db/connection.php');
require_once('./model/address.php');
require_once('./model/contact.php');
require_once('./model/customers.php');

$conn = getConnection();
$customer = getCustomerById($conn, $_GET['id']);
$contacts = getContactsByCustomerId($conn, $_GET['id']);
$addresses = getAddressesByCustomerId($conn, $_GET['id']);

?> 
<form action="/action/update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
	<div class="form-row">
		<div class="form-group col-md-6">
	  		<label for="name">Nome</label>
	  		<input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="<?php echo $customer['name']?>" required>
		</div>
	</div>

  <div class="form-row">
  	<div class="form-group col-md-6">
  		<label for="date">Data de Nascimento</label>
  		<input type="date" class="form-control" name="date" id="date" value="<?php echo $customer['dob']?>" required>
  	</div>
  </div>

  <div class="row">
  	<div class="form-group col-md-6">
  		<label for="rg">RG:</label>
  		<input type="text" class="form-control" name="rg" id="rg" placeholder="Digite seu RG" value="<?php echo $customer['rg']?>" required data-mask="00.000.000-00">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="cpf">CPF:</label>
  		<input type="text" class="form-control"name="cpf" id="cpf" placeholder="Digite seu CPF" value="<?php echo $customer['cpf']?>" required data-mask="000.000.000-00">
  	</div>
  </div>

<div class="row">
	<div class="form-group col-md-6">
  		<label for="facebook">Facebook</label>
  		<input type="text" class="form-control" name="facebook" id="facebook" pla55ceholder="Facebook" value="<?php echo $customer['facebook']?>" required>
  	</div>
  	<div class="form-group col-md-6">
  		<label for="instagram">Instagram</label>
  		<input type="text" class="form-control"name="instagram" id="instagram" placeholder="Instagram" value="<?php echo $customer['instagram']?>" required>
  	</div>
</div>
<div class="row">
	<div class="form-group col-md-6">
  		<label for="twitter">Twitter</label>
  		<input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $customer['twitter']?>" required>
  	</div>
  	<div class="form-group col-md-6">
  		<label for="linkedin">Linkedin</label>
  		<input type="text" class="form-control"name="linkedin" id="linkedin" placeholder="linkedin" value="<?php echo $customer['linkedin']?>" required>
  	</div>
</div>

<div class="row">
	<div class="form-group col-md-12 text-right">
	&nbsp;</div>
</div>
 <div data-content='<?php require_once('./components/contact.php')?>' id="contact" data-index="<?php echo $contacts->rowCount()?>">
 	<div class="row">
 		<div class="form-group col-md-10 text-right"></div>
 		<div class="form-group col-md-2 text-right" onclick="addContact()">
 			<button type="button" class="btn btn-primary btn-sm">
 				Adicionar telefone
 			</button>
 		</div>
 	</div>
  <?php foreach($contacts as $key => $contact) {?>
 	<div class="row">
    <div class="form-group col-md-6">
        <label for="phone-type-<?php echo $key?>">Tipo:</label>
      <select class="form-control" name="phone_type[]" id="phone-type-<?php echo $key?>">
        <option value="H" <?php echo ($contact['type'] == 'H')? 'selected': ''?>>Residêncial</option>
        <option value="CP" <?php echo ($contact['type'] == 'CP')? 'selected': ''?>>Celular</option>
        <option value="C" <?php echo ($contact['type'] == 'C')? 'selected': ''?>>Comercial</option>
      </select>
    </div>
  	<div class="form-group col-md-6">
  		<label for="phone-0">Telefone:</label>
  		<input type="text" class="form-control" name="phone[]" id="phone-0" placeholder="6587-8965" value="<?php echo $contact['number']?>" required data-mask="(00) 0000-00009">
  	</div>
</div>
<?php }?>
</div>
<div class="row">
	<div class="form-group col-md-12 text-right">
	&nbsp;</div>
</div>
  <div data-content='<?php require_once('./components/address.php')?>' id="address" data-index="<?php echo $addresses->rowCount()?>">
 	<div class="row">
 		<div class="form-group col-md-10 text-right"></div>
 		<div class="form-group col-md-2 text-right" onclick="addAddress()">
 			<button type="button" class="btn btn-primary btn-sm">
 				Adicionar Endereço
 			</button>
 		</div>
 	</div>
  <?php foreach($addresses as $key => $address ){ ?>
<div class="row">

    <div class="form-group col-md-12">
        <label for="address-index">Endereço</label>
        <input type="text" class="form-control" name="address[]" id="address-index" placeholder="1234 Main St" value="<?php echo $address['address']?>" required>
    </div>
    <div class="form-group col-md-5">
        <label for="city-index">Cidade</label>
        <input type="text" class="form-control" name="city[]" id="city-index" value="<?php echo $address['city']?>" required>
    </div>

    <div class="form-group col-md-3">
        <label for="state-index">Estado</label>
        <select name="state[]" id="state-index" class="form-control">
            <option value="SP" <?php echo ($address['state'] == 'SP')? 'selected': ''?>>SP</option>
            <option value="RJ" <?php echo ($address['state'] == 'RJ')? 'selected': ''?>>RJ</option>
            <option value="SC" <?php echo ($address['state'] == 'SC')? 'selected': ''?>>SC</option>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="zip-index">CEP</label>
        <input type="text" class="form-control" name="zip[]" id="zip-index" value="<?php echo $address['zip']?>" required data-mask="00000-000">
    </div>
</div>
<?php }?>
</div>
	  <button type="submit" class="btn btn-primary">Salvar</button>

  </div>
</form>
<script type="text/javascript" src="./assets/js/contact.js"></script>