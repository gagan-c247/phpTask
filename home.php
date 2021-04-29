<?php include 'header.php';?>

<div class="offset-2 col-md-8">
    <?php if(isset($_SESSION['firstname'])) {?>
    <h1> <?php echo ($_SESSION['firstname'].' '.$_SESSION['lastname'])?? '';  ?> are login</h1>
    <?php } else {?>

        <h1><a href="">you are not login</a></h1>
  <?php  }?>
</div>
<?php include 'footer.php';?> 