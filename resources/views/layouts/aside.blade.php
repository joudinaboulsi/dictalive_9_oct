 

 
 
 
 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('home_path') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
               <img src="../img/logo/dictalive-logo.png" alt="" width="200">
              </span>
             
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ Route::currentRouteName() == 'seoCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'home' ? 'active' : '' }} 
            ">
              <a href="{{ route('seoCms') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Seo</div>
              </a>
            </li>
            <li class="menu-item {{ Route::currentRouteName() == 'settingsCms' ? 'active' : '' }}">
              <a href="{{ route('settingsCms') }}" class="menu-link">
                <i class="bx bx-cog me-2"></i>
                <div data-i18n="Analytics">Settings</div>
              </a>
            </li>


            <!-- Layouts -->
        

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item {{ Route::currentRouteName() == 'homeCms' ? 'active' : '' }} ||
             {{ Route::currentRouteName() == 'sliderCms' ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                               <i class='bx bxs-dock-top'></i>

                <div data-i18n="Account Settings">Home Page </div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('homeCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Content Home Page</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="{{ route('sliderCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Content Slider Section</div>
                  </a>
                </li>
              </ul>
            
            </li>
            <li class="menu-item {{ Route::currentRouteName() == 'nousConnaitreCms' ? 'active' : '' }}">
              <a href="{{ Route('nousConnaitreCms') }}" class="menu-link">
                               <i class='bx bxs-dock-top'></i>

                <div data-i18n="Without menu">Nous Connaitre </div>
              </a>
            </li>

            <li class="menu-item {{ Route::currentRouteName() == 'centreDeFrappeCms' ? 'active' : '' }} || {{ Route::currentRouteName() == 'centreDappelsCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'evaCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'reputationsCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'dictasupportCms' ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                               <i class='bx bxs-dock-top'></i>

                <div data-i18n="Layouts">Services</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ Route('centreDeFrappeCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Centre De Frappe </div>
                  </a>
                </li>
             
                <li class="menu-item">
                  <a href="{{ route('centreDappelsCms') }}" class="menu-link">
                    <div data-i18n="Container">Centre D'Appels</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('evaCms') }}" class="menu-link">
                    <div data-i18n="Container">E-Va</div>
                  </a>
                </li>
                
                <li class="menu-item">
                  <a href="{{ route('reputationsCms') }}" class="menu-link">
                    <div data-i18n="Container">E-reputation</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('dictasupportCms') }}" class="menu-link">
                    <div data-i18n="Container">DictaSupport</div>
                  </a>
                </li>
                
             
              </ul>
            </li>
      

            <li class="menu-item
            {{ Route::currentRouteName() == 'blogCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'blogDetailCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'relatedContentCms' ? 'active' : '' }} ">
          
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top'></i>
                <div data-i18n="Account Settings">Blog Page </div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('blogCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Content Blog Page</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="{{ route('blogDetailCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Blog Details Page</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="{{ route('relatedContentCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Content related Blog Section</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item {{ Route::currentRouteName() == 'politiqueCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'cookiesCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'faqCms' ? 'active' : '' }}  || {{ Route::currentRouteName() == 'mentionslegalesCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'faqContentCms' ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                               <i class='bx bxs-dock-top'></i>

                <div data-i18n="Layouts">Footer Pages</div>
              </a>

              <ul class="menu-sub">
              
              
                <li class="menu-item">
                  <a href="{{ route('politiqueCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Politique de Confidentalité </div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="{{ route('cookiesCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Politique des cookies </div>
                  </a>
                </li>


                <li class="menu-item">
                  <a href="{{ route('faqContentCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Faq Content</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="{{ route('faqCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Faq </div>
                  </a>
                </li>
                
                <li class="menu-item">
                  <a href="{{ route('mentionslegalesCms') }}" class="menu-link">
                    <div data-i18n="Without menu">Mentions legales</div>
                  </a>
                </li>

              </ul>
            </li>
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
           

            <li class="menu-item {{ Route::currentRouteName() == 'contactCms' ? 'active' : '' }} ||
            {{ Route::currentRouteName() == 'optionContactCms' ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                               <i class='bx bxs-dock-top'></i>

                <div data-i18n="Layouts">Contact</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
            
                  <a href="{{ route('contactCms') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Contact</div>
                  </a>
                </li>

                <li class="menu-item">
            
                  <a href="{{ route('optionContactCms') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Contact Form</div>
                  </a>
                </li>
              </ul>
            </li>
           
           
            <!-- Extended components -->
            <li class="menu-item">
              <a  href="{{ route('logout') }}" class="menu-link"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Extended UI">Logout</div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
                                  
            </li>

         
          </ul>
        </aside>