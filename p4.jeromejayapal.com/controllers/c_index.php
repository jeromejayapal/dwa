<?php

class index_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	} 
	
	/*-------------------------------------------------------------------------------------------------
	Access via http://yourapp.com/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Jerome Jayapal Blog";
	
	
		# Build our query
		$q = "SELECT *
			FROM posts
			JOIN users USING (user_id)
			WHERE user_id='1'
			ORDER BY post_id DESC
			LIMIT 10";
			
			
		# Run our query, grabbing all the posts joining in the users
		$posts = DB::instance(DB_NAME)->select_rows($q);
		
		# Pass data to the view
		$this->template->content->posts = $posts;
		
		# Render view
		echo $this->template;		
		
	}
	
	
	public function proposal() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_proposal');
			
		# Now set the <title> tag
			$this->template->title = "Proposal";
		
		      		
		# Render the view
			echo $this->template;

	}
	public function aboutme() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_aboutme');
			
		# Now set the <title> tag
			$this->template->title = "About Me";
		
		      		
		# Render the view
			echo $this->template;

	}
	
	public function contact() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_contact');
			
		# Now set the <title> tag
			$this->template->title = "Contact";
		
		      		
		# Render the view
			echo $this->template;

	}
	
} // end class
