<?php

$test_array = array('title' => 'my article title', 'body' => 'lorem ipsum');

printarray($test_array);


function printarray($test_array) {

	foreach ($test_array as $key=>$content){
			switch($key){

			case 'title':

				$tag= 'h1';

				$attributes = array("class" => "title");

			break;

			case 'body':

				$tag = 'p';

				$attributes = array("class" => "content");

			break;
			}

		echo tag($tag, $attributes,$content);


	}
	
}

function tag($tag, $attributes,$content){

		try{

			if(!is_array($attributes)){

				throw new Exception('Sorry Attributes variable  must be an array', 200);

			}

			$output = '<' . $tag;

			 {

				if(isset($value)){

					$output .=  ' ' . $key . '="' . $value . '"';

				}

			}
			$output .= '>' . $content .  '</' . $tag . '>';

			return $output; 

		}

		catch(Exception $e){
			echo $e->getMessage(). $e->getCode();

		}

	}

	

?>
