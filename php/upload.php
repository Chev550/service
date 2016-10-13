<?php
$target_dir = "{{ site.baseurl }}/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
?>