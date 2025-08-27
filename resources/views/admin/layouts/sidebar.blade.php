<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ Storage::url(Auth::guard('admin')->user()->image) }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @can('view dashboard')
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.banners.index') }}" class="nav-link {{ Route::is('admin.banners.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Banner</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.abouts.index') }}" class="nav-link {{ Route::is('admin.abouts.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>About</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item has-treeview {{ Route::is('admin.services.*') || Route::is('admin.service-items.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-concierge-bell"></i>
                        <p>
                            Services Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.services.index') }}" class="nav-link {{ Route::is('admin.services.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Service</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.service-items.index') }}" class="nav-link {{ Route::is('admin.service-items.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service Items</p>
                            </a>
                        </li>


                    </ul>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item has-treeview {{ Route::is('admin.serviceone.*') || Route::is('admin.servicethree.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-concierge-bell"></i>
                        <p>
                            Services Type
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.serviceone.index') }}" class="nav-link {{ Route::is('admin.serviceone.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Website Design</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.servicethree.index') }}" class="nav-link {{ Route::is('admin.servicethree.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cloud Web Hosting</p>
                            </a>
                        </li>


                    </ul>
                </li>
                @endcan



                 @can('view setting')
                <li class="nav-item has-treeview {{ Route::is('admin.servicetwo.*') || Route::is('admin.workingarea.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-concierge-bell"></i>
                        <p>
                            Services Property
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.servicetwo.index') }}" class="nav-link {{ Route::is('admin.servicetwo.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Property Processing</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.workingarea.index') }}" class="nav-link {{ Route::is('admin.workingarea.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Working Area</p>
                            </a>
                        </li>


                    </ul>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item has-treeview {{ Route::is('admin.portfolio-categories.*') || Route::is('admin.portfolios.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Portfolio Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.portfolio-categories.index') }}"
                                class="nav-link {{ Route::is('admin.portfolio-categories.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.portfolios.index') }}"
                                class="nav-link {{ Route::is('admin.portfolios.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolios</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ Route::is('admin.blogs.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>Blog</p>
                    </a>
                </li>
                @endcan




                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ Route::is('admin.testimonials.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
                @endcan


                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.teams.index') }}" class="nav-link {{ Route::is('admin.teams.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Teams</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ Route::is('admin.contacts.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contact</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.pages.index') }}" class="nav-link {{ Route::is('admin.pages.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pages</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.welcomes.index') }}" class="nav-link {{ Route::is('admin.welcomes.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Welcome</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.whychooses.index') }}" class="nav-link {{ Route::is('admin.whychooses.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Why Choose Us</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.cores.index') }}" class="nav-link {{ Route::is('admin.cores.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bullseye"></i>
                        <p>Core</p>
                    </a>
                </li>
                @endcan

                @can('view setting')
                <li class="nav-item has-treeview {{ Route::is('admin.faq-categories.*') || Route::is('admin.faqs.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            FAQ Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.faq-categories.index') }}"
                                class="nav-link {{ Route::is('admin.faq-categories.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ Categories</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.faqs.index') }}"
                                class="nav-link {{ Route::is('admin.faqs.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endcan



                <!-- Role Managment  -->
                @can(['view role','view user'])
                <li class="nav-item {{ Route::is('admin.roles.*') || Route::is('admin.users.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('view user')
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link {{ Route::is('admin.users.*') ? 'active' : '' }}">
                                <i class="fa fa-angle-right nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                        @endcan
                        @can('view role')
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" class="nav-link {{ Route::is('admin.roles.*') ? 'active' : '' }}">
                                <i class="fa fa-angle-right nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.section-title.index') }}" class="nav-link {{ Route::is('admin.sections.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>Section Title</p>
                    </a>
                </li>
                @endcan



                @can('view setting')
                <li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link {{ Route::is('admin.settings.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                @endcan



        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>