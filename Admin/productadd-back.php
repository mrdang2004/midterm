<meta charset="utf-8">
<?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  require_once('../model/connect.php');
  error_reporting(2);

  $target_file ="../". basename($_FILES["fileImage"]["name"]);
  $uploadOK=1;

  if (isset($_POST['addProduct']))
  {
    $keywordPr ='';
    $descrptPr ='';
    $status =0;

    $image = basename($_FILES["fileImage"]["name"]);
    if ($image== null || $image = '')
    {
      $image=$_POST['image'];
      $uploadOK=0;
    } else
    {
     $check= getimagesize($_FILES["fileImage"]["tmp_name"]);
     if ($check !== false)
     {
       $image=basename($_FILES["FileImage"]["name"]);
       $uploadOK =1;
    } else {
        $image ='';
    ?>
    <script type>
        
    }  

<?php
    }





  }



























?>