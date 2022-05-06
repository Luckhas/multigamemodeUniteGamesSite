<div id="upload">
	<div style="margin: 0 auto; width: 95%; padding: 10px; background: #FFF; border: 1px solid #000;" >
		<h1>Contact</h1>
		<form id="formContato" action="?ung=contact&mail=sending_message" method="post">
			<table cellspacing="5px" width="550px" heigth="300px">
				
				<tr>
					<td>
						Name:
					</td>
					<td>
					<input type="text" name="name" />
					</td>
				</tr>

				<tr>
					<td>
						Email:
					</td>
					<td>
					<input type="text" name="email" />
					</td>
				</tr>

				<tr>
					<td  valign="top">
						Message:
					</td>
					<td>
						<textarea type="text" name="message" class="area" rows="10" cols="40" onfocus="this.value='';" />Insert your message here.</textarea>
					</td>
				</tr>

				<tr>
					<td>
						
					</td>
					<td>
					<input name="enviar" type="submit" value="Submit" class="botao" />
					</td>
				</tr>

			</table> 
		</form>

		<?php
			$api->sendMail();
		?>
	</div>
</div>