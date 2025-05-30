<?php
$pageName = "Grid-System Settings";
$pageTopic = "Grid-System";
 include_once('inc_/header.php');
?>
<div class="grid-container">
    <div class="grid-header">
        <div class="nav-list">
        <a href="index.php" class="grid-nav">Home</a>
        <a href="flex-set.php" class="grid-nav">Flex-System</a>
        <a href="display-block-set.php" class="grid-nav">Display Block</a>
        </div>
    </div>
    <div class="grid-aside">Aside</div>
    <div class="grid-main">
        <p>Main</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet est quos architecto distinctio id totam assumenda reiciendis explicabo voluptatum velit cumque, sint temporibus, sed commodi eum sit voluptatem veniam corrupti!</p>
        <div class="ads-box">
            <div class="ads-items">
                <a href="#" class="ads-link">Facebook</a>
                <a href="#" class="ads-link">Youtube</a>
                <a href="#" class="ads-link">Twitter</a>
            </div>
        </div>
    </div>
    <!-- <div class="grid-box grid-item-4">Box-4</div> -->
    <div class="grid-footer">
            <div class="nav-list">
            <a href="index.php" class="grid-nav">Home</a>
            <a href="flex-set.php" class="grid-nav">Flex-System</a>
            <a href="display-block-set.php" class="grid-nav">Display Block</a>
            </div>

            <div class="footer-container">
                <div class="footer-item">
                    <p class="footer-items">&copy; <?=Date('Y')?>, All Right reserved by EzyTec</p>
                </div>
            </div>
    </div>
</div>
<?php
 include_once('inc_/footer.php');
?>