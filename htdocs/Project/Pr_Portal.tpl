<html>
  <head>
{include file="../Common/header.tpl"}

  </head>
  <body>
    <!-- Navi -->
{include file="../Common/menubar.tpl"}
    <div class="container-fluid">
      <div class="row-fluid">
	<div class="span12 well">
<h1 align="center">Project({$P_Prop.p_id}) - {$P_Prop.p_name}</h1>
	</div>
      </div>
<div class="row-fluid">
    <ul class="nav nav-tabs nav-stacked span2">
<li><a href="javascript:vold(0)" onclick="click_call();return false;">Import File</a></li>
<li><a href="javascript:vold(0)" onclick="click_call();return false;">Trans</a></li>
<li><a href="javascript:vold(0)" onclick="click_call();return false;">c</a></li>
<li><a href="javascript:vold(0)" onclick="click_call();return false;">d</a></li>
<li><a href="javascript:vold(0)" onclick="click_call();return false;">e</a></li>
    </ul>
<iframe src="{$load_path.base_url}/Pr_Portal/Index?ID={$P_ID}" class="span10 works">
Frame Works
</div>
</div>
    </div>
    <!-- Contents -->

  </body>
</html>
