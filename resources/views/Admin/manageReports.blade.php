@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "pages"}}">
<div class="ad-ar-content">
    @include('Admin.layouts.adminAreaLeftSide')
    <div class="content-inner tags-inner">
            <reports><!---->
                
                <div class="reports-body">
                    <router-outlet></router-outlet><tickets-report><div class="filters">
                    <div class="left">
                        <div class="range-select input-container input-inline">
                            <label for="primary_range">Report Period: </label>
                            <select id="primary_range" name="primary_range" class="ng-untouched ng-pristine ng-valid">
                                <option value="last_30_days">Last 30 days</option>
                                <option value="last_month">Last Month</option>
                                <option value="last_7_days">Last 7 days</option>
                                <option value="last_week">Last Week</option>
                                <option value="today">Today</option>
                                <option value="custom">Custom Dates</option>
                            </select>
                        </div>
                
                        <div class="input-inline date-inputs">
                            <div class="input-container with-calendar">
                                    <input type="text" id="report-pariod-last-30-day"  class="report-pariod-input-static ng-untouched ng-pristine" disabled="" value="{{ date("o-m-d",time()-(30*24*60*60))}}" data-provide="datepicker">
                                    <input type="text" id="report-pariod-last-7-days"  class="report-pariod-input-static report-pariod-inputs ng-untouched ng-pristine" disabled="" value="{{ date("o-m-d",strtotime("-7 day"))}}">
                                    <input type="text" id="report-pariod-today"  class="report-pariod-input-static report-pariod-inputs ng-untouched ng-pristine" disabled="" value="{{ date("o-m-d")}}">
                                    <input type="text" id="report-pariod-custom"  class="report-pariod-input-static report-pariod-inputs ng-untouched ng-pristine" disabled="" value="">
                                <datepicker class="datepicker"><button class="no-style calendar-button" disabled=""><label for="date-calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></label></button>
                                   <input type="hidden"  type="text"></datepicker>
                            </div>
                            <span>-</span>
                            <div class="input-container with-calendar">
                                <input type="text"  class="report-pariod-input-static ng-untouched ng-pristine" disabled="" value="{{date('o-m-d')}} ">
                                <datepicker class="datepicker"><button class="no-style calendar-button" disabled=""><label for="date-calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></label></button>
                                 <input type="hidden" type="text"></datepicker>
                            </div>
                        </div>
                
                        <button class="button primary" type="button">Update</button>
                    </div>
                    <div class="right">
                        <div class="range-select input-container input-inline">
                            <label for="compare_range">Compare Period: </label>
                            <select id="compare_range" name="compare_range" class="ng-untouched ng-pristine ng-valid">
                                <option value="last_30_days">Last 30 days</option>
                                <option value="last_month">Last Month</option>
                                <option value="last_7_days">Last 7 days</option>
                                <option value="last_week">Last Week</option>
                                <option value="today">Today</option>
                                <option value="custom">Custom Dates</option>
                            </select>
                        </div>
                
                        <div class="input-inline date-inputs">
                            <div class="input-container with-calendar">
                                <input type="text" class="ng-untouched ng-pristine" disabled="">
                                <datepicker><button class="no-style calendar-button" disabled=""><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
                <input type="hidden" type="text"></datepicker>
                            </div>
                            <span>-</span>
                            <div class="input-container with-calendar">
                                <input type="text" class="ng-untouched ng-pristine" disabled="">
                                <datepicker><button class="no-style calendar-button" disabled=""><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
                <input type="hidden" type="text"></datepicker>
                            </div>
                        </div>
                
                        <button class="button primary" type="button">Compare</button>
                        <button class="button cancel-compare" tooltip="Clear compare data"><i class="fa fa-close" style="font-size: 1.1rem;"></i></button>
                    </div>
                </div>
                
                <div class="report">
                    <section class="left-col">
                        <div class="report-panel ticket-stats">
                            <div class="header" trans="">Ticket Statistics</div>
                            <div class="body">
                                <section class="overall-stats">
                                    <div class="box new-tickets">
                                        <div class="value">
                                            <span></span>
                                            <!---->
                                        </div>
                                        <div class="name">New Tickets</div>
                                    </div>
                                    <div class="box solved-tickets">
                                        <div class="value">
                                            <span></span>
                                            <!---->
                                        </div>
                                        <div class="name">Solved Tickets</div>
                                    </div>
                                    <div class="box">
                                        <div class="value">
                                            <span></span>
                                            <!---->
                                        </div>
                                        <div class="name">Open Tickets</div>
                                    </div>
                                    <div class="box">
                                        <!---->
                                        <div class="name">Time to first reply</div>
                                    </div>
                                    <div class="box">
                                        <div class="value">
                                            <span> hours</span>
                                            <!---->
                                        </div>
                                        <div class="name">Average response time</div>
                                    </div>
                                </section>
                
                                <section class="chart-container">
                                    <tickets-count-chart class="chart-component"><canvas id="tickets-count-canvas"></canvas></tickets-count-chart>
                                    <!----><div class="no-data"><div class="text">No data available for this time range.</div></div>
                                </section>
                            </div>
                        </div>
                
                        <div class="report-panels-container">
                            <div class="report-panel">
                                <div class="header">Tickets by Tags</div>
                                <div class="body">
                                    <section class="chart-container doughnut-chart">
                                        <tickets-by-tags-chart class="chart-component"><canvas id="tickets-by-tags-canvas"></canvas></tickets-by-tags-chart>
                                        <!----><div class="no-data"><div class="text">No data for tags is available for this time range.</div></div>
                                    </section>
                                </div>
                            </div>
                
                            <div class="report-panel">
                                <div class="header">Tickets by Agent</div>
                                <div class="body">
                                    <section class="chart-container agents-chart">
                                        <div class="flex-table">
                                            <div class="flex-table-row flex-table-header">
                                                <div class="flex-table-item">Agent</div>
                                                <div class="flex-table-item small center">Replies</div>
                                                <div class="flex-table-item small center">Solved</div>
                                                <div class="flex-table-item small center">Avg Time</div>
                                            </div>
                
                                            <!---->
                                        </div>
                                        <!----><div class="no-data"><div class="text" trans="">No data on agents is available for this time range.</div></div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="right-col">
                        <div class="report-panel">
                            <div class="header">Time to first reply</div>
                            <div class="body first-response-chart">
                                <!---->
                                <section class="chart-container">
                                    <first-response-by-hours-chart class="chart-component"><canvas id="first-response-by-hours-canvas"></canvas></first-response-by-hours-chart>
                                    <!----><div class="no-data">
                                        <div class="text" trans="">No data available for this time range.</div>
                                    </div>
                                </section>
                            </div>
                        </div>
                
                        <div class="report-panel">
                            <div class="header">Busiest time of day</div>
                            <div class="body busiest-time-of-day">
                                <tickets-by-hour-chart><!----></tickets-by-hour-chart>
                            </div>
                        </div>
                    </section>
                </div>
                
                </div>
            </reports>
             <!-- modals -->
            
             <div class="modal modal-visible modal-delete-pages" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Delete Pags</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to delete selected pages?</p>
                 </div>
             
                 <div class="buttons right">
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Delete</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
    </div>
</div>

@endSection