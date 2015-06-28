<form action="{$action_url}" method="POST" class="well col-md-6">
    <div class="form-group">
        <label class="control-label" for="{$country_form.name.field}">{$country_form.name.label}</label>
        <input type="text" name="{$country_form.name.field}" value="{$country->getName()}" class="required form-control" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$country_form.email.field}">{$country_form.email.label}</label>
        <input type="text" name="{$country_form.email.field}" value="{$country->getEmail()}" class=" form-control required" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$country_form.subject.field}">{$country_form.subject.label}</label>
        <input type="text" name="{$country_form.subject.field}" value="{$country->getSubject()}" class="form-control required" size="30"  />
    </div>
    <div class="form-group">
        <label class="control-label" for="{$country_form.message.field}">{$country_form.country.label}</label>
        <textarea name="{$country_form.message.field}" class="form-control required" size="30">
            {$message->getMessage()}
        </textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-success" />&nbsp;<a class="btn btn-info pull-right" href="{$base_url}admin/country">Back to Countries list</a> 
    </div>
</form>
