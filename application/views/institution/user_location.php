
    <?php include 'leftbar.php';?>
    <div class="col-lg-9">
        
        <meta http-equiv="refresh" content="10" />
            <h3 class="page_heading">Women Saftey Application</h3>
            <h4 class="page_heading">Manage User</h4>


            <?php 
            
                foreach($detail as $row){
            
            ?>


            <iframe src="https://maps.google.com/maps?q=<?= $row['latitude']?>+,<?= $row['longitude']?>+&hl=es&z=17&amp;output=embed" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            
        <?php }?>



        </div>


        </div>

        </div>

        </div>

</body>
</html>