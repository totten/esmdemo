<table>
  <thead>
  <tr>
    <th>{ts}Name{/ts}</th>
    <th>{ts}Route{/ts}</th>
  </tr>
  </thead>
  <tbody>
  {foreach from=$esmdemos item=esmdemo}
      <tr>
        <td><a href="{crmURL p=$esmdemo.route}">{$esmdemo.name|escape}</a></td>
        <td><a href="{crmURL p=$esmdemo.route}">{$esmdemo.route|escape}</a></td>
      </tr>
  {/foreach}
  </tbody>
</table>
