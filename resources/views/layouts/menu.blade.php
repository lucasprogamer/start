{{-- <li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{!! route('profiles.index') !!}"><i class="fa fa-edit"></i><span>profiles</span></a>
</li>
 --}}
 <li class="menu-list"><a href=""><i class="fa fa-cog"></i> <span>Configurações</span></a>
     <ul class="sub-menu-list">
         <li><a href="{{ route('general.index') }}"><i class="fa fa-desktop"></i> Geral </a></li>
         <li><a href="{{ route('storage.index') }}"><i class="fa fa-hdd-o"></i> Armazenamento</a></li>
         <li><a href="#"><i class="fa fa-bar-chart"></i> Analytics</a></li>
         <li><a href="{{ route('mail.index') }}"><i class="fa fa-envelope-o"></i> Email</a></li>
     </ul>
 </li>
