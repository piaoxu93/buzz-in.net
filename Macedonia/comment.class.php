<?php
class Comment
{
	private $data = array();
	
	public function __construct($row)
	{
		/*
		/	The constructor
		*/
		
		$this->data = $row;
	}
	
	public function markup1($ID)
	{
		/*
		/	This method outputs the XHTML markup of the comment
		*/
		
		// Setting up an alias, so we don't have to write $this->data every time:
		$d = &$this->data;
		
		
		
		// Converting the time to a UNIX timestamp:
		$d['dt'] = strtotime($d['dt']);
		
		// Needed for the default gravatar image:
		$url = 'http://'.dirname($_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]).'/image/default_avatar.gif';
		
		if($d['ID']==$ID)
		{
		return '
		
			<div class="comment">
				<div class="avatar">
			      <img src="image/avatar/'.$d['avatar'].'.png">
				</div>
				<div class="name">'.$d['name'].'</div>
				<div class="date" title="Added at '.date('H:i \o\n d M Y',$d['dt']).'">'.date('d M Y',$d['dt']).'</div>
				<p id="comment_content">'.$d['body'].'</p>
				<div class="report" id="'.$d['pid'].'" style="background-image: url(image/report_1.png);"></div>
			</div>
		';
		}
	}
	
	public function markup()  //用于立即显示
	{
		/*
		/	This method outputs the XHTML markup of the comment
		*/
		
		// Setting up an alias, so we don't have to write $this->data every time:
		$d = &$this->data;
		
		
		
		// Converting the time to a UNIX timestamp:
		$d['dt'] = strtotime($d['dt']);
		
		// Needed for the default gravatar image:
		$url = 'http://'.dirname($_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]).'/image/default_avatar.gif';
		
		if($d['ID']==$ID)
		{
		return '
		
			<div class="comment">
				<div class="avatar">
					<img src="image/avatar/'.$d['avatar'].'.png">
				</div>
				<div class="name">'.$d['name'].'</div>
				<div class="date" title="Added at '.date('H:i \o\n d M Y',$d['dt']).'">'.date('d M Y',$d['dt']).'</div>
				<p id="comment_content">'.$d['body'].'</p>
				<div class="report" id="'.$d['pid'].'" style="background-image: url(image/report_1.png);"></div>
			</div>
		';
		}
	}
	
	public static function validate(&$arr)
	{
		/*
		/	This method is used to validate the data sent via AJAX.
		/
		/	It return true/false depending on whether the data is valid, and populates
		/	the $arr array passed as a paremter (notice the ampersand above) with
		/	either the valid input data, or the error messages.
		*/
		
		$errors = array();
		$data	= array();
		
		
		if(!($data['question_id'] = filter_input(INPUT_POST,'question_id',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['question_id'] = 'Sorry, there is an error.';
		}
		
		if(!($data['ip'] = filter_input(INPUT_POST,'ip',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['ip'] = 'Sorry, there is an error.';
		}
		
		// Using the filter_input function introduced in PHP 5.2.0
		
		if(!($data['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)))
		{
			$errors['email'] = 'Please enter a Email.';
		}
		
		
		// Using the filter with a custom callback function:
		
		if(!($data['body'] = filter_input(INPUT_POST,'body',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['body'] = 'Please enter a comment body.';
		}
		
		if(!($data['name'] = filter_input(INPUT_POST,'name',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['name'] = 'Please enter a name.';
		}
		
		if(!($data['avatar'] = filter_input(INPUT_POST,'avatar',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['avatar'] = 'Sorry, there is an error.';
		}
		
		if(!empty($errors)){
			
			// If there are errors, copy the $errors array to $arr:
			
			$arr = $errors;
			return false;
		}
		
		// If the data is valid, sanitize all the data and copy it to $arr:
		
		foreach($data as $k=>$v){
			$arr[$k] = mysql_real_escape_string($v);
		}
		
		// Ensure that the email is lower case:
		
		$arr['email'] = strtolower(trim($arr['email']));
		
		return true;
		
	}

	private static function validate_text($str)
	{
		/*
		/	This method is used internally as a FILTER_CALLBACK
		*/
		
		if(mb_strlen($str,'utf8')<1)
			return false;
		
		// Encode all html special characters (<, >, ", & .. etc) and convert
		// the new line characters to <br> tags:
		
		$str = nl2br(htmlspecialchars($str));
		
		// Remove the new line characters that are left
		$str = str_replace(array(chr(10),chr(13)),'',$str);
		
		return $str;
	}
}
?>