<?php 
// Get the current URL without the query string...
 $url = url()->current();
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin/dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li <?php if(preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>>
        <a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i><span>Dashboard</span></a> </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>News</span> <span class="label label-important"></span></a>
        <ul <?php if(preg_match("/news/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-news/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-news')}}">Add News</a></li>
          <li <?php if(preg_match("/view-news/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-news')}}">View News</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Sponser</span> <span class="label label-important"></span></a>
        <ul <?php if(preg_match("/partners/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-partners/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-partners')}}">Add Sponser</a></li>
          <li <?php if(preg_match("/view-partners/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-partners')}}">View Sponser</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Contact</span> <span class="label label-important"></span></a>
        <ul <?php if(preg_match("/contact/i", $url)){ ?> style="display:block;" <?php } ?>>
            <li <?php if(preg_match("/view-contact/i", $url)){ ?> class="active" <?php } ?>>
              <a href="{{url ('/admin/view-contact')}}">View contact</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!--sidebar-menu-->
  