<html>
  <head>
{include file="../Common/header.tpl"}

  </head>
  <body>
    <!-- Navi -->
{include file="../Common/menubar.tpl"}
    <div class="container-fluid">
      <div class="row-fluid well">
	<div class="span12 well">
<table class="table table-striped table-bordered">
    <tr>
        <th width="150px">P_ID</th>
        <th>P_Name</th>
        <th>Comments</th>
    </tr>
{foreach from=$Prj_Lists item=fields}
<tr>
    <td width="180px">{$fields.p_id}</td>
    <td width="300px">
      <a href="./Project/Pr_Portal?ID={$fields.p_id}">{$fields.p_name}</a>
    </td>
    <td>{$fields.comments}</td>
</tr>
{/foreach}
</table>
	</div>
      </div>
    </div>
    <!-- Navi -->

  </body>
</html>
