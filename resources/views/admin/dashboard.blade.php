@extends('admin.master')
@section('main-content')
  <div class="main-wrapper">
    <div class="quick-stats-wrapper">
      <div class="row align-items-center mc-b-3">
        <div class="col-lg-6 col-12">
          <div class="primary-heading color-dark">
            <h2>User Quick Stats</h2>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-right">
            <a href="#" class="primary-btn primary-bg">Download CSV Report</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="status-thumbnail">
            <span><i class="fa fa-long-arrow-up"></i> 00.0%</span>
            <div class="status-img">
              <img src="images/status-icon-1.svg" alt="status-icon">
            </div>
            <div class="status-content">
              <h3>TOTAL REGISTERED USERS</h3>
              <p>00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="status-thumbnail">
            <span><i class="fa fa-long-arrow-up"></i> 00.0%</span>
            <div class="status-img">
              <img src="images/status-icon-2.svg" alt="status-icon">
            </div>
            <div class="status-content">
              <h3>TEACHER USERS</h3>
              <p>00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="status-thumbnail">
            <span><i class="fa fa-long-arrow-up"></i> 00.0%</span>
            <div class="status-img">
              <img src="images/status-icon-3.svg" alt="status-icon">
            </div>
            <div class="status-content">
              <h3>STUDENT USERS</h3>
              <p>00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="status-thumbnail">
            <span><i class="fa fa-long-arrow-up"></i> 00.0%</span>
            <div class="status-img">
              <img src="images/status-icon-4.svg" alt="status-icon">
            </div>
            <div class="status-content">
              <h3>TOTAL SITE VISITS</h3>
              <p>00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="status-thumbnail">
            <span><i class="fa fa-long-arrow-up"></i> 00.0%</span>
            <div class="status-img">
              <img src="images/status-icon-5.svg" alt="status-icon">
            </div>
            <div class="status-content">
              <h3>NEW REGISTRATIONS</h3>
              <p>00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="status-thumbnail">
            <span><i class="fa fa-long-arrow-up"></i> 00.0%</span>
            <div class="status-img">
              <img src="images/status-icon-6.svg" alt="status-icon">
            </div>
            <div class="status-content">
              <h3>RE-VISITING USERS</h3>
              <p>00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="chart-wrapper">
      <form action="#" class="main-form ">
        <div class="row align-items-end justify-content-between">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="row align-items-end">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <label>Sort By Date:</label>
                  <div class="relative-div">
                    <input type="text" class="form-control date-picker" placeholder="To">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <div class="relative-div">
                    <input type="text" class="form-control date-picker" placeholder="From">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="form-group">
              <label>Filter by Type:</label>
              <select class="form-control">
                <option>Total Registered Users</option>
                <option>Teacher Users</option>
                <option>Student Users</option>
                <option>Total Site Visits</option>
                <option>New Registrations</option>
                <option>Re-Visiting</option>
              </select>
            </div>
          </div>
        </div>
      </form>
      <div id="chart_div" class="chart_div"></div>
    </div>
    <div class="user-wrapper">
      <div class="row align-items-center mc-b-3">
        <div class="col-lg-6 col-12">
          <div class="primary-heading color-dark">
            <h2>Users</h2>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-right">
            <a href="add-user.html" class="primary-btn primary-bg">Add New</a>
          </div>
        </div>
      </div>

      <form action="#" class="main-form mc-b-3">
        <div class="row align-items-end">
          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label>Filter By Type</label>
              <select class="form-control">
                <option>Select</option>
                <option>Select 1</option>
                <option>Select 2</option>
                <option>Select 3</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="form-group">
              <label>Filter By Status</label>
              <select class="form-control">
                <option>Select</option>
                <option>Select 1</option>
                <option>Select 2</option>
                <option>Select 3</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="row align-items-end">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <label>Sort By Date:</label>
                  <div class="relative-div">
                    <input type="text" class="form-control date-picker" placeholder="To">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <div class="relative-div">
                    <input type="text" class="form-control date-picker" placeholder="From">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table id="user-table" class="table table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>S.No</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Registration Date</th>
              <th>Email</th>
              <th>Type</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>ADCF</td>
              <td>xyz</td>
              <td>03/02/2020</td>
              <td>email@abc.com</td>
              <td>Student</td>
              <td>Active</td>
              <td>
                <div class="dropdown show action-dropdown">
                  <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action-dropdown">
                    <a class="dropdown-item" href="user-detail.html"><i class="fa fa-file-text"
                        aria-hidden="true"></i> Detail</a>
                    <a class="dropdown-item" href="user-edit.html"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i>
                      Edit</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i> Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
   
@endsection