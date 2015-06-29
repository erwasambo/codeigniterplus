<form action="{$base_url}admin/country/delete" method="POST">
    <table cellspacing="0" cellpadding="4" border="0" class="table">
        <thead>
            <tr>
                <th> <input type="checkbox" value=""/> </th>
                <th> Id </th>
                <th> Name </th>
                <th> Option </th>
            </tr>
        </thead>
        <tbody>

            {foreach from=$country item=countryitem name="outer"}
                <tr>
                    <td> <input type="checkbox" name="id[]" value="{$countryitem->getId()}"/> </td>
                    <td> {$countryitem->getId()} </td>
                    <td> {$countryitem->getName()} </td>
                    <td> <a href="{$base_url}admin/country/edit/{$countryitem->getId()}">View/Edit</a> </td>
                </tr>
            {/foreach}

        </tbody>
    </table>       
<br />
<div class="clear">
    <ul class="pagination">
        {$pagination_helper->create_links()}
    </ul>
&nbsp;
<input type="submit" name="delete" value="Delete selected" class="btn btn-danger" />
<a href="{$base_url}admin/country/add" class="btn btn-success">Add New</a>
</div>
</form> 
