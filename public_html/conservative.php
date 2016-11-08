<?php include 'partials/header.php';?>

    <!-- HERO SECTION-->
    <section class="hero-section party-hero con-hero">
        <div class="hero-container">
            <h1>conservative party of canada</h1>
        </div>
    </section>

    <main class="con-main">
        <!-- PARTY DESCRIPTION SECTION -->
        <section class="party-description">
            <div class="row">
                <div class="about-content party-about small-12 medium-6 large-6 columns">
                    <h3>conservative - her majesty’s loyal opposition</h3>
                    <p>The Conservative Party of Canada as we know it was founded in 2003 and is the successor to multiple right-wing parties which have existed in Canada for over a century. Founded on the ideologies of fiscal conservatism and economic liberalism.
                    </p>
                    <button class="primary-btn" onclick="loadXMLDoc('Conservative', 'CaucusShortName')">SEE PARTY'S MPs</button>
                </div>
                <div class="leader-container small-12 medium-6 large-6 columns">
                    <img src="img/parties/con-leader.jpg" alt="Leader Image" />
                    <p>Leader - Rona Ambrose</p>
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
                          <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Senate Reform or Abolition</a></li>
                          <li class="tabs-title"><a href="#panel2">Syrian Refugees</a></li>
                          <li class="tabs-title"><a href="#panel3">Youth Issues</a></li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tabs-content" data-tabs-content="policy-tabs">
                          <div class="tabs-panel is-active" id="panel1">
                            <p>Stephen Harper wants a senate that would require all senators to be democratically elected. Before the campaign began, he announced that he would stop appointing Senators in an effort to force the provinces to agree to a reform.</p>
                          </div>
                          <div class="tabs-panel" id="panel2">
                            <p>Create a new three year, $9 million program to assist persecuted religious minorities and would accept 10,000 refugees over 4 years.</p>
                          </div>
                          <div class="tabs-panel" id="panel3">
                            <p>Reallocate $7 million over 2 years to support the relocation of youth and immigrants to areas where job opportunities exist.</p>
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
                    <figure class="snip1091 green liberal link-container">
                        <img src="img/index/green.jpg" alt="Parties Links" />
                        <figcaption>
                            <h2>green party</h2>
                        </figcaption>
                        <a href="green.php"></a>
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
