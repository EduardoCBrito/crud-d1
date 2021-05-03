<form action="/action/create.php" method="post">
	<div class="form-row">
		<div class="form-group col-md-6">
	  		<label for="name">Nome</label>
	  		<input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
		</div>
	</div>

  <div class="form-row">
  	<div class="form-group col-md-6">
  		<label for="date">Data de Nascimento</label>
  		<input type="date" class="form-control" name="date" id="date" required>
  	</div>
  </div>

  <div class="row">
  	<div class="form-group col-md-6">
  		<label for="rg">RG:</label>
  		<input type="text" class="form-control" name="rg" id="rg" placeholder="Digite seu RG" required data-mask="00.000.000-00">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="cpf">CPF:</label>
  		<input type="text" class="form-control"name="cpf" id="cpf" placeholder="Digite seu CPF" required data-mask="000.000.000-00">
  	</div>
  </div>

<div class="row">
	<div class="form-group col-md-6">
  		<label for="facebook">Facebook</label>
  		<input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" required>
  	</div>
  	<div class="form-group col-md-6">
  		<label for="instagram">Instagram</label>
  		<input type="text" class="form-control"name="instagram" id="instagram" placeholder="Instagram" required>
  	</div>
</div>
<div class="row">
	<div class="form-group col-md-6">
  		<label for="twitter">Twitter</label>
  		<input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" required>
  	</div>
  	<div class="form-group col-md-6">
  		<label for="linkedin">Linkedin</label>
  		<input type="text" class="form-control"name="linkedin" id="linkedin" placeholder="linkedin" required>
  	</div>
</div>

<div class="row">
	<div class="form-group col-md-12 text-right">
	&nbsp;</div>
</div>
 <div data-content='<?php require_once('./components/contact.php')?>' id="contact" data-index="1">
 	<div class="row">
 		<div class="form-group col-md-10 text-right"></div>
 		<div class="form-group col-md-2 text-right" onclick="addContact()">
 			<button type="button" class="btn btn-primary btn-sm">
 				Adicionar telefone
 			</button>
 		</div>
 	</div>
 	<div class="row">
    <div class="form-group col-md-6">
        <label for="phone-type-0">Tipo:</label>
      <select class="form-control" name="phone_type[]" id="phone-type-0">
        <option value="H">Residêncial</option>
        <option value="CP">Celular</option>
        <option value="C">Comercial</option>
      </select>
    </div>
  	<div class="form-group col-md-6">
  		<label for="phone-0">Telefone:</label>
  		<input type="text" class="form-control phone" name="phone[]" id="phone-0" placeholder="6587-8965" required data-mask="(00) 0000-00009">
  	</div>
</div>
</div>
<div class="row">
	<div class="form-group col-md-12 text-right">
	&nbsp;</div>
</div>
  <div data-content='<?php require_once('./components/address.php')?>' id="address" data-index="1">
 	<div class="row">
 		<div class="form-group col-md-10 text-right"></div>
 		<div class="form-group col-md-2 text-right" onclick="addAddress()">
 			<button type="button" class="btn btn-primary btn-sm">
 				Adicionar Endereço
 			</button>
 		</div>
 	</div>
  
<div class="row">

    <div class="form-group col-md-12">
        <label for="address-index">Endereço</label>
        <input type="text" class="form-control" name="address[]" id="address-index" placeholder="1234 Main St" required>
    </div>
    <div class="form-group col-md-5">
        <label for="city-index">Cidade</label>
        <input type="text" class="form-control" name="city[]" id="city-index" required>
    </div>

    <div class="form-group col-md-3">
        <label for="state-index">Estado</label>
        <select name="state[]" id="state-index" class="form-control">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="SC">SC</option>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="zip-index">CEP</label>
        <input type="text" class="form-control zip" name="zip[]" id="zip-index" required data-mask="00000-000">
    </div>
</div>

</div>
	  <button type="submit" class="btn btn-primary">Salvar</button>

  </div>
</form>
<script type="text/javascript" src="./assets/js/contact.js"></script>