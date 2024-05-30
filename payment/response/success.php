<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" href="../css/success.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<body>

    <!--<div class="card">-->
    <!--<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">-->
    <!--  <i class="checkmark">✓</i>-->
    <!--</div>-->
    <!--  <h1>Success</h1> -->
    <!--  <table>-->
    <!--      <tr><td><b>TxnID : </b></td><td> <p><?php //echo $txnId
                                                    ?></p></td></tr>-->
    <!--      <tr><td><b>Order ID : </b></td><td> <p><?php //echo $orderId
                                                        ?></td></td></tr>-->
    <!--      <tr><td><b>Form ID : </b></td> <td><p><?php //echo $shoppingId
                                                    ?></td></td></tr>-->
    <!--      <tr><td><b>Date: </b></td><td> <p><?php //echo date("d-m-Y h:i:sa")
                                                ?></td></td></tr>-->
    <!--      </table>-->

    <!--</div>-->

    <?php
    $counter = 0;
    foreach ($result as $key => $value) {
        foreach ($value as $key1 => $value1) {
    ?>



            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-end font-size-15"> <span class="badge bg-success font-size-12 ms-2">Successful</span></h4>
                                    <div class="mb-4">
                                        <h2 class="mb-1 text-muted">pspteam.org</h2>
                                    </div>
                                    <!--<div class="text-muted">-->
                                    <!--    <p class="mb-1">3184 Spruce Drive Pittsburgh, PA 15201</p>-->
                                    <!--    <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> xyz@987.com</p>-->
                                    <!--    <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>-->
                                    <!--</div>-->
                                </div>

                                <hr class="my-4">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="text-muted">
                                            <h5 class="font-size-16 mb-3">Paid By:</h5>
                                            <h5 class="font-size-15 mb-2"><?php echo $value1->full_name; ?></h5>
                                            <p class="mb-1"><?php echo $value1->cor_address; ?></p>
                                            <p class="mb-1"><?php echo $value1->email; ?></p>
                                            <p><?php echo $value1->mobile; ?></p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-sm-6">

                                        <?php
                                        foreach ($result2 as $key2 => $value2) {
                                            foreach ($value2 as $key2 => $value3) {
                                                $amount = $value3->amount;
                                                $order_id = $value3->request_id;
                                        ?>
                                                <div class="text-muted text-sm-end">
                                                    <div>
                                                        <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                                        <p><?php echo $value3->transaction_id; ?></p>
                                                    </div>
                                                    <div class="mt-4">
                                                        <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                                        <p><?php echo date('d M Y', $value3->created_on); ?></p>
                                                    </div>
                                                    <!--<div class="mt-4">-->
                                                    <!--    <h5 class="font-size-15 mb-1">Order No:</h5>-->
                                                    <!--    <p><?php //echo $order_id; 
                                                                ?></p>-->
                                                    <!--</div>-->
                                                </div>
                                        <?php }
                                        } ?>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="py-2">
                                    <h5 class="font-size-15">Order Summary</h5>

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Post</th>
                                                    <th>Registration No.</th>
                                                    <th>Fees</th>
                                                    <!--<th>Quantity</th>-->
                                                    <th class="text-end" style="width: 120px;">Total</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div>
                                                            <h5 class="text-truncate font-size-14 mb-1"></h5>
                                                            <p class="text-muted mb-0"><?php echo $value1->exam_name; ?></p>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $value1->registration_no; ?></td>
                                                    <td>₹<?php echo $amount; ?></td>
                                                    <!--<td>1</td>-->
                                                    <td class="text-end">₹<?php echo $amount; ?></td>
                                                </tr>


                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                    <div class="d-print-none mt-4">
                                        <div class="float-end">
                                            <a href="javascript:window.print()" class="btn btn-success"><i class="fa fa-print"></i> Print </a>
                                            <a href="https://pspteam.org/" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
                                            <form action="../get_final_print.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                                                <?php
                                                foreach ($result2 as $key2 => $value2) {
                                                    foreach ($value2 as $key2 => $value3) {
                                                ?>
                                                        <input type="hidden" name="transaction_id" value="<?php echo $value3->transaction_id; ?>">
                                                        <input type="hidden" name="transaction_date" value="<?php echo date('d-m-Y', $value3->created_on); ?>">
                                                <?php }
                                                } ?>
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Get Final Print</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
            </div>


    <?php  }
    } ?>
</body>

</html>