<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="col-md-8">
            <section class="panel">
                <header class="panel-heading">
                  <i class="fa fa-gear"></i>  ClickAtell SMS Setings
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <div class="panel-body">
                                        <?php echo validation_errors(); ?>
                                        <form role="form" action="sms/addNewSettings" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ClickAtell Username</label>
                                                <input type="text" class="form-control" name="username" id="exampleInputEmail1" value='<?php
                                                if (!empty($settings->username)) {
                                                    echo $settings->username;
                                                }
                                                ?>' placeholder="" <?php
                                                       if (!$this->ion_auth->in_group('admin')) {
                                                           echo 'disabled';
                                                       }
                                                       ?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ClickAtell Api Password</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="********">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Api Id</label>
                                                <input type="text" class="form-control" name="api_id" id="exampleInputEmail1" value='<?php
                                                if (!empty($settings->api_id)) {
                                                    echo $settings->api_id;
                                                }
                                                ?>' placeholder="" <?php
                                                       if (!empty($settings->username)) {
                                                           echo $settings->username;
                                                       }
                                                       ?>' placeholder="" <?php
                                                       if (!$this->ion_auth->in_group('admin')) {
                                                           echo 'disabled';
                                                       }
                                                       ?>>
                                            </div>
                                            <input type="hidden" name="id" value='<?php
                                            if (!empty($settings->id)) {
                                                echo $settings->id;
                                            }
                                            ?>'>
                                            <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>