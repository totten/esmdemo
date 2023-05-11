<table>
  <thead>
  <tr>
    <th>{ts}Name{/ts}</th>
  </tr>
  </thead>
  <tbody>
  {foreach from=$esmdemos item=esmdemo}
      <tr>
        <td><a href="{$esmdemo.url|escape}">{$esmdemo.name|escape}</a></td>
      </tr>
  {/foreach}
  </tbody>
</table>
