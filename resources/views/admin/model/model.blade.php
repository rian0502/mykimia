@extends('layouts.admin')
@section('admin')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Default Basic Forms Start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Table with Export Buttons</h4>
                </div>
                <div class="pb-20">
                    <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="DataTables_Table_2" type="button"><span>Print</span></button> </div><div id="DataTables_Table_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_2"></label></div><table class="table hover multiple-select-row data-table-export nowrap dataTable no-footer dtr-inline" id="DataTables_Table_2" role="grid">
                        <thead>
                            <tr role="row"><th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Address</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending">Start Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Salart: activate to sort column ascending">Salart</th></tr>
                        </thead>
                        <tbody>

                        <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>25</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>18</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr></tbody>
                    </table><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link"><i class="ion-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a></li></ul></div></div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <!-- Input Validation End -->
</div>
@endsection
