<?php echo 'http://addon.dismall.com/?@3982.developer';exit;?>
<!--{if CURMODULE != 'logging'}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
	<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('ls_password');{/if}return lsSubmit();">
	<div class="fastlg cl" >
		<span id="return_ls" style="display:none"></span>
		<div class="y pns" >
			<table cellspacing="0" cellpadding="0">
				<tr>


						<td style="display:none"><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
						<td><a onclick="showWindow('login', this.href);return false;" href="member.php?mod=logging&amp;action=login" rel="nofollow">{lang login}</a></td>
<td><a href="member.php?mod={$_G[setting][regname]}" >$_G['setting']['reglinkname']</a></td>



				</tr>
				<tr>

				</tr>
			</table>
			<input type="hidden" name="quickforward" value="yes" />
			<input type="hidden" name="handlekey" value="ls" />
	  </div>
		<!--{hook/global_login_extra}-->
	</div>
	</form>

	<!--{if $_G['setting']['pwdsafety']}-->
		<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
	<!--{/if}-->

<!--{/if}-->