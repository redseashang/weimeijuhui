<?php
function CheckValue()
{
	$Val=I('post.think_picpath','');
	if($Val=='123')
	{
		return false;
	}
	return true;
}
?>