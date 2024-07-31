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

        <div class="container">
            <div align="center" style="padding-top:75px;">
                <div class="container" align="center" style="padding:100px">

                    <?php if(@session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                            <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


                        </div>
                    <?php endif; ?> --}}

                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr class="pad">
                                <th scope="col">Doctor name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Insurance</th>
                                <th scope="col">Emergency</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                
                                <th scope="col">Delete</th>
                                

                                

                            </tr>
                        </thead>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr align="center" class="table-light">
                                <td><?php echo e($doctor->name); ?></td>
                                <td><?php echo e($doctor->contactinfo); ?></td>
                                <td><?php echo e($doctor->insuranceinfo); ?></td>
                                <td><?php echo e($doctor->emergencydetails); ?></td>
                                <td><?php echo e($doctor->DOB); ?></td>
                                <td><?php echo e($doctor->gender); ?></td>
                                
                                
                                <td><a class="btn btn-danger"
                                        onclick="return confirm('Are you  sure want to delete..?')"
                                        href="<?php echo e(url('deletedoctor', $doctor->id)); ?>">Delete</a></td>
                                




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
<?php /**PATH D:\hms\resources\views/admin/showpatients.blade.php ENDPATH**/ ?>