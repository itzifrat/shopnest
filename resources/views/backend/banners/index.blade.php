@extends('backend.layouts.master')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Library</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Library</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                            data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                        <span>Visitors</span>
                    </div>
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                            data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                        <span>Visits</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Library</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Type</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Data Structures using C & C++</td>
                                        <td>C++</td>
                                        <td>Computar</td>
                                        <td>PDF</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Introduction to Computers</td>
                                        <td>Computers</td>
                                        <td>Computers</td>
                                        <td>Book</td>
                                        <td>Second Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Management Information System</td>
                                        <td>Management</td>
                                        <td>Information</td>
                                        <td>PDF</td>
                                        <td>Fourth Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Operating System Concepts</td>
                                        <td>Computers</td>
                                        <td>Computers</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Computer Networking</td>
                                        <td>Management</td>
                                        <td>Computer</td>
                                        <td>PDF</td>
                                        <td>Second Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Graphics</td>
                                        <td>Management</td>
                                        <td>Architecture</td>
                                        <td>Book</td>
                                        <td>Fourth Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Computer Networks</td>
                                        <td>Networks</td>
                                        <td>Computer</td>
                                        <td>PDF</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Animation</td>
                                        <td>Management</td>
                                        <td>Computer</td>
                                        <td>Book</td>
                                        <td>Fourth Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Electronics</td>
                                        <td>Management</td>
                                        <td>Computer</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Integrated Circuits</td>
                                        <td>Management</td>
                                        <td>Architecture</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Electronics</td>
                                        <td>Management</td>
                                        <td>Architecture</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Animation Graphic Fundamentals	</td>
                                        <td>Management</td>
                                        <td>Architecture</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Electronics</td>
                                        <td>Management</td>
                                        <td>Architecture</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Graphic Designing</td>
                                        <td>Management</td>
                                        <td>Architecture</td>
                                        <td>Book</td>
                                        <td>First Year</td>
                                        <td>In Stock</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
