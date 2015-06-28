<form action="{$base_url}admin/category/delete" method="POST">
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

            {foreach from=$category item=categoryitem name="outer"}
                <tr>
                    <td> <input type="checkbox" name="id[]" value="{$categoryitem->getId()}"/> </td>
                    <td> {$categoryitem->getId()} </td>
                    <td> {$categoryitem->getName()} </td>
                    <td> <a href="{$base_url}admin/category/edit/{$categoryitem->getId()}">View/Edit</a> </td>
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
<a href="{$base_url}admin/category/add" class="btn btn-success">Add New</a>
</div>
</form> 
