<?php 
	/**echo "connect";**/
	function save_email(){
		/**echo "saveCall";**/
		if(isset($_POST["email"])){
			/**echo 'hit with data';**/
			$postFile=fopen("emails.txt","a");
			/**$postFile=fopen("wwwuser.csse.rose-hulman.edu/~doolansr/Public/HTML/Campaign/emails.txt","a");**/
			if (!$postFile) {
				echo getcwd();
 			   echo "<p>Unable to open remote file for writing.\n";
    			exit;
			}
			fwrite($postFile,$_POST["email"]);
			fwrite($postFile,"; ");
			fclose($postFile);

		}		
	}
 ?>