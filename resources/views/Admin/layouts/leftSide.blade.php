<aside class="cp-left-column">
        <section class="aside-container status-tags">
            <div class="aside-container-title">
                <i class="fa fa-inbox" aria-hidden="true"></i>
                <span class="aside-container-name" trans="">Inbox</span>
            </div>
            <!-- -->
            <?php $i=13; ?>
            @foreach($tags as $tag)
            <div class="status-tag">
                
                 <a class="aside-nav-item @if($router_active == $tag) router-link-active @endif {{$tag}}" href="{{route('admin.ticket_by_tags',['tag_id'=>$i++])}}">
                    <span class="tag-name">{{$tag}}</span>
                    <span class="label tickets-count">
                            @switch($tag)
                            @case("Open")
                                {{$tco}}
                                @break
                        
                            @case("Closed")
                                {{$tcc}}
                                @break
                            @case("Pending")
                                 {{$tcp}}
                                @break
                            @case("Spam")
                                {{$tcs}} 
                                @break
                            @default
                               @break
                            @endswitch
                    </span>
                 </a>
           
                
            </div>
            @endforeach
           
        </section>

        <section class="aside-container category-tags">
            <div class="aside-container-title">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
                <span class="aside-container-name" trans="">Folders</span>
            </div>
            @foreach($folders as $folder)
            <div class="category-tag">
                <a class="aside-nav-item @if($router_active == $folder->category_name) router-link-active @endif"  href="{{route('admin.ticket_by_tags',['tag_id'=>$folder->id])}}">
                    <span class="tag-name">{{$folder->category_name}}</span>
                    <span class="label tickets-count">{{$folder->get_number_of_ticket($folder->id)}}</span>
                </a>
            </div>
            @endforeach
        </section>
    </aside>