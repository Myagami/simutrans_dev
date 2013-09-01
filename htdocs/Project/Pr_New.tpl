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
	  <form action="Project/Pr_New_Add/" method="post">
	    <fieldset>
	      <legend>基本情報</legend>
	      プロジェクト名:<input type="text" name="Prj[name]"/><br>
	      プロジェクトタイプ:
	      <select name="Prj[type]">
		<option value="train">鉄道
		</option>
		<option value="bus">バス
		</option>
		<option value="building">建物
		</option>
		<option value="mix">混合セット
		</option>
	      </select><br>
	      <textarea name="Prj[disp]" class="prj_disp">
	      </textarea><br>
	      <input type="submit" name="prj_assign" value="assign"/>
	    </fieldset>
	  </form>

	</div>
      </div>
    </div>
    <!-- Navi -->

  </body>
</html>
