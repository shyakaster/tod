<?php
class Job {
//manage Job
public function manageJob()
{
	$content='
			
			  <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Manage Jobs</h4>
                        </div>
			
			
			
			<div class="table-toolbar">
	<div class="btn-group">
	<a href="?go=addJob"> <button id="sample_editable_1_new" class="button button-3d button-rounded button-green">
	Add New Job <i class="icon-plus"></i>
	</button></a>
	</div>
	
	</div>
	<table class="table table-striped table-bordered table-hover" id="sample_1">
	<thead>
	<tr>
	<th>ID</th>
	<th >Title</th>
	<th >Jobs</th>		
	<th>Actions</th>		
	</tr>
	</thead>
	<tbody>';
	$sub_sql = "SELECT COUNT(*) AS count FROM jobs WHERE trashed =0";
	$result_pag_num = Database::performQuery($sub_sql);
	$row = $result_pag_num->fetch_assoc();
	$num_rows = $row['count'];
	
	$pages = new Paginator($num_rows,9,array(3,5,10,12,15,20,25,30,50,100,250,'All'));
	//$content .=  $pages->display_pages();
	$sql = "SELECT * FROM jobs WHERE trashed=0 ORDER BY id DESC LIMIT ".$pages->limit_start.",".$pages->limit_end;
	$result = Database::performQuery($sql);
	
	
	
	while($data = $result->fetch_assoc())
	{
		   
			//published status set
			$pub = $data['published'];
			if($pub)
			{   $actions = '<a href="./?go=editJob&id='.$data['id'].'"><span class="badge badge-warning"><i class="icon-pencil"></i> Edit</span></a>
				    	<a href="./?go=unpublishJob&id='.$data['id'].'"><span class="badge badge-primary"><i class="icon-thumbs-down"></i> Unpublish</span></a>
				    	<a href="./?go=trashJob&id='.$data['id'].'"><span class="badge badge-danger"><i class="icon-trash"></i> </span></a>';}
			
			else
			{   $actions = '<a href="./?go=editJob&id='.$data['id'].'"><span class="badge badge-warning"><i class="icon-pencil"></i> Edit</span></a>
						<a href="./?go=publishJob&id='.$data['id'].'"><span class="badge badge-success"><i class="icon-thumbs-up"></i> Publish</span></a>
				    		<a href="./?go=trashJob&id='.$data['id'].'"><span class="badge badge-danger"><i class="icon-trash"></i></span></a>';}
			
			//Set actions
				
			$content .='<tr class="odd gradeX">
		                              <td>'.$data['id'].'</td>
		                              <td >'.$data['title'].'</td>
		                              <td class="center">'.substr($data['text'],0,75).'</td>
					                  <td >'.$actions.'</td>
		                           </tr>';
        }

      
               $content .= '<tr><td colspan=2>'.$pages->display_pages().'</td><td colspan="1">'.$pages->display_jump_menu().'</td><td colspan="1">'.$pages->display_items_per_page().'</td></tr>';
                  
                       
                           $content .='                   
               
                        </tbody>
                     </table>
               </div></div></section>
               ';

	return $content;
	
}


//Add new Job Post
public function addJob()
{
	
	$content = ' 
     
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Add Job</h4>
                        </div>
				
			
			<div class="col-md-12">
               <!-- BEGIN VALIDATION STATES-->
               
                     <div class="form-body">
                        <!-- BEGIN FORM-->
                         <form action="'.BASE_URL.'/?go=addJobNew" enctype="multipart/form-data"  class="form-horizontal" method="POST">
                       
                           <div class="form-group">
                              <label class="control-label col-md-3">Title</label>
                              <div class="col-md-4">
                                 <input type="text" name="title" data-required="1" class="form-control"/>
                              </div>
                           </div>
                         	               
                           <div class="form-group">
                              <label class="control-label col-md-3">Job Text</label>
                              <div class="col-md-8">
                                 <textarea class="ckeditor form-control" name="body" rows="6" data-error-container="#editor2_error"></textarea>
                               
                              </div>
                           </div>
                           <div class="form-actions fluid">
                               <input type="hidden" name="do"  value="addJobNew"/>      		
                              <div class="col-md-offset-3 col-md-9">
                               <button type="submit" class="btn green">Submit Jobs</button>
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


//Add Job to db
public function addJobNew()
{

	
			$title = addslashes(trim($_POST['title']));
			$body =addslashes(trim( $_POST['body']));
	
			$sql = "INSERT INTO `jobs`(`title`, `text`) 
			VALUES ('$title','$body')";
			
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

                        <a href="'.BASE_URL.'/?go=manageJobs" class="button button-desc button-rounded button-teal center">Manage Jobs<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Added Job.
                     </div>
                        </div>
                        		</div>
                        		</section>		
                        		';

	
	return $content;
}
//Process edited article
public function editJobNew()
{
	        $id = addslashes(trim($_POST['id']));
		    $title = addslashes(trim($_POST['title']));
			$text = addslashes(trim($_POST['body']));
			
			//insert new values
			$sql = "UPDATE `Jobs` SET `title`='$title', text='$text' WHERE id=$id";
			$sql = Database::performQuery($sql);
				
							
			$content = '
					
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageJobs" class="button button-desc button-rounded button-green center">Manage Jobs<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Edited Job.
                     </div>
                        </div>
                        		</div>
                        		</section>		
                        		';
		
		return $content;
}

//edit Job post here
public function editJob($id)
{
	
	$sql = "SELECT * FROM jobs WHERE id = $id";
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
                         <form action="'.BASE_URL.'/?go=editJobNew" class="form-horizontal" method="POST">
            
                           <div class="form-group">
                              <label class="control-label col-md-3">Title</label>
                              <div class="col-md-4">
                                 <input type="text" name="title" value="'.$data['title'].'" data-required="1" class="form-control"/>
                              </div>
                           </div>
                       
                           <div class="form-group">
                              <label class="control-label col-md-3">Job Description</label>
                              <div class="col-md-8">
                                 <textarea class="ckeditor form-control" name="body"   rows="6" data-error-container="#editor2_error">'.$data['text'].'</textarea>
                
                              </div>
                           </div>
                           <div class="form-actions fluid">
                               <input type="hidden" name="id"  value="'.$id.'"/>   		
                               <input type="hidden" name="go"  value="editJobNew"/>
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
public function trashJob($id)
{
	$sql = "UPDATE jobs SET trashed=1,published=0 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                        <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageJobs" class="button button-desc button-rounded button-green center">Manage Jobs<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong> Trashed Job.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}


//Mark article as published
public function publishJob($id)
{
	$sql = "UPDATE jobs SET published=1 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageJobs" class="button button-desc button-rounded button-green center">Manage Jobs<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Published Job.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}

//Mark article as trashed
public function unpublishJob($id)
{
	$sql = "UPDATE jobs SET published=0 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                        <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageJobs" class="button button-desc button-rounded button-green center">Manage Jobs<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blog<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Unpublished Job.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}




}


?>