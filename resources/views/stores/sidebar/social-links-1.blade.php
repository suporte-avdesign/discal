<ul class="header-social-links">
    @if($configStore->socialLinks->facebook == 1)
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    @endif
    @if($configStore->socialLinks->twitter == 1)
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    @endif
    @if($configStore->socialLinks->instagram == 1)
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    @endif
</ul>
