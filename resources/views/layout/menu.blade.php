<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle small-image" src="http://i.imgur.com/8xlVtnP.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Admin</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('getCreate')}}">Create</a></li>
                    <li><a href="{{route('getStore')}}">Store</a></li>
                    <li><a href="{{route('show2')}}">Show</a></li>
                    <li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>
            @foreach( $listType as $t)
                <li>
                    <a href="layouts.html"><i class="fa fa-diamond"></i>
                        <span class="nav-label">{{$t->type}}</span>
                        <span class="fa arrow">
                    </a>

                    @foreach( $listChannel as $c)
                        @if($c->type == $t->type)
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{route('show',['alias'=>$c->alias])}}">{{$c->name}}</a></li>
                            </ul>
                        @endif
                    @endforeach

                </li>
            @endforeach
        </ul>

    </div>
</nav>