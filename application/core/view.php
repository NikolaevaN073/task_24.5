<?php
class View
{
	function generate($content_view, $template_view, $data = null, $title = '')
	{
		include 'application/views/'.$template_view;		
	}
}
