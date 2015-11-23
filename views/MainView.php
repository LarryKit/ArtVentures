<?php
//echo "View Clear";
//ArtVentures
	class MainView {
		//Level 0 ROOT directory call
		public function view($folder, $template, $data, $data1){
			$templatePath= "views/incs/{$folder}/{$template}.inc";
			if(file_exists($templatePath)){
				include $templatePath;
			}//close if
		}//close function
		
		//Level 1 Sub-Directory call for page navigation available on the HOME page
		public function viewChild($folder, $template, $data, $data1, $data2, $data3, $data4){
			$templatePath= "../views/incs/{$folder}/{$template}.inc";
			if(file_exists($templatePath)){
				include $templatePath;
			}//close if
		}//close function
		
		//Level 2 Sub-Directory Call for page navigation available on child pages of the project
		public function viewChild2($folder, $folder2, $template, $data, $data1, $data2, $data3, $data4){
			$templatePath= "../../views/incs/{$folder}/{$folder2}/{$template}.inc";
			if(file_exists($templatePath)){
				include $templatePath;
			}//close if
		}//close function	
	}//close class
?> 