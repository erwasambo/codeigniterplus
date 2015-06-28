<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="apple-touch-icon" sizes="57x57" href="{$base_url}images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="{$base_url}images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="{$base_url}images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="{$base_url}images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="{$base_url}images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="{$base_url}images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="{$base_url}images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="{$base_url}images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="{$base_url}images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{$base_url}images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="{$base_url}images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="{$base_url}images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="{$base_url}images/favicon-16x16.png">
<link rel="manifest" href="{$base_url}images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="keywords" content="{$page->key}" />
<meta name="description" content="{$page->desc}" />
{if $page->noindex || $smarty.const.ENVIRONMENT == "development"}
    <meta name="robots" content="noindex, nofollow" />
{/if}
{if $pagination_helper AND isset($page_no)}
    {if $page_no==1 && $page_no!=$last_page}
        <link rel="next" href="{$page_url}/2" />
    {elseif $page_no==$last_page && $page_no!=1}
        <link rel="prev" href="{$page_url}/{$last_page-1}" />
    {else}
        <link rel="next" href="{$page_url}/{$page_no+1}" />
        <link rel="prev" href="{$page_url}/{$page_no-1}" />
    {/if}
{/if}
