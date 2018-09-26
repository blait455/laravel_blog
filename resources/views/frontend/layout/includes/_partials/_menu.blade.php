<header class="relative">

    <div id="sticky_nav_top">
        <div class="nav-bg homepage-nav">
            <div class="row">
                <div class="columns">
                    <div id="sticky_nav" class="sticky">
                        <nav class="top-bar" id="top_bar_nav" data-topbar="" data-options="sticky_on: large">
                            <ul class="title-area">
                                <li class="name">
                                    <h1>
                                        <a href="https://test.kittenads.co.uk/blog/" class="logo">
                                            <img src="https://test.kittenads.co.uk/blog/public/frontend/images/FADblog_logo.svg" alt="Friday-Ad">
                                        </a>
                                    </h1>
                                </li>
                                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                                <li class="toggle-topbar menu-icon" id="mobile_menu_li"><a href="javascript:void(0);"><span class="menu" id="top_bar_nav_menu_span"></span></a></li>
                            </ul>

                            <section class="top-bar-section">
                                <!-- Right Nav Section -->
                                <div class="tablet-menu">
                                    <ul class="left real-desktop" id="top_category_menu">
                                        <li class="has-dropdown not-click">
                                            <a href="javascript://" class="main_category hide-for-small-only">Blog Categories</a>
                                            <ul class="all-menu dropdown">
                                                <li>
                                                    <div class="row">
                                                        <div class="columns show-for-small-only">
                                                            <a href="#" class="parent-list mobile-list-text">MENU</a>
                                                        </div>
                                                        @foreach($categories as $category)
                                                        <div class="large-4 medium-4 columns">
                                                            <a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <script language="javascript" type="text/javascript">
                                        //<![CDATA[
                                        $(document).foundation('topbar', 'reflow');
                                        //]]>
                                    </script>
                                </div>

                                <ul class="right">
                                    <li class="place-item-btn show-for-small-only"><a href="/paa/first_step" title="Place an ad" class="placead mobile-paa-btn">Place an ad</a></li>
                                    <li class="mob-fad-logo"><a title="" class="p-r-0"><img src="https://test.kittenads.co.uk/blog/public/frontend/images/FAD.co.uk_logo.png"></a></li>
                                </ul>
                            </section>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="dropdown-bg"></div>
        </div>
    </div>
</header>