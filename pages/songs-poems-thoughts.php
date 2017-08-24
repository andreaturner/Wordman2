<?php
    $page_title = 'Songs&#44; Poems&#44; &#38; Thoughts';
    include ('../shared/header.html');
?>

<div class="page-wdth100pct">
		<div class="overflow-auto">

			<div class="header-center-bold">
                <a href="songs.php">Songs&#44;</a> <a href="poems.php">Poems&#44;</a> &#38; <a href="thoughts.php">Thoughts</a> &#47; <a href="thoughts.php">Journals</a>
            </div>

            <!-- start the columns of images for the three sections -->
            <div class="col-wdth30pct">
                <div class="center">
            	   <a href="songs.php"><img src="../images/songs-600x564.jpg" width="600" height="564" alt="Songs image" /></a>
            	   <div class="header-center-bold">
            		  <a href="songs.php">Songs</a>
            	   </div>
                </div>
            </div>

            <div class="col-wdth30pct">
                <div class="center">
            	   <a href="poems.php"><img src="../images/poems-600x454.jpg" width="600" height="454" alt="Poems image" /></a>
            	   <div class="header-center-bold">
            		  <a href="poems.php">Poems</a>
            	   </div>
                </div>
            </div>

            <div class="col-wdth30pct">
            	<a href="thoughts.php"><img src="../images/thoughts-600x612.jpg" width="600" height="612" alt="Thoughts image" /></a>
            </div>
            
	

		</div>  <!-- end overflow-auto div -->
    </div> <!-- [end page-wdth100pct div] -->       

<?php
    include ('../shared/footer.html');            
?>