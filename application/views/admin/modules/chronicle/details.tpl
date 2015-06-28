<form action="{$action_url}" method="POST" class="well col-md-6">
    <div class="form-group">
        <label class="control-label" for="{$chronicle_form.chronicleCategory.field}">{$chronicle_form.chronicleCategory.label}</label>
        <input type="text" name="{$chronicle_form.chronicleCategory.field}" value="{$chronicle->getChronicleCategory()}" class="required form-control" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$chronicle_form.description.field}">{$chronicle_form.description.label}</label>
        <textarea name="{$chronicle_form.description.field}" class="form-control required" size="30">
            {$chronicle->getDescription()}
        </textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-success" />&nbsp;<a class="btn btn-info pull-right" href="{$base_url}admin/chronicle">Back to Chronicle list</a> 
    </div>
</form>
