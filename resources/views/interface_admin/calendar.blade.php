@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row g-0">
                    <div class="col-auto mb-2 mb-md-0 me-auto">
                        <div class="w-auto sw-md-30">
                            <h1 class="mb-0 pb-0 display-4" id="title">Integrated Google Calendar</h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item">
                                        <a href="Dashboards.Default.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="Apps.html">Apps</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="w-100 d-md-none"></div>
                    <div class="col-auto d-flex align-items-start justify-content-end">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1" id="goPrev">
                            <i data-acorn-icon="chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1" id="goNext">
                            <i data-acorn-icon="chevron-right"></i>
                        </button>
                    </div>
                    <div class="col col-md-auto d-flex align-items-start justify-content-end">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1 w-100 w-md-auto" id="addNewEvent">
                            <i data-acorn-icon="plus"></i>
                            <span>Add Event</span>
                        </button>
                    </div>
                </div>
            </div>


            <!-- Calendar Title Start -->
            <div class="d-flex justify-content-between">
                <h2 class="small-title" id="calendarTitle">Title</h2>
                <button class="btn btn-sm btn-icon btn-icon-only btn-foreground shadow align-top mt-n2" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <i data-acorn-icon="more-horizontal" data-acorn-size="15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                    <a class="dropdown-item" href="#" id="monthView">Month</a>
                    <a class="dropdown-item" href="#" id="weekView">Week</a>
                    <a class="dropdown-item" href="#" id="dayView">Day</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" id="goToday">Today</a>
                </div>
            </div>
            <!-- Calendar Title End -->

            <!-- Calendar Content Start -->
            <div class="card">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
            <!-- Calendar Content End -->

            <!-- New Task Start -->
            <div class="modal modal-right fade" id="newEventModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Add Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex flex-column">
                            <div class="mb-3 top-label">
                                <input class="form-control" id="eventTitle" />
                                <span>TITLE</span>
                            </div>
                            <div class="mb-3 top-label">
                                <select id="eventCategory">
                                    <option label="&nbsp;"></option>
                                    <option data-class="border-warning" value="online">online</option>
                                    <option data-class="border-primary" value="offline">offline</option>
                                </select>
                                <span>CATEGORY</span>
                            </div>
                            <div class="row g-0">
                                <div class="col pe-2">
                                    <div class="mb-3 top-label">
                                        <input type="text" data-provide="datepicker" class="form-control" data-date-autoclose="true" id="eventStartDate" />
                                        <span>START DATE</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="mb-3 top-label custom-control-container time-picker-container">
                                        <input class="form-control time-picker" id="eventStartTime" />
                                        <span>START TIME</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col pe-2">
                                    <div class="mb-3 top-label">
                                        <input type="text" data-provide="datepicker" class="form-control" data-date-autoclose="true" id="eventEndDate" />
                                        <span>END DATE</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="mb-3 top-label custom-control-container time-picker-container">
                                        <input class="form-control time-picker" id="eventEndTime" />
                                        <span>END TIME</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0" hidden id="googleMeeting">
                                <a href="" class="btn btn-warning" id="btnMeeting" target="_blank"><i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i> <span>Meeting</span></a>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button" data-delay='{"show":"500", "hide":"0"}' data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" id="deleteEvent">
                                <i data-acorn-icon="bin"></i>
                            </button>
                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" id="saveEvent">
                                <span>Save</span>
                                <i data-acorn-icon="check"></i>
                            </button>
                            <button class="btn btn-icon btn-icon-start btn-primary" type="button" id="addEvent">
                                <i data-acorn-icon="plus"></i>
                                <span>Add</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Task End -->

            <!-- Delete Confirm Modal Start -->
            <div class="modal fade modal-close-out" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verticallyCenteredLabel">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span id="deleteConfirmDetail" class="fw-bold"></span>
                            <span>will be deleted. Are you sure?</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                            <button type="button" id="deleteConfirmButton" class="btn btn-outline-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Confirm Modal End -->
        </div>
    </main>
@endsection
@push('script')
    <script src="/assets/js/apps/calendar.js"></script>
    <script></script>
@endpush
