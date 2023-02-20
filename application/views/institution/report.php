    
    <?php include 'leftbar.php';?>
    <div class="col-lg-9 main_cotent">


    <div class="pl-5 pt-5 pb-2">
        <h3 class="page_heading">Women Safety Application</h3>
        <br />
        <h3 class="page_heading">Manage Users</h3>
        </div>
            <br />
        
        <div class="card p-4 ml-5 shadow">
        <table class="table">
        <thead>
                <tr>
                    <th>#</th>
                    <!--<th>From User</th>-->
                    <th>Message</th>
                    <th>Message Content</th>
                    <th>Action</th>
                </tr>
        </thead>
        <tbody>
                <?php 
                
                    if($report == TRUE){
                        $count = 0;
                        foreach($report as $row){
                           $count++; 
                            echo "<tr>
                                <td>". $count ."</td>
                                 
                                <td>". $row['msg_subject'] ."</td>
                                <td>". $row['msg_content'] ."</td>
                                <td>
                                    <a href='". base_url() ."Institution/message/". $row['report_id'] ."' style='text-decoration: none;'> ";
                                    echo '<img src="'. base_url().'upload/chat_png.png" style="margin: 10px;width: 30px;height: 30px;"></i>';
                                   
                                   echo" </a>
                                    <a href='#' style='text-decoration: none;'>";
                                    echo '<img src="'. base_url().'upload/location_png.png" style="margin: 10px;width: 30px;height: 30px;"></i>
                                   ';
                                   echo "</a> </td></tr>";
                            
                        }
                        
                    }
                
                ?>
            <tbody>
            </table>


        <div>

        </div>


    </div>

    </div>

</body>
</html>