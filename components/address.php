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