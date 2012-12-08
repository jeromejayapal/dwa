<?php

class index_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	} 
	
	public function proposal() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_proposal');
			
		# Now set the <title> tag
			$this->template->title = "Proposal";
	
		      		
		# Render the view
			echo $this->template;

	}
		
} // end class
