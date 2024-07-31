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

        <div class="container-fluid ">
            <div align="center" style="padding-top:75px;">
                <div class="container" align="center" style="padding:100px">
<div>
    <a href="<?php echo e(url('add_doctor_view')); ?>" class="btn btn-success float-end mb-3">Add Doctor</a>
</div>
                    <?php if(@session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                            <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


                        </div>
                    <?php endif; ?>

                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary" align="center">
                            <tr class="pad">
                                <th scope="col">Doctor name</th>
                                <th scope="col">phone</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">room</th>
                                <th scope="col">image</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Send Mail</th>

                                

                            </tr>
                        </thead>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr align="center" class="table-light">
                                <td><?php echo e($doctor->name); ?></td>
                                <td><?php echo e($doctor->phone); ?></td>
                                <td><?php echo e($doctor->speciality); ?></td>
                                <td><?php echo e($doctor->room); ?></td>
                                <td><img src="doctorimage/<?php echo e($doctor->image); ?>" alt="doc"class="image"></td>
                                <td><a class="btn btn-primary" href="<?php echo e(url('updatedoctor', $doctor->id)); ?>">Update</a>
                                </td>
                                <td><a class="btn btn-danger"
                                        onclick="return confirm('Are you  sure want to delete..?')"
                                        href="<?php echo e(url('deletedoctor', $doctor->id)); ?>">Delete</a></td>
                                <td><a class="btn btn-success" href="<?php echo e(url('sendmail', $doctor->id)); ?>">Send Mail</a>
                                </td>




                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
</body>

</html>
<?php /**PATH D:\hms\resources\views/admin/showdoctor.blade.php ENDPATH**/ ?>