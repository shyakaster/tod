<?php
class Event {
//manage Event
public function manageEvent()
{
	$content='
			
			  <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Manage Events</h4>
                        </div>
			
			
			
			<div class="table-toolbar">
	<div class="btn-group">
	<a href="?go=addEvent"> <button id="sample_editable_1_new" class="button button-3d button-rounded button-green">
	Add New Event <i class="icon-plus"></i>
	</button></a>
	</div>
	
	</div>
	<table class="table table-striped table-bordered table-hover" id="sample_1">
	<thead>
	<tr>
	<th>ID</th>
	<th >Photo</th>
	<th >Title</th>
	<th >Target</th>
	<th >Day&Time</th>
	<th >Venue</th>
	<th >Cost</th>
	<th >Actions</th>		
	</tr>
	</thead>
	<tbody>';
	$sub_sql = "SELECT COUNT(*) AS count FROM events WHERE trashed =0";
	$result_pag_num = Database::performQuery($sub_sql);
	$row = $result_pag_num->fetch_assoc();
	$num_rows = $row['count'];
	
	$pages = new Paginator($num_rows,9,array(3,5,10,12,15,20,25,30,50,100,250,'All'));
	//$content .=  $pages->display_pages();
	$sql = "SELECT * FROM events WHERE trashed=0 ORDER BY id DESC LIMIT ".$pages->limit_start.",".$pages->limit_end;
	$result = Database::performQuery($sql);
	
	
	
	while($data = $result->fetch_assoc())
	{
		   
			//published status set
			$pub = $data['published'];
			if($pub)
			{   $actions = '<a href="./?go=editEvent&id='.$data['id'].'"><span class="badge badge-warning"><i class="icon-pencil"></i> Edit</span></a>
				    	<a href="./?go=unpublishEvent&id='.$data['id'].'"><span class="badge badge-primary"><i class="icon-thumbs-down"></i> Unpublish</span></a>
				    	<a href="./?go=trashEvent&id='.$data['id'].'"><span class="badge badge-danger"><i class="icon-trash"></i> </span></a>';}
			
			else
			{   $actions = '<a href="./?go=editEvent&id='.$data['id'].'"><span class="badge badge-warning"><i class="icon-pencil"></i> Edit</span></a>
						<a href="./?go=publishEvent&id='.$data['id'].'"><span class="badge badge-success"><i class="icon-thumbs-up"></i> Publish</span></a>
				    		<a href="./?go=trashEvent&id='.$data['id'].'"><span class="badge badge-danger"><i class="icon-trash"></i></span></a>';}
			
			//Set actions
				
			$content .='<tr class="odd gradeX">
		                              <td>'.$data['id'].'</td>
		                              <td ><img src="'.BASE_URL.'/img/'.$data['photo'].'" width="100"/></a></td>
		                              <td >'.$data['title'].'</td>
		                              <td class="center">'.$data['target'].'</td>
					                  <td class="center">'.$data['daytime'].'</td>
					                  <td class="center">'.$data['venue'].'</td>
					                  <td class="center">'.$data['cost'].'</td>			
					                 <td >'.$actions.'</td>
		                           </tr>';
        }

      
               $content .= '<tr><td colspan="6">'.$pages->display_pages().'</td><td colspan="1">'.$pages->display_jump_menu().'</td><td colspan="1">'.$pages->display_items_per_page().'</td></tr>';
                  
                       
                           $content .='                   
               
                        </tbody>
                     </table>
               </div></div></section>
               ';

	return $content;
	
}


//Add new Event Post
public function addEvent()
{
	
	$content = ' 
     
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Add Event</h4>
                        </div>
				
			
			<div class="col-md-12">
               <!-- BEGIN VALIDATION STATES-->
               
                     <div class="form-body">
                        <!-- BEGIN FORM-->
                         <form action="'.BASE_URL.'/?go=addEventNew" enctype="multipart/form-data"  class="form-horizontal" method="POST">
                       
                           <div class="form-group">
                              <label class="control-label col-md-3">Title</label>
                              <div class="col-md-4">
                                 <input type="text" name="title" data-required="1" class="form-control"/>
                              </div>
                           </div>
                         	   <div class="form-group">
                              <label class="control-label col-md-3">Days of Event</label>
                              <div class="col-md-4">
                                 <input name="days" type="text" class="form-control" placeholder="Days e.g 1-4, 20-29"/>
                         		 </div>
                           </div>	
                         		   <div class="form-group">
                              <label class="control-label col-md-3">Month of Event</label>
                              <div class="col-md-4">
                                	<input name="month" type="text" class="form-control" placeholder="e.g Jan,Feb,Mar,Apr,May"/>
                              </div>
                           </div>	
                           <div class="form-group">
                              <label class="control-label col-md-3">Week Day and Time</label>
                              <div class="col-md-4">
                                 <input name="daytime" type="text" class="form-control" placeholder="e.g Monday - Friday, 7.00am - 10.00pm"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Photo</label>
                              <div class="col-md-4">
                                 <input name="fileToUpload" type="file" class="form-control"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Target</label>
                              <div class="col-md-4">
                                  <input name="target" type="text" class="form-control" placeholder="e.g Kids Aged 4-6 Years"/>
                              </div>
                           </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">Venue</label>
                              <div class="col-md-8">
                                 <input name="venue" type="text" class="form-control" />
                              </div>
                           </div>  
                          <div class="form-group">
                              <label class="control-label col-md-3">Cost</label>
                              <div class="col-md-8">
                                 <input name="cost" type="text" class="form-control" />
                              </div>
                           </div>  		                  
                           <div class="form-group">
                              <label class="control-label col-md-3">Description</label>
                              <div class="col-md-8">
                                 <textarea class="ckeditor form-control" name="body" rows="6" data-error-container="#editor2_error"></textarea>
                               
                              </div>
                           </div>
                           <div class="form-actions fluid">
                               <input type="hidden" name="do"  value="addEventNew"/>      		
                              <div class="col-md-offset-3 col-md-9">
                               <button type="submit" class="btn green">Submit Article</button>
                                 <input type="reset" class="btn default"  value="Clear"/>                              
                              </div>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>

            </div>
                                  		</div></div></section>
                                  		';
	return $content;
}


//Add Event to db
public function addEventNew()
{

	if ($_FILES['fileToUpload']['error'] > 0) {
		echo "Error: " . $_FILES['fileToUpload']['error'] . "<br />";
	} else {
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions)) {
			$newNamePrefix = time() . '_946X381_';
			$newNamePrefix1 = time() . '_253X190_';
			
			$manipulator = new ImageManipulator($_FILES['fileToUpload']['tmp_name']);
			$manipulator1 = new ImageManipulator($_FILES['fileToUpload']['tmp_name']);
			
			// resizing Photos
			$newImage = $manipulator->resample(946, 381);
			$newImage1 = $manipulator1->resample(253, 190);
			
			// saving file to uploads folder
			$manipulator->save('./img/' . $newNamePrefix . $_FILES['fileToUpload']['name']);
			$manipulator1->save('./img/' . $newNamePrefix1 . $_FILES['fileToUpload']['name']);
			
			$photo = $newNamePrefix . $_FILES['fileToUpload']['name'];
			$title = addslashes(trim($_POST['title']));
			$daytime = addslashes(trim($_POST['daytime']));
			$target = addslashes(trim($_POST['target']));
			$venue =addslashes(trim( $_POST['venue']));
			$description =addslashes(trim( $_POST['body']));
			$cost =addslashes(trim( $_POST['cost']));
			$days =addslashes(trim( $_POST['days']));
			$month =addslashes(trim( $_POST['month']));
	
			$sql = "INSERT INTO `events`(`title`, `daytime`, `target`, `venue`, `cost`, `description`, `photo`,days,month) 
			VALUES ('$title','$daytime','$target','$venue','$cost','$description','$photo','$days','$month')";
			
 			$sql = Database::performQuery($sql);
			
	
			
			$content = '
					
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-green center">Manage Blog<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-teal center">Manage Events<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Added Event.
                     </div>
                        </div>
                        		</div>
                        		</section>		
                        		';
		}
		else {
			$content = '
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageEvent" class="button button-desc button-rounded button-teal center">Manage Events<span></span></a>
   			
   			</div>
					<div class="alert alert-danger">
                        <strong>Oooops!</strong>  Failed to add event because we failed to process the image..
                     </div></div>
                        		</div>
                        		</section>
                        		';
		}
	}
	return $content;
}
//Process edited article
public function editEventNew()
{
	        $id = addslashes(trim($_POST['id']));
		    $title = addslashes(trim($_POST['title']));
			$daytime = addslashes(trim($_POST['daytime']));
			$target = addslashes(trim($_POST['target']));
			$venue =addslashes(trim( $_POST['venue']));
			$description =addslashes(trim( $_POST['body']));
			$cost =addslashes(trim( $_POST['cost']));
			$days =addslashes(trim( $_POST['days']));
			$month =addslashes(trim( $_POST['month']));
			//insert new values
			$sql = "UPDATE `events` SET `title`='$title', days='$days', month='$month', `description`='$description', venue='$venue', cost='$cost', `daytime`='$daytime', `target`='$target' WHERE id=$id";
			$sql = Database::performQuery($sql);
				
							
			$content = '
					
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Edited Event.
                     </div>
                        </div>
                        		</div>
                        		</section>		
                        		';
		
		return $content;
}

//edit Event post here
public function editEvent($id)
{
	
	$sql = "SELECT * FROM events WHERE id = $id";
	$results = Database::performQuery($sql);
	while($data = $results->fetch_assoc() )
	{
		
	
	$content = '
  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
			<div class="col-md-12">
               <!-- BEGIN VALIDATION STATES-->
        
                     <div class="form-body">
                        <!-- BEGIN FORM-->
                         <form action="'.BASE_URL.'/?go=editEventNew" class="form-horizontal" method="POST">
            
                           <div class="form-group">
                              <label class="control-label col-md-3">Title</label>
                              <div class="col-md-4">
                                 <input type="text" name="title" value="'.$data['title'].'" data-required="1" class="form-control"/>
                              </div>
                           </div>
                       
                                 		 <div class="form-group">
                              <label class="control-label col-md-3">Days and Time</label>
                              <div class="col-md-4">
                                  <input type="text" name="daytime" value="'.$data['daytime'].'" data-required="1" class="form-control"/>
                               </div>
                           </div>
                                  		
                                  		
                                  		 <div class="form-group">
                              <label class="control-label col-md-3">Days of Event</label>
                              <div class="col-md-4">
                                  <input type="text" name="days" value="'.$data['days'].'" data-required="1" class="form-control"/>
                               </div>
                           </div>
                                 		
                                 		
                              <div class="form-group">
                              <label class="control-label col-md-3">Month of Event</label>
                              <div class="col-md-4">
                                  <input type="text" name="month" value="'.$data['month'].'" data-required="1" class="form-control"/>
                               </div>
                           </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">Target</label>
                              <div class="col-md-8">
                                 <input name="target" type="text" class="form-control"  value="'.$data['target'].'" placeholder="Insert Quote Here"/>
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">Venue</label>
                              <div class="col-md-8">
                                 <input name="venue" type="text" class="form-control"  value="'.$data['venue'].'" placeholder="Insert Quote Here"/>
                              </div>
                           </div>      

                                 <div class="form-group">
                              <label class="control-label col-md-3">Cost</label>
                              <div class="col-md-8">
                                 <input name="cost" type="text" class="form-control"  value="'.$data['cost'].'" placeholder="Insert Quote Here"/>
                              </div>
                           </div>    		
                           <div class="form-group">
                              <label class="control-label col-md-3">Event Description</label>
                              <div class="col-md-8">
                                 <textarea class="ckeditor form-control" name="body"   rows="6" data-error-container="#editor2_error">'.$data['description'].'</textarea>
                
                              </div>
                           </div>
                           <div class="form-actions fluid">
                               <input type="hidden" name="id"  value="'.$id.'"/>   		
                               <input type="hidden" name="go"  value="editEventNew"/>
                              <div class="col-md-offset-3 col-md-9">
                               <button type="submit" class="btn green">Edit Article</button>
                                 <input type="reset" class="btn default"  value="Clear"/>
                              </div>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
	
            </div>
                               		
                               		</div>
                               		</div>
                               		</section>
                               		';
	
	}
	return $content;
	
}

//Mark article as trashed
public function trashEvent($id)
{
	$sql = "UPDATE events SET trashed=1,published=0 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                        <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong> Trashed Event.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}


//Mark article as published
public function publishEvent($id)
{
	$sql = "UPDATE events SET published=1 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Published Event.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}

//Mark article as trashed
public function unpublishEvent($id)
{
	$sql = "UPDATE events SET published=0 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                        <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Unpublished Event.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}




}


?>