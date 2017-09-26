"use strict";try{angular.module("wixTranslations")}catch(e){angular.module("wixTranslations",["pascalprecht.translate"])}angular.module("wixTranslations").config(["$translateProvider",function(a){var b={home:{apps:{newToWix:{startNow:"Start NOW",free:"FREE!",startCreatingYourOwnWebsiteFor:"Start creating your own website for",title:"New to WIX?"}},slogan:{text:{business:"Manage Your Business Beyond Your Website With Powerful Apps & Popular Services",standalone:"Take your website to the next level by adding popular Apps and services <br /> Grow your business with a simple click"},title:{business:"Grow Your Business",standalone:"Wix App Market"}},meta:{facebook:{appId:"236335823061286"},twitter:{site:"@Wix",accountId:"6608082"},description:"Welcome to the Wix App Market. Browse, discover and add amazing apps to grow your Wix website for free.",title:"Wix App Market | Amazing web Apps for your site | Wix.com"}},myApps:{needSupport:"Need support?"},yotpo:{reviews:"Reviews",noReviewsYet:"Be the first to review","new":"New!",addedThisApp:"added this app"},search:{additionalEditorResults:{goToEditorLink:"Show Me the Apps",message:"Don't see the App you're looking for? <br> Check out these {{ totalResults }} results for <strong>{{ query }}</strong> in the App Market in the Editor",noMatchesFoundMessage:"There are no App matches for <strong>{{ query }}</strong> in the Dashboard, <br> but there are {{ totalResults }} results in the Editor that just might be what you're looking for."},noMatchesFound:'No matches for "{{ query }}", see if you can find something here:',showingResultsFor:'Showing {{ totalResults }} results for "{{ query }}":',placeholder:"Search apps",single:'You\'ve started to add "{{appName}}" to your site:'},error:{clickHere:"Click here if you are not redirected automatically.",visitHomepage:"For now, you may want to visit our site's homepage.",pageNotExists:"The page you tried to access does not exist on our server.",title:"Something went wrong"},siteSelector:{goToMyAccount:"Go To My Account",openEditor:"Open Editor",openSite:"Select Site",titleBusinessApp:"To Complete Adding {{ application }} to your site, Go to My Account",titleSingleSite:"To Complete Adding {{ application }} to your site, Go to the Editor",title:"Select the site you would like to add this App to:"},welcomeScreen:{or:"Or",action:{browseFeaturedApps:"Browse Featured Apps",sellOnline:"Sell Online",getSocial:"Get Social",contact:"Contact Your Users"},description:"Add powerful features and popular services to your site.<br>Grow your business and manage your online presence with a few clicks.",title:"Welcome to the Wix App Market!"},widget:{mostPopularApps:"Most Popular Apps",newApps:"Newest Apps",viewAll:"View All"},editor:{application:{action:{addToSite:"Add to Site"}}},TPA_SAVE_DIALOG_TITLE:"Before you continue, please save your site",bestApps:{header:{tagline:"Check out the Hottest Apps of the Year"},backToAppMarket:"Back to App Market",browseMoreApps:"Browse more Apps",staffPicks:"Staff Picks",trending:"Trending",topFree:"Top Free Apps",bestSellers:"Best Sellers"},premium:{application:{action:{addApp:"Add App",add:"Add {{app}}",getApp:"Get App"},addedToCart:"Added to cart"}},appStats:{addedThisApp:"{{downloadsAllTime}} added this app","new":"New!"},category:{free:{name:"Free"},bestByWix:{name:"Most popular by Wix"},pending:{headerNew:"These Apps are pending until you add them to your site",add:"Add to Site",remove:"Remove",header:'Click "Add to Site" to finish adding the Apps to your site',name:"Pending Apps"},best2014:{name:"Best of 2014"},meta:{title:"{{ categoryName }} | Wix App Market | Wix.com"},popular:{name:"Most Popular"},main:{name:"Featured"},business:{name:"Business Apps"},mobileOptimized:{name:"Mobile Optimized"},myApps:{name:"My Apps"},developerApps:{name:"Developer Apps"},"new":{name:"New!"},all:{name:"All Apps"}},permissionRequest:{addApp:"Add App",cancel:"Cancel",disagree:"Back",agree:"Add App",terms:'By adding this App, you agree to the <a href="http://about.wix.com/app-market-terms" target="_blank">Wix App Market Terms of Use</a>',description:"To enhance its capabilities this App may collect data on your site visitors or access data collected on your website.",providedToYouBy:"Is provided to you by",header:"Permission Request"},wishlist:{search:{add:"Want to add it to wish list?",seeMostPopular:"See our most popular Apps",linkTitle:"Suggest an App",browseAllApps:"or continue browsing all apps:",stillNotFound:"Still haven't found what you're looking for?",noMatchesFound:'Hmmm..... It appears we\'ve got nothing for <span class="search-query">"{{ query }}"</span>'},form:{name:"App Name",description:"Description"},errors:"Ooops, there was an error. Please try again.",sidebar:{title:"Suggest an App"},thankyou:{addAnotherSuggestion:"Add another suggestion",description:"Your message has been sent successfully.",title:"Thanks!"},button:{done:"Done",send:"Send",cancel:"Cancel"},placeholder:{description:"Describe the main features or functions of the App",name:"Write the name of the App"},description:"Tell us which Apps we should add to the Wix App Market to make it even better",title:"Suggest a new App"},welcomeScreenEditor:{action:{seeWhatsPopular:"See what's popular",sellOnline:"Sell Online",getSocial:"Get Social",contact:"Contact Users"},or:"OR",description:"Boost your site with amazing features, popular web Apps<br> and services. What would you like to do first?",title:"Welcome to the Wix App Market!"},application:{tabs:{"developer-info":{wixAppMarketPartner:"Wix App Market Partner",supportInfo:{phone:"Phone",website:"Website",email:"Email",subHeader:"Need more help? Please contact us",header:"Support info"},thisAppWasMadeBy:"This App was made by",name:"Developer Info"},shareVia:{name:"Share via"},reviews:{name:"Reviews"},features:{featureTitle:"Features",month:"Month",basePackage:"Basic Package",nameAlternative:"Features",name:"Features & Pricing"},demo:{name:"Demo"},overview:{screen:"{{application}} | Screen",name:"Overview"}},price:{startsFrom:"Starts from {{ price }}",perMonth:"{{ price }} / Month",freeTrial:"Free Trial",freeDaysTrial:"Free {{trialDays}} day(s) trial",premium:"Premium",free:"Free"},status:{pending:"Pending"},action:{launch:"Launch App",tryItNow:"Try It Now",openLoading:"Loading...",manage:"Open",upgrade:"Upgrade",open:"Open App",addToSite:"Add App",removeTooltip:"Delete App",remove:"Remove App",keep:"Keep App"},remove:{hybrid:{buttonText:"OK, Got it",message:'<span class="attention">This App is still displayed on your site</span><br>To remove it, open the Editor, right click the App, and click<br> the <strong>Delete Icon</strong> button in the lower right-hand corner.',wait:"Wait!",confirmQuestion:'<span class="attention">This App is still displayed on your site</span><br>To remove it, open the Editor, right click the App, and click<br> the <strong>Delete Icon</strong> button in the lower right-hand corner.'},error:{errorText:"Please try again",errorTitle:"Something went wrong"},premium:{buttonText:"OK, Got it",supportLink:"http://www.wix.com/support/html5/billing/wix-app-market/faq/how-do-i-cancel-a-third-party",message:'You can not delete this App before you cancel it\'s premium features from <strong>Billing &amp; Payment</strong> - <a href="{{ supportLink }}" target="_blank">Learn how</a>',wait:"Wait!"},confirm:{confirmQuestion:'Are you sure you want to remove "{{ application }}" App?',wait:"Wait!"}},panelInfo:{title:"Upgrade now and get even more cool features!"},advertImageAltText:"{{ application }} by {{ company }} | WIX App Market",by:"By",share:{title:"Wix | App Market | {{ application }}"},title:"{{app}} | WIX App Market | Wix.com"},page404:{errorDescription:"We&#39;re sorry, <strong>App Market</strong> is experiencing some problems.<br>Please give it a try later.",errorTitle:"Oops! Something Went Wrong"}};a.translations("en",b),a.translations(b)}]);