<!-- Breadcrump -->
<style>
  .icon-div {
    padding: 1.25rem 2.25rem !important;
  }
  .card .card-subtitle {
    font-weight: bold;
    color: #000;
  }
</style>
<div class="row page-titles p-0 m-0 ">
  <div class="col-md-12 col-12 align-self-center">
    <h3 class="text-themecolor mb-0">Dashboard</h3>
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item">
        <a href="javascript:void(0)">Home</a>
      </li>
      <li class="breadcrumb-item active">Dashboard </li>
    </ol>
  </div>
</div>
<div class="row mt-5">
  <div class="col-lg-12 col-md-12">
    <!-- Row -->
    <div class="row d-flex justify-content-center">
      <!-- Column -->
      <div class="col-lg-2 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row text-center">
              <div class="col-12">
                <div class="bg-light-primary text-primary rounded d-flex align-items-center py-3 px-2 justify-content-center icon-div">

                  <img src="/img/digital-library-2.png" width="40px" alt="feature icon">
                </div>
              </div>
            </div>
            <div class="col-12 d-flex align-items-center justify-content-center text-center">
              <div>
                <h4 class="card-title">
                  <?php
                                        if ($Digilibrary > 0) { ?>
                    <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(1)"><?php echo $Digilibrary; ?></a>
                  <?php } else {
                                          echo "0";
                                        } ?>
                </h4>
                <h6 class="card-subtitle mb-0">Digital Library</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-2 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="bg-light-danger text-danger rounded d-flex align-items-center py-3 px-2 justify-content-center icon-div">
                  <img src="/img/analytics.png" width="40px" alt="feature icon">

                </div>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-center text-center">
                <div>
                  <h4 class="card-title"><?php
                                          if ($project_count > 0) { ?>
                      <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(2)"><?php echo $project_count; ?></a>
                    <?php } else {
                                            echo "0";
                                          } ?>
                  </h4>
                  <h6 class="card-subtitle mb-0">Project Report</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="bg-light-warning text-danger rounded d-flex align-items-center py-3 px-2 justify-content-center icon-div">
                  <img src="/img/information-cfo.png" width="40px" alt="feature icon">

                </div>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-center text-center">
                <div>
                  <h4 class="card-title"><?php
                                          if ($virtualcfo > 0) { ?>
                      <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(3)"><?php echo $virtualcfo; ?></a>
                    <?php } else {
                                            echo "0";
                                          } ?>
                  </h4>
                  <h6 class="card-subtitle mb-0">Virtual CFO</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="bg-light-primary text-danger rounded d-flex align-items-center py-3 px-2 justify-content-center icon-div">
                  <img src="/img/certificate.png" width="40px" alt="feature icon">

                </div>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-center text-center">
                <div>
                  <h4 class="card-title"><?php
                                          if ($eprcertification > 0) { ?>
                      <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(4)"><?php echo $eprcertification; ?></a>
                    <?php } else {
                                            echo "0";
                                          } ?>
                  </h4>
                  <h6 class="card-subtitle mb-0">
                    EPR Certification</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="bg-light-danger text-danger rounded d-flex align-items-center py-3 px-2 justify-content-center icon-div">
                  <img src="/img/compliant-service.png" width="40px" alt="feature icon">

                </div>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-center text-center">
                <div>
                  <h4 class="card-title"><?php
                                          if ($complianceServices > 0) { ?>
                      <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(5)"><?php echo $complianceServices; ?></a>
                    <?php } else {
                                            echo "0";
                                          } ?>
                  </h4>
                  <h6 class="card-subtitle mb-0">Compliance Services </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row  end-->
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-md-flex no-block">
              <h4 class="card-title">Recent Projects</h4>
            </div>
            <div class="month-table">
              <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                  <thead class="table-dark">
                    <tr>
                      <th> S.No </th>
                      <th> Name</th>
                      <th> Mobile No</th>
                      <th> Email</th>
                      <th> Payment status</th>
                      <th>Action</th>
                    </tr>

                  </thead>
                  <tbody>
                    <?php

                    $sno = 1;
                    foreach ($projects as $project) : //echo"<pre>";print_r($employees);exit(); 
                    ?>

                      <tr>
                        <td align="center"><?= $sno++; ?></td>
                        <td align="center"><?= $project->name ?></td>
                        <td align="center"><?= $project->mobile_no ?></td>
                        <td align="center"><?= $project->email ?></td>
                        <td align="center"><?php
                            if ($project->payment_status == 1) {
                              echo '<span style = "color:green;">Payment paid</span>';
                            } else {
                              echo '<span style = "color:red;">Payment not paid</span>';
                            } ?></td>
                        <td align="center">
                          <?php echo $this->Html->link(('<i class="fas fa-eye"></i>'), ['controller' => 'Projects', 'action' => 'basicview', $project->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>

                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->
  </div>
</div>
<!-- REPORT -->
<div id="modal-add-unsent" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade col-lg-12">
  <div class="modal-dialog" style="max-width:50%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form add-unsent-form">

        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  function projectreport(val) {
    //var val;
    //alert('hi');       
    //alert(val);
    $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
    $("#modal-add-unsent").modal('show');
    $.ajax({
      async: true,
      dataType: "html",
      type: "get",
      url: '<?php echo $this->Url->webroot ?>ajaxprojectreport/' + val,
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
      },
      success: function(data, textStatus) {
        //alert(data);
        $(".add-unsent-form").html(data);
      }
    });
  }
</script>