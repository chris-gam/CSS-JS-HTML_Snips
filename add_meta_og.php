<?php
$article = JTable::getInstance("content");
$article->load(JRequest::getInt("id")); // Get Article ID
$article_images = $article->get("images"); // Get image parameters
$pictures = json_decode($article_images); // Split the parameters apart
$timage= 'https://domain.com/'.$pictures->{'image_intro'}; //Add intro image to your article so this line will show it 
	    
$doc =& JFactory::getDocument();
$doc->addCustomTag( '
<meta property="og:title" content="'.$this->escape($this->item->title).'"/>
<meta property="og:type" content="article"/>
<meta property="og:email" content="info@domain.com"/>
<meta property="og:url" content="'.JURI::current().'"/>
<meta property="og:image" content="'.$timage.'"/>
<meta property="og:site_name" content="My Site name"/>
<meta property="og:description" content="'.$this->item->metadesc.'"/>
');
?>
