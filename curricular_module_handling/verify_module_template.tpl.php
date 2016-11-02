<?php

// Template file to display the details of the specific pending module.

$module_directory = drupal_get_path('module', 'curricular_module_handling');
include $module_directory."/parsedown/Parsedown.php";
include $module_directory."/parsedown-extra/ParsedownExtra.php";?>
<h2>Verify Update?</h2>
	<form action="" method="post">
		<input type="hidden" value="<?php echo $module_no;?>" name="form_module_no">
  		<button class="button" value="yes" name="yes" type="submit">Yes</button>
  <!-- <button class="button" value="later" name="later" onclick="window.location.href='../curricular_module_versioning/'" >Not Now</button> -->
  		<button class="button" value="later" name="later" type="submit">Not Now</button>
  		<button class="button" value="disregard" name="disregard" type="submit">Disregard</button>
	</form>
<?php
$parsedown = new ParsedownExtra();
		
// Main code for the template starts here.
$str = '';
	try {
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/title.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/title.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h1>".$parsedown->text($file_contents)."</h1>";
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/general_info.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/general_info.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>General Information</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/guidelines_for_instructors.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/guidelines_for_instructors.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Guidelines For Instructors</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/learning_objectives.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/learning_objectives.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Learning Objectives</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/topics.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/topics.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Topics</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/preparation.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/preparation.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Preparation</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/discussion.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/discussion.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Discussion</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/practice.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/practice.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Practice</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/projects.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/projects.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Projects</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/reflection.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/reflection.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Reflection</h2>";
			$str .= $parsedown->text($file_contents);
		}
		
		if (file_exists($module_directory.'/pull_folder'.'/'.$module_no.'/other_resources.txt')) {
			$file = $module_directory.'/pull_folder'.'/'.$module_no.'/other_resources.txt';
			$file_contents = file_get_contents($file);
			
			$str .= "<h2>Other Resources</h2>";
			$str .= $parsedown->text($file_contents);
		}			
	} 
	catch (Exception $e) {
	    $str = 'Caught exception: '.$e->getMessage()."\n";
	}
	echo $str;
		

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
/*$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        //alert(clickBtnValue+" has been clicked...");
        var ajaxurl = 'ajax_button_handler.php',
        dt =  {'action': clickBtnValue};

        $.ajax({
      		url: ajaxurl,
      		type: 'post',
      		data: {'action': clickBtnValue},
      		success: function(data) {
       		 	// alert(data);
     		 },
      		error: function(xhr, desc, err) {
       		 console.log(xhr);
       		 console.log("Details: " + desc + "\nError:" + err);
      		}
    	}); // end ajax call
    });

});*/
</script>
