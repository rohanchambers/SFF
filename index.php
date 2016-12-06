<?php
// Whether this is production version or not
$PRODUCTION = TRUE;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SOHO FILM FINANCE</title>
    <meta name="description" content="We are an EIS film investment company based in London, specialising in sourcing high profile film and television projects in order to reach the highest possible returns for our clients.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?php if ($PRODUCTION) { ?>
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" type="text/css" href="css/skrollr-keyframes.css" data-skrollr-stylesheet />        
    <?php } else { ?>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/skrollr-keyframes.css" data-skrollr-stylesheet />
     <?php } ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/vendor/mustache.min.js"></script>    
</head>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>
    <div id="mobile-logo">Soho Film Finance</div>
    <nav class="main-nav show-hide">
        <ul>
            <li id="nav-item-one"><a href="#introduction">Intro</a></li>
            <li><a href="#welcome">Welcome</a></li>
            <li><a href="#directors">Directors</a></li>
            <li><a href="#milesAhead">Miles ahead</a></li>
            <li><a href="#mission">Mission &amp; Values</a></li>   
            <li><a href="#regulatory">Regulatory Environment</a></li>
            <li><a href="#our-products">Our Investments</a></li> 
            <li><a href="#music-rights">Music Rights</a></li> 
            <li><a href="#our-process">Our Process</a></li> 
            <li><a href="#summary">Summary</a></li> 
            <li><a href="#contact">Contact us</a></li>                                    
        </ul>
    </nav>
    <div id="hamburger">
        <a href="#"></a>
    </div>
</header>

<div id="skrollr-body" class="parallax-container">   
    <div id="introduction" class="wrapper"> 
        <div class="container">
            <div class="content">
                <div id="logo"></div>
                <div id="joy">Joy is an alternative investment
                    <a href="#welcome" id="scroll-down">Scroll down &amp; find out more</a>
                </div>
                <div id="circle-top"></div>
                <div id="circle-small"></div>
                <div id="circle-bottom"></div>                
            </div><!-- End of content -->            
        </div><!-- End of container -->    
    </div><!-- End of wrapper --> 

    <div id="welcome" class="wrapper">
        <div class="container">
            <div class="content">
                <article class="col-1" id="intro">
                    <h1>Welcome <br>to Soho Film Finance</h1>
                    <p class="italic">"We aim to be recognized as one of the most successful film investment companies for delivering enjoyable Film and TV programs and reaching consistent double digit returns for our clients".</p> 
                    <p class="primary-color">Davide Cottarelli, CEO &amp; Founder</p>
                    <p class="italic">"As a music producer, I create compositions with the highest sound quality using innovative recording and mixing techniques. Selecting the right films and making the soundtrack for each film a success is our goal".</p>
                    <p class="primary-color">Tom Linden, Creative Director &amp; Founder</p>        
                </article>
                
                <article class="col-2" id="about-us">
                    <h2>About us</h2>
                    <p>We aim to be recognised as one of the most successful film investment companies for delivering enjoyable Film and TV programs and reaching consistent double digit returns for our clients</p>
                    <p class="primary-color">Our main office is located at N.0. 48 Warwick Street, Soho in the heart of Londons media district.</p>
                    <p>We are also proud of our two music recording studios in Soho that when combined with our other resources deliver the perfect alternative investment.</p>
                </article>              
            </div><!-- End of content -->
        </div><!-- End of container -->
        
        <div id="london-landscape">
            
        </div>
    </div><!-- End of wrapper -->
    
    <div id="directors" class="wrapper">    
        <div class="container">
            <div class="content">
                <article class="col-1 directorsManagement">
                    <div class="header-box">
                        <h2>Directors and Founders of Soho Film Finance</h2>
                    </div>
                    <div class="profile">
                        <img src="img/directors/davide.jpg" alt="Davide Cottarelli, CEO">
                        <h3>Davide Cottarelli, CEO</h3>
                        <p>With a masters degree in PR and a major in Marketing and Communications, Davide has more than 15 years of sales experience. He is an associate member of the Chartered Security Investment Institute and a fully qualified Stockbroker, CFD, FX and Commodities Trader. His past experience involved projects in the City with stock brokerage houses, FX brokering and introducing businesses to many top prime dealer brokers and investment banks.</p>
                        <p>Davide is an Executive Producer of the film “The Exorcism of Anna Ecklund” and a BAFTA Ambassador &amp; Asian Patron. He is also a joint founder of the China UK Film Fund which has seed investment of £50 million rising to £1.5 billion by 2020.</p>
                    </div>

                    <div class="profile">
                        <img src="img/directors/tom.jpg" alt="Tom Linden, Creative Director">
                        <h3>Tom Linden, Creative Director</h3>
                        <p>Tom Linden’s music has been used in several films including Chandni Chowk to China, on TV series such as Top Gear and Green Wing, on documentaries including Northern Skies and Animal Planet, as idents for Desperate Housewives and MTV Cribs and on worldwide adverts for Baileys, Orange, Visa, Amnesty International and Firetrap. In early 2012, as part of a major rebranding, he was commissioned to give Channel 5 News a fresh sound including theme music and all titles. His compositions feature regularly on all major TV channels such as the BBC, MTV, Discovery Channel, ABC, Channel 4, Sky Sports, CBBC, Channel 5, E4 and ITV. Recently Tom composed the music for two new films ‘Brotherhood’ Directed and Produced by Noel Clarke, and the second called ‘Urban Hymn’ Directed by Michael Caton-Jones. Tom is in charge of selecting the right films for Soho Film Finance.</p>
                    </div>
                </article>

                <article class="col-2 directorsManagement">
                    <div class="header-box">    
                        <h2>Management Team Members</h2>
                    </div>                    
                    <div class="profile">
                        <img src="img/directors/robert.jpg" alt="Robert Graham, Film - Tax Advisor">
                        <h3>Robert Graham, Film - Tax Advisor</h3> 
                        <p>Robert is a Director of Graham Associates (International) Ltd, and has been a practicing accountant for over 23 years. He is an International Accountant (in the UK), based in Wales, London and Los Angeles. Rob has a track record of helping to produce British and international films by ensuring film investors enjoy the best available tax incentives by financially managing the investment and minimizing risk. He is a member of the Enterprise Investment Scheme Association, recognized by HM Treasury and is committed to excellence in creating sound, tax efficient investment schemes, they have provided financial contractual advice to major international film and TV organisations and talent agencies.</p>
                        <p>Having worked on over 30 films in the UK and internationally with budgets ranging from the lower end to multi million pound projects, Graham has built a reputation for honesty and total transparency both in the UK and in the US. Rob is also a director of several film production companies in the UK and US and is personal accountant to several well-known British actors, TV personalities and international talent. He is also a Patron of the anti knife and gun crime charity, The Ben Kinsella Trust.</p>
                    </div>

                    <div class="profile">
                        <img src="img/directors/kristin.jpg" alt="Kristin Yeatman, Financing Specialist">
                        <h3>Kristin Yeatman, Financing Specialist</h3> 
                        <p>She has more than 18 years of financing experience. In addition to senior positions at several global banks including Lloyd’s, she has also held consulting roles at Blackrock Solutions and (currently) Moody’s Analytics. Kristin’s solid background in corporate finance and project assessment is complemented by an artistic flair that makes her an ideal addition to the team.</p>
                    </div>
                </article>

<!--                 <article class="col-2 dist-advisors">
                    <div class="header-box">    
                        <h2>Distribution Advisors</h2>
                    </div>                  
                    <div class="profile">                        
                        <h3>Distribution Advisor - Tony Taglienti</h3> 
                        <p>Tony has over 28 years experience in Media content acquisition, production and publishing. With his business partner he was responsible for bringing the FIFA World Cup to the Global video market in 1990.</p>
                    </div>

                    <div class="profile">                        
                        <h3>Distribution Advisor - Sally Wood</h3> 
                        <p>Sally is the Contracts Administrator and responsible for oversees royalty reporting for our Distribution Team. She also manages the relationship with Sony DADC on packaging, DVD manufacturing, and stock management.</p>
                    </div>

                    <div class="profile">                        
                        <h3>Distribution Advisor - Steve Beecham</h3> 
                        <p>Steve has over 23 years experience in the media arena from publishing to licencing He was a former General Manager at Universal Studios who contributed to 163% growth in back catalogue turnover over a 3 year period.</p>
                    </div>
                </article>   -->                               
            </div><!-- End of content -->
        </div><!-- End of container -->
    </div><!-- End of wrapper -->
    
    <div id="milesAhead" class="wrapper">
        <div class="container clearfix">
            <div class="content">
                <article class="col-1">
                    <div id="text-be">Be</div>
                </article>

                <article class="col-2">
                    <div id="group-persons"></div>                    
                    
                    <div id="text-miles">Miles</div> 
                    <div id="text-ahead">ahead</div>
                    
                    <div id="text-investors">investors</div>
                    <div id="text-traditional">of traditional</div>
                    
                    <div id="person"></div>
                </article>  

            </div><!-- End of content -->
        </div><!-- End of container -->
    </div><!-- End of wrapper -->

    <div id="mission" class="wrapper">
            <div class="content">
                <article class="col-1" id="missionValues">
                    <ul id="mission-points">
                        <li>
                            <span>1</span>
                            <div class="description">
                                <h3>Professionalism</h3>
                                <p>We believe that being professional is the key  to any business relationship. We try to present ourselves appropriately in every situation and adapt our manner according to local culture.</p>
                            </div>
                        </li>
                        <li>
                            <span>2</span>
                            <div class="description">
                                <h3>Integrity</h3>
                                <p>We build our business relationships by treating our partners fairly, in any circumstance.</p>
                            </div>
                        </li>
                        <li>
                            <span>3</span>
                            <div class="description">
                                <h3>Quality</h3>
                                <p>We always aim to exceed the standard.</p>
                            </div>
                        </li>
                        <li>
                            <span>4</span>
                            <div class="description">
                                <h3>Unique</h3>
                                <p>We do our utmost to give you a fresh music soundtrack experience.</p>
                            </div>
                        </li>
                        <li>
                            <span>5</span>
                            <div class="description">
                                <h3>Simplicity</h3>
                                <p>We believe that keeping things simple is the best way to achieve an excellent result.</p>
                            </div>
                        </li>
                    </ul>

                    <div id="arrow">
                        <p>Mission &amp; Values</p>
                    </div>                    
                </article>

                <article class="col-2" id="worldwide">
                    <h2>Worldwide Representation</h2>
                    <img src="img/mission/bg_worldwide_map.png" alt="Worldwide Representation">
                </article>
            </div><!-- End of content -->
    </div><!-- End of wrapper -->

    <div id="regulatory" class="wrapper">    
            <div class="content">
                <article class="col-1" id="regulatory-environment">
                    <div class="col-1-inner">
                        <h2>Regulatory Environment</h2>
                        <p>
                            <span>Soho Film Finance has a high</span>
                            <span>standard of compliance and</span> 
                            <span>quality throughout its</span> 
                            <span>organization. Soho Film Finance</span> 
                            <span>only affiliates with minimum AA</span> 
                            <span>rated banks and financial</span> 
                            <span>institutions and will undergo</span> 
                            <span>consistent operational audits</span> 
                            <span>throughout the year. These</span> 
                            <span>measures help to assure the</span> 
                            <span>highest financial reporting</span> 
                            <span>quality, transparency and</span> 
                            <span>business integrity possible.</span>
                        </p>
                    </div>
                </article>
                <article class="col-2" id="credentials">
                    <div id="star"><span>Tangible Assets and<br> Our Credentials</span></div>
                    <ul id="credentials-list">
                        <li>More than 25 years’ experience in the industry.</li>
                        <li>Strong and established relationships with film studios and distribution companies.</li>
                        <li>More than 60 films and music projects with a proven track record of making money.</li>
                        <li>Music recording studio and post production suite in Soho.</li>
                        <li>EIS Approval by HRMC for tax.</li>
                    </ul>
                </article>                    
            </div><!-- End of content -->
    </div><!-- End of wrapper -->

    <div id="our-products" class="wrapper">    
        <div class="container">
            <div class="content">
                <article class="col-1">
                    <div id="our-products-copy">
                        <h2>Our Investments</h2>
                        <p>Each delivers a wide range of competitive advantages and can be adapted, and tailored to individual clients.</p> 

                        <p>Our products are meant for HNWI, UHNWI and sophisticated investors who are searching for speculative and tax relief investments, 
                        in combination with glamour experiences for the more discerning.</p>

                        <p>Through our simple application form, it is easy and convenient 
                        for clients to subscribe our fund.</p>
                    </div>

                    <div id="what-we-offer">
                        <h2>What we offer</h2>
                        <ul>
                            <li><span>1</span>An EIS Film Fund for UK investors, trust investors, or any others who expect to earn superior returns in an uncorrelated asset class and benefit from a tax relief scheme</li>
                            <li><span>2</span>Any Investors personally interested in investing directly in a specific film project</li>
                            <li class="last"><span>3</span>Glamour events in the media industry, including premieres, screenings and VIP parties</li>
                        </ul>
                    </div>
                </article>
                <article class="col-2" id="scenario">
                    <div id="circle"></div>

                    <div id="scenario-copy">
                        <h2>Media Industry Scenario</h2>
                        <p>Traditionally, the film business been thought of as a high-risk area with only a small chance of providing investor returns. But in recent years, the investment climate has changed dramatically.</p>
                        <p>With the advent of the DVD format and growth in international markets that have established steady flows of predictable revenue streams, a fundamental shift has encouraged new classes of sophisticated investors, such as hedge funds and private equity firms into this market. Investment into the film sector for higher returns with a risk profile uncorrelated to traditional investments.</p>
                        <p>As a result, film is now seen as a valid and attractive asset class in its own right. At least 30% of all studio movies are now made in partnership with third-party funding and the concept of “slate finance” is acknowledged to lower costs, reduce risks and raise returns for studios and investors alike.</p>
                    </div>
                </article>                    
            </div><!-- End of content -->
        </div><!-- End of container -->
    </div><!-- End of wrapper -->

    <div id="music-rights" class="wrapper">    
        <div class="container">
            <div class="content">
                <article class="col-1">
                    <h2>Soho Film Fund (SFF)</h2>
                    <p>The SFF consists of a diversified portfolio of high quality films selected on their commerciality and viability for development.The SFF invests on an equity basis in each film, taking ownership of revenue rights, giving investors further opportunities for capital growth and profit, such as foreign sales, merchandising and TV sales.</p>

                    <h2>The SFF Model</h2>
                    <p>Our model is built upon the conviction that a diversified portfolio of carefully chosen feature films is not correlated to traditional investment markets and indices, but rather that movie assets will continue to grow, building on the industry’s performance in the past two decades of recession-resistant growth.</p>

                    <p id="forecasting">Conservatively forecasting annualised returns to investors in the range of 15-20% Per Annum.</p>

                    <h2>Investment Strategy</h2>
                    <ul>
                        <li>The SFF will invest principally in a portfolio of high profile film projects following these criteria:</li>
                        <li>Invest a maximum 35% of the budget on an equity basis</li>
                        <li>Co-finance a mixed slate of relatively low-cost productions in conjunction with mainstream Hollywood movies in the budget range of £500K to £50 million</li>
                        <li>Partner with commercially successful producers and studios across a diversified slate of films with a pre-sales distribution agreement, building guaranteed asset value in the fund</li>
                        <li>Appoint SFF employees to each film production to supervise the project</li>
                        <li>Put completion bonds/ insurance in place</li> 
                        <li>Develop a co-marketing strategy</li>
                        <li>Hedge with similar funds</li>
                        <li>Benefit from tax reliefs</li>
                        <li>Add the film music as a dual revenue stream</li>
                    </ul>

                    <h2>Benefits</h2>
                    <h3>Financial Benefits:</h3>
                    <p class="bold">Tax Relief*</p>
                    <ul>
                        <li>Up to 30% Initial Income Tax Relief reducing the net costs of investment</li>
                        <li>Capital Gains Tax Deferral afforded by the EIS (CGT Freedom)</li>
                        <li>Inheritance Tax Relief</li>
                        <li>CGT Deferral Relief</li>
                        <li>Loss Relief</li>
                    </ul>

                    <p>*Only for UK Tax payers. Different tax relief schemes apply according to the country where the film is shot.</p>

                    <p class="bold">Investment Return</p>
                    <ul>
                        <li>High returns from movie profits</li>
                        <li>Quick returns and long life investments</li>
                    </ul> 

                    <h3>Exclusive Experiences:</h3>                    
                    <ul>
                        <li>Visit the filmset and meet the cast and crew</li>
                        <li>Private screenings</li>
                        <li>Access to film premieres</li>
                        <li>Access to after show parties</li>
                        <li>Attend wrap parties</li>
                        <li>Opportunity to take part as an extra</li>
                        <li>Receive a signed copy from the Writer - Producer - Director Team</li>
                    </ul>
                </article>
                <article class="col-2" id="revenue">
                    <div id="headphones"></div>
                    <div id="headphones-copy">
                        <h2>Music Rights as a Revenue Stream</h2>
                        <p class="first">Through the creation of a Film Soundtrack, Soho Film Finance will take an active part in the Film production hence the Music Production is a central part of what Soho Film Finance is about.</p>

                        <p>Music Producer and Composer Tom Linden has a proven Track record in writing and placing Music for Film &amp; Television. Tom has written the Channel 5 News music and his Compositions and Soundscapes have been used in TV Series such as Top Gear &amp; Green Wing, Documentaries including Northern Skies, as Idents for Desperate Housewives, MTV Cribs &amp; Discovery Channel and on Worldwide Adverts for Baileys, Orange, Visa, Amnesty International &amp; Firetrap. His Compositions feature regularly on all major Broadcasters.</p> 

                        <p>Through his work he realised the importance of owning copyrights and publishing rights as another revenue stream for Investors. According to each individual Film this may give the Investor a double opportunity to gain profits from both the Film Revenue and the Music rights. The Music rights can generate other income from sources such as Soundtrack, Licensing, TV deals, Royalties from international ticket sales and Sheet music sales.</p>
                    </div>
                </article>                    
            </div><!-- End of content -->
        </div><!-- End of container -->
    </div><!-- End of wrapper -->

    <div id="our-process" class="wrapper">    
        <div class="container">
            <div class="content">
                <img src="img/bg_process.png" alt="Our Process">              
            </div><!-- End of content -->
        </div><!-- End of container -->
    </div><!-- End of wrapper --> 

    <div id="summary" class="wrapper">    
        <div class="container">
            <div class="content">
                <article class="col-1" id="fund-facts">
                    <h2>EIS Soho Film Fund Facts</h2>
                    <p><span>Entity:</span> Varcale Capital Management Ltd,
                    EIS investment company incorporated in England.
                    (Registration No. 07732786)</p>

                    <p><span>Financial Year:</span> 2016</p>

                    <p><span>Base Currency:</span> GBP Minimumm 
                    <span>Investment:</span> £25,000<br>
                    <span>Charges and Fees:</span> Upfront fee 5%<br>
                    <span>Annual Management Fee:</span> 2%<br>
                    Hurdle Rate of 7% to be achieved before Performance Fee is taken<br>
                    <span>Performance Fee:</span> 30% of increase in NAV<br> 
                    (payable quarterly in arrears only on compound returns)</p>

                    <p><span>Dealing and Valuation Frequency:</span> Annually<br>
                    <span>Investment Manager:</span> Soho Film Finance<br>
                    <span>Custodian/Administrator:</span> Graham Associates (International) Limited<br>
                    <span>Bank:</span> Royal Bank of Scotland<br> 
                    <span>Accountant Advisor:</span> Graham Associates (International) Limited</p> 

                    <p><span>Business Address:</span> 48 Warwick Street, London, W1B 5NL</p>
                    
                    <p id="quote">
                        <span id="strong">A strong</span>
                        <span id="reliable">and reliable structure,</span>
                        <span id="serious">provided by serious, professional entities</span>
                    </p>
                </article>
                
                <article class="col-2">
                    <h2>Summary</h2>
                    <p class="first">An alternative investment with a double digit return target<br> 
                        A tax relief scheme in place for UK Taxpayers<br> 
                        More than 25 years’ experience and Strong established relationships with film studios and distribution companies<br> 
                        and a proven track record in making money<br>
                        A worldwide presence making the Fund accessible to anyone</p>

                    <h2>Risk factors</h2>
                    <p>The information and opinions contained in this document have been compiled or arrived at based upon information obtained from sources believed to be reliable, but are not guaranteed as being accurate nor is it a complete statement or summary of the securities, markets or developments referred to.</p> 

                    <p>Past performance of investments (whether simulated or actual) is not necessarily a guide to future performance. All such information and opinions are subject to change without notice. No information published within this document constitutes a solicitation or offer, or recommendation, to buy or sell any investment instruments, to effect any transactions, or to conclude any legal act of any kind whatsoever. This document may not be reproduced, redistributed or republished for any purpose without written permission of the SFF.</p> 

                    <p>The information published and opinions expressed by the SFF are for personal use and for informational purposes only and are subject to change without notice. The SFF makes no representation (either express or implied) that the information and opinions expressed within this document are accurate, complete or up to date. In particular the SFF shall not be obliged to remove any outdated information from its publications or to expressly mark it as being outdated.</p> 

                    <p>Nothing contained within this document constitutes financial, legal, tax or other advice, nor should any investment or any other decisions be made solely based on the content. You should obtain advice from a qualified expert before making any investment decision. The shares of the Fund are suitable only for sophisticated private and institutional investors who have sufficient financial resources at their disposal and who fully understand and are willing to assume the risks involved. All details of the Funds investment objectives and policies are described in the prospectus.

                    <p>For further information please refer to the SFF’s prospectus which may be obtained from the company’s registered office.</p>
                </article>                    
            </div><!-- End of content -->
        </div><!-- End of container -->
    </div><!-- End of wrapper -->

    <div id="contact" class="wrapper">    
            <div class="content">
                 <h2>Contact us</h2>
                 <div id="map">
                    <div id="map-pointer"></div>
                 </div>

                <div id="contact-info">
                    <p>48 Warwick<br> street<br> London<br> W1B 5NL</p>

                    <p class="website">www.sohofilmfinance.com</p>

                    <p><span>Phone:</span> 0207 038 8952</p>
                    <p><span>For Film Submissions:</span> 
                    <a href="mailto:enquiries@varcalecap.com">enquiries@varcalecap.com</a><p>
                    <p>Varcale Capital Management Ltd, Register No. 07732786</p>

                    <div id="credits">
                        <p>web developer - <a href="http://www.rohanchambers.net" target="_blank">RohanChambers.net</a></p>
                        <p>Stock : Shutterstock - Art Direction &amp; design : Laurent Graudens</p>
                    </div>
                </div>
            </div><!-- End of content -->
    </div><!-- End of wrapper -->
</div> 

<footer>
    <nav class="main-nav footer">
        <ul>
            <li><a href="#introduction">&copy; SOHO Film Finance</a></li>
            <li><a href="#contact">Contact us</a></li>
        </ul>            
    </nav>
</footer>

<script id="disclaimer_template" type="text/html">
    <div class="lightbox-bg"></div>
    <div class="lightbox-disclaimer">
        <div class="lightbox-panel">
            <div class="lightbox-content">
            <h2>Disclaimer</h2>
                <p>The information in this brochure has been compiled by Soho Film Finance and is intended to be used for information purposes only. It does not constitute investment advice and is not intended as an offer to buy, or for solicitation purposes, although every attempt has been made to ensure the accuracy of the information within this brochure.
                SFF assumes no responsibility for any errors or omissions.</p>
                <p>Investing in the film industry involves a high degree of risk to your money. It is meant for HNWI, professional investors only. Before investing in such markets you should be well aware of the risks involved. Do not invest funds you cannot afford to lose.</p>
                <p>SFF’s brochure is translated into various languages for the added convenience of the client. In the event of con ict between the original English content and any translation in other languages, or any other translated communications by SFF, the english version shall prevail.</p>
                <p>Soho Film Finance is a trading name of Varcale Capital Management Ltd Registered No. 07732786</p>
                <p>Do you agree yes or no?</p>
                <p><a id='cta-agree' href="#" class="close btn-global">Yes </a>            
                <a href="http://google.com" class="close btn-global"> No </a></p>
            </div>
        </div>
    </div>
</script>

<div id="disclaimer_rendered"></div>

<?php if ($PRODUCTION) { ?>
<script src="js/plugins.min.js"></script>
<script src="js/main.min.js"></script>
<?php } else { ?>
<script src="js/vendor/skrollr.stylesheets.min.js"></script>
<script src="js/vendor/skrollr.min.js"></script>
<script src="js/vendor/jquery.cookie.js"></script>
<script src="js/main.js"></script>
<?php } ?>
</body>
</html>