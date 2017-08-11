<?php
	
	function is_image($path)
	{
	    $a = getimagesize($path);
	    $image_type = $a[2];
	     
	    if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
	    {
	        return true;
	    }
	    return false;
	}

	function autoRotateImage($image) { 
    
    $orientation = $image->getImageOrientation(); 

	if ($orientation != imagick::ORIENTATION_UNDEFINED) {
		
	    switch($orientation) { 

	        case imagick::ORIENTATION_TOPLEFT;
	            //Nothing needed
	        break;
	        	        
	        case imagick::ORIENTATION_TOPRIGHT;
	            $image->flopImage(); // Creates a vertical mirror image by reflecting the pixels around the central y-axis. 
	        break;
	        
	        case imagick::ORIENTATION_BOTTOMRIGHT: 
	            $image->rotateimage("#000", 180); // rotate 180 degrees 
	        break; 
	        	        
	        case imagick::ORIENTATION_BOTTOMLEFT;
				$image->flipImage(); // Creates a vertical mirror image by reflecting the pixels around the central x-axis.
	        break;	         	        

	        case imagick::ORIENTATION_LEFTTOP;
	        	$image->rotateimage("#000", 90); // rotate 90 degrees CW 
	            $image->flopImage(); // Creates a vertical mirror image by reflecting the pixels around the central y-axis.
	        break; 	
	        	
	        case imagick::ORIENTATION_RIGHTTOP: 
	            $image->rotateimage("#000", 90); // rotate 90 degrees CW 
	        break; 

	        case imagick::ORIENTATION_RIGHTBOTTOM: 
	            $image->rotateimage("#000", -90); // rotate 90 degrees CW
	            $image->flopImage(); // Creates a vertical mirror image by reflecting the pixels around the central y-axis.  
	        break; 
	        	
	        case imagick::ORIENTATION_LEFTBOTTOM: 
	            $image->rotateimage("#000", -90); // rotate 90 degrees CCW 
	        break; 
	    } 
	
	    // Now make sure the EXIF data is correct
	    $image->setImageOrientation(imagick::ORIENTATION_TOPLEFT); 
    }
    
	} 
	
	
	kirby()->hook('panel.file.*', function($file, $oldFile = null) {
		
		if (c::get('autorotate.enabled', true)) {
			
			$filepath = kirby()->roots()->content() . DS . $file->diruri();
			
			if (is_image($filepath)) {
				$image = new Imagick($filepath); 
				autoRotateImage($image); 
				$image->writeImage($filepath);		
			}
		
		}
		
		
	});
	
	



