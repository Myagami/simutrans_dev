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
	  <form action="#" method="post">
	    <fieldset>
	      <legend>基本情報</legend>
	      プロジェクト名:<input type="text" name="prj_name"/><br>
	      プロジェクトタイプ:
	      <select>
		<option value="train">鉄道
		</option>
		<option value="bus">バス
		</option>
		<option value="building">建物
		</option>
		<option value="mix">混合セット
		</option>
	      </select><br>
	    </fieldset>
	  </form>

	</div>
      </div>
    </div>
    <!-- Navi -->

  </body>
</html>
