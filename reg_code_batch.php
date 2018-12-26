<?php 

    include 'controllers/con_reg_code_batch.php'; 
    include 'header.php'; 

?>

        <!-- ALERT  -->
        <?php echo Message(); 
            echo SuccessMessage();
        ?>

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">View Registration Code Batch</h4><br>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Batch </th>
                                    <th>Date Generated</th>
                                    <th>Generated By</th>
                                </thead>


                                <tbody>
                                    
                                    <?php
                                      $obj = new Con_reg_code_batch();
                                      echo  $obj->reg_code_batch();
                                   ?>

                                
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->


    </div> <!-- Page content Wrapper -->

</div> <!-- content -->


        
<?php include('footer.php'); ?>