<?php include 'partials/header.php';?>

    <!-- HERO SECTION-->
    <section class="hero-section party-hero green-hero">
        <div class="hero-container">
            <h1>green party</h1>
        </div>
    </section>

    <main class="green-main">
        <!-- PARTY DESCRIPTION SECTION -->
        <section class="party-description">
            <div class="row">
                <div class="about-content party-about small-12 medium-6 large-6 columns">
                    <h3>green party</h3>
                    <p>Founded in 1983, The Green Party of Canada advance a broad multi-issue political platform that reflects its core values of ecological wisdom, social justice, grassroots democracy and non-violence. The party broke 1% of the popular vote in the 2004 federal election, when it received 4.3% and qualified for federal funding. In the 2008 federal election, the Green Party of Canada was invited to
                    </p>
                    <button class="primary-btn" onclick="loadXMLDoc('Green Party', 'CaucusShortName')">SEE PARTY'S MPs</button>
                </div>
                <div class="leader-container small-12 medium-6 large-6 columns">
                    <img src="img/parties/green-leader.jpg" alt="Leader Image" />
                    <p>Leader - Elizabeth May</p>
                </div>
                <table class="large-12 columns" id="mp"></table>
            </div>

            <!-- XML -->
        </section>

        <!-- PRIMARY POLICIES SECTION -->
        <section class="parties-links-section">
            <h1>primary policies</h1>
            <div class="row">
                <div class="small-12 medium-12 large-12 columns">
                    <div class="tabs tabs-style-iconbox">
                        <nav>
                            <!-- TABS -->
                            <ul>
                                <li>
                                    <a href="#liberal-tab-box-1" class="icon">
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#liberal-tab-box-2" class="icon">
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#liberal-tab-box-3" class="icon">
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#liberal-tab-box-4" class="icon">
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#liberal-tab-box-5" class="icon">
                                        <span></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- TAB CONTENTS-->
                        <!-- Tab Btns -->
                        <ul class="tabs" data-tabs id="policy-tabs">
                          <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Marijuana legalization</a></li>
                          <li class="tabs-title"><a href="#panel2">Youth Issues</a></li>
                          <li class="tabs-title"><a href="#panel3">Pipelines</a></li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tabs-content" data-tabs-content="policy-tabs">
                          <div class="tabs-panel is-active" id="panel1">
                            <p>The complete legalization of marijuana and tax collection on the industry.</p>
                          </div>
                          <div class="tabs-panel" id="panel2">
                            <p>The elimination of all tuition fees by 2020, by starting off with nixing them for low income students.</p>
                          </div>
                          <div class="tabs-panel" id="panel3">
                            <p>The complete opposition of all pipeline proposals.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARIES LINKS -->
        <section class="parties-links">
            <h1>see other parties</h1>
            <div class="row">
                <div class="small-12 medium-4 large-4 columns">
                    <figure class="snip1091 liberal link-container">
                        <img src="img/index/liberal.png" alt="Parties Links" />
                        <figcaption>
                            <h2>liberal party of canada</h2>
                        </figcaption>
                        <a href="liberal.php"></a>
                    </figure>
                </div>
                <div class="small-12 medium-4 large-4 columns">
                    <figure class="snip1091 con link-container">
                        <img src="img/index/cons.jpg" alt="Parties Links" />
                        <figcaption>
                            <h2>conservative party of canada</h2>
                        </figcaption>
                        <a href="conservative.php"></a>
                    </figure>
                </div>
                <div class="small-12 medium-4 large-4 columns">
                    <figure class="snip1091 ndp liberal link-container">
                        <img src="img/index/ndp.jpg" alt="Parties Links" />
                        <figcaption>
                            <h2>new democratic party</h2>
                        </figcaption>
                        <a href="ndp.php"></a>
                    </figure>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/footer.php';?>
