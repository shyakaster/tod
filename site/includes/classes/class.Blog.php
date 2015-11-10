<?php
class Blog {
//manage Blog
public function manageBlog()
{
	
	$content='
			
			  <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
			
			
			
			<div class="table-toolbar">
	<div class="btn-group">
	<a href="?go=addBlog"> <button id="sample_editable_1_new" class="button button-3d button-rounded button-green">
	Add New Blog Post <i class="icon-plus"></i>
	</button></a>
	</div>
	
	</div>
	<table class="table table-striped table-bordered table-hover" id="sample_1">
	<thead>
	<tr>
	<th>ID</th>
	<th >Photo</th>
	<th >Title</th>
	<th >Views</th>
	<th >Quote</th>
	<th >Category</th>
	<th >Actions</th>
	</tr>
	</thead>
	<tbody>';
	$sub_sql = "SELECT COUNT(*) AS count FROM article WHERE trashed =0";
	$result_pag_num = Database::performQuery($sub_sql);
	$row = $result_pag_num->fetch_assoc();
	$num_rows = $row['count'];
	
	$pages = new Paginator($num_rows,9,array(3,5,10,12,15,20,25,30,50,100,250,'All'));
	//$content .=  $pages->display_pages();
	$sql = "SELECT id,title,views,quote,media,articleCat_id,published FROM article WHERE trashed=0 ORDER BY id DESC LIMIT ".$pages->limit_start.",".$pages->limit_end;
	$result = Database::performQuery($sql);
	
	
	
	while($data = $result->fetch_assoc())
	{
		    $catid = $data['articleCat_id'];
			$sqlcat = "SELECT name FROM articlecat WHERE id LIKE '$catid'";
			$resultcat = Database::performQuery($sqlcat);
			$datacat = $resultcat->fetch_assoc();
			$cat = $datacat['name'];
			//published status set
			$pub = $data['published'];
			if($pub)
			{   $actions = '<a href="./?go=editBlog&id='.$data['id'].'"><span class="badge badge-warning"><i class="icon-pencil"></i> Edit</span></a>
				    	<a href="./?go=unpublish&id='.$data['id'].'"><span class="badge badge-primary"><i class="icon-thumbs-down"></i> Unpublish</span></a>
				    	<a href="./?go=trash&id='.$data['id'].'"><span class="badge badge-danger"><i class="icon-trash"></i> </span></a>';}
			
			else
			{   $actions = '<a href="./?go=editBlog&id='.$data['id'].'"><span class="badge badge-warning"><i class="icon-pencil"></i> Edit</span></a>
						<a href="./?go=publish&id='.$data['id'].'"><span class="badge badge-success"><i class="icon-thumbs-up"></i> Publish</span></a>
				    		<a href="./?go=trash&id='.$data['id'].'"><span class="badge badge-danger"><i class="icon-trash"></i></span></a>';}
			
			//Set actions
				
			$content .='<tr class="odd gradeX">
		                              <td>'.$data['id'].'</td>
		                              <td ><img src="'.BASE_URL.'/img/'.$data['media'].'" width="100"/></a></td>
		                              <td >'.$data['title'].'</td>
		                              <td class="center">'.$data['views'].'</td>
					                  <td class="center">'.$data['quote'].'</td>
		                              <td >'.$cat.'</td>
		                              <td >'.$actions.'</td>
		                           </tr>';
        }

      
               $content .= '<tr><td colspan="5">'.$pages->display_pages().'</td><td colspan="1">'.$pages->display_jump_menu().'</td><td colspan="1">'.$pages->display_items_per_page().'</td></tr>';
                  
                       
                           $content .='                   
               
                        </tbody>
                     </table>
               </div></div></section>
               ';

	return $content;
	
}


//Add new Blog Post
public function addBlog()
{
	
	$content = ' 
     
		  <section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Add Blog</h4>
                        </div>
				
			
			<div class="col-md-12">
               <!-- BEGIN VALIDATION STATES-->
               
                     <div class="form-body">
                        <!-- BEGIN FORM-->
                         <form action="'.BASE_URL.'/?go=addBlogNew" enctype="multipart/form-data"  class="form-horizontal" method="POST">
                       
                           <div class="form-group">
                              <label class="control-label col-md-3">Title</label>
                              <div class="col-md-4">
                                 <input type="text" name="title" data-required="1" class="form-control"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Tags</label>
                              <div class="col-md-4">
                                 <input name="tags" type="text" class="form-control" placeholder="Facebook,Twitter,Social Media"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Photo</label>
                              <div class="col-md-4">
                                 <input name="fileToUpload" type="file" class="form-control"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Article Category</label>
                              <div class="col-md-4">
                                 <select class="form-control" name="category">';
								 
								 $sql = "SELECT * FROM articlecat";
								 $results = Database::performQuery($sql);
								 $hold = array();
								 while($data = $results->fetch_assoc() )
								 {
								  $hold[] = '<option value="'.$data['id'].'">'.$data['name'].'</option>';
								 }
								 $content .= implode(' ',$hold);
                                  $content .=  '
                                 </select>
                              </div>
                           </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">Article Highlight / Quote</label>
                              <div class="col-md-8">
                                 <input name="quote" type="text" class="form-control" placeholder="Insert Quote Here"/>
                              </div>
                           </div>                    
                           <div class="form-group">
                              <label class="control-label col-md-3">Article Body</label>
                              <div class="col-md-8">
                                 <textarea class="ckeditor form-control" name="body" rows="6" data-error-container="#editor2_error"></textarea>
                               
                              </div>
                           </div>
                           <div class="form-actions fluid">
                               <input type="hidden" name="do"  value="addBlogNew"/>      		
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


//Add blog to db
public function addBlogNew()
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
			$category = addslashes(trim($_POST['category']));
			$tags = explode(",",addslashes(trim($_POST['tags'])));
			$quote =addslashes(trim( $_POST['quote']));
			$body =addslashes(trim( $_POST['body']));
			//$created_by =$_SESSION['oauth_uid'];;
			$created = date('Y-m-d H:i:s');
	
			$sql = "INSERT INTO `article`(`title`, `post`, `media`, `submitted`, `quote`, `articleCat_id`) 
					VALUES ('$title','$body','$photo','$created','$quote','$category')";
			
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

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Added Article.
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

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
					<div class="alert alert-danger">
                        <strong>Oooops!</strong>  Failed to add article because we failed to process the image..
                     </div></div>
                        		</div>
                        		</section>
                        		';
		}
	}
	return $content;
}
//Process edited article
public function editBlogNew()
{
	        $id = addslashes(trim($_POST['id']));
		    $title = addslashes(trim($_POST['title']));
			$category = addslashes(trim($_POST['category']));
			$quote =addslashes(trim( $_POST['quote']));
			$body =addslashes(trim( $_POST['body']));
			//insert new values
			$sql = "UPDATE `article` SET `title`='$title', `post`='$body',`quote`='$quote', `articleCat_id`='$category' WHERE id=$id";
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

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Edited Article.
                     </div>
                        </div>
                        		</div>
                        		</section>		
                        		';
		
		return $content;
}

//edit blog post here
public function editBlog($id)
{
	
	$sql = "SELECT * FROM article WHERE id = $id";
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
                         <form action="'.BASE_URL.'/?go=editBlogNew" class="form-horizontal" method="POST">
            
                           <div class="form-group">
                              <label class="control-label col-md-3">Title</label>
                              <div class="col-md-4">
                                 <input type="text" name="title" value="'.$data['title'].'" data-required="1" class="form-control"/>
                              </div>
                           </div>
                       
                              <div class="form-group">
                              <label class="control-label col-md-3">Article Category</label>
                              <div class="col-md-4">
                                 <select class="form-control" name="category">';
		
    $content .= $this->selectCat($data['articleCat_id']);    
	$content .=  '
                                 </select>
                              </div>
                           </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">Article Highlight / Quote</label>
                              <div class="col-md-8">
                                 <input name="quote" type="text" class="form-control"  value="'.$data['quote'].'" placeholder="Insert Quote Here"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Article Body</label>
                              <div class="col-md-8">
                                 <textarea class="ckeditor form-control" name="body"   rows="6" data-error-container="#editor2_error">'.$data['post'].'</textarea>
                
                              </div>
                           </div>
                           <div class="form-actions fluid">
                               <input type="hidden" name="id"  value="'.$id.'"/>   		
                               <input type="hidden" name="go"  value="editBlogNew"/>
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
public function trashArticle($id)
{
	$sql = "UPDATE article SET trashed=1,published=0 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong> Trashed Article.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}


//Mark article as published
public function publishArticle($id)
{
	$sql = "UPDATE article SET published=1 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Published Article.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}

//Mark article as trashed
public function unpublishArticle($id)
{
	$sql = "UPDATE article SET published=0 WHERE id LIKE $id";
	Database::performQuery($sql);
	$content = '<section id="content">
        
            <div class="content-wrap">
   
                <div class="container clearfix">
					<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
					<div class="alert alert-success">
                        <strong>Successfully!</strong>  Unpublished Article.
                     </div>
                        </div>
                        		</div>
                        		</section>	';
	return $content;
}


public function selectCat($cat){
	
	switch($cat)
	{
		case 1:
		$content ='<option value="1" SELECTED>News</option> 
				  <option value="2">Updates</option> 
				                                 ';
		break;
		case 2:
			$content ='<option value="1">News</option>
				  <option value="2" SELECTED>Updates</option>
				                                 ';
			break;
			
	}
	
	return $content;
}

}


?>