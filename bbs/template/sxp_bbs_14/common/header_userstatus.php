<?php echo 'shangxuepai.com:http://addon.dismall.com/?@3982.developer ';exit;?>
<!--{if $_G['uid']}-->

<span class="sxp_avatar">
<a href="home.php?mod=space&uid=$_G[uid]" title="{$_G[member][username]}"><!--{avatar($_G[uid],small)}--></a></span>

<!--{hook/global_usernav_extra4}--><a href="javascript:;" id="myitem" class="showmenu" onmouseover="showMenu({'ctrlid':'myitem'});"></a>

		
		<!--{hook/global_usernav_extra1}-->
		
		
		
		
		
		<span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt" class="a showmenu{if $_G[member][newprompt]} new{/if}" onmouseover="showMenu({'ctrlid':'myprompt'});">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>
		<!--{if empty($_G['cookie']['ignore_notice']) && ($_G[member][newpm] || $_G[member][newprompt_num][follower] || $_G[member][newprompt_num][follow] || $_G[member][newprompt])}--><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><!--{/if}-->
		

		 
		<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><span class="pipe">|</span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
		

		<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
			<span class="pipe">|</span><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
		<!--{/if}-->
		<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
			<span class="pipe">|</span><a href="admin.php" target="_blank">{lang admincp}</a>

		<!--{/if}-->
		
		
		<!--{hook/global_usernav_extra2}-->
	
		<!--{hook/global_usernav_extra3}-->
		
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a><span class="pipe">|</span>
		
<!--{elseif !empty($_G['cookie']['loginuser'])}-->

	<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
	
	

<!--{elseif !$_G[connectguest]}-->
	<!--{template member/login_simple}-->
<!--{else}-->

	<div class="avt y"><!--{avatar(0,small)}--></div>
	
		<strong class="vwmy qq">{$_G[member][username]}</strong>
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
	
	
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
		<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
	

<!--{/if}-->