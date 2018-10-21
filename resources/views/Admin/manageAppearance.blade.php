@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')





<input class="router" type="hidden" value="{{ "appearance"}}">
<div class="ad-ar-content appearance">
                <aside class="sidebar">
                        <div class="header">
                            <div class="back-button">
                               <i class="fa fa-close fa-lg icon-close"></i>
                            </div>
                            <div class="title" i18="">Appearance Editor</div>
                            <button class="button primary save-button" disabled="">
                                <!---->
                                <!----><span trans="">Saved</span>
                            </button>
                        </div>
                    
                        <div class="navigation nav nav-tabs tab-displayed" role="tablist" id="appearance-nav-tabs">
                            <ul class="list-unstyled">

                             <li role="presentation">
                            <a class="nav-item selected"  href="#general" aria-controls="general" role="tab" data-toggle="tab">
                                <span class="name">General</span>
                                <i class="fa fa-chevron-right "></i>
                            </a>
                             </li>
                             <li role="presentation">
                            <a class="nav-item" href="#colors" aria-controls="colors" role="tab" data-toggle="tab">
                                <span class="name">Colors</span>
                                <i class="fa fa-chevron-right "></i>
                            </a>
                             </li>
                            <li role="presentation">
                            <a class="nav-item" href="#helpCenter" aria-controls="helpCenter" role="tab" data-toggle="tab">
                                <span class="name">Help Center Homepage</span>
                                <i class="fa fa-chevron-right "></i>
                            </a>
                            </li>
                            <li role="presentation">
                            <a class="nav-item" href="#newticket" aria-controls="newticket" role="tab" data-toggle="tab">
                                <span class="name">New Ticket Page</span>
                                <i class="fa fa-chevron-right "></i>
                            </a>
                            </li>
                            <li role="presentation">
                            <a class="nav-item" href="#menus" aria-controls="menus" role="tab" data-toggle="tab">
                                <span class="name">Menus</span>
                                <i class="fa fa-chevron-right "></i>
                            </a>
                            </li>
                            <li role="presentation">
                            <a class="nav-item" href="#customcode" aria-controls="customcode" role="tab" data-toggle="tab">
                                <span class="name">Custom Code</span>
                                <i class="fa fa-chevron-right "></i>
                            </a>
                            </li>
                            <li role="presentation">
                                <a class="nav-item" href="#seo" aria-controls="seo" role="tab" data-toggle="tab">
                                    <span class="name">SEO Settings</span>
                                    <i class="fa fa-chevron-right "></i>
                                </a>
                            </li>
                            </ul>
                        </div>
                    
                        <div class="tabs tab-content tab-not-displayed" id="appearance-tab-content">
                            
                           <div role="tabpanel" class="tab-pane active" id="general">
                                <div class="header">
                                        <div class="back-button">
                                        <i class="fa fa-chevron-left fa-lg "></i>
                                        </div>
                                        <div class="title">
                                          <div class="static" i18="">Customizing</div>
                                          <div class="path"><span>General</span></div>  
                                        </div>
                                        
                                </div>
                                <div class="appearance-panel" style="padding: 8px;">
                                     <!-- white background -->
                                <div class="field-container">
                                        <div class="label">Logo #1 (on Footer)</div>
                                        <div class="img-container">
                                                <input type="hidden" name="" id="copyright-img">
                                            <!----><img src="{{asset('img')}}/{{$siteSettings->copyright_img}}">
                                                   <a class="add-image-after-remove">Add</a>
                                            <!---->
                                    
                                        </div>
                                        <dropdown class="actions cus-gen-dropdown">
                                                <button class="no-style"><i class="fa fa-cog fa-lg" style="margin-top: 6px;"></i></button>
                                                <div class="dropdown-menu transformed " style="    padding: 0;    min-width: 60px;" id="footer">
                                                    <!----><div class="dropdown-item" trans="" style="font-size: 1rem;">Remove</div>
                                                    <!----><div class="dropdown-item" trans="" style="font-size: 1rem;">Use Default</div>
                                                </div>
                                        </dropdown>
                                </div>
                                <!-- colored background --> 
                                <div class="field-container">
                                        <div class="label">Logo #2 (on white background)</div>
                                        <div class="img-container">
                                                   <input type="hidden" name="" id="logoWhite">
                                        <!----><img src="{{asset('img')}}/{{$siteSettings->logoWhite}}">
                                            <!----><a class="add-image-after-remove">Add</a>
                                    
                                        </div>
                                        <dropdown class="actions cus-gen-dropdown">
                                                <button class="no-style"><i class="fa fa-cog fa-lg" style="margin-top: 6px;"></i></button>
                                                <div class="dropdown-menu transformed " style="    padding: 0;    min-width: 60px;" id="white">
                                                    <!----><div class="dropdown-item" trans="" style="font-size: 1rem;">Remove</div>
                                                    <!----><div class="dropdown-item" trans="" style="font-size: 1rem;">Use Default</div>
                                                </div>
                                        </dropdown>
                                </div>
                               
                                <!-- favicon -->
                                <div class="field-container">
                                        <div class="label">Favicon</div>
                                        <div class="img-container">
                                                   <input type="hidden" name="" id="favicon-icon">
                                                   @if($siteSettings->favicon_icon !='')
                                                   <img src="{{asset('img')}}/{{$siteSettings->favicon_icon}}">
                                                   @else
                                                        <a class="add-image-after-remove" style="display:block">Add</a>
                                                   @endif
                                            <!---->
                                            <!---->
                                    
                                        </div>
                                        <dropdown class="actions cus-gen-dropdown">
                                                <button class="no-style"><i class="fa fa-cog fa-lg" style="margin-top: 6px;"></i></button>
                                                <div class="dropdown-menu transformed " style="    padding: 0;    min-width: 60px;" id="favicon">
                                                    <!----><div class="dropdown-item" trans="" style="font-size: 1rem;">Remove</div>
                                                    <!----><div class="dropdown-item" trans="" style="font-size: 1rem;">Use Default</div>
                                                </div>
                                        </dropdown>
                                </div>
                                <!-- site name -->
                                <div class="input-container">
                                        <input type="hidden" name="" id="site-name">
                                        <label for="Site Name">Site Name</label>
                                        <input type="text" id="Site-Name" placeholder="Poostel" class="ng-pristine ng-valid ng-touched" value="{{$siteSettings->site_name}}">
                                </div>
                                <!-- site url -->
                                <div class="input-container">
                                        <input type="hidden" name="" id="site-url">
                                        <label for="Site Url">Site Url</label>
                                        <input type="text" id="Site-Url" placeholder="" class="ng-pristine ng-valid ng-touched" value="{{$siteSettings->site_url}}">
                                </div>
                                   
                                </div>
                           </div>  
                            <div role="tabpanel" class="tab-pane" id="colors">
                                <div class="header">
                                        <div class="back-button">
                                        <i class="fa fa-chevron-left fa-lg"></i>
                                        </div>
                                        <div class="title">
                                             <div class="static" i18="">Customizing</div>
                                             <div class="path"><span>COLORS</span></div>
                                        </div>
                                       
                                </div>
                                <div class="appearance-panel" style="padding: 8px;">
                                    <div class="field-color-input">
                                            <div class="color-picker-container">
                                                    <label for="iconcolor1"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></label>
                                                    <span class="name">Primary Color</span>
                                                    <label for="iconcolor1" class="change" trans="">Change</label>
                                            </div>
                                            <form action="" >
                                                {{csrf_field()}}
                                                <input type="color" name="iconcolor" id="iconcolor1" style="display:none">
                                            </form>
                                    </div>
                                </div>
                                 
                            </div>  
                            <div role="tabpanel" class="tab-pane" id="helpCenter">
                                    <div class="header">
                                            <div class="back-button">
                                            <i class="fa fa-chevron-left fa-lg"></i>
                                            </div>
                                            <div class="title">
                                                 <div class="static" i18="">Customizing</div>
                                                 <div class="path"><span>Help Center Homepage</span></div>
                                            </div>
                                           
                                    </div>
                                    
                                    <div class="appearance-panel" style="padding: 8px;">
                                            <form action="{{route('admin.save_appear_helpCenter')}}" method="post" enctype="multipart/form-data" class="form-changed">
                                                {{csrf_field()}}
                                                <input type="hidden" name="intro" value="intro">
                                                <div class="input-container">
                                                        <label for="Title">Title</label>
                                                        <input type="text" name="intro_title" id="intro-title" placeholder="How can we help you?" class="ng-pristine ng-valid ng-touched" value="{{$siteSettings->into_title}}">
                                                </div>
                                               
                                                <div class="input-container">
                                                        <label for="Search Field Placeholder">Search Field Placeholder</label>
                                                        <input type="text" name="intro_search_placeholder" id="Search Field Placeholder" placeholder="Enter your question or keyword here" class="ng-pristine ng-valid ng-touched search-in-appearance" value="{{$siteSettings->intro_search_placeholder}}">
                                                </div>
                                            </form> 
                                    </div>
                            </div> 
                            <div role="tabpanel" class="tab-pane" id="newticket">
                                    <div class="header">
                                            <div class="back-button">
                                            <i class="fa fa-chevron-left fa-lg"></i>
                                            </div>
                                            <div class="title">
                                                 <div class="static" i18="">Customizing</div>
                                                 <div class="path"><span>New Ticket Page</span></div>
                                            </div>
                                           
                                    </div>
                                    <div class="appearance-panel add-ticket-panel" style="padding: 8px;">
                                            <form action="{{route('admin.save_appear_newTicketpage')}}" method="post" enctype="multipart/form-data" class="form-changed">
                                            {{csrf_field()}}     
                                            <div class="input-container">
                                                    <label for="Title">Title</label>
                                                    <input type="text" name="title" id="Titlem" placeholder="Submit a Ticket" class="ng-untouched ng-pristine ng-valid" value="{{$newTicketPage->title}}">
                                            </div>
                                            <div class="input-container">
                                                    <label for="Category Label">Category Label</label>
                                            <input type="text" name="Category_label" id="Category-Label" placeholder="Select the item you need help with" class="ng-untouched ng-pristine ng-valid" value="{{$newTicketPage->Category_label}}">
                                            </div>
                                            <div class="input-container">
                                                    <label for="Category Label">Sub-Category Label</label>
                                            <input type="text" name="Sub_Category_label" id="sub-Category" name="Sub_Category_label" placeholder="Select the item you need help with" class="ng-untouched ng-pristine ng-valid" value="{{$newTicketPage->Sub_Category_label}}">
                                            </div>
                                            <div class="input-container">
                                                    <label for="Subject Label">Subject Label</label>
                                                    <input type="text" name="Subject_Label" id="Subject-Label" placeholder="In a few words, tell us what your enquiry is about" class="ng-pristine ng-valid ng-touched" value="{{$newTicketPage->Subject_Label}}">
                                            </div>
                                            <div class="input-container">
                                                    <label for="Description Label">Description Label</label>
                                                    <input type="text" name="Description_Label" id="Description-Label" placeholder="Tell us more...Please be as detailed as possible." class="ng-pristine ng-valid ng-touched" value="{{$newTicketPage->Description_Label}}">
                                            </div>
                                            
                                            <div class="input-container">
                                                    <label for="Sidebar Title">Sidebar Title</label>
                                                    <input type="text" name="Sidebar_Title" id="Sidebar-Title" placeholder="Before you submit:" class="ng-pristine ng-valid ng-touched" value="{{$newTicketPage->Sidebar_Title}}">
                                            </div>
                                            <div class="input-container">
                                                    <label for="Submit button">Submit Button</label>
                                                    <input type="text" name="Submit_button" id="Submit-button" placeholder="Submit" class="ng-pristine ng-valid ng-touched" value="{{$newTicketPage->Submit_button}}">
                                            </div>
                                            <div class="appearance-list-input"><div class="title">Sidebar Tips</div>
                                                
                                                <div class="list-items">
                                                    @if($newTicketPage->Sidebar_Tips1 !=null)
                                                    <!----><div class="list-item input-container">
                                                        <input name="Sidebar_Tips1" class="title t1 ng-pristine ng-valid ng-touched" type="text" value="{{$newTicketPage->Sidebar_Tips1}}">
                                                        <input name="Sidebar_Tips1_details" class="content ng-untouched ng-pristine ng-valid" type="text" value="{{$newTicketPage->Sidebar_Tips1_details}}">
                                                        <button class="no-style remove-item-button" tooltip="Remove" type="button"><i class="fa fa-close" style="background:red;padding: 3px;color:#fff;"></i></button>
                                                    </div>
                                                    @endif
                                                    @if($newTicketPage->Sidebar_Tips2 !=null)
                                                    <div class="list-item input-container">
                                                        <input name="Sidebar_Tips2" class="title t2 ng-untouched ng-pristine ng-valid" type="text" value="{{$newTicketPage->Sidebar_Tips2}}">
                                                        <input name="Sidebar_Tips2_details" class="content ng-untouched ng-pristine ng-valid" type="text" value="{{$newTicketPage->Sidebar_Tips2_details}}">
                                                        <button class="no-style remove-item-button" tooltip="Remove" type="button"><i class="fa fa-close" style="background:red;padding: 3px;color:#fff;"></i></button>
                                                    </div>
                                                    @endif
                                                    @if($newTicketPage->Sidebar_Tips3 !=null)
                                                    <div class="list-item input-container">
                                                        <input name="Sidebar_Tips3" class="title t2 ng-untouched ng-pristine ng-valid" type="text" value="{{$newTicketPage->Sidebar_Tips3}}">
                                                        <input name="Sidebar_Tips3_details" class="content ng-untouched ng-pristine ng-valid" type="text" value="{{$newTicketPage->Sidebar_Tips3_details}}">
                                                        <button class="no-style remove-item-button" tooltip="Remove" type="button"><i class="fa fa-close" style="background:red;padding: 3px;color:#fff;"></i></button>
                                                    </div>
                                                    @else
                                                    <div class="list-item input-container slidebar_tips3 tab-not-displayed">
                                                            <input name="Sidebar_Tips3" class="title t2 ng-untouched ng-pristine ng-valid" type="text" value="">
                                                            <input name="Sidebar_Tips3_details" class="content ng-untouched ng-pristine ng-valid" type="text" value="">
                                                            <button class="no-style remove-item-button" tooltip="Remove" type="button"><i class="fa fa-close" style="background:red;padding: 3px;color:#fff;"></i></button>
                                                    </div>
                                                    @endif
                                                    
                                                </div>
                                                
                                                <div class="add-button-container add-slidebar-tip">
                                                    <button class="button flat" trans="" type="button">Add</button>
                                                </div></div>
                                            </form>
                                    </div>
                            </div> 
                            <div role="tabpanel" class="tab-pane" id="menus">
                                    <div class="header">
                                            <div class="back-button">
                                            <i class="fa fa-chevron-left fa-lg"></i>
                                            </div>
                                            <div class="title">
                                                 <div class="static" i18="">Customizing</div>
                                                 <div class="path"><span>Menus</span></div>
                                            </div>
                                           
                                    </div>
                                    <div class="appearance-panel-content">
                                        <!----><div class="menus">
                                            <div class="navigation nav nav-tabs tab-displayed" role="tablist" id="appearance-nav-tabs" style="padding:0;border:0">
                                                    <ul class="list-unstyled " id="list-of-header-menu">
                                                          <li role="presentation">
                                                                  <a class="nav-item" href="#menu-details" aria-controls="menu-details" role="tab" data-toggle="tab">
                                                                        <span class="name" style="min-width: 100px;font-size: 1rem;">Header Menu</span>
                                                                        <i class="fa fa-chevron-right "></i>
                                                                  </a>
                                                          </li>
                                                    </ul>
                                              </div>
                                            
                                                
                                               
                                        
                                               
                                            </div>
                                            <div class="action-buttons add-menu">
                                                    <input type="hidden" id="number-of-menu" value="1">
                                                    <button class="button primary" trans="">Add a Menu</button>
                                            </div>
                                        
                                            <!---->
                                        
                                            <!---->
                                            
                                    </div>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane" id="customcode">
                                    <div class="header">
                                            <div class="back-button">
                                            <i class="fa fa-chevron-left fa-lg "></i>
                                            </div>
                                            <div class="title">
                                                 <div class="static" i18="">Customizing</div>
                                                 <div class="path"><span>Custom Code</span></div>
                                            </div>
                                           
                                    </div>
                                    customcode
                            </div>
                            <div role="tabpanel" class="tab-pane" id="seo">
                                    <div class="header">
                                            <div class="back-button">
                                            <i class="fa fa-chevron-left fa-lg "></i>
                                            </div>
                                            <div class="title">
                                                 <div class="static" i18="">Customizing</div>
                                                 <div class="path"><span>SEO Settings</span></div>
                                            </div>
                                           
                                    </div>
                                    seo
                            </div> 
                            <div role="tabpanel" class="tab-pane" id="menu-details">
                                    <div class="header">
                                            
                                            <div class="back-button back-to-menu-tab">
                                            <i class="fa fa-chevron-left fa-lg "></i>
                                            </div>
                                            <div class="title">
                                                 <div class="static" i18="">Customizing</div>
                                                 <div class="path"><span>Menus</span></div>
                                            </div>
                                           
                                    </div>
                                    <div class="appearance-panel-content">
                                            <!---->
                                        <form action="{{route('admin.update_menu',['id'=>$menu[0]->id])}}" method="post" class="form-changed" >
                                            {{csrf_field()}}
                                            <!----><div class="menu-panel">
                                                <div class="many-inputs menu-settings">
                                                    <div class="input-container">
                                                        <label for="menu-name" trans="">Menu Name</label>
                                                        <input name="name" id="menu-name" type="text" class="ng-pristine ng-valid ng-touched" value="{{$menu[0]->name}}">
                                                    </div>
                                        
                                                    <div class="input-container">
                                                        <label for="menu-position" trans="">Menu Position</label>
                                                        <select name="position" id="menu-position" class="ng-pristine ng-valid ng-touched">
                                                            @if($menu[0]->position=='header')
                                                            <option trans="" selected value="header">Header</option>
                                                            <option trans="" value="footer">Footer</option>
                                                            @endif
                                                            @if($menu[0]->position=='footer')
                                                            <option trans=""  value="header">Header</option>
                                                            <option selected trans="" value="footer">Footer</option>
                                                            @endif
                                                            
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                        
                                                <menu-items><div class="inner" reorder="collapse-panel">
                                            <div class="title" trans="">Menu Items</div>
                                        
                                            <!---->
                                            @foreach($menu[0]->menuItems(1) as $item_menu)
                                            <div class="collapse-panel" uuid="675" draggable="true">
                                                <div class="collapse-header nav-item">
                                                    <button class="no-style drag-handle"><i class="fa fa-bars"></i></button>
                                                    <span class="name">{{$item_menu->label}}</span>
                                                    <i class="fa fa-chevron-down icon-keyboard-arrow-down arrow-icon"></i>
                                                </div>
                                                <div class="collapse-body many-inputs">
                                                    <div class="input-container">
                                                        <label trans="" for="675-label">Label</label>
                                                        <input name="lebel" type="text" id="675-label" class="ng-untouched ng-pristine ng-valid" value="{{$item_menu->label}}">
                                                    </div>
                                        
                                                    <div class="input-container">
                                                        <label trans="" for="675-type">Type</label>
                                                        <select name="type" id="675-type" class="ng-valid ng-dirty ng-touched">
                                                            <option @if($item_menu->type =='Link') selected @endif trans="" value="link">Link</option>
                                                            <option @if($item_menu->type =='Route') selected @endif trans="" value="route">Route</option>
                                                            <option @if($item_menu->type =='Page') selected @endif trans="" value="page">Page</option>
                                                        </select>
                                                    </div>
                                        
                                                    <div class="input-container">
                                                        <label trans="" for="675-action">Action</label>
                                                        <input name="action" type="text" id="675-action" class="ng-untouched ng-pristine ng-valid" value="{{$item_menu->action}}">
                                                    </div>
                                        
                                                    <div class="input-container">
                                                        <label trans="" for="675-condition">Condition</label>
                                                        <select name="condition" id="675-condition" class="ng-untouched ng-pristine ng-valid">
                                                            <option @if($item_menu->condition ==null) selected @endif trans="" value="0: null">None</option>
                                                            <option @if($item_menu->condition =='auth') selected @endif trans="" value="auth">Show to Logged in Users Only</option>
                                                            <option @if($item_menu->condition =='guest') selected @endif trans="" value="guest">Show to Guest Users Only</option>
                                                            <option @if($item_menu->condition =='admin') selected @endif trans="" value="admin">Show to Admin Only</option>
                                                            <option @if($item_menu->condition =='agent') selected @endif trans="" value="agent">Show to Agents Only</option>
                                                        </select>
                                                    </div>
                                        
                                                    <div class="action-buttons">
                                                    <button class="no-style delete-button" trans="">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div></menu-items>
                                        
                                                <div class="action-buttons delete-menu">
                                                    <button class="no-style delete-button"  id="{{$menu[0]->id}}" trans="">Delete Menu</button>
                                                    <button class="button flat add-item-button" trans="">Add Items</button>
                                                </div>
                                            </div>
                                        </form>
                                            <!---->
                                        </div>
                            </div>
                            
                        </div>
                </aside>
                <div class="live-preview content-inner appearance-inner">
                       <!-- <iframe src="https://bedesk.vebto.com/help-center?preview=K6QnRXhhsKIVCPuyCpAHJlXF1MQoCZpAjmTzNz9J" __idm_frm__="211"></iframe> -->
                        <iframe id="full-iframe" src="{{route('MainController.helpCenter')}}" frameborder="0" style="width: 100%;    height: 100%;"></iframe>
                        <iframe id="iframe-new-ticket" src="{{route('MainController.addTicket')}}" frameborder="0" style="width: 100%;    height: 100%;display:none"></iframe>
                        <div class="selected-el-box" style="width: 0px; height: 0px; top: 0px; left: -15px;"></div>
                </div>
       
        


</div>

<div class="modal modal-visible modal-insert-image" style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" method="post" action="{{route('admin.save_appear_general')}}" enctype="multipart/form-data" >
    {{csrf_field()}}
    <input type="hidden" name="image_name" id="image-name">
    <input type="file" name="app_gen_img" id="app-gen-img" style="display:none">
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Insert Image</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="upload-panel">
        <div class="menu">
            <button class="menu-item upload-tab-button no-style active" trans="">Upload</button>
            <button class="menu-item link-tab-button no-style" trans="">Link</button>
        </div>
        
        <div class="tabs">
            <div class="tab upload">
                <label for="app-gen-img" style="display:block">
                <div class="dropzone" filedropzone="" trans="">Drop Files Here or Click to Upload

                </div>
                </label>
            </div>
            <!---->
        </div>
        <div class="tabs">
            <div class="tab upload">
                <label for="app-gen-img" style="display:block">
                    <input type="text" name="img_link" id="img-link" class="form-control" placeholder="Enter the link of image">
                </label>
            </div>
            <!---->
        </div>

        <!----><div class="errors">
            <!---->
        </div>
    </div>

    <div class="buttons right">
        <button class="button cancel" trans="" type="button">Cancel</button>
        <button class="button primary submit-button" id="app-gen-img-submit" type="submit">
            <!----><span trans="">Update</span>
            <!---->
        </button>
    </div>
 </form>
</div>
<div class="modal modal-visible modal-delete-menu" style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" action="{{route('admin.delete_menu')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="menu_id" id="menu-id" value="">
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Delete Menu</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <p style="font-size: 1.2rem;">Are you sure you want to delete this menu?</p>
    </div>

    <div class="buttons right">
        <button class="button primary submit-button" type="submit">
            <!----><span trans="">Delete</span>
            <!---->
        </button>
    </div>
 </form>
</div>

@endSection