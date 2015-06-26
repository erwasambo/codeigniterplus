<form action="{$base_url}admin/chronicle/delete" method="POST">
    <table cellspacing="0" cellpadding="4" border="0" class="table">
        <thead>
            <tr>
                <th> <input type="checkbox" value=""/> </th>
                <th> Id </th>
                <th> Name </th>
                <th> Email </th>
                <th> Subject </th>
                <th> Message </th>
                <th> Sent </th>
                <th> Option </th>
            </tr>
        </thead>
        <tbody>

            {foreach from=$chronicle item=chronicleitem name="outer"}
                <tr>
                    <td> <input type="checkbox" name="id[]" value="{$chronicleitem->getId()}"/> </td>
                    <td> {$chronicleitem->getId()} </td>
                    <td> {$chronicleitem->getName()} </td>
                    <td> {$chronicleitem->getEmail()} </td>
                    <td> {$chronicleitem->getSubject()} </td>
                    <td> {$chronicleitem->getMessage()|truncate:80} </td>
                    <td> {$chronicleitem->getTime()|date_format} </td>
                    <td> <a href="{$base_url}admin/chronicle/edit/{$chronicleitem->getId()}">View/Edit</a> </td>
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
<a href="{$base_url}admin/chronicle/add" class="btn btn-success">Add New</a>
</div>
</form> 
