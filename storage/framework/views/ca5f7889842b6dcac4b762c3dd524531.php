<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hostz Admin</title>
    <!-- plugins:css -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        
        <div class="container-fluid">
            <div class="container scrollbar" align="center" style="padding-top:75px;">
                <table class="table table-bordered table-hover ">
                    <thead class="table-secondary"align="center" >
                        <tr scope="row">
                            <th  scope="col">Customer name</th>
                            <th  scope="col">email</th>
                            <th  scope="col">phone</th>
                            <th  scope="col">Doctor name</th>
                            <th  scope="col">date</th>
                            <th  scope="col">message</th>
                            <th  scope="col">status</th>
                            <th  scope="col">Approved</th>
                            <th  scope="col">cancel</th>
                            <th  scope="col">Send Mail</th>
                    </thead>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr scope="row" align="center" class="table-light" >
                            <td><?php echo e($appoint->name); ?></td>
                            <td><?php echo e($appoint->email); ?></td>
                            <td><?php echo e($appoint->phone); ?></td>
                            <td><?php echo e($appoint->doctor); ?></td>
                            <td><?php echo e($appoint->date); ?></td>
                            <td><?php echo e($appoint->message); ?></td>
                            <td><?php echo e($appoint->status); ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(url('approved', $appoint->id)); ?>">Approved</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="<?php echo e(url('canceled', $appoint->id)); ?>">canceled</a>

                            </td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(url('emailview', $appoint->id)); ?>">Send Mail</a>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->
</body>

</html>
<?php /**PATH D:\hms\resources\views/admin/showappointment.blade.php ENDPATH**/ ?>