{{ if input:doid }}
	<li>
		<div class="doingre">
		<form method="post" id="doingform" name="doingform" action="cp.php?ac=doing&op=comment&doid=$doid">
		<h1>评论两句</h1>
		<p class="btn_line">
			<a href="###" id="face_$doid" onclick="showFace(this.id, 'message_$doid');"><img src="image/facelist.gif" align="absmiddle" /></a>
			<input type="text" name="message" id="message_$doid" value="" class="t_input" size="35">
			<input type="hidden" name="refer" value="$theurl">
			<input type="hidden" name="commentsubmit" value="true">
			<input type="submit" name="commentsubmit_submit" value="确定" class="submit" />
		</p>
		<input type="hidden" name="formhash" value="<!--{eval echo formhash();}-->" />
		</form>
		</div>
	</li>
{{ endif }}