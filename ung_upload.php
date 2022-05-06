<div id="upload">
	<div style="margin: 0 auto; width: 95%; padding: 10px; background: #FFF; border: 1px solid #000;" >
		<h1>Rules</h1>
			<ul>
				<li>The file size must be until 20MB.</li>
				<li>The file name should contain arena prefix: [DM], [DD], [OS], [Shooter], [Hunter], [CTF].</li>
				<li>You can make upload only ZIP files.</li>
				<li>A image pack or a single one need be compressed to zip.</li>
			</ul>

			<form method="post" action="?ung=upload&up=enviar" enctype="multipart/form-data" id="formup">
			<input type="file" name="map" />
			<br />
			<input type="submit" name="upload" value="Send" class="botao" />
			</form>
			<?php
				$api->doUp();
			?>
	</div>
</div>