<!DOCTYPE html>
<html dir="auto" lang="pt">

<head>
    <meta charset="utf-8" />
    <meta content="NOODP" name="ROBOTS" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no" name="viewport" />
    <meta content="yes" name="mobile-web-app-capable" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="https://www.revistalofficiel.com.br/moda" rel="canonical" />
    <meta content="summary" name="twitter:card" />
    <meta content="@https://www.twitter.com/lofficielbrasil" name="twitter:site" />
    <meta content="L&#39;Officiel Brasil" name="twitter:title" />
    <meta name="twitter:description" />
    <meta content="https://www.revistalofficiel.com.br/moda" property="og:url" />
    <meta content="website" property="og:type" />
    <meta content="L&#39;Officiel Brasil" property="og:title" />
    <meta content="d82ba356e122904718c4c52044711770367b89b8" name="naver-site-verification" />
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5MNMJLP');
    </script>
    <title>L&#39;Officiel Brasil</title>
    <link rel="stylesheet" media="all" href="/assets/lofficiel/theme-6a3c582e44641968ffb99fe0c53ccb8ca87e9f02bd69ae97958654bd6a69707a.css" />
    <link rel="stylesheet" media="screen" href="https://fast.fonts.net/t/1.css?apiType=css&amp;projectid=6b47356a-a6cf-4106-b108-a52dcd63b2c1" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="cCDRlmPGKGeBmTlCoOIBwN4qMPSWRT9CvohIaLCDTlddcBjRiKwOr7FKvBKIUUniarDy+Ga5e9/ZCbpR022bDg==" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="//ced.sascdn.com/tag/739/smart.js"></script>
    <script>
        var sas = sas || {};
        sas.cmd = sas.cmd || [];
        sas.cmd.push(function() {
            sas.setup({
                networkid: "739",
                domain: "//www6.smartadserver.com",
                inSequence: true,
                async: true,
                renderMode: 2
            });
        });
        sas.cmd.push(function() {
            sas.call("onecall", {
                siteId: "140546",
                pageId: "770238",
                formatId: "15377,50205,72186,72187,72143,72163,72181,52715,72183,72184",
                target: ''
            }, {
                onNoad: function(data) {
                    var ads = document.querySelectorAll("[data-adv-format-id='" + data.formatId + "']");
                    for (var i in ads)
                        if (ads.hasOwnProperty(i)) {
                            ads[i].dataset.hasAd = false;
                            ads[i].parentNode.parentNode.removeChild(ads[i].parentNode);
                        }
                    if (data.formatId) {
                        console.log("FORMAT ID : " + data.formatId);
                        console.log("TAG ID : " + data.tagId);
                    }
                },
                onLoad: function(data) {
                    if (data.hasAd == false) {
                        return
                    }
                    var ads = document.querySelectorAll("[data-adv-format-id='" + data.formatId + "']");
                    for (var i in ads)
                        if (ads.hasOwnProperty(i)) {
                            ads[i].classList.remove("adv--hidden");
                            switch (ads[i].dataset.advFormat) {
                                case "background":
                                    document.body.classList.add("body-with-background");
                                case "topdesktop":
                                case "toptablet":
                                case "topmobile":
                                    document.body.classList.add("body-with-masthead");
                                    break;
                                case "filmstripdesktop":
                                case "filmstriptablet":
                                case "filmstripmobile":
                                    var container = ads[i].parentNode.parentNode
                                    var fallback = container.getElementsByClassName("js-fallback-post-link")[0]
                                    if (fallback != undefined) {
                                        fallback.classList.add("hidden")
                                    }

                                    var grid = document.getElementById("two-posts-adv-grid")
                                    if (grid != undefined) {
                                        grid.classList.add('grid--huge')
                                        for (var i = 0; i < grid.children.length; i++) {
                                            grid.children.item(i).classList.remove('lap-4-12')
                                            grid.children.item(i).classList.add('lap-5-12')
                                        }
                                        var stack = grid.getElementsByClassName('stack')
                                        for (var i = 0; i < stack.length; i++) {
                                            stack.item(i).classList.add('stack--tall')
                                        }
                                    }
                                    var exp_div = document.getElementById('two-posts-adv-expendable');
                                    if (exp_div != undefined) {
                                        exp_div.classList.add("hidden--on-eq-lap")
                                        exp_div.classList.add("hidden--on-eq-desk")
                                    }

                                    var elements = document.getElementsByClassName("article-layout")
                                    for (var i = 0; i < elements.length; i++) {
                                        elements.item(i).classList.add('article-layout--with-sticky-adv')
                                    }
                                    break;
                            }
                        }
                }
            });
        });
    </script>
    <link href="/apple-touch-icon.png?v=GvJx6bBe2b" rel="apple-touch-icon" sizes="180x180" />
    <link href="/favicon-32x32.png?v=GvJx6bBe2b" rel="icon" sizes="32x32" type="image/png" />
    <link href="/favicon-16x16.png?v=GvJx6bBe2b" rel="icon" sizes="16x16" type="image/png" />
    <link href="/manifest.json?v=GvJx6bBe2b" rel="manifest" />
    <link color="#000000" href="/safari-pinned-tab.svg?v=GvJx6bBe2b" rel="mask-icon" />
    <link href="/favicon.ico?v=GvJx6bBe2b" rel="shortcut icon" />
    <meta content="#ffffff" name="theme-color" />
</head>

<body class="site-body landing_pages landing_pages-show body-main-channel" data-behaviour="CheckRedirect">
<nav class="site-header">
    <div class="adv--topdesktop">
        <div class="ad adv--hidden js-adv" data-adv-format="topdesktop" data-adv-format-id="72143" data-adv-id="74667" data-has-ad="true">
            <script>
                sas.cmd.push(function() {
                    sas.render("72143");
                });
            </script>
            <noscript>
                <a href="//www4.smartadserver.com/ac?jump=1&amp;nwid=739&amp;siteid=140546&amp;pgname=homepage&amp;fmtid=72143&amp;visit=m&amp;tmstp=[timestamp]&amp;out=nonrich" target="_blank"><img alt="" border="0" src="//www4.smartadserver.com/ac?out=nonrich&amp;nwid=739&amp;siteid=140546&amp;pgname=homepage&amp;fmtid=72143&amp;visit=m&amp;tmstp=[timestamp]" /></a>
            </noscript>
        </div>
    </div>
    <div class="adv--topmobile">
        <div class="ad adv--hidden js-adv" data-adv-format="topmobile" data-adv-format-id="72181" data-adv-id="362394" data-has-ad="true">
            <script>
                sas.cmd.push(function() {
                    sas.render("72181");
                });
            </script>
            <noscript>
                <a href="//www4.smartadserver.com/ac?jump=1&amp;nwid=739&amp;siteid=140546&amp;pgname=homepage&amp;fmtid=72181&amp;visit=m&amp;tmstp=[timestamp]&amp;out=nonrich" target="_blank"><img alt="" border="0" src="//www4.smartadserver.com/ac?out=nonrich&amp;nwid=739&amp;siteid=140546&amp;pgname=homepage&amp;fmtid=72181&amp;visit=m&amp;tmstp=[timestamp]" /></a>
            </noscript>
        </div>
    </div>
    <div class="site-header__background">
        <progress class="site-header__progress" max="0" value="0"></progress>
        <div class="wrap">
            <div class="site-header__content">
                <div class="site-header__left"><a class="site-header__nav-button" data-behaviour="MainNavToggler" href="#"><i class="icon--hamburger"></i><span>menu</span></a></div>
                <a class="site-header__logo" title="L&#39;Officiel Brasil" href="/"><img alt="L&#39;Officiel Brasil" title="L&#39;Officiel Brasil" class="logo" src="/assets/logo-lofficiel-36ae23707147fc1b9a0a7bb8f89f3cd6dd85cebea49bf0a0f83089a5c11995bf.svg" /><img alt="L&#39;Officiel Brasil" title="L&#39;Officiel Brasil" class="logo--rev" src="/assets/logo-lofficiel-rev-e3c6f4ae9b1bc3fd7e0ad1e698a84f508b0ae1ef7f95af34c230d0f59323b513.svg" /></a>
                <div class="site-header__right"><a class="site-header__tenants-button" data-behaviour="TenantsNavToggler" href="#">brazil</a><a class="site-header__channels-button " data-behaviour="ChannelsNavToggler" href="#"><span class="text"><div class="visible--on-lap">Channels</div><div class="hidden--on-lap">More</div></span><span class="images"><img alt="L&#39;Officiel Brasil" title="L&#39;Officiel Brasil" class="logo" src="/assets/logo-lofficiel-36ae23707147fc1b9a0a7bb8f89f3cd6dd85cebea49bf0a0f83089a5c11995bf.svg" /><img alt="L&#39;Officiel Brasil" title="L&#39;Officiel Brasil" class="logo--rev" src="/assets/logo-lofficiel-rev-e3c6f4ae9b1bc3fd7e0ad1e698a84f508b0ae1ef7f95af34c230d0f59323b513.svg" /></span></a></div>
            </div>
        </div>
    </div>
</nav>
<noscript>
    <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-5MNMJLP" style="display:none;visibility:hidden" width="0"></iframe>
</noscript>
<main class="site-content">
    <div class="space--both-5">
        <div class="align--center">
            <h1 class="beta">The page was not found</h1></div>
    </div>
    <div class="space--both-5">
        <div class="align--center">
            <div class="delta"><a href="/">Click here to return to the homepage</a></div>
        </div>
    </div>
</main>
<nav class="aside-nav" id="main-nav">
    <div class="aside-nav__header"><a class="aside-nav__header__closer" title="Close navigation menu" href="#"><i class="icon--cross icon--large"></i></a></div>
    <div class="aside-nav__content">
        <div class="space--bottom-2">
            <form action="/busca" class="form--with-inline-button">
                <div class="form__field">
                    <input id="search-box-input" name="q" placeholder="busca" required="required" type="text" />
                </div>
                <button class="button--small button--compact"><i class="icon--search"></i></button>
            </form>
        </div>
        <div class="space--bottom-1">
            <h6 class="aside-nav__content__title">Categories</h6></div>
        <ul class="aside-nav__content__list">
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="/categorias/moda">Moda</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="/categorias/beleza">Beleza</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="/categorias/cultura">Cultura</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="/categorias/fashion-week">Fashion Week</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="/categorias/pop-culture">Pop culture</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="/categorias/viagem">Viagem</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/gastronomia">Gastronomia</a></li>
            <li class="aside-nav__content__list__item hidden--on-lap"><a rel="nofollow" data-behaviour="MoreCategoriesToggler" class="aside-nav__content__list__link" href="#">read more</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/hommes">Hommes</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/joias">Joias</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/food">Food</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/women">Women</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/guia-de-natal">Guia de Natal</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/noite">Noite</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/videos">Videos</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/arte">Arte</a></li>
            <li class="aside-nav__content__list__item visible--on-lap"><a class="aside-nav__content__list__link" href="/categorias/wellness">Wellness</a></li>
        </ul>
    </div>
    <div class="aside-nav__footer">
        <div class="space--bottom-2">
            <div class="aside-nav__footer__logo"><img alt="L&#39;Officiel Brasil" title="L&#39;Officiel Brasil" src="/assets/logo-lofficiel-rev-e3c6f4ae9b1bc3fd7e0ad1e698a84f508b0ae1ef7f95af34c230d0f59323b513.svg" /></div>
        </div>
        <div class="space--bottom-1">
            <h6 class="aside-nav__footer__title">follow us</h6>
            <ul class="aside-nav__footer__inline-list">
                <li class="aside-nav__footer__inline-list__item"><a class="aside-nav__footer__inline-list__link" target="_blank" href="https://www.twitter.com/lofficielbrasil"><i class="icon--twitter"></i> <span>Twitter</span></a></li>
                <li class="aside-nav__footer__inline-list__item"><a class="aside-nav__footer__inline-list__link" target="_blank" href="https://www.facebook.com/revistalofficielbrasil/"><i class="icon--facebook"></i> <span>Facebook</span></a></li>
                <li class="aside-nav__footer__inline-list__item"><a class="aside-nav__footer__inline-list__link" target="_blank" href="https://www.instagram.com/lofficielbrasil/"><i class="icon--instagram"></i> <span>Instagram</span></a></li>
                <li class="aside-nav__footer__inline-list__item"><a class="aside-nav__footer__inline-list__link" target="_blank" href="https://br.pinterest.com/lofficielbrasil/"><i class="icon--pinterest"></i> <span>Pinterest</span></a></li>
            </ul>
        </div><a class="aside-nav__footer__link" href="/assinatura">assinatura</a></div>
</nav>
<nav class="aside-nav aside-nav--right aside-nav--rev" id="channels-nav">
    <div class="aside-nav__header"><a class="aside-nav__header__closer" title="Close navigation menu" href="#"><i class="icon--cross icon--large"></i></a></div>
    <div class="aside-nav__content">
        <ul class="aside-nav__content__list">
            <li class="aside-nav__content__list__item">
                <a class="aside-nav__content__list__logo" href="/laliste"><img alt="La Liste" src="/assets/logo_laliste-rev-0aa853b37b3eaf23825ff70e4362fec6e06d9b6c9e4441d4cbbc4da6392d3fb9.svg" /></a>
            </li>
            <li class="aside-nav__content__list__item">
                <a class="aside-nav__content__list__logo" href="/"><img src="/assets/logo-lofficiel-rev-e3c6f4ae9b1bc3fd7e0ad1e698a84f508b0ae1ef7f95af34c230d0f59323b513.svg" alt="Logo lofficiel rev" /></a>
            </li>
            <li class="aside-nav__content__list__item">
                <a class="aside-nav__content__list__logo" href="/categorias/relogios"><img alt="International Watch Review" src="/assets/logo-iwr-rev-f561c182efce70853f99c2a1504f2cb8d3446176be763605006e9645e28d714d.svg" /></a>
            </li>
            <li class="aside-nav__content__list__item"><span class="aside-nav__content__list__logo is-disabled"><img alt="Jalouse" src="/assets/logo_jalouse_black-835d3d12e515389e35f3dd176737a9d9ba74d7aae03d90b9ae14ca89aeb291d1.svg" /></span></li>
            <li class="aside-nav__content__list__item"><span class="aside-nav__content__list__logo is-disabled"><img alt="L&#39;Officiel Art" src="/assets/logo-art-rev-24ab33340547039f349a59704047c2d55ffee7756aa03c999b17e957229921e0.svg" /></span></li>
            <li class="aside-nav__content__list__item"><span class="aside-nav__content__list__logo is-disabled"><img alt="Audemars Piguet" src="/assets/AP_BRAND_LOGOTYPE_BLACK-4cac9b2ed9f5de3ae3b3a1003ec794b39358f8f9d46e5ea79e59ebd065332bb5.svg" /></span></li>
            <li class="aside-nav__content__list__item"><span class="aside-nav__content__list__logo is-disabled"><img alt="Intermission" src="/assets/logo_Intermission_black-7f31ad499e2b921eb2fe69ecef1ca8581c8374010b0c0f29647228b2971bc312.svg" /></span></li>
            <li class="aside-nav__content__list__item"><span class="aside-nav__content__list__logo is-disabled"><img alt="max_mara" src="/assets/max_mara_logo-7de7f3e08f0e845208fbb356223a089c24f323ace043dd3e89265ee62d8bf1f4.svg" /></span></li>
            <li class="aside-nav__content__list__item"><span class="aside-nav__content__list__logo is-disabled"><img alt="L&#39;Officiel Hommes" src="/assets/logo-hommes-rev-642dd917ecd9da653717ab910015325862721e4b83d4ddce28fe8f28ce058e1a.svg" /></span></li>
        </ul>
    </div>
    <div class="aside-nav__footer">
        <div class="space--bottom-2">
            <div class="hidden--on-lap">
                <div class="space--bottom-1">
                    <h6 class="aside-nav__footer__title">edições internacionais</h6></div>
            </div>
            <div class="aside-nav__footer__nav"><a class="aside-nav__footer__nav__toggler" data-behaviour="AccountToggler" href="#">brazil</a>
                <ul class="aside-nav__footer__nav__list">
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.com.ar">argentina</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.at">austria</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//lofficielbaltics.com">baltic</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.be">belgium</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.revistalofficiel.com.br">brazil</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//china.lofficiel.com">china</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.com">france</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.de">germany</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielitalia.com">italy</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielkorea.com">korea</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="https://lofficielbaltics.com/lv">latvia</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.lt">lithuania</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielmalaysia.com">malaysia</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielmexico.com">mexico</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielarabia.com">middleeast</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielmaroc.ma">morocco</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.nl">netherlands</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielrussia.ru">russia</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielstbarth.com">saintbarth</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielsingapore.com">singapore</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.es">spain</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.ch">switzerland</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.co.th">thailand</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.com.tr">turkey</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficiel.co.uk">uk</a></li>
                    <li class="aside-nav__footer__nav__list__item"><a class="aside-nav__footer__nav__list__link" href="//www.lofficielusa.com">usa</a></li>
                    <li class="aside-nav__footer__nav__list__item"><span class="is-disabled aside-nav__footer__nav__list__link">greece</span></li>
                    <li class="aside-nav__footer__nav__list__item"><span class="is-disabled aside-nav__footer__nav__list__link">japan</span></li>
                    <li class="aside-nav__footer__nav__list__item"><span class="is-disabled aside-nav__footer__nav__list__link">kazakhstan</span></li>
                    <li class="aside-nav__footer__nav__list__item"><span class="is-disabled aside-nav__footer__nav__list__link">philippines</span></li>
                    <li class="aside-nav__footer__nav__list__item"><span class="is-disabled aside-nav__footer__nav__list__link">poland</span></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="aside-nav aside-nav--right aside-nav--rev" id="tenants-nav">
    <div class="aside-nav__header"><a class="aside-nav__header__closer" title="Close navigation menu" href="#"><i class="icon--cross icon--large"></i></a></div>
    <div class="aside-nav__content">
        <ul class="aside-nav__content__list">
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.com.ar">argentina</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.at">austria</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//lofficielbaltics.com">baltic</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.be">belgium</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.revistalofficiel.com.br">brazil</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//china.lofficiel.com">china</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.com">france</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.de">germany</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielitalia.com">italy</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielkorea.com">korea</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="https://lofficielbaltics.com/lv">latvia</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.lt">lithuania</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielmalaysia.com">malaysia</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielmexico.com">mexico</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielarabia.com">middleeast</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielmaroc.ma">morocco</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.nl">netherlands</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielrussia.ru">russia</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielstbarth.com">saintbarth</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielsingapore.com">singapore</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.es">spain</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.ch">switzerland</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.co.th">thailand</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.com.tr">turkey</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficiel.co.uk">uk</a></li>
            <li class="aside-nav__content__list__item"><a class="aside-nav__content__list__link" href="//www.lofficielusa.com">usa</a></li>
            <li class="aside-nav__content__list__item"><span class="is-disabled aside-nav__content__list__link">greece</span></li>
            <li class="aside-nav__content__list__item"><span class="is-disabled aside-nav__content__list__link">japan</span></li>
            <li class="aside-nav__content__list__item"><span class="is-disabled aside-nav__content__list__link">kazakhstan</span></li>
            <li class="aside-nav__content__list__item"><span class="is-disabled aside-nav__content__list__link">philippines</span></li>
            <li class="aside-nav__content__list__item"><span class="is-disabled aside-nav__content__list__link">poland</span></li>
        </ul>
    </div>
</nav>
<div class="overlay"></div>
<footer class="site-footer">
    <div class="site-footer__top">
        <div class="site-footer__subscriptions">
            <div class="wrap">
                <h6 class="site-footer__title">Assinaturas</h6>
                <div class="site-footer__subscriptions__list">
                    <a class="site-footer__subscriptions__list__item" href="/assinatura"><img alt="capa Isis 250dpi-page-001.jpg" src="https://brazil-grlk5lagedl.stackpathdns.com/production/brazil/images/1573653847489592-capa-Isis-250dpi-page-001.jpg?h=330&amp;fit=clip&amp;crop=faces&amp;fm=pjpg&amp;auto=compress" /></a>
                    <a class="site-footer__subscriptions__list__item" href="/assinatura"><img alt="a1_LOFH16_CAPA_Final copy2.jpg" src="https://brazil-grlk5lagedl.stackpathdns.com/production/brazil/images/1549912905878181-a1_LOFH16_CAPA_Final-copy2.jpg?h=330&amp;fit=clip&amp;crop=faces&amp;fm=pjpg&amp;auto=compress" /></a>
                </div>
                <div class="space--both-2"><a class="button--primary--rev button--medium" href="/assinatura">assine já</a></div>
            </div>
        </div>
        <div class="site-footer__newsletter" id="newsletter">
            <div class="wrap">
                <form class="form--newsletter" data-behaviour="NewsletterForm" data-url="/api/newsletter/subscribe" action="#" accept-charset="UTF-8" method="post">
                    <input name="utf8" type="hidden" value="&#x2713;" />
                    <input type="hidden" name="authenticity_token" value="ytF0PO6yXyDWVzrmFgkV9Dt+yASDNHc2wnKv1+BCi+H+KHGksHkHEOyu/R7yzaRGAux/92bo+Xm/aUJnRx80bw==" />
                    <h6 class="site-footer__title">Newsletter</h6>
                    <div class="form__field">
                        <input name="newsletter[first_name]" placeholder="Name" required="required" type="text" />
                    </div>
                    <div class="form__field">
                        <input name="newsletter[last_name]" placeholder="Surname" required="required" type="text" />
                    </div>
                    <div class="form__field">
                        <input name="newsletter[email]" placeholder="Email" required="required" type="email" />
                    </div>
                    <div class="form__field">
                        <label class="input--checkbox">
                            <input required="required" type="checkbox" />
                        </label>
                    </div>
                    <div class="form__actions">
                        <button class="button--primary--rev button--medium">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="wrap">
            <div class="site-footer__logo"><img alt="L&#39;Officiel Brasil" title="L&#39;Officiel Brasil" src="/assets/logo-lofficiel-rev-e3c6f4ae9b1bc3fd7e0ad1e698a84f508b0ae1ef7f95af34c230d0f59323b513.svg" /></div>
            <div class="site-footer__socials">
                <ul class="site-footer__socials__item">
                    <li class="site-footer__socials__item__item"><a class="site-footer__socials__item__link" target="_blank" href="https://www.twitter.com/lofficielbrasil"><i class="icon--twitter"></i> <span>Twitter</span></a></li>
                    <li class="site-footer__socials__item__item"><a class="site-footer__socials__item__link" target="_blank" href="https://www.facebook.com/revistalofficielbrasil/"><i class="icon--facebook"></i> <span>Facebook</span></a></li>
                    <li class="site-footer__socials__item__item"><a class="site-footer__socials__item__link" target="_blank" href="https://www.instagram.com/lofficielbrasil/"><i class="icon--instagram"></i> <span>Instagram</span></a></li>
                    <li class="site-footer__socials__item__item"><a class="site-footer__socials__item__link" target="_blank" href="https://br.pinterest.com/lofficielbrasil/"><i class="icon--pinterest"></i> <span>Pinterest</span></a></li>
                </ul>
            </div>
            <nav class="site-footer__nav">
                <ul class="site-footer__nav__list">
                    <li class="site-footer__nav__item"><a class="site-footer__nav__item__link" href="/about">about</a></li>
                    <li class="site-footer__nav__item"><a class="site-footer__nav__item__link" href="/contatos">contato</a></li>
                </ul>
            </nav>
            <div class="site-footer__text">
                <div class="milli">
                    <div class="formatted-content">
                        <p style="text-align:center">&copy; Edi&ccedil;&otilde;es Escala Jalou
                            <br /> Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
    </div>
    <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
                <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
        </div>
    </div>
</div>
</div>
<script src="https://www.youtube.com/player_api"></script>
<script src="/assets/application-06ea37402f4e53f8bde0f22f6495e52a6fca95b7e1aa0f2095f6750b3110b0b8.js"></script>
<script type="text/javascript">
    console.log("Iubenda not set");
</script>

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
</script>
<script>
    ga('create', 'UA-90684719-1', 'auto', {
        name: "master"
    });
    ga('set', 'anonymizeIp', true);
    ga('master.send', 'pageview');
</script>
<script>
    ga('create', 'UA-31536679-1', 'auto', {
        name: "partner"
    });
    ga('set', 'anonymizeIp', true);
    ga('partner.send', 'pageview');
</script>

</body>

</html>