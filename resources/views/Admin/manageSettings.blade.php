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
    <div class="content-inner settings-inner">
           
            <div class="spacing-container">        
                      
                      <ul class="nav nav-tabs admin-pill-nav rounded" role="tablist">
                        <li  role="presentation" class="active"><a class="nav-item selected" routerlink="ticketing" href="#ticketing" aria-controls="ticketing" role="tab" data-toggle="tab">Ticketing</a></li>
                        <li role="presentation"><a class="nav-item" href="#helpcenter" routerlink="helpcenter" aria-controls="helpCenter" role="tab" data-toggle="tab">Help Center</a></li>
                        <li role="presentation"><a class="nav-item" href="#localization" routerlink="localization" aria-controls="localization" role="tab" data-toggle="tab">Localization</a></li>
                        <li role="presentation"><a class="nav-item" href="#search" routerlink="search" aria-controls="search" role="tab" data-toggle="tab">Search</a></li>
                        <li role="presentation"><a class="nav-item" href="#authentication" routerlink="authentication" aria-controls="authentication" role="tab" data-toggle="tab">Authentication</a></li>
                        <li role="presentation"><a class="nav-item" href="#mail" routerlink="mail" aria-controls="mail" role="tab" data-toggle="tab">Mail</a></li>
                        <li role="presentation"><a class="nav-item" href="#cache" routerlink="cache" aria-controls="cach" role="tab" data-toggle="tab">Cache</a></li>
                        <li role="presentation"><a class="nav-item" href="#realtime" routerlink="realtime" aria-controls="realtime" role="tab" data-toggle="tab">Real Time</a></li>
                        <li role="presentation"><a class="nav-item" href="#logging" routerlink="logging" aria-controls="logging" role="tab" data-toggle="tab">Logging</a></li>
                        <li role="presentation"><a class="nav-item" href="#queue" routerlink="queue" aria-controls="queue" role="tab" data-toggle="tab">Queue</a></li>
                        <li role="presentation"><a class="nav-item" href="#envato" routerlink="envato" aria-controls="envato" role="tab" data-toggle="tab">Envato</a></li>
                        
                    </ul>
                    
                 
                      <div class="tab-content ">
                        <div role="tabpanel" class="tab-pane active" id="ticketing">
                                <div class="header">
                                        <div class="title">Ticketing</div>
                                        <div class="subtitle" trans="">Toggle email functionality for tickets, change mail handler, secret key and more.</div>
                                     </div>
                            
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="replies.send_email" name="replies.send_email" type="checkbox">
                                            <label for="replies.send_email" trans="">Send replies via email</label>
                                            <p trans="">Send agent replies to ticket creator via email.</p>
                                        </div>
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="tickets.create_from_emails" name="tickets.create_from_emails" type="checkbox">
                                            <label for="tickets.create_from_emails" trans="">New ticket from emails</label>
                                            <p trans="">Create new ticket from incoming emails that can't be matched to existing tickets.</p>
                                        </div>
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="replies.create_from_emails" name="replies.create_from_emails" type="checkbox">
                                            <label for="replies.create_from_emails" trans="">Replies from emails</label>
                                            <p trans="">Create a reply to existing ticket from incoming emails, if email is in reply to that ticket.</p>
                                        </div>
                                    
                                        <div class="widget widget-info">
                                            <div class="title" trans="">Information</div>
                                            <p trans="">Having all three of the above options enabled will essentially turn the site into a shared inbox. All incoming and outgoing emails will be converted into tickets and replies. </p>
                                        </div>
                                    
                                        <!----><div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="tickets.send_ticket_rejected_notification" name="tickets.send_ticket_rejected_notification" type="checkbox">
                                            <label for="tickets.send_ticket_rejected_notification" trans="">Ticket Rejected Notification</label>
                                            <p trans="">Send a notification to user, if their ticket has not been created, because ticket creation via email is disabled.</p>
                                        </div>
                                    
                                        <div class="setting-checkbox last-ch">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="tickets.send_ticket_created_notification" name="tickets.send_ticket_created_notification" type="checkbox">
                                            <label for="tickets.send_ticket_created_notification" trans="">Ticket Received Notification</label>
                                            <p trans="">Send a notification to user via email informing them that their ticket has been received.</p>
                                        </div>
                                    
                                        <button class="button primary update-button" trans="" type="submit">UPDATE</button>
                                    </form>
                        </div>
                        <div role="tabpanel" class="tab-pane"  id="helpcenter">
                                <div class="header">
                                    <div class="title" trans="">Help Center</div>
                                    <div class="subtitle" trans="">Change help center settings, import/export help center data.</div>
                                </div>
                                
                                <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    <div class="setting-checkbox">
                                        <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="branding.use_custom_theme" name="branding.use_custom_theme" type="checkbox">
                                        <label for="branding.use_custom_theme" trans="">Custom Theme</label>
                                        <p trans="">Enable custom theme (generated via appearance editor).</p>
                                    </div>
                                
                                    <div class="input-container">
                                        <label for="hc_home.articles_per_category">Number of Articles per Category</label>
                                        <input id="hc_home.articles_per_category" max="50" min="1" name="hc_home.articles_per_category" type="number" class="ng-untouched form-control ng-pristine ng-valid">
                                        <p trans="">How many articles should each category display in help center homepage.</p>
                                    </div>
                                
                                    <div class="input-container">
                                        <label for="hc_home.children_per_category">Number of Child Categories</label>
                                        <input id="hc_home.children_per_category" max="50" min="1" name="hc_home.children_per_category" type="number" class="ng-untouched form-control ng-pristine ng-valid">
                                        <p trans="">How many child categories should each parent category display in help center homepage.</p>
                                    </div>
                                
                                    <div class="input-container">
                                        <label for="hc.search_page_limit">Number of Search Items</label>
                                        <input id="hc.search_page_limit" max="50" min="1" name="hc.search_page_limit" type="number" class="ng-untouched form-control ng-pristine ng-valid">
                                        <p trans="">How many items (maximum) should be displayed in help center search page.</p>
                                    </div>
                                
                                    <div class="input-container">
                                        <label for="hc_home.hide_small_categories">Hide Incomplete Categories</label>
                                        <select id="hc_home.hide_small_categories" name="hc_home.hide_small_categories" class="ng-untouched form-control ng-pristine ng-valid">
                                            <option value="0: true">Yes</option>
                                            <option value="1: false">No</option>
                                        </select>
                                        <p trans="">This will hide categories with less then two articles from help center homepage to prevent gaps.</p>
                                    </div>
                                
                                    <div class="input-container">
                                        <label for="articles.default_order">Default Article Order</label>
                                        <select id="articles.default_order" name="articles.default_order" class="ng-untouched form-control ng-pristine ng-valid">
                                            <option value="views|desc">Most viewed first</option>
                                            <option value="was_helpful|desc">Most helpful first</option>
                                            <option value="created_at|desc">Newest first</option>
                                            <option value="title|asc">A to Z</option>
                                        </select>
                                        <p trans="">In what way should help center articles be ordered by default.</p>
                                    </div>
                                
                                    <div class="widget widget-flat">
                                        <div class="title" trans="">Help Center Data</div>
                                        <p trans="">Import and export help center data (articles, categories, images, tags) in a .zip file for backup or migration.</p>
                                        <button class="button flat" trans="" type="button">Import</button>
                                        <button class="button flat" trans="" type="button">Export</button>
                                    </div>
                                
                                    <button class="button primary update-button" trans="" type="submit">Update</button>
                                </form>
                                
                        </div>
                        <div role="tabpanel" class="tab-pane" id="localization">
                                    <div class="header">
                                        <div class="title" trans="">Localization</div>
                                        <div class="subtitle" trans="">Manage localization settings for the site.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    
                                        <div class="input-container">
                                            <label for="app.timezone" trans="">Timezone</label>
                                            <input id="app.timezone" name="app.timezone" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p><span trans="">List of supported timezones can be found </span> <a href="http://php.net/manual/en/timezones.php" trans="">here.</a></p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="dates.locale" trans="">Date Locale</label>
                                            <input id="dates.locale" name="dates.locale" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p>Set locale used for date and time translation. Selected locale must be installed on the operating system.</p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="dates.format" trans="">Date Format</label>
                                            <input id="dates.format" name="dates.format" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p><span trans="">Default format for dates on the site. More information can be found</span> <a href="http://php.net/manual/en/function.date.php" trans="">here.</a></p>
                                        </div>
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="i18n.enable" name="i18n.enable" type="checkbox">
                                            <label for="i18n.enable" trans="">Translations</label>
                                            <p trans="">Enable translations functionality for the site.</p>
                                        </div>
                                    
                                        <button class="button primary update-button" trans="" type="submit">Update</button>
                                    </form>
                                
                        </div>
                        <div role="tabpanel" class="tab-pane" id="search">
                                    <div class="header">
                                        <div class="title" trans="">Search</div>
                                        <div class="subtitle" trans="">Configure search method used on the site as well as related 3rd party integrations.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                        <div class="input-container">
                                            <label for="scout.driver" trans="">Search Method</label>
                                            <select id="scout.driver" name="scout.driver" class="ng-untouched form-control ng-pristine ng-valid">
                                                <option value="mysql">Mysql</option>
                                                <option value="tntsearch">TNTSearch</option>
                                                <option value="elastic">Elasticsearch</option>
                                                <option value="algolia">Algolia</option>
                                                <option value="null">None</option>
                                            </select>
                                            <p trans="">Which method should be used for searching the site (help center and mailbox).</p>
                                        </div>
                                    
                                        
                                        <!---->
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="scout.queue" name="scout.queue" type="checkbox">
                                            <label for="scout.queue" trans="">Queue Data Syncing</label>
                                            <p trans="">Enabling this will queue all operations that sync data with selected search method for better performance.</p>
                                        </div>
                                    
                                        <div class="widget widget-info widget-important">
                                            <div class="title" trans="">Important!</div>
                                            <p trans="">"Elasticsearch" method and queued data syncing requires additional set up on the server. Consult documentation for more information.</p>
                                        </div>
                                    
                                        <button class="button primary update-button" trans="" type="submit">Update</button>
                                    </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="authentication">
                                    <div class="header">
                                        <div class="title" trans="">Authentication</div>
                                        <div class="subtitle" trans="">Configure registration, social login  and related 3rd party integrations.</div>
                                    </div>
                                    
                                    <form class="body many-inputs social-login-container ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="registration.disable" name="registration.disable" type="checkbox">
                                            <label for="registration.disable" trans="">Disable Registration</label>
                                            <p trans="">All registration (including social login) will be disabled.</p>
                                        </div>
                                    
                                        <div class="setting-checkbox envato">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="social.envato.enable" name="social.envato.enable" type="checkbox">
                                            <label for="social.envato.enable" trans="">Envato Login</label>
                                            <p trans="">Enable logging into the site via envato.</p>
                                        </div>
                                    
                                        <!---->
                                    
                                        <div class="setting-checkbox google">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="social.google.enable" name="social.google.enable" type="checkbox">
                                            <label for="social.google.enable" trans="">Google Login</label>
                                            <p trans="">Enable logging into the site via google.</p>
                                        </div>
                                    
                                        <!----><!---->
                                            <div class="input-container">
                                                <label for="social.google.id" trans="">Google ID</label>
                                                <input id="social.google.id" name="social.google.id" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                    
                                            <div class="input-container">
                                                <label for="social.google.secret" trans="">Google Secret</label>
                                                <input id="social.google.secret" name="social.google.secret" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                        
                                    
                                        <div class="setting-checkbox facebook">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="social.facebook.enable" name="social.facebook.enable" type="checkbox">
                                            <label for="social.facebook.enable" trans="">Facebook Login</label>
                                            <p trans="">Enable logging into the site via facebook.</p>
                                        </div>
                                    
                                        <!----><!---->
                                            <div class="input-container">
                                                <label for="social.facebook.id" trans="">Facebook ID</label>
                                                <input id="social.facebook.id" name="social.facebook.id" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                    
                                            <div class="input-container">
                                                <label for="social.facebook.secret" trans="">Facebook Secret</label>
                                                <input id="social.facebook.secret" name="social.facebook.secret" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                        
                                    
                                        <div class="setting-checkbox twitter">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="social.twitter.enable" name="social.twitter.enable" type="checkbox">
                                            <label for="social.twitter.enable" trans="">Twitter Login</label>
                                            <p>Enable logging into the site via twitter.</p>
                                        </div>
                                    
                                        <!----><!---->
                                            <div class="input-container">
                                                <label for="social.twitter.id" trans="">Twitter ID</label>
                                                <input id="social.twitter.id" name="social.twitter.id" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                    
                                            <div class="input-container">
                                                <label for="social.twitter.secret" trans="">Twitter Secret</label>
                                                <input id="social.twitter.secret" name="social.twitter.secret" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                        
                                    
                                        <button class="button primary update-button" trans="" type="submit">Update</button>
                                    </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="mail">
                                    <div class="header">
                                        <div class="title">Mail</div>
                                        <div class="subtitle" trans="">Change incoming and outgoing email handlers, email credentials and more.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    
                                        <div class="input-container">
                                            <label for="env.global_mail_from_address" trans="">From Address</label>
                                            <input id="env.global_mail_from_address" name="env.global_mail_from_address" required="" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p trans="">All outgoing application emails will be sent from this email address.</p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="env.global_mail_from_name" trans="">From Name</label>
                                            <input id="env.global_mail_from_name" name="env.global_mail_from_name" required="" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p trans="">All outgoing application emails will be sent using this name.</p>
                                        </div>
                                    
                                        <div class="widget widget-info widget-important">
                                            <div class="title" trans="">Important!</div>
                                            <p trans="">Your selected mail method must be authorized to send emails using this address and name.</p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="mail.handler" trans="">Incoming Mail Method</label>
                                            <select id="mail.handler" name="mail.handler" class="ng-untouched form-control ng-pristine ng-valid">
                                                <option trans="" value="mailgun">Mailgun</option>
                                                <option trans="" value="null">API (Send emails to app via http)</option>
                                            </select>
                                            <p trans="">Which method should be used to handle incoming application emails.</p>
                                        </div>
                                    
                                        <!----><div class="input-container">
                                            <label for="mail.webhook_secret_key" trans="">Secret Webhook Key</label>
                                            <input id="mail.webhook_secret_key" name="mail.webhook_secret_key" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p trans="">Secret key used to secure incoming application webhook requests. Any random string will work.</p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="mail.driver" trans="">Outgoing Mail Method</label>
                                            <select id="mail.driver" name="mail.driver" class="ng-untouched form-control ng-pristine ng-valid">
                                                <option value="mailgun">Mailgun</option>
                                                <option value="smtp">SMTP</option>
                                                <option value="sparkpost">SparkPost</option>
                                                <option value="ses">Ses (Amazon Simple Email Service)</option>
                                                <option value="mandrill">Mandrill</option>
                                                <option value="mail">PHP Mail</option>
                                                <option value="sendmail">SendMail</option>
                                                <option value="log">Log (Email will be saved to error log)</option>
                                            </select>
                                            <p trans="">Which method should be used for sending outgoing application emails.</p>
                                        </div>
                                    
                                        
                                       
                                    
                                        <div class="setting-checkbox margin-top">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="mail.use_default_templates" name="mail.use_default_templates" type="checkbox">
                                            <label for="mail.use_default_templates" trans="">Default Mail Templates</label>
                                            <p trans="">Use default email templates, even if they have been modified via "Mail Templates" page.</p>
                                        </div>
                                    
                                        <div class="setting-checkbox margin-top">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="mail.store_unmatched_emails" name="mail.store_unmatched_emails" type="checkbox">
                                            <label for="mail.store_unmatched_emails" trans="">Store Unmatched Emails</label>
                                            <p trans="">Store all original incoming emails, even if they were not used to create a new reply or ticket.</p>
                                        </div>
                                    
                                        <button class="button primary update-button" trans="" type="submit">Update</button>
                                    </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="cache">
                                    <div class="header">
                                        <div class="title" trans="">Cache</div>
                                        <div class="subtitle" trans="">Configure cache time, method and related 3rd party integrations.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                        <div class="input-container">
                                            <label for="cache.report_minutes">Report Cache Time</label>
                                            <input id="cache.report_minutes" min="1" name="cache.report_minutes" type="number" class="ng-untouched form-control ng-pristine ng-valid">
                                            <p>For how long should reports page be cached (in minutes).</p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="cache.driver" trans="">Cache Method</label>
                                            <select id="cache.driver" name="cache.driver" class="ng-untouched form-control ng-pristine ng-valid">
                                                <option value="file">File</option>
                                                <option value="array">None</option>
                                                <option value="apc">APC</option>
                                                <option value="memcached">Memcached</option>
                                                <option value="redis">Redis</option>
                                            </select>
                                            <p trans="">Which method should be used for storing and retrieving cached items.</p>
                                        </div>
                                    
                                        
                                        <!---->
                                    
                                        <button class="button flat" trans="" type="button">Clear Cache</button>
                                    
                                        <div class="widget widget-info widget-important">
                                            <div class="title" trans="">Important!</div>
                                            <p trans="">"File" is the best option for most cases and should not be changed, unless you are familiar with another cache method and have it set up on the server already.</p>
                                        </div>
                                    
                                        <button class="button primary update-button" trans="" type="submit">Update</button>
                                    </form>
                                    
                        </div>
                        <div role="tabpanel" class="tab-pane" id="realtime">
                                    <div class="header">
                                        <div class="title">Realtime</div>
                                        <div class="subtitle" trans="">Configure real time functionality and related 3rd party integrations.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="realtime.enable" name="realtime.enable" type="checkbox">
                                            <label for="realtime.enable" trans="">Real Time Functionality</label>
                                            <p trans="">Enable real time communication between browser and server.</p>
                                        </div>
                                    
                                        <div class="widget widget-info">
                                            <div class="title" trans="">Information</div>
                                            <p trans="">Realtime will allow new tickets, replies and other things that were created after opening the site to be automatically displayed without needing to refresh the browser.</p>
                                        </div>
                                    
                                        <!----><div class="input-container">
                                            <label for="broadcast_driver" trans="">Realtime Broadcasting Method</label>
                                            <select id="broadcast_driver" name="broadcast_driver" class="ng-untouched form-control ng-pristine ng-valid">
                                                <option value="pusher">Pusher</option>
                                                <option value="log">Log</option>
                                            </select>
                                        </div>
                                    
                                        
                                        <!----><!---->
                                            <div class="input-container">
                                                <label for="broadcast.pusher_key" trans="">Pusher Key</label>
                                                <input id="broadcast.pusher_key" name="broadcast.pusher_key" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                    
                                            <div class="input-container">
                                                <label for="broadcast.pusher_secret" trans="">Pusher Secret</label>
                                                <input id="broadcast.pusher_secret" name="broadcast.pusher_secret" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                    
                                            <div class="input-container">
                                                <label for="broadcast.pusher_app_id" trans="">Pusher Application ID</label>
                                                <input id="broadcast.pusher_app_id" name="broadcast.pusher_app_id" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                    
                                            <div class="input-container">
                                                <label for="broadcast.pusher_cluster" trans="">Pusher Cluster</label>
                                                <input id="broadcast.pusher_cluster" name="broadcast.pusher_cluster" class="ng-untouched form-control ng-pristine ng-valid">
                                            </div>
                                        
                                    
                                        <button class="button primary update-button" type="submit">Update</button>
                                    </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="logging">
                                    <div class="header">
                                        <div class="title">Logging</div>
                                        <div class="subtitle" trans="">Configure site error and access logging and related 3rd party integrations.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    
                                        <div class="input-container">
                                            <label for="logging.sentry_public" trans="">Sentry Public Key</label>
                                            <input id="logging.sentry_public" name="logging.sentry_public" class="ng-untouched form-control ng-pristine ng-valid">
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="logging.sentry_dsn" trans="">Sentry Private Key (DSN)</label>
                                            <input id="logging.sentry_dsn" name="logging.sentry_dsn" class="ng-untouched form-control ng-pristine ng-valid">
                                        </div>
                                    
                                        <div class="widget widget-info">
                                            <div class="title" trans="">Information</div>
                                            <p><a href="https://sentry.io" target="_blank">Sentry</a> <span trans="">integration provides real-time error tracking and helps identify and fix issues when site is in production.</span></p>
                                        </div>
                                    
                                        <button class="button primary update-button" trans="" type="submit">Update</button>
                                    </form>    
                        </div>
                        <div role="tabpanel" class="tab-pane" id="queue">
                                    <div class="header">
                                        <div class="title">Queue</div>
                                        <div class="subtitle" trans="">Select active queue method and enter related 3rd party API keys.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                        <div class="widget widget-info">
                                            <div class="title" trans="">Information</div>
                                            <p trans="">Queues allow to defer time consuming tasks, such as sending an email, until a later time. Deferring these tasks can speed up web requests to the application.</p>
                                        </div>
                                    
                                        <div class="widget widget-info widget-important">
                                            <div class="title" trans="">Important</div>
                                            <p trans="">All methods except sync require additional setup, which should be performed before changing the queue method. Consult documentation for more information.</p>
                                        </div>
                                    
                                        <div class="input-container">
                                            <label for="queue.driver" trans="">Queue Method</label>
                                            <select id="queue.driver" name="queue.driver" class="ng-untouched form-control ng-pristine ng-valid">
                                                <option value="sync">Sync</option>
                                                <option value="beanstalkd">Beanstalkd</option>
                                                <option value="database">Database</option>
                                                <option value="sqs">SQS (Amazon simple queue service)</option>
                                                <option value="redis">Redis</option>
                                            </select>
                                        </div>
                                    
                                        
                                        <!---->
                                    
                                        <button class="button primary update-button" type="submit">Update</button>
                                    </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="envato">
                                    <div class="header">
                                        <div class="title">Envato</div>
                                        <div class="subtitle" trans="">Manage envato integration module.</div>
                                    </div>
                                    
                                    <form class="body many-inputs ng-untouched ng-pristine ng-valid" ngnativevalidate="">
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="envato.enable" name="envato.enable" type="checkbox">
                                            <label for="envato.enable" trans="">Envato Integration</label>
                                            <p trans="">Enable envato integration (social login, purchase code validation, sales reports and more)</p>
                                        </div>
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="envato.require_purchase_code" name="envato.require_purchase_code" type="checkbox">
                                            <label for="envato.require_purchase_code" trans="">Envato Purchase Code</label>
                                            <p trans="">Require users to enter a valid purchase code in order to register and submit support requests.
                                                Envato social login will also check for purchase code automatically when this is enabled.</p>
                                        </div>
                                    
                                        <div class="setting-checkbox">
                                            <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="envato.filter_search" name="envato.filter_search" type="checkbox">
                                            <label for="envato.filter_search" trans="">Filter Help Center Search</label>
                                            <p trans="">Users will only be able to find articles for items that they have purchased.</p>
                                        </div>
                                    
                                        <div class="widget widget-flat">
                                            <div class="title" trans="">Envato Items</div>
                                            <p trans="">This will automatically import all your envato items for use as categories in new ticket and tickets list pages.</p>
                                            <button class="button flat" trans="" type="button">Import Envato Items</button>
                                        </div>
                                    
                                        <button class="button primary update-button" type="submit">Update</button>
                                    </form>
                                    
                                    
                        </div>
                    
                      </div>
                    
            
            
            
                    
                
                
            </div>
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