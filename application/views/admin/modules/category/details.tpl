<form action="{$action_url}" method="POST" class="well col-md-6">
    <div class="form-group">
        <label class="control-label" for="{$category_form.name.field}">{$category_form.name.label}</label>
        <input type="text" name="{$category_form.name.field}" value="{$category->getName()}" class="required form-control" size="30"  />
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-success" />&nbsp;<a class="btn btn-info pull-right" href="{$base_url}admin/category">Back to Category list</a> 
    </div>
</form>
