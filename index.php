<?php
$pageName = "Home";
$pageTopic = "Grid-System";
 include_once('inc_/header.php');
?>
<div class="wrapper">
    <div class="grid-box grid-item-1">Box-1</div>
    <div class="grid-box grid-item-2">Box-2</div>
    <div class="grid-box grid-item-3">Box-3</div>
    <div class="grid-box grid-item-4">Box-4</div>
    <div class="grid-box grid-item-5">Box-5</div>
</div>

<div class="grid-container">
    <div class="grid-header">
        <div class="nav-list">
        <a href="index.php" class="grid-nav">Home</a>
        <a href="flex-set.php" class="grid-nav">Flex-System</a>
        <a href="display-block-set.php" class="grid-nav">Display Block</a>
        </div>
    </div>
    <div class="grid-aside">Aside</div>
    <div class="grid-main">Main</div>
  
    <div class="grid-footer">
            <div class="nav-list">
            <a href="index.php" class="grid-nav">Home</a>
            <a href="flex-set.php" class="grid-nav">Flex-System</a>
            <a href="display-block-set.php" class="grid-nav">Display Block</a>
            </div>
    </div>
</div>
<?php
 include_once('inc_/footer.php');
?>