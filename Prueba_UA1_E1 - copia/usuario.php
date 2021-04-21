<?php
        session_start();
        if (empty($_SESSION["email"])){
            //Redireccionamos a la pagina principal
            header("Location: index.php");
            //Salimos
            //exit();
        }
        echo "Bienvenid@ ",  "Mylien";
        if (isset($_POST["cerrarSesion"])){
            session_start();
            session_destroy();
            // unset ($_SESSION["usuario"]);
            // unset ($_SESSION["contraseña"]);
            header("Location: index.php");
        }
    ?>
     <!-- <form action="usuario.php" method="POST">
        <button type="submit" name="cerrarSesion" id="cerrarSesion">Cerrar Sesión</button>
    </form> -->
<!DOCTYPE html>
<!-- saved from url=(0143)https://shop.strato.com/epages/78298158.sf/es_ES/?ObjectPath=/Shops/78298158&ViewAction=ViewMyAccount&LastViewAction=ViewMyAccount&HideNotice=1 -->
<html lang="es" class="script webkit"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./usuario_files/a.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/string" src="./usuario_files/string.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/legacy" src="./usuario_files/legacy.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/tools" src="./usuario_files/tools.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/constants" src="./usuario_files/constants.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/browser" src="./usuario_files/browser.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/scope" src="./usuario_files/scope.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/json" src="./usuario_files/json.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/base64" src="./usuario_files/base64.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ep/inject-sec-token" src="./usuario_files/inject-sec-token.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/cookie" src="./usuario_files/cookie.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/storage" src="./usuario_files/storage.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="$dict" src="./usuario_files/$dict.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="$ready" src="./usuario_files/$ready.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="de_epages/remotesearch/ui/suggest" src="./usuario_files/suggest.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="de_epages/content/inc/megamenu" src="./usuario_files/megamenu.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/utf8" src="./usuario_files/utf8.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/data" src="./usuario_files/data.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/disable-selection" src="./usuario_files/disable-selection.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/focusable" src="./usuario_files/focusable.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/form" src="./usuario_files/form.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/ie" src="./usuario_files/ie.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/keycode" src="./usuario_files/keycode.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/labels" src="./usuario_files/labels.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/jquery-1-7" src="./usuario_files/jquery-1-7.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/plugin" src="./usuario_files/plugin.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/safe-active-element" src="./usuario_files/safe-active-element.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/safe-blur" src="./usuario_files/safe-blur.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/scroll-parent" src="./usuario_files/scroll-parent.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/tabbable" src="./usuario_files/tabbable.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/unique-id" src="./usuario_files/unique-id.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/version" src="./usuario_files/version.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/mouse" src="./usuario_files/mouse.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/dialog" src="./usuario_files/dialog.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/tabs" src="./usuario_files/tabs.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/slider" src="./usuario_files/slider.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="$pub" src="./usuario_files/$pub.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="class" src="./usuario_files/class.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/mime" src="./usuario_files/mime.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="$tmpl" src="./usuario_files/$tmpl.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ep/ui/core" src="./usuario_files/core.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/support" src="./usuario_files/support.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/event/special/load" src="./usuario_files/load.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/event/special/touch" src="./usuario_files/touch.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="util/version" src="./usuario_files/version.js(1).descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ep/ui/validate" src="./usuario_files/validate.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="de_epages" src="./usuario_files/de_epages.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/masonry" src="./usuario_files/masonry.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/button" src="./usuario_files/button.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/draggable" src="./usuario_files/draggable.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/resizable" src="./usuario_files/resizable.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/escape-selector" src="./usuario_files/escape-selector.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="de_epages/design/ui/cookiemessage" src="./usuario_files/cookiemessage.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="de_epages/product/inc/energylabel" src="./usuario_files/energylabel.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/button" src="./usuario_files/button.js(1).descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/draggable" src="./usuario_files/draggable.js(1).descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/resizable" src="./usuario_files/resizable.js(1).descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ep/ui/simpledialog" src="./usuario_files/simpledialog.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/controlgroup" src="./usuario_files/controlgroup.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/checkboxradio" src="./usuario_files/checkboxradio.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/checkboxradio" src="./usuario_files/checkboxradio.js(1).descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/widgets/controlgroup" src="./usuario_files/controlgroup.js(1).descarga"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery/ui/form-reset-mixin" src="./usuario_files/form-reset-mixin.js.descarga"></script><!--<base href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/">--><base href=".">

  <title>Tomatoner Canarias - Su mundo en compatibles...</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=Edge">

    

<script type="text/javascript" src="./usuario_files/saved_resource"></script>


<script type="text/javascript">

(function(require){

function config(a,b){config._(config.c[a]||(config.c[a]={}),b)}config.c=require.config=require.config||{};config._=function(a,b){for(var c in b)b[c]instanceof Object?config._(a[c]||(a[c]={}),b[c]):a[c]=b[c]};


config("jquery/canvas/canvastext", {
  fontRoot: ["", "WebRoot", "StoreES3", "49FF", "D37A", "C414", "E8BC", "90EE", "C0A8", "28BF", "481E"].join("/")
});

config("ep", {
  baseUrl: ["https\u003A", "", "shop\u002Estrato\u002Ecom", "epages", "78298158\u002Esf", "seccc40bc251a", ""].join("/"),
  
  objectId: '9085299',
  viewAction: 'ViewMyAccount',
  storeFrontUrl: ["https\u003A", "", "shop\u002Estrato\u002Ecom", "epages", "78298158\u002Esf"].join("/"),
  requestProtocolAndServer: 'https\u003A\u002F\u002Fshop\u002Estrato\u002Ecom',
  webUrj: ["http\u003A", "", "www\u002Etomatonercanarias\u002Ees", "epages", "78298158\u002Esf", "\u003FObjectPath\u003D", "Shops", "78298158", "Users", "78298158"].join("/"),
  webUrlSsl: ["https\u003A", "", "shop\u002Estrato\u002Ecom", "epages", "78298158\u002Esf", "\u003FObjectPath\u003D", "Shops", "78298158", "Users", "78298158"].join("/"),
  google: {
    
  }
});

}(require));
</script>

<link type="text/css" href="./usuario_files/package-sf.css" rel="stylesheet">

<script type="text/javascript" src="./usuario_files/package-sf.js.descarga"></script>



<script type="text/javascript">
    var jq = jQuery.noConflict();
</script>
<script type="text/javascript">
    require(["jquery/metaparse", "de_epages/design/inc/sf-initialize"]);

    
      
    require(["de_epages/externalcontent/dojogadgetfix"]);
    

    require(["ep/inject-sec-token"], function (ep) {
        ep.injectSecToken();
    });

    
</script>
<script type="text/javascript">
window.offscreenBuffering = true;
</script>




<script type="text/javascript">
require([
  "jquery",
  "ep/sslswitch",
  "util/base64",
  'util/storage'
], function($, ep, base64, storage){

  var stored = storage.localStorage('Catalog::ProductLastViewed.list') || {},
    get =  '' ;

  if( get ){
    stored = $.extend(
      stored,
      base64.decode(get)
    );
  }



  

  var tstampMap = [],
    tstampHash = {},
    image =  undefined;

  


  for( var i in stored ){
    var tstamp = stored[i].tstamp;
    tstampMap.push( tstamp );
    tstampHash[ tstamp ] = stored[i];
  }

  tstampMap = tstampMap.sort().reverse(); // sort timestamp array;
  var store = {};
  for( var i=0,iLength=Math.min(tstampMap.length,10) ; i<iLength ; i++ ) {
    var product = tstampHash[ tstampMap[i] ];
    store[ product.id ] = product;
  }

  $(window)
    .on( 'beforeunload', function(){      // register new item on unload
      storage.localStorage( 'Catalog::ProductLastViewed.list', store );
    });

  // attach stored data on switch to ssl mode
  ep.sslSwitch.addHandle(function( event, form ){
    $('<input type="hidden">')
      .attr({
        name: 'ProductLastViewed',
        value: base64.encode(store)
      })
      .appendTo(form);
  });
});
</script>







<link rel="shortcut icon" type="image/x-icon" href="https://shop.strato.com/WebRoot/StoreES3/Shops/78298158/favicon.ico">


  <link href="./usuario_files/StorefrontStyle_60.css" rel="stylesheet" type="text/css">

  

  
    <!--[if IE]>
    <link href="/WebRoot/StoreTypes/7.56.0/StratoES/lib/de_epages/design/style-ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <style type="text/css">
      /* if IE 10 */
      @import url('/WebRoot/StoreTypes/7.56.0/StratoES/lib/de_epages/design/style-ie.css') screen and (-ms-high-contrast: active), (-ms-high-contrast: none);
    </style>


  <!-- style extension js -->
  
    <script src="./usuario_files/StyleExtension.js.descarga"></script><link rel="stylesheet" href="./usuario_files/font-awesome.min.css"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"><link type="text/css" rel="stylesheet" href="./usuario_files/css">
  




  
<script type="text/javascript">
try{
  window.onerror = window.onerrorbak;
}
catch(e){
}
</script>
  
<!-- Begin: User-defined HTML Head area -->

  <meta name="google-site-verification" content="wmnjl1uhAOsm526Z5wM1r20tNuRVfZfZ3VgWqQRtHBU">

<!-- End: User-defined HTML Head area -->
<script type="text/javascript">

(function(win){
  if( !jQuery.fn.jquerysdk ){
    jQuery.noConflict(true);

    var $ = jQuery,
      noConflict = $.config.noConflict;

    if( !noConflict ){
      win.$ = $;
    }
    else if( typeof noConflict == 'string' ){
      win[ noConflict ] = $;
    }
  }
  
    try{
      win.onerror = function() {
        return true;
      };
    }
    catch(e){
    }
  
})(window);
</script>



    <meta name="robots" content="noindex,noarchive,nofollow">



</head>

    

  
<body class="epages" lang="es">  
    
    <div class="Layout1 GeneralLayout Div">

 
  <div class="NavBarRoof HorizontalNavBar">
    <div class="PropertyContainer">
      

 
  
  
  <div class="SizeContainer custom-container custom-left"><div class="NavigationElement NavBarElement0 Active">
  <a rel="nofollow" class="Action " href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158&amp;ViewAction=ViewMyAccount">Mi cuenta</a>
</div>
  <div class="NavigationElement NavBarElement1">

    <a  class="Action logout-action ep-js" data-js="" href="http://localhost/proyectos/Prueba_UA1_E1%20-%20copia/index.php">Cerrar sesión</a>
 
    <script type="text/javascript">
    require(["jquery", "util/storage", "$ready!"], function ($, storage) {
      $(".logout-action")
        .on('click', function () {
          storage.sessionStorage('Product::ProductComparison', null);
        });
    });
    </script>
  </div>

</div>
  <div class="SizeContainer custom-container custom-right">

<div class="SearchElement NavBarElement2">

    
      
    
  
    



  <form class="ep-js" data-js="" id="RemoteSearch2" action="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?" method="get">
    <div class="Entry">
        <div class="InputField SearchForm horizontal-search">
            <input type="hidden" name="ObjectID" value="9085297">
            <input type="hidden" name="ViewAction" value="FacetedSearchProducts">
            <input class="Search ep-uiInput ep-uiInput-text ep-uiValidate" type="text" maxlength="255" name="SearchString" id="RemoteSearchSuggest2" placeholder="Buscar por" autocomplete="off"><input type="hidden">
            <button name="SearchButton" type="submit" title="Iniciar búsqueda" class="search-button">
              <span class="ep-sprite ep-sprite-s ep-uiInput-buttonSpriteOnly Icon SearchIcon"></span>
            </button>
        </div>
        <script type="text/javascript">
        jQuery.ready("de_epages.remotesearch.ui.suggest",function($){
          de_epages("#RemoteSearchSuggest2")
            .remotesearchUiSuggest({
              required: true,
              suggestUrl : "\u002F\u002Fepj\u002Estrato\u002Ede\u002Frs\u002Fproduct\u002FStoreES3\u002F54D2D3C6-D081-1B50-6EB9-C0A82AB84348\u002Fsuggest\u002Fjsonp\u003Flang\u003Des",
              showError: false,
              navbar: "Roof"
            });
        });
        </script>
    </div>
  </form>




  

</div>





 

<div class="NavBarElement3 BasketBox NavElementIcon ">

  
    <span>
      <img src="./usuario_files/ico_m_basket.png" class="FloatLeft" alt="Cesta">
    </span>
  

  
    <span>(0) </span>
  

  

</div>

</div>
  
  


    </div>
  </div>
 
 
  <div class="Header HorizontalNavBar">
    <div class="PropertyContainer">
      

 
  
  
  <div class="SizeContainer custom-container custom-left">
<div class="ShopLogo NavBarElement0">
  <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=Categories" title="Tomatoner Canarias" class="ShowElement">
  <img src="./usuario_files/logo.jpg" alt="Tomatoner Canarias">
  </a>

</div></div>
  <div class="SizeContainer custom-container custom-right">
  
    
      
        
          <ul class="HorizontalDisplay NavBarElement1 ep-megamenu" id="MegaMenu50128013">
            
              
              <li class="ep-megamenu-first-level-element NavigationElement Category-9085374">
                
                
                  <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner"><span class="active-marker" style="left: 26px;"></span>Toner</a>
                
                
                
                  <div class="ep-megamenu-container" style="display: none; width: 960px; left: 10px;">
                    <ul class="ep-megamenu-second-level-group masonry" style="position: relative; height: 0px;">
                    
                      
                      <li class="ep-megamenu-second-level-element Category-11241151 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20Brother%22">Brother</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-68565688 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/Canon">Canon</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-68565738 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/Epson">Epson</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-11241114 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20HP%22">Hewlett Packard</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-15414921 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20Kyocera%22">Kyocera</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-68565798 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/Konica_Minolta">Konica Minolta</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-68566693 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/Lexmark">Lexmark</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-11241156 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20Oki%22">Oki</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-68566698 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/Panasonic">Panasonic</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-25023958 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20Ricoh%22">Ricoh</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-11241153 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20Samsung%22">Samsung</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-25023996 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/%22Toner%20Toshiba%22">Toshiba</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-15469790 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner/Otras_Marcas">Otras Marcas</a>
                      
                      
                      
                      
                      
                    
                    </li></ul>
                  </div>
                
                
              
              </li>
              
            
              
              <li class="ep-megamenu-first-level-element NavigationElement Category-9085375">
                
                
                  <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas"><span class="active-marker" style="left: 27.5px;"></span>Tintas</a>
                
                
                
                  <div class="ep-megamenu-container" style="display: none; width: 960px; left: 10px;">
                    <ul class="ep-megamenu-second-level-group masonry" style="position: relative; height: 0px;">
                    
                      
                      <li class="ep-megamenu-second-level-element Category-11241164 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/%22Tinta%20Brother%22">Brother</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-11241162 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/%22Tinta%20Canon%22">Canon</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-11241161 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/%22Tinta%20Epson%22">Epson</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-11241159 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/%22Tinta%20HP%22">Hewlett Packard</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-15404968 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/%22Tinta%20Lexmark%22">Lexmark</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-68566853 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/Ricoh">Ricoh</a>
                      
                      
                      
                      
                      
                    
                      
                      </li><li class="ep-megamenu-second-level-element Category-15469959 masonry-brick" style="width: 240px; position: absolute; top: 0px; left: 0px;">
                      
                        <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas/Otras_Marcas">Otras Marcas</a>
                      
                      
                      
                      
                      
                    
                    </li></ul>
                  </div>
                
                
              
              </li>
              
            
              
              <li class="ep-megamenu-first-level-element NavigationElement Category-9085357">
                
                
                  <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/ContactForm"><span class="active-marker" style="left: 38px;"></span>Contacto</a>
                
                
                
                
              
              </li>
              
            
              
              <li class="ep-megamenu-first-level-element NavigationElement Category-9085321">
                
                
                  <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Imprint"><span class="active-marker" style="left: 86.5px;"></span>Información de contacto</a>
                
                
                
                
              
              </li>
              
            
          </ul>
        
      
    

<script type="text/javascript">
require(["de_epages/content/inc/megamenu", "$ready!"], function (megamenu) {
  megamenu.init({
    selector: "#" + "MegaMenu50128013",
    isEditorMode:  false 
  });
});
</script>
</div>
  
  


    </div>
  </div>
  <div class="Middle">
 
  
    <!--[if IE 7]><span id="NavBarLeftFix"></span><![endif]-->
    <div class="NavBarLeft VerticalNavBar">
      
<div class="PropertyContainer">
  <div class="SizeContainer">


  

<div class="ContextBox SearchBox NavBarElement0" id="NavElement_69426713">
  <div class="BoxContainer">
    <div class="ContextBoxHead">
      <span>Búsqueda de productos</span>
    </div>

  
    
      
    
  
    

  




  <form class="ep-js" data-js="" id="RemoteSearch0" action="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?" method="get">
  <input type="hidden" name="ObjectID" value="9085297">
  <input type="hidden" name="ViewAction" value="FacetedSearchProducts">
    <div class="ContextBoxBody">
        <div class="Entry">
            <div class="InputField SearchForm  vertical-search">
                <input class="Search ep-uiInput ep-uiInput-text ep-uiValidate" type="text" maxlength="255" name="SearchString" id="RemoteSearchSuggest60606BC00A0C6D0E80EE" placeholder="Buscar por" autocomplete="off"><input type="hidden">
                <button class="search-button" name="SearchButton" type="submit" title="Iniciar búsqueda">
                  <span class="ep-sprite ep-sprite-s ep-uiInput-buttonSpriteOnly Icon SearchIcon"></span>
                </button>
            </div>
            <script type="text/javascript">
            jQuery.ready("de_epages.remotesearch.ui.suggest",function($){
              de_epages("#RemoteSearchSuggest60606BC00A0C6D0E80EE")
                .remotesearchUiSuggest({
                  required: true,
                  suggestUrl: "\u002F\u002Fepj\u002Estrato\u002Ede\u002Frs\u002Fproduct\u002FStoreES3\u002F54D2D3C6-D081-1B50-6EB9-C0A82AB84348\u002Fsuggest\u002Fjsonp\u003Flang\u003Des",
                  showError: false,
                  navbar: "Left"
                });
            });
            </script>
        </div>
    </div>
  </form>





  

  </div>
</div>


<div class="ContextBox NavBarElement1 BasketBox" id="NavElement_69426728">
  <div class="BoxContainer">
    <div class="ContextBoxHead">
      <span class="fa fa-shopping-cart">Cesta</span>
    </div>

    <div class="ContextBoxBody">
      Su cesta está vacía.
    </div>
 
  </div>
</div>





<div class="ContextBox CategoriesBox NavBarElement2" id="NavElement_69426858">
  <div class="BoxContainer">
    <a class="ContextBoxHead" href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories">
      <span>Categorías</span>
    </a>
  
    
    

      <div class="ContextBoxBody FoldingCategoryList">
        
          
             	<a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Toner">Toner <br></a>
          

        
        
      </div>
  
    
    

      <div class="ContextBoxBody FoldingCategoryList">
        
          
             	<a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Tintas">Tintas <br></a>
          

        
        
      </div>
  
    
    

      <div class="ContextBoxBody FoldingCategoryList">
        
          
             	<a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/ContactForm">Contacto <br></a>
          

        
        
      </div>
  
    
    

      <div class="ContextBoxBody FoldingCategoryList">
        
          
             	<a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/Imprint">Información de contacto <br></a>
          

        
        
      </div>
  
  </div>
</div>


<script type="text/x-jquery-tmpl" id="NavElement_69426933">
  <div class="ContextBox ProductLastViewedBox NavBarElement3" id="NavElement_69426933">
    <div class="BoxContainer">
      <div class="ContextBoxHead">
        <span>Vistos recientemente</span>
      </div>
      <div class="ContextBoxBody">
      </div>
    </div>
  </div>
</script>
<script type="text/javascript">
require([
  "jquery",
  "util/storage",
  "de_epages/catalog/ui/productlastviewed",
  "jquery/tmpl",
  "$ready!"
], function ($, storage) {
    if( !$.isEmptyObject( storage.localStorage('Catalog::ProductLastViewed.list') || {} ) ){
      var scriptBoxElem = $("#"+"NavElement_69426933"),
        boxElem = scriptBoxElem.tmpl();

      scriptBoxElem.replaceWith( boxElem );

      boxElem.find(".ContextBoxBody")
        .catalogUiProductLastViewed({maxItems: 5 });
    }
});
</script>

  </div>
</div>

    </div>
  
  
 
    <!--[if IE 7]><span id="ContentAreaFix"></span><![endif]-->
    <div class="ContentArea">
      <div class="ContentAreaInner">
        <div class="ContentAreaWrapper">
          
  <div class="Addresses">
  <h3><span class="BreadcrumbLastItem">Mi cuenta</span></h3>

  

  <hr class="Separator">

  
    
  

  
    <div class="TableHead"><div>Mylien Chac</div></div>
    <div class="Dialog">
      <div class="SizeContainer">
        No se puede editar la cuenta.
      </div>
      <div class="ClearBoth"></div>
    </div>
  
  <hr class="Separator">
</div>



        </div><!-- close .ContentAreaWrapper -->
      </div><!-- close .ContentAreaInner -->
    </div><!-- close .ContentArea -->
  </div><!-- close .Middle -->
  <div class="FooterContainer" style="bottom: 0px; position: fixed; width: 100%;">
  
  
    <div class="Footer HorizontalNavBar">
      <div class="PropertyContainer">
        

 
  
  
  <div class="SizeContainer custom-container custom-left">
<div class=" NavBarElement0" id="NavElement_50128033">
  
  <div class="NavigationText ">
  <ul>
	<li>
	<h3>Legal</h3>
	</li>
	<li><a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/#">Condiciones Generales</a></li>
	<li><a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/#">Derecho de Retirada</a></li>
	<li><a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/#">Política de Privacidad</a></li>
	<li><a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/#">Información de Contacto</a></li>
</ul>

<ul>
	<li>
	<h3>Productos</h3>
	</li>
	<li><a data-link-type="undefined" data-type="linkpicker" href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/#">Toners</a></li>
	<li><a data-link-type="undefined" data-type="linkpicker" href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/#">Tintas</a></li>
</ul>
  </div>
  
</div>
</div>
  <div class="SizeContainer custom-container custom-right">

<div class="ContextBox NavBarElement1" id="NavElement_50128038">
  <div class="BoxContainer">
    
    <h3>Contacto</h3><div class="ContextBoxBody">
      <div class="RightMargin FloatTop TopMargin">
        <strong>Dirección</strong>
        <div>
          
            
            
            
            <span class="vcard">
  
    
      <span class="fn org">Tenerife System</span>
    
    <br>
  
  
  <span class="adr">
    
    <span class="street-address" itemprop="streetAddress">C/ Doctor Marañón, 3</span><br>
    
    <span class="street-address">Local Bajo Izq.</span><br>
    
    <span class="postal-code" itemprop="postalCode">38207</span>
    <span class="locality" itemprop="addressLocality"> San Cristóbal de la Laguna</span>
    
    <span class="region" itemprop="addressRegion">/ Tenerife</span>
    
    <br>
    
      
    
  </span>
</span>

          
          
          
          
        </div>
      </div>
      
        <div class="RightMargin FloatTop TopMargin">
          
          
            <div>
              <strong>Teléfono</strong>
              <div>922315445</div>
            </div>
          
          
            <div class="TopMargin">
              <strong>Fax</strong>
              <div>922315859</div>
            </div>
          
        </div>
      
      <div class="RightMargin FloatTop TopMargin">
        <strong>Correo electrónico</strong>
        <div>
          <a href="mailto:ventas@tomatonercanarias.es">ventas@tomatonercanarias.es</a>
          
          
            <br>o a través de
            <a href="https://shop.strato.com/epages/78298158.sf/seccc40bc251a/?ObjectPath=/Shops/78298158/Categories/ContactForm">Formulario de contacto</a>
          
          
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
  
  


      </div>
    </div>
  
  </div>

</div>

  

<script type="text/javascript">
  

  
    require(['jquery', 'de_epages/design/ui/cookiemessage'], function ($) {
        $('body').designUiCookiemessage({
            message: 'Este\u0020sitio\u0020web\u0020utiliza\u0020cookies\u002E\u0020Si\u0020continúa\u0020navegando\u0020por\u0020esta\u0020página\u002C\u0020acepta\u0020su\u0020uso\u002E\u0020Puede\u0020encontrar\u0020más\u0020información\u0020sobre\u0020la\u0020forma\u0020en\u0020que\u0020utilizamos\u0020las\u0020cookies\u0020\u0026lt\u003Ba\u0020href\u003D\u0026quot\u003B\u003FObjectPath\u003DCategories\u002FPrivacyPolicy\u0026quot\u003B\u0026gt\u003Baquí\u0026lt\u003B\u002Fa\u0026gt\u003B\u002E'
          
        });
    });
  
</script>

<script type="text/javascript">
require(["jquery", "util/storage", "$ready!"], function ($, storage) {
  // remove all selected products on logout
  var $LogoutNodes = $('a[href*="ChangeAction=Logout"]');
  
  $LogoutNodes.each(function (event){
    $(this).on('click', function (event){
      storage.sessionStorage('Product::ProductComparison', null);
    });
  });
});
</script><script type="text/javascript">
require(['jquery', '$ready!'], function ($) {

	var createGadgets = function(){

		// Constants.
		var gNodeType = 'div',
			gClassName = 'ep-gadget',
			gDataName = gClassName,
			gFolder = 'ui',
			secondClickBtn = ['facebook', 'twitter', 'otherbuttons'],
			$gNodes,
			googleMapsAPIKey = false;

		// Transform gadget imgs to divs
		$('img.' + gClassName).each(function (i, elem) {
			var $elem = $(elem),
				tmplElement = $('<div/>'),
				replaceElement = $elem.parent('p');

			// set/remove gadget-, class- and style-values/options
			tmplElement
				.data(gDataName, $elem.data(gDataName))
				.attr({
					'class': ($elem.attr('class') ? $elem.attr('class') : ''),
					'style': ($elem.attr('style') ? $elem.attr('style').replace(/\s*?height:.*?;|\s*?background.*?:.*?;|\s*?display:.*?;|\s*?margin-bottom:.*?;|\s*?max-width:.*?;|\s*?width:.*?px;/g, '') : '')
				});

			// if parent paragraph element only contains the gadget-element => replace paragraph and gadget-element by gadget-div
			if (replaceElement.length && replaceElement.children().length === 1 && replaceElement.text().replace(/\s|\n|\r/g, '') === '') {
				replaceElement.replaceWith(tmplElement);
			// if parent paragraph element contains more content => replace only gadget-element by gadget-div
			} else {
				$elem.replaceWith(tmplElement);
			}
		});

		// Build gadgets in the gadget div
		$gNodes = $(gNodeType + '.' + gClassName);

		if ($gNodes.length) {
			// Go go gadgets.
			$gNodes.each(function () {
				var $this = $(this),
					data = $this.data(gDataName),
					elem,
					classButton = 'ep-2-click-button SocialWeb',
					classButtonType;

				data.options.googleMapsAPIKey = false;
				if (data.options.type && data.options.type === "google") {
				 	data.options.googleMapsAPIKey = googleMapsAPIKey;
				}

				// if no second click button is needed
				if (secondClickBtn.indexOf(data.alias) === -1) {
					require([['de_epages', data.cartridge, gFolder, data.alias].join('/')], function ($) {
						$this[data.cartridge + gFolder.charAt(0).toUpperCase() + gFolder.slice(1) + data.alias.charAt(0).toUpperCase() + data.alias.slice(1)](data.options);
						
					});
				} else {
					// type of button (facebook, twitter ..)
					classButtonType = 'ep-2-click-button-' + data.alias;
					// add classes
					$this.addClass(classButtonType + ' ' + classButton);
					// add tooltip
		 			$this.attr("title", "Active\u0020el\u0020botón\u0020con\u0020un\u0020solo\u0020clic\u002E\u0020Entonces\u0020podrá\u0020compartir\u0020la\u0020página\u0020en\u0020las\u0020redes\u0020sociales\u002E\u0020Tras\u0020la\u0020activación\u002C\u0020los\u0020datos\u0020se\u0020envían\u0020a\u0020terceros\u002E");

					// add span (contains the switch)
					$this.html('<span></span>');

					// add click-handler for 2-click-button
					$this.one('click', function (evt) {
						evt.preventDefault();
						evt.stopPropagation();

						var _this = $(this),
							data = $this.data(gDataName),
							elem = $('<div />');

						elem[0].className = this.className;
						elem.removeClass(classButtonType + ' ' + classButton);

						require([['de_epages', data.cartridge, gFolder, data.alias].join('/')], function ($) {
							// instantiate needed widget (facebook, twitter ...)
							elem[data.cartridge + gFolder.charAt(0).toUpperCase() + gFolder.slice(1) + data.alias.charAt(0).toUpperCase() + data.alias.slice(1)](data.options);

							

							// replace 2-click-button with widget-element
							_this.replaceWith(elem);
						});
					});
				}

			});
		}
	};

	createGadgets();
	$('body').on('updatepreview', createGadgets);

});
</script>
<script>
require([
	'jquery',
	'de_epages/product/inc/energylabel',

	'$ready!'
], function ($, energylabel) {
	var energylabels = $('.energylabel-arrow');

	energylabel.init({items: energylabels});
});
</script>


  <!-- BEGIN etracker Tracklet 3.0 async -->
<script type="text/javascript">
(function () {
  var et_init = function () {
		var et = document.createElement('script');
		et.src = '//code.etracker.com/a.js?et=KJ3S59';
		var head = document.getElementsByTagName('head')[0];
		head.insertBefore(et, head.firstChild);
	};
	window.addEventListener
  	? window.addEventListener('load', et_init, false)
    : window.attachEvent('onload', et_init);
})();
</script>
<!-- etracker Tracklet END -->

<!-- BEGIN etracker Tracklet 3.0 async Parameter -->
<script type="text/javascript">
function et_params() {
    // etracker PARAMETER 3.0
    et_pagename     = "MyAccount";
    et_areas        = "";
    et_ilevel       = 1;
    et_url          = "http%3A//www.tomatonercanarias.es/epages/78298158.sf/%3FViewAction%3DViewEtrackerTrackedPageInfo";
    et_tag          = "";
    // etracker PARAMETER END
    // etracker TARGET PARAMETER 3.0
    
    // etracker TARGET PARAMETER END
    // etracker CAMPAIGN PARAMETER 3.0
    
    // etracker CAMPAIGN PARAMETER END
}
</script>
<!-- etracker Tracklet END Parameter -->

  <!-- etracker CODE NOSCRIPT 3.0 -->
<noscript>

<p><a href='https://www.etracker.de/app?et=KJ3S59'>
<img style='border:0px;' alt='' src='https://www.etracker.de/cnt.php?et=KJ3S59&amp;v=3.0&amp;java=n&amp;et_easy=0&amp;et_pagename=MyAccount&amp;et_areas=&amp;et_ilevel=1&amp;et_target=,,,0&amp;et_lpage=&amp;et_trig=&amp;et_se=0&amp;et_cust=0&amp;et_basket=&amp;et_url=&amp;et_tag=&amp;et_organisation=&amp;et_demographic=' /></a></p>

</noscript>
<!-- etracker CODE NOSCRIPT END-->
















<ul style="display:none;" id="energylabel-imagelist"></ul><div><a href="http://www.etracker.de/" target="_blank"><img style="border:0px;" alt="" src="./usuario_files/cnt.php"></a></div></body></html>