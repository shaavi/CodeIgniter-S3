# CodeIgniter-S3-Upload
Uploading file to Amazon s3 bucket using CodeIgniter - php

# Setup
  1. Create Amazon S3 account
  2. Create a bucket for the files
  3. Get Amazon S3 access key and secret key
  4. Edit config/config.php with your appropriate settings
  5. Copy config/s3.php and library files to your CI installation
  6. Edit config/s3.php with your appropriate settings
  
# Example Usage

```
  // Load Library
  $this->load->library('s3_upload');
```

```
  // Upload file
  $file = APPPATH.'public/img/image1.jpg';
  $file_url = $this->s3_upload->upload_file($file);
```

```
  var_dump($file_url);
  //string(76) "https://bucket_name.amazonaws.com/bucket_name/folder_name/image1-50.jpg"
```
