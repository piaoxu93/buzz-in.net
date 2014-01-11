<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Buzz-in.net-Canada Widget</title>
    <link rel="stylesheet" type="text/css" href="style_widget.css">
    <script src="jquery.min.js"></script>
    <script>
    function hideImage(img)
    {
       img.style.display = "none";
    }
    </script>
    <script>
    function ScaleImage(srcwidth, srcheight, targetwidth, targetheight, fLetterBox) {

        var result = { width: 0, height: 0, fScaleToTargetWidth: true };

        if ((srcwidth <= 0) || (srcheight <= 0) || (targetwidth <= 0) || (targetheight <= 0)) {
            return result;
        }

        // scale to the target width
        var scaleX1 = targetwidth;
        var scaleY1 = (srcheight * targetwidth) / srcwidth;

        // scale to the target height
        var scaleX2 = (srcwidth * targetheight) / srcheight;
        var scaleY2 = targetheight;

        // now figure out which one we should use
        var fScaleOnWidth = (scaleX2 > targetwidth);
        if (fScaleOnWidth) {
            fScaleOnWidth = fLetterBox;
        }
        else {
           fScaleOnWidth = !fLetterBox;
        }

        if (fScaleOnWidth) {
            result.width = Math.floor(scaleX1);
            result.height = Math.floor(scaleY1);
            result.fScaleToTargetWidth = true;
        }
        else {
            result.width = Math.floor(scaleX2);
            result.height = Math.floor(scaleY2);
            result.fScaleToTargetWidth = false;
        }
        result.targetleft = Math.floor((targetwidth - result.width) / 2);
        result.targettop = Math.floor((targetheight - result.height) / 2);

        return result;
    }
    </script>
    <script>
    function OnImageLoad(evt) {

        var img = evt.currentTarget;

        // what's the size of this image and it's parent
        var w = $(img).width();
        var h = $(img).height();
        var tw = $(img).parent().width();
        var th = $(img).parent().height();

        // compute the new size and offsets
        var result = ScaleImage(w, h, tw, th, false);

        // adjust the image coordinates and size
        img.width = result.width;
        img.height = result.height;
        $(img).css("left", result.targetleft);
        $(img).css("top", result.targettop);
    }
    </script>
	
	<?php include 'widget_function.php'; ?>
</head>
  <body>
	<div class="wrapper">
	  <div class="head">
	    <a href="http://www.buzz-in.net/Canada" target="_blank">
		  <div class="logo"><img src="../image/logo.png" width=115px; height=45px;style=""> </div></a>
		  <div class="category"><a href="http://www.buzz-in.net/Canada/newest.php" target="_blank">Newest</a></div>
	  </div>
	  <div class="articles">
	   
        <?php display_widget(1); 
		      display_widget(2); 
			  display_widget(3);  
		?>
		
		
		
		
		
		
	  </div>
	  
	  <div class="footer">
	     <a href="http://www.buzz-in.net/Canada">Buzz-in.net-Canada</a>
	  </div>
	</div>
   </body>
</html>