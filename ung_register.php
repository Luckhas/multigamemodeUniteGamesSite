	<div id="register">
		<div id="registerTableStyle">

			<form id="registerForm" method="post" action="?ung=register&reg=recording">
				<h1>Register</h1>
				<table>
					<tr>
						<td>Login:</td>
						<td><input type="text" name="login" /></td>
					</tr>
					<tr>
						<td>e-mail:</td>
						<td><input type="text" name="email" /></td>
					</tr>
					<tr>
						<td>Skype:</td>
						<td><input type="text" name="skype" /></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="passA" /></td>
					</tr>
					<tr>
						<td>Repeat-password:</td>
						<td><input type="password" name="passB" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="Register" value="Register" class="botao" /></td>
					</tr>
				</table>
			</form>
		</div>
			<?php
				$api->register();
			?>
	</div>
	<br>