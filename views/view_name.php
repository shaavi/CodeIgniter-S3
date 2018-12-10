<html>
<head></head>
<body>
    <form method="post" action="<?php echo site_url('controller_name/addImages'); ?>" enctype="multipart/form-data" class="col s12">    
        <div>  
            <span>More Images</span>
            <input required type="file" name="files[]" multiple>  
        </div>
        <input type="submit" id="submit" value="Submit photos">
    </form>   
</body>
</html>