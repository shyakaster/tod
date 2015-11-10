<?php 

    $PageContent = new PageContent();
	$title = "Tod Idea Uganda - Welcome";
		switch($_SESSION['go'])
		{
			case 'home':
				$content = $PageContent->HomePage();
				break;
			case 'admin':
				$title = "Administrator Login";
				$content = $PageContent->adminPage();
				break;	
				case 'gallery':
				$title = "Gallery - Tech Kids";
				$content = $PageContent->gallery();
				break;	
			case 'contact':
				$content = $PageContent->contactus();
				break;	
			case 'contactProcess':
				$content = $PageContent->contactProcess();
				break;
			case 'newsletterProcess':
				$content = $PageContent->newsletterProcess();
				break;
			case 'blog':
				$content = $PageContent->blog();
				break;
			case 'events':
				$content = $PageContent->events();
				break;
			case 'jobs':
				$content = $PageContent->jobs();
				break;
			case 'getJob':
				$content = $PageContent->getJob($_REQUEST['id']);
				break;
			case 'products':
				$content = $PageContent->products();
				break;
			case 'ourstory':
				$content = $PageContent->ourstory();
				break;
		    case 'rails':	
		        $content = $PageContent->rails();
		        break;	
			case 'doLogin':
				$username = $_POST['username'];
				$pass = $_POST['password'];
				if((($username=='alex') || ($username=='mbanda') || ($username=='shyaka') ) && ($pass = 'pass@123'))
					{
						$_SESSION['live'] = true;
				     	 redirect_to(BASE_URL.'/?go=adminDashboard');
					}
				else 
					redirect_to(BASE_URL.'/?go=admin');
				break;
			case 'adminDashboard':
				if($_SESSION['live'])
						$content = $PageContent->adminDashboard();
				else 
					redirect_to(BASE_URL.'/?go=admin');
				break;	

			case 'manageEvents':
				$content = new Event();
				$content = $content->manageEvent();
				break;	
						
								
			case 'manageBlog':
				  $content = new Blog();
			      $content = $content->manageBlog();
				break;
			
			case 'rsvp':
				$content = $PageContent->rsvp();
				break;
			case 'doRsvp':
				$content = $PageContent->doRsvp();
				break;
			case 'manageRsvp':
				$content = $PageContent->manageRsvp();
				break;
				
				
			//Manage Blogs	
			case 'addBlog':
				$content = new Blog();
				$content = $content->addBlog();
				break;
			case 'addBlogNew':
				$content = new Blog();
				$content = $content->addBlogNew();
				break;
			case 'editBlog':
				$content = new Blog();
				$content = $content->editBlog($_REQUEST['id']);
				break;
			case 'editBlogNew':
				$content = new Blog();
				$content = $content->editBlogNew();
				break;	
				
			case 'publish':
				$content = new Blog();
				$content = $content->publishArticle($_REQUEST['id']);
				break;
				
			case 'unpublish':
				$content = new Blog();
				$content = $content->unpublishArticle($_REQUEST['id']);
				break;
			case 'trash':
				$content = new Blog();
				$content = $content->trashArticle($_REQUEST['id']);
				break;
				
				
				
			//Manage Events	
			case 'addEvent':
				$content = new Event();
				$content = $content->addEvent();
				break;
			case 'addEventNew':
				$content = new Event();
				$content = $content->addEventNew();
				break;
			case 'editEvent':
				$content = new Event();
				$content = $content->editEvent($_REQUEST['id']);
				break;
			case 'editEventNew':
				$content = new Event();
				$content = $content->editEventNew();
				break;
			
			case 'publishEvent':
				$content = new Event();
				$content = $content->publishEvent($_REQUEST['id']);
				break;
			
			case 'unpublishEvent':
				$content = new Event();
				$content = $content->unpublishEvent($_REQUEST['id']);
				break;
			case 'trashEvent':
				$content = new Event();
				$content = $content->trashEvent($_REQUEST['id']);
				break;
				
				
				
			//Manage Jobs	
			case 'manageJobs':
				$content = new Job();
				$content = $content->manageJob();
				break;
			case 'addJob':
				$content = new Job();
				$content = $content->addJob();
				break;
			case 'addJobNew':
				$content = new Job();
				$content = $content->addJobNew();
				break;
			case 'editJob':
				$content = new Job();
				$content = $content->editJob($_REQUEST['id']);
				break;
			case 'editJobNew':
				$content = new Job();
				$content = $content->editJobNew();
				break;
					
			case 'publishJob':
				$content = new Job();
				$content = $content->publishJob($_REQUEST['id']);
				break;
					
			case 'unpublishJob':
				$content = new Job();
				$content = $content->unpublishJob($_REQUEST['id']);
				break;
			case 'trashJob':
				$content = new Job();
				$content = $content->trashJob($_REQUEST['id']);
				break;
				
				
			//Logout here	
			case 'logout':
				Session::logOut();
				break;	
			default:
				redirect_to(BASE_URL);
			break;
		}


		$page = new template();
		$page->buildPage($title,$content);

