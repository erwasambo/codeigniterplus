<form action="{$action_url}" method="POST" class="well col-md-6">
    <div class="form-group">
        <label class="control-label" for="{$country_form.name.field}">{$country_form.name.label}</label>
        <input type="text" name="{$country_form.name.field}" value="{$country->getName()}" class="required form-control" size="30"  />
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-success" />&nbsp;<a class="btn btn-info pull-right" href="{$base_url}admin/country">Back to Countries list</a> 
    </div>
</form>
