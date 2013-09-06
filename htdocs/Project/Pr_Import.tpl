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
	  <form action="Project/Pr_New_Import/" method="post" enctype="multipart/form-data">
	    <fieldset>
	      <legend>プロジェクト登録(翻訳監修)</legend>
プロジェクト名:<input type="text" name="Prj[Name]"/><br>
<input type="file" name="Prj_File"/><br>
プロジェクトタイプ:
	      <select name="Prj[type]">
		<option value="train">鉄道</option>
		<option value="bus">バス</option>
		<option value="building">建物</option>
		<option value="mix">混合セット</option>
		<option value="trans">翻訳監修</option>
	      </select><br>
	      <textarea name="Prj[disp]" class="prj_disp"></textarea><br>
	      <input type="submit" name="prj_assign" value="assign"/>
	    </fieldset>
	  </form>

	</div>
      </div>
    </div>
    <!-- Navi -->

  </body>
</html>
