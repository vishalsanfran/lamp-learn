<?php
//complete source code for views/gallery.php
return showImages();

function showImages() {
	$out = "<h1>Image Gallery</h1>";
    $out .= "<ul id='images'>";

    $folder = "img";
    $filesInFolder = new DirectoryIterator($folder);

    while ($filesInFolder->valid()) {
    	$file = $filesInFolder->current();
    	$fileName = $file->getFileName();
    	$src = "$folder/$fileName";
    	$fileInfo = new Finfo( FILEINFO_MIME_TYPE );
    	$mimeType = $fileInfo->file( $src );

    	if ($mimeType === 'image/jpeg') {
    		$out .= 
    			"<li><img src='$src' /></li>";
    	}
    	$filesInFolder->next();
    }

    $out .= "</ul>";
	return $out;
}