<form action="{$action_url}" method="POST" class="well col-md-6">
    <div class="form-group">
        <label class="control-label" for="{$chronicle_form.name.field}">{$chronicle_form.name.label}</label>
        <input type="text" name="{$chronicle_form.name.field}" value="{$chronicle->getName()}" class="required form-control" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$chronicle_form.email.field}">{$chronicle_form.email.label}</label>
        <input type="text" name="{$chronicle_form.email.field}" value="{$chronicle->getEmail()}" class=" form-control required" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$chronicle_form.subject.field}">{$chronicle_form.subject.label}</label>
        <input type="text" name="{$chronicle_form.subject.field}" value="{$chronicle->getSubject()}" class="form-control required" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$chronicle_form.chronicle.field}">{$chronicle_form.chronicle.label}</label>
        <textarea name="{$chronicle_form.chronicle.field}" class="form-control required" size="30">
            {$chronicle->getMessage()}
        </textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-success" />&nbsp;<a class="btn btn-info pull-right" href="{$base_url}admin/chronicle">Back to Chronicle list</a> 
    </div>
</form>
