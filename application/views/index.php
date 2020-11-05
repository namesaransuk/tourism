<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="card mt-5 mb-5 col-8 mx-auto">
            <div class="card-body">

                <div>
                    <h3 class="display-4 text-center">Train</h3>
                </div>

                <!-- Default form register -->
                <form class="p-5" action="<?php echo site_url() ?>/Welcome/insert" method="post">

                    <div class="form-row mb-4">
                        <div class="col">
                            <label for="">ขบวน</label>
                            <input type="number" id="id_train" name="id_train" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">หมายเหตุ</label>
                            <input type="text" id="report" name="report" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <h5>ต้นทาง</h5>
                    <div class="form-row mb-4">
                        <div class="col">
                            <label for="">สถานี</label>
                            <input type="text" id="station1" name="station1" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">เวลาออก</label>
                            <input type="time" id="timeout1" name="timeout1" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <h5>ห้วยราช</h5>
                    <div class="form-row mb-4">
                        <br>
                        <div class="col">
                            <label for="">ถึง</label>
                            <input type="time" id="to" name="to" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">ออก</label>
                            <input type="time" id="out" name="out" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <h5>ปลายทาง</h5>
                    <div class="form-row mb-4">
                        <div class="col">
                            <label for="">สถานี</label>
                            <input type="text" id="station2" name="station2" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">ถึงเวลา</label>
                            <input type="time" id="timeout2" name="timeout2" class="form-control">
                        </div>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn aqua-gradient mt-3 btn-block" type="submit">Add Station</button>

                </form>
                <!-- Default form register -->


            </div>
        </div>
    </div>

</body>

</html>