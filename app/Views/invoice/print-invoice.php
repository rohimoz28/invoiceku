<!DOCTYPE html>
<html lang="en">

<head>
  <script id="debugbar_loader" data-time="1678503517.100733" src="http://localhost:8080/?debugbar"></script>
  <script id="debugbar_dynamic_script"></script>
  <style id="debugbar_dynamic_style"></style>
  <style>
    .fa,
    .fab,
    .fad,
    .fal,
    .far,
    .fas {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      line-height: 1
    }

    .fa-lg {
      font-size: 1.33333em;
      line-height: .75em;
      vertical-align: -.0667em
    }

    .fa-xs {
      font-size: .75em
    }

    .fa-sm {
      font-size: .875em
    }

    .fa-1x {
      font-size: 1em
    }

    .fa-2x {
      font-size: 2em
    }

    .fa-3x {
      font-size: 3em
    }

    .fa-4x {
      font-size: 4em
    }

    .fa-5x {
      font-size: 5em
    }

    .fa-6x {
      font-size: 6em
    }

    .fa-7x {
      font-size: 7em
    }

    .fa-8x {
      font-size: 8em
    }

    .fa-9x {
      font-size: 9em
    }

    .fa-10x {
      font-size: 10em
    }

    .fa-fw {
      text-align: center;
      width: 1.25em
    }

    .fa-ul {
      list-style-type: none;
      margin-left: 2.5em;
      padding-left: 0
    }

    .fa-ul>li {
      position: relative
    }

    .fa-li {
      left: -2em;
      position: absolute;
      text-align: center;
      width: 2em;
      line-height: inherit
    }

    .fa-border {
      border: .08em solid #eee;
      border-radius: .1em;
      padding: .2em .25em .15em
    }

    .fa-pull-left {
      float: left
    }

    .fa-pull-right {
      float: right
    }

    .fa.fa-pull-left,
    .fab.fa-pull-left,
    .fal.fa-pull-left,
    .far.fa-pull-left,
    .fas.fa-pull-left {
      margin-right: .3em
    }

    .fa.fa-pull-right,
    .fab.fa-pull-right,
    .fal.fa-pull-right,
    .far.fa-pull-right,
    .fas.fa-pull-right {
      margin-left: .3em
    }

    .fa-spin {
      -webkit-animation: fa-spin 2s linear infinite;
      animation: fa-spin 2s linear infinite
    }

    .fa-pulse {
      -webkit-animation: fa-spin 1s steps(8) infinite;
      animation: fa-spin 1s steps(8) infinite
    }

    @-webkit-keyframes fa-spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
      }

      to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
      }
    }

    @keyframes fa-spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
      }

      to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
      }
    }

    .fa-rotate-90 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .fa-rotate-180 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    .fa-rotate-270 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
      -webkit-transform: rotate(270deg);
      transform: rotate(270deg)
    }

    .fa-flip-horizontal {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1)
    }

    .fa-flip-vertical {
      -webkit-transform: scaleY(-1);
      transform: scaleY(-1)
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical,
    .fa-flip-vertical {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical {
      -webkit-transform: scale(-1);
      transform: scale(-1)
    }

    :root .fa-flip-both,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical,
    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270 {
      -webkit-filter: none;
      filter: none
    }

    .fa-stack {
      display: inline-block;
      height: 2em;
      line-height: 2em;
      position: relative;
      vertical-align: middle;
      width: 2.5em
    }

    .fa-stack-1x,
    .fa-stack-2x {
      left: 0;
      position: absolute;
      text-align: center;
      width: 100%
    }

    .fa-stack-1x {
      line-height: inherit
    }

    .fa-stack-2x {
      font-size: 2em
    }

    .fa-inverse {
      color: #fff
    }

    .fa-500px:before {
      content: "\f26e"
    }

    .fa-accessible-icon:before {
      content: "\f368"
    }

    .fa-accusoft:before {
      content: "\f369"
    }

    .fa-acquisitions-incorporated:before {
      content: "\f6af"
    }

    .fa-ad:before {
      content: "\f641"
    }

    .fa-address-book:before {
      content: "\f2b9"
    }

    .fa-address-card:before {
      content: "\f2bb"
    }

    .fa-adjust:before {
      content: "\f042"
    }

    .fa-adn:before {
      content: "\f170"
    }

    .fa-adversal:before {
      content: "\f36a"
    }

    .fa-affiliatetheme:before {
      content: "\f36b"
    }

    .fa-air-freshener:before {
      content: "\f5d0"
    }

    .fa-airbnb:before {
      content: "\f834"
    }

    .fa-algolia:before {
      content: "\f36c"
    }

    .fa-align-center:before {
      content: "\f037"
    }

    .fa-align-justify:before {
      content: "\f039"
    }

    .fa-align-left:before {
      content: "\f036"
    }

    .fa-align-right:before {
      content: "\f038"
    }

    .fa-alipay:before {
      content: "\f642"
    }

    .fa-allergies:before {
      content: "\f461"
    }

    .fa-amazon:before {
      content: "\f270"
    }

    .fa-amazon-pay:before {
      content: "\f42c"
    }

    .fa-ambulance:before {
      content: "\f0f9"
    }

    .fa-american-sign-language-interpreting:before {
      content: "\f2a3"
    }

    .fa-amilia:before {
      content: "\f36d"
    }

    .fa-anchor:before {
      content: "\f13d"
    }

    .fa-android:before {
      content: "\f17b"
    }

    .fa-angellist:before {
      content: "\f209"
    }

    .fa-angle-double-down:before {
      content: "\f103"
    }

    .fa-angle-double-left:before {
      content: "\f100"
    }

    .fa-angle-double-right:before {
      content: "\f101"
    }

    .fa-angle-double-up:before {
      content: "\f102"
    }

    .fa-angle-down:before {
      content: "\f107"
    }

    .fa-angle-left:before {
      content: "\f104"
    }

    .fa-angle-right:before {
      content: "\f105"
    }

    .fa-angle-up:before {
      content: "\f106"
    }

    .fa-angry:before {
      content: "\f556"
    }

    .fa-angrycreative:before {
      content: "\f36e"
    }

    .fa-angular:before {
      content: "\f420"
    }

    .fa-ankh:before {
      content: "\f644"
    }

    .fa-app-store:before {
      content: "\f36f"
    }

    .fa-app-store-ios:before {
      content: "\f370"
    }

    .fa-apper:before {
      content: "\f371"
    }

    .fa-apple:before {
      content: "\f179"
    }

    .fa-apple-alt:before {
      content: "\f5d1"
    }

    .fa-apple-pay:before {
      content: "\f415"
    }

    .fa-archive:before {
      content: "\f187"
    }

    .fa-archway:before {
      content: "\f557"
    }

    .fa-arrow-alt-circle-down:before {
      content: "\f358"
    }

    .fa-arrow-alt-circle-left:before {
      content: "\f359"
    }

    .fa-arrow-alt-circle-right:before {
      content: "\f35a"
    }

    .fa-arrow-alt-circle-up:before {
      content: "\f35b"
    }

    .fa-arrow-circle-down:before {
      content: "\f0ab"
    }

    .fa-arrow-circle-left:before {
      content: "\f0a8"
    }

    .fa-arrow-circle-right:before {
      content: "\f0a9"
    }

    .fa-arrow-circle-up:before {
      content: "\f0aa"
    }

    .fa-arrow-down:before {
      content: "\f063"
    }

    .fa-arrow-left:before {
      content: "\f060"
    }

    .fa-arrow-right:before {
      content: "\f061"
    }

    .fa-arrow-up:before {
      content: "\f062"
    }

    .fa-arrows-alt:before {
      content: "\f0b2"
    }

    .fa-arrows-alt-h:before {
      content: "\f337"
    }

    .fa-arrows-alt-v:before {
      content: "\f338"
    }

    .fa-artstation:before {
      content: "\f77a"
    }

    .fa-assistive-listening-systems:before {
      content: "\f2a2"
    }

    .fa-asterisk:before {
      content: "\f069"
    }

    .fa-asymmetrik:before {
      content: "\f372"
    }

    .fa-at:before {
      content: "\f1fa"
    }

    .fa-atlas:before {
      content: "\f558"
    }

    .fa-atlassian:before {
      content: "\f77b"
    }

    .fa-atom:before {
      content: "\f5d2"
    }

    .fa-audible:before {
      content: "\f373"
    }

    .fa-audio-description:before {
      content: "\f29e"
    }

    .fa-autoprefixer:before {
      content: "\f41c"
    }

    .fa-avianex:before {
      content: "\f374"
    }

    .fa-aviato:before {
      content: "\f421"
    }

    .fa-award:before {
      content: "\f559"
    }

    .fa-aws:before {
      content: "\f375"
    }

    .fa-baby:before {
      content: "\f77c"
    }

    .fa-baby-carriage:before {
      content: "\f77d"
    }

    .fa-backspace:before {
      content: "\f55a"
    }

    .fa-backward:before {
      content: "\f04a"
    }

    .fa-bacon:before {
      content: "\f7e5"
    }

    .fa-bacteria:before {
      content: "\e059"
    }

    .fa-bacterium:before {
      content: "\e05a"
    }

    .fa-bahai:before {
      content: "\f666"
    }

    .fa-balance-scale:before {
      content: "\f24e"
    }

    .fa-balance-scale-left:before {
      content: "\f515"
    }

    .fa-balance-scale-right:before {
      content: "\f516"
    }

    .fa-ban:before {
      content: "\f05e"
    }

    .fa-band-aid:before {
      content: "\f462"
    }

    .fa-bandcamp:before {
      content: "\f2d5"
    }

    .fa-barcode:before {
      content: "\f02a"
    }

    .fa-bars:before {
      content: "\f0c9"
    }

    .fa-baseball-ball:before {
      content: "\f433"
    }

    .fa-basketball-ball:before {
      content: "\f434"
    }

    .fa-bath:before {
      content: "\f2cd"
    }

    .fa-battery-empty:before {
      content: "\f244"
    }

    .fa-battery-full:before {
      content: "\f240"
    }

    .fa-battery-half:before {
      content: "\f242"
    }

    .fa-battery-quarter:before {
      content: "\f243"
    }

    .fa-battery-three-quarters:before {
      content: "\f241"
    }

    .fa-battle-net:before {
      content: "\f835"
    }

    .fa-bed:before {
      content: "\f236"
    }

    .fa-beer:before {
      content: "\f0fc"
    }

    .fa-behance:before {
      content: "\f1b4"
    }

    .fa-behance-square:before {
      content: "\f1b5"
    }

    .fa-bell:before {
      content: "\f0f3"
    }

    .fa-bell-slash:before {
      content: "\f1f6"
    }

    .fa-bezier-curve:before {
      content: "\f55b"
    }

    .fa-bible:before {
      content: "\f647"
    }

    .fa-bicycle:before {
      content: "\f206"
    }

    .fa-biking:before {
      content: "\f84a"
    }

    .fa-bimobject:before {
      content: "\f378"
    }

    .fa-binoculars:before {
      content: "\f1e5"
    }

    .fa-biohazard:before {
      content: "\f780"
    }

    .fa-birthday-cake:before {
      content: "\f1fd"
    }

    .fa-bitbucket:before {
      content: "\f171"
    }

    .fa-bitcoin:before {
      content: "\f379"
    }

    .fa-bity:before {
      content: "\f37a"
    }

    .fa-black-tie:before {
      content: "\f27e"
    }

    .fa-blackberry:before {
      content: "\f37b"
    }

    .fa-blender:before {
      content: "\f517"
    }

    .fa-blender-phone:before {
      content: "\f6b6"
    }

    .fa-blind:before {
      content: "\f29d"
    }

    .fa-blog:before {
      content: "\f781"
    }

    .fa-blogger:before {
      content: "\f37c"
    }

    .fa-blogger-b:before {
      content: "\f37d"
    }

    .fa-bluetooth:before {
      content: "\f293"
    }

    .fa-bluetooth-b:before {
      content: "\f294"
    }

    .fa-bold:before {
      content: "\f032"
    }

    .fa-bolt:before {
      content: "\f0e7"
    }

    .fa-bomb:before {
      content: "\f1e2"
    }

    .fa-bone:before {
      content: "\f5d7"
    }

    .fa-bong:before {
      content: "\f55c"
    }

    .fa-book:before {
      content: "\f02d"
    }

    .fa-book-dead:before {
      content: "\f6b7"
    }

    .fa-book-medical:before {
      content: "\f7e6"
    }

    .fa-book-open:before {
      content: "\f518"
    }

    .fa-book-reader:before {
      content: "\f5da"
    }

    .fa-bookmark:before {
      content: "\f02e"
    }

    .fa-bootstrap:before {
      content: "\f836"
    }

    .fa-border-all:before {
      content: "\f84c"
    }

    .fa-border-none:before {
      content: "\f850"
    }

    .fa-border-style:before {
      content: "\f853"
    }

    .fa-bowling-ball:before {
      content: "\f436"
    }

    .fa-box:before {
      content: "\f466"
    }

    .fa-box-open:before {
      content: "\f49e"
    }

    .fa-box-tissue:before {
      content: "\e05b"
    }

    .fa-boxes:before {
      content: "\f468"
    }

    .fa-braille:before {
      content: "\f2a1"
    }

    .fa-brain:before {
      content: "\f5dc"
    }

    .fa-bread-slice:before {
      content: "\f7ec"
    }

    .fa-briefcase:before {
      content: "\f0b1"
    }

    .fa-briefcase-medical:before {
      content: "\f469"
    }

    .fa-broadcast-tower:before {
      content: "\f519"
    }

    .fa-broom:before {
      content: "\f51a"
    }

    .fa-brush:before {
      content: "\f55d"
    }

    .fa-btc:before {
      content: "\f15a"
    }

    .fa-buffer:before {
      content: "\f837"
    }

    .fa-bug:before {
      content: "\f188"
    }

    .fa-building:before {
      content: "\f1ad"
    }

    .fa-bullhorn:before {
      content: "\f0a1"
    }

    .fa-bullseye:before {
      content: "\f140"
    }

    .fa-burn:before {
      content: "\f46a"
    }

    .fa-buromobelexperte:before {
      content: "\f37f"
    }

    .fa-bus:before {
      content: "\f207"
    }

    .fa-bus-alt:before {
      content: "\f55e"
    }

    .fa-business-time:before {
      content: "\f64a"
    }

    .fa-buy-n-large:before {
      content: "\f8a6"
    }

    .fa-buysellads:before {
      content: "\f20d"
    }

    .fa-calculator:before {
      content: "\f1ec"
    }

    .fa-calendar:before {
      content: "\f133"
    }

    .fa-calendar-alt:before {
      content: "\f073"
    }

    .fa-calendar-check:before {
      content: "\f274"
    }

    .fa-calendar-day:before {
      content: "\f783"
    }

    .fa-calendar-minus:before {
      content: "\f272"
    }

    .fa-calendar-plus:before {
      content: "\f271"
    }

    .fa-calendar-times:before {
      content: "\f273"
    }

    .fa-calendar-week:before {
      content: "\f784"
    }

    .fa-camera:before {
      content: "\f030"
    }

    .fa-camera-retro:before {
      content: "\f083"
    }

    .fa-campground:before {
      content: "\f6bb"
    }

    .fa-canadian-maple-leaf:before {
      content: "\f785"
    }

    .fa-candy-cane:before {
      content: "\f786"
    }

    .fa-cannabis:before {
      content: "\f55f"
    }

    .fa-capsules:before {
      content: "\f46b"
    }

    .fa-car:before {
      content: "\f1b9"
    }

    .fa-car-alt:before {
      content: "\f5de"
    }

    .fa-car-battery:before {
      content: "\f5df"
    }

    .fa-car-crash:before {
      content: "\f5e1"
    }

    .fa-car-side:before {
      content: "\f5e4"
    }

    .fa-caravan:before {
      content: "\f8ff"
    }

    .fa-caret-down:before {
      content: "\f0d7"
    }

    .fa-caret-left:before {
      content: "\f0d9"
    }

    .fa-caret-right:before {
      content: "\f0da"
    }

    .fa-caret-square-down:before {
      content: "\f150"
    }

    .fa-caret-square-left:before {
      content: "\f191"
    }

    .fa-caret-square-right:before {
      content: "\f152"
    }

    .fa-caret-square-up:before {
      content: "\f151"
    }

    .fa-caret-up:before {
      content: "\f0d8"
    }

    .fa-carrot:before {
      content: "\f787"
    }

    .fa-cart-arrow-down:before {
      content: "\f218"
    }

    .fa-cart-plus:before {
      content: "\f217"
    }

    .fa-cash-register:before {
      content: "\f788"
    }

    .fa-cat:before {
      content: "\f6be"
    }

    .fa-cc-amazon-pay:before {
      content: "\f42d"
    }

    .fa-cc-amex:before {
      content: "\f1f3"
    }

    .fa-cc-apple-pay:before {
      content: "\f416"
    }

    .fa-cc-diners-club:before {
      content: "\f24c"
    }

    .fa-cc-discover:before {
      content: "\f1f2"
    }

    .fa-cc-jcb:before {
      content: "\f24b"
    }

    .fa-cc-mastercard:before {
      content: "\f1f1"
    }

    .fa-cc-paypal:before {
      content: "\f1f4"
    }

    .fa-cc-stripe:before {
      content: "\f1f5"
    }

    .fa-cc-visa:before {
      content: "\f1f0"
    }

    .fa-centercode:before {
      content: "\f380"
    }

    .fa-centos:before {
      content: "\f789"
    }

    .fa-certificate:before {
      content: "\f0a3"
    }

    .fa-chair:before {
      content: "\f6c0"
    }

    .fa-chalkboard:before {
      content: "\f51b"
    }

    .fa-chalkboard-teacher:before {
      content: "\f51c"
    }

    .fa-charging-station:before {
      content: "\f5e7"
    }

    .fa-chart-area:before {
      content: "\f1fe"
    }

    .fa-chart-bar:before {
      content: "\f080"
    }

    .fa-chart-line:before {
      content: "\f201"
    }

    .fa-chart-pie:before {
      content: "\f200"
    }

    .fa-check:before {
      content: "\f00c"
    }

    .fa-check-circle:before {
      content: "\f058"
    }

    .fa-check-double:before {
      content: "\f560"
    }

    .fa-check-square:before {
      content: "\f14a"
    }

    .fa-cheese:before {
      content: "\f7ef"
    }

    .fa-chess:before {
      content: "\f439"
    }

    .fa-chess-bishop:before {
      content: "\f43a"
    }

    .fa-chess-board:before {
      content: "\f43c"
    }

    .fa-chess-king:before {
      content: "\f43f"
    }

    .fa-chess-knight:before {
      content: "\f441"
    }

    .fa-chess-pawn:before {
      content: "\f443"
    }

    .fa-chess-queen:before {
      content: "\f445"
    }

    .fa-chess-rook:before {
      content: "\f447"
    }

    .fa-chevron-circle-down:before {
      content: "\f13a"
    }

    .fa-chevron-circle-left:before {
      content: "\f137"
    }

    .fa-chevron-circle-right:before {
      content: "\f138"
    }

    .fa-chevron-circle-up:before {
      content: "\f139"
    }

    .fa-chevron-down:before {
      content: "\f078"
    }

    .fa-chevron-left:before {
      content: "\f053"
    }

    .fa-chevron-right:before {
      content: "\f054"
    }

    .fa-chevron-up:before {
      content: "\f077"
    }

    .fa-child:before {
      content: "\f1ae"
    }

    .fa-chrome:before {
      content: "\f268"
    }

    .fa-chromecast:before {
      content: "\f838"
    }

    .fa-church:before {
      content: "\f51d"
    }

    .fa-circle:before {
      content: "\f111"
    }

    .fa-circle-notch:before {
      content: "\f1ce"
    }

    .fa-city:before {
      content: "\f64f"
    }

    .fa-clinic-medical:before {
      content: "\f7f2"
    }

    .fa-clipboard:before {
      content: "\f328"
    }

    .fa-clipboard-check:before {
      content: "\f46c"
    }

    .fa-clipboard-list:before {
      content: "\f46d"
    }

    .fa-clock:before {
      content: "\f017"
    }

    .fa-clone:before {
      content: "\f24d"
    }

    .fa-closed-captioning:before {
      content: "\f20a"
    }

    .fa-cloud:before {
      content: "\f0c2"
    }

    .fa-cloud-download-alt:before {
      content: "\f381"
    }

    .fa-cloud-meatball:before {
      content: "\f73b"
    }

    .fa-cloud-moon:before {
      content: "\f6c3"
    }

    .fa-cloud-moon-rain:before {
      content: "\f73c"
    }

    .fa-cloud-rain:before {
      content: "\f73d"
    }

    .fa-cloud-showers-heavy:before {
      content: "\f740"
    }

    .fa-cloud-sun:before {
      content: "\f6c4"
    }

    .fa-cloud-sun-rain:before {
      content: "\f743"
    }

    .fa-cloud-upload-alt:before {
      content: "\f382"
    }

    .fa-cloudflare:before {
      content: "\e07d"
    }

    .fa-cloudscale:before {
      content: "\f383"
    }

    .fa-cloudsmith:before {
      content: "\f384"
    }

    .fa-cloudversify:before {
      content: "\f385"
    }

    .fa-cocktail:before {
      content: "\f561"
    }

    .fa-code:before {
      content: "\f121"
    }

    .fa-code-branch:before {
      content: "\f126"
    }

    .fa-codepen:before {
      content: "\f1cb"
    }

    .fa-codiepie:before {
      content: "\f284"
    }

    .fa-coffee:before {
      content: "\f0f4"
    }

    .fa-cog:before {
      content: "\f013"
    }

    .fa-cogs:before {
      content: "\f085"
    }

    .fa-coins:before {
      content: "\f51e"
    }

    .fa-columns:before {
      content: "\f0db"
    }

    .fa-comment:before {
      content: "\f075"
    }

    .fa-comment-alt:before {
      content: "\f27a"
    }

    .fa-comment-dollar:before {
      content: "\f651"
    }

    .fa-comment-dots:before {
      content: "\f4ad"
    }

    .fa-comment-medical:before {
      content: "\f7f5"
    }

    .fa-comment-slash:before {
      content: "\f4b3"
    }

    .fa-comments:before {
      content: "\f086"
    }

    .fa-comments-dollar:before {
      content: "\f653"
    }

    .fa-compact-disc:before {
      content: "\f51f"
    }

    .fa-compass:before {
      content: "\f14e"
    }

    .fa-compress:before {
      content: "\f066"
    }

    .fa-compress-alt:before {
      content: "\f422"
    }

    .fa-compress-arrows-alt:before {
      content: "\f78c"
    }

    .fa-concierge-bell:before {
      content: "\f562"
    }

    .fa-confluence:before {
      content: "\f78d"
    }

    .fa-connectdevelop:before {
      content: "\f20e"
    }

    .fa-contao:before {
      content: "\f26d"
    }

    .fa-cookie:before {
      content: "\f563"
    }

    .fa-cookie-bite:before {
      content: "\f564"
    }

    .fa-copy:before {
      content: "\f0c5"
    }

    .fa-copyright:before {
      content: "\f1f9"
    }

    .fa-cotton-bureau:before {
      content: "\f89e"
    }

    .fa-couch:before {
      content: "\f4b8"
    }

    .fa-cpanel:before {
      content: "\f388"
    }

    .fa-creative-commons:before {
      content: "\f25e"
    }

    .fa-creative-commons-by:before {
      content: "\f4e7"
    }

    .fa-creative-commons-nc:before {
      content: "\f4e8"
    }

    .fa-creative-commons-nc-eu:before {
      content: "\f4e9"
    }

    .fa-creative-commons-nc-jp:before {
      content: "\f4ea"
    }

    .fa-creative-commons-nd:before {
      content: "\f4eb"
    }

    .fa-creative-commons-pd:before {
      content: "\f4ec"
    }

    .fa-creative-commons-pd-alt:before {
      content: "\f4ed"
    }

    .fa-creative-commons-remix:before {
      content: "\f4ee"
    }

    .fa-creative-commons-sa:before {
      content: "\f4ef"
    }

    .fa-creative-commons-sampling:before {
      content: "\f4f0"
    }

    .fa-creative-commons-sampling-plus:before {
      content: "\f4f1"
    }

    .fa-creative-commons-share:before {
      content: "\f4f2"
    }

    .fa-creative-commons-zero:before {
      content: "\f4f3"
    }

    .fa-credit-card:before {
      content: "\f09d"
    }

    .fa-critical-role:before {
      content: "\f6c9"
    }

    .fa-crop:before {
      content: "\f125"
    }

    .fa-crop-alt:before {
      content: "\f565"
    }

    .fa-cross:before {
      content: "\f654"
    }

    .fa-crosshairs:before {
      content: "\f05b"
    }

    .fa-crow:before {
      content: "\f520"
    }

    .fa-crown:before {
      content: "\f521"
    }

    .fa-crutch:before {
      content: "\f7f7"
    }

    .fa-css3:before {
      content: "\f13c"
    }

    .fa-css3-alt:before {
      content: "\f38b"
    }

    .fa-cube:before {
      content: "\f1b2"
    }

    .fa-cubes:before {
      content: "\f1b3"
    }

    .fa-cut:before {
      content: "\f0c4"
    }

    .fa-cuttlefish:before {
      content: "\f38c"
    }

    .fa-d-and-d:before {
      content: "\f38d"
    }

    .fa-d-and-d-beyond:before {
      content: "\f6ca"
    }

    .fa-dailymotion:before {
      content: "\e052"
    }

    .fa-dashcube:before {
      content: "\f210"
    }

    .fa-database:before {
      content: "\f1c0"
    }

    .fa-deaf:before {
      content: "\f2a4"
    }

    .fa-deezer:before {
      content: "\e077"
    }

    .fa-delicious:before {
      content: "\f1a5"
    }

    .fa-democrat:before {
      content: "\f747"
    }

    .fa-deploydog:before {
      content: "\f38e"
    }

    .fa-deskpro:before {
      content: "\f38f"
    }

    .fa-desktop:before {
      content: "\f108"
    }

    .fa-dev:before {
      content: "\f6cc"
    }

    .fa-deviantart:before {
      content: "\f1bd"
    }

    .fa-dharmachakra:before {
      content: "\f655"
    }

    .fa-dhl:before {
      content: "\f790"
    }

    .fa-diagnoses:before {
      content: "\f470"
    }

    .fa-diaspora:before {
      content: "\f791"
    }

    .fa-dice:before {
      content: "\f522"
    }

    .fa-dice-d20:before {
      content: "\f6cf"
    }

    .fa-dice-d6:before {
      content: "\f6d1"
    }

    .fa-dice-five:before {
      content: "\f523"
    }

    .fa-dice-four:before {
      content: "\f524"
    }

    .fa-dice-one:before {
      content: "\f525"
    }

    .fa-dice-six:before {
      content: "\f526"
    }

    .fa-dice-three:before {
      content: "\f527"
    }

    .fa-dice-two:before {
      content: "\f528"
    }

    .fa-digg:before {
      content: "\f1a6"
    }

    .fa-digital-ocean:before {
      content: "\f391"
    }

    .fa-digital-tachograph:before {
      content: "\f566"
    }

    .fa-directions:before {
      content: "\f5eb"
    }

    .fa-discord:before {
      content: "\f392"
    }

    .fa-discourse:before {
      content: "\f393"
    }

    .fa-disease:before {
      content: "\f7fa"
    }

    .fa-divide:before {
      content: "\f529"
    }

    .fa-dizzy:before {
      content: "\f567"
    }

    .fa-dna:before {
      content: "\f471"
    }

    .fa-dochub:before {
      content: "\f394"
    }

    .fa-docker:before {
      content: "\f395"
    }

    .fa-dog:before {
      content: "\f6d3"
    }

    .fa-dollar-sign:before {
      content: "\f155"
    }

    .fa-dolly:before {
      content: "\f472"
    }

    .fa-dolly-flatbed:before {
      content: "\f474"
    }

    .fa-donate:before {
      content: "\f4b9"
    }

    .fa-door-closed:before {
      content: "\f52a"
    }

    .fa-door-open:before {
      content: "\f52b"
    }

    .fa-dot-circle:before {
      content: "\f192"
    }

    .fa-dove:before {
      content: "\f4ba"
    }

    .fa-download:before {
      content: "\f019"
    }

    .fa-draft2digital:before {
      content: "\f396"
    }

    .fa-drafting-compass:before {
      content: "\f568"
    }

    .fa-dragon:before {
      content: "\f6d5"
    }

    .fa-draw-polygon:before {
      content: "\f5ee"
    }

    .fa-dribbble:before {
      content: "\f17d"
    }

    .fa-dribbble-square:before {
      content: "\f397"
    }

    .fa-dropbox:before {
      content: "\f16b"
    }

    .fa-drum:before {
      content: "\f569"
    }

    .fa-drum-steelpan:before {
      content: "\f56a"
    }

    .fa-drumstick-bite:before {
      content: "\f6d7"
    }

    .fa-drupal:before {
      content: "\f1a9"
    }

    .fa-dumbbell:before {
      content: "\f44b"
    }

    .fa-dumpster:before {
      content: "\f793"
    }

    .fa-dumpster-fire:before {
      content: "\f794"
    }

    .fa-dungeon:before {
      content: "\f6d9"
    }

    .fa-dyalog:before {
      content: "\f399"
    }

    .fa-earlybirds:before {
      content: "\f39a"
    }

    .fa-ebay:before {
      content: "\f4f4"
    }

    .fa-edge:before {
      content: "\f282"
    }

    .fa-edge-legacy:before {
      content: "\e078"
    }

    .fa-edit:before {
      content: "\f044"
    }

    .fa-egg:before {
      content: "\f7fb"
    }

    .fa-eject:before {
      content: "\f052"
    }

    .fa-elementor:before {
      content: "\f430"
    }

    .fa-ellipsis-h:before {
      content: "\f141"
    }

    .fa-ellipsis-v:before {
      content: "\f142"
    }

    .fa-ello:before {
      content: "\f5f1"
    }

    .fa-ember:before {
      content: "\f423"
    }

    .fa-empire:before {
      content: "\f1d1"
    }

    .fa-envelope:before {
      content: "\f0e0"
    }

    .fa-envelope-open:before {
      content: "\f2b6"
    }

    .fa-envelope-open-text:before {
      content: "\f658"
    }

    .fa-envelope-square:before {
      content: "\f199"
    }

    .fa-envira:before {
      content: "\f299"
    }

    .fa-equals:before {
      content: "\f52c"
    }

    .fa-eraser:before {
      content: "\f12d"
    }

    .fa-erlang:before {
      content: "\f39d"
    }

    .fa-ethereum:before {
      content: "\f42e"
    }

    .fa-ethernet:before {
      content: "\f796"
    }

    .fa-etsy:before {
      content: "\f2d7"
    }

    .fa-euro-sign:before {
      content: "\f153"
    }

    .fa-evernote:before {
      content: "\f839"
    }

    .fa-exchange-alt:before {
      content: "\f362"
    }

    .fa-exclamation:before {
      content: "\f12a"
    }

    .fa-exclamation-circle:before {
      content: "\f06a"
    }

    .fa-exclamation-triangle:before {
      content: "\f071"
    }

    .fa-expand:before {
      content: "\f065"
    }

    .fa-expand-alt:before {
      content: "\f424"
    }

    .fa-expand-arrows-alt:before {
      content: "\f31e"
    }

    .fa-expeditedssl:before {
      content: "\f23e"
    }

    .fa-external-link-alt:before {
      content: "\f35d"
    }

    .fa-external-link-square-alt:before {
      content: "\f360"
    }

    .fa-eye:before {
      content: "\f06e"
    }

    .fa-eye-dropper:before {
      content: "\f1fb"
    }

    .fa-eye-slash:before {
      content: "\f070"
    }

    .fa-facebook:before {
      content: "\f09a"
    }

    .fa-facebook-f:before {
      content: "\f39e"
    }

    .fa-facebook-messenger:before {
      content: "\f39f"
    }

    .fa-facebook-square:before {
      content: "\f082"
    }

    .fa-fan:before {
      content: "\f863"
    }

    .fa-fantasy-flight-games:before {
      content: "\f6dc"
    }

    .fa-fast-backward:before {
      content: "\f049"
    }

    .fa-fast-forward:before {
      content: "\f050"
    }

    .fa-faucet:before {
      content: "\e005"
    }

    .fa-fax:before {
      content: "\f1ac"
    }

    .fa-feather:before {
      content: "\f52d"
    }

    .fa-feather-alt:before {
      content: "\f56b"
    }

    .fa-fedex:before {
      content: "\f797"
    }

    .fa-fedora:before {
      content: "\f798"
    }

    .fa-female:before {
      content: "\f182"
    }

    .fa-fighter-jet:before {
      content: "\f0fb"
    }

    .fa-figma:before {
      content: "\f799"
    }

    .fa-file:before {
      content: "\f15b"
    }

    .fa-file-alt:before {
      content: "\f15c"
    }

    .fa-file-archive:before {
      content: "\f1c6"
    }

    .fa-file-audio:before {
      content: "\f1c7"
    }

    .fa-file-code:before {
      content: "\f1c9"
    }

    .fa-file-contract:before {
      content: "\f56c"
    }

    .fa-file-csv:before {
      content: "\f6dd"
    }

    .fa-file-download:before {
      content: "\f56d"
    }

    .fa-file-excel:before {
      content: "\f1c3"
    }

    .fa-file-export:before {
      content: "\f56e"
    }

    .fa-file-image:before {
      content: "\f1c5"
    }

    .fa-file-import:before {
      content: "\f56f"
    }

    .fa-file-invoice:before {
      content: "\f570"
    }

    .fa-file-invoice-dollar:before {
      content: "\f571"
    }

    .fa-file-medical:before {
      content: "\f477"
    }

    .fa-file-medical-alt:before {
      content: "\f478"
    }

    .fa-file-pdf:before {
      content: "\f1c1"
    }

    .fa-file-powerpoint:before {
      content: "\f1c4"
    }

    .fa-file-prescription:before {
      content: "\f572"
    }

    .fa-file-signature:before {
      content: "\f573"
    }

    .fa-file-upload:before {
      content: "\f574"
    }

    .fa-file-video:before {
      content: "\f1c8"
    }

    .fa-file-word:before {
      content: "\f1c2"
    }

    .fa-fill:before {
      content: "\f575"
    }

    .fa-fill-drip:before {
      content: "\f576"
    }

    .fa-film:before {
      content: "\f008"
    }

    .fa-filter:before {
      content: "\f0b0"
    }

    .fa-fingerprint:before {
      content: "\f577"
    }

    .fa-fire:before {
      content: "\f06d"
    }

    .fa-fire-alt:before {
      content: "\f7e4"
    }

    .fa-fire-extinguisher:before {
      content: "\f134"
    }

    .fa-firefox:before {
      content: "\f269"
    }

    .fa-firefox-browser:before {
      content: "\e007"
    }

    .fa-first-aid:before {
      content: "\f479"
    }

    .fa-first-order:before {
      content: "\f2b0"
    }

    .fa-first-order-alt:before {
      content: "\f50a"
    }

    .fa-firstdraft:before {
      content: "\f3a1"
    }

    .fa-fish:before {
      content: "\f578"
    }

    .fa-fist-raised:before {
      content: "\f6de"
    }

    .fa-flag:before {
      content: "\f024"
    }

    .fa-flag-checkered:before {
      content: "\f11e"
    }

    .fa-flag-usa:before {
      content: "\f74d"
    }

    .fa-flask:before {
      content: "\f0c3"
    }

    .fa-flickr:before {
      content: "\f16e"
    }

    .fa-flipboard:before {
      content: "\f44d"
    }

    .fa-flushed:before {
      content: "\f579"
    }

    .fa-fly:before {
      content: "\f417"
    }

    .fa-folder:before {
      content: "\f07b"
    }

    .fa-folder-minus:before {
      content: "\f65d"
    }

    .fa-folder-open:before {
      content: "\f07c"
    }

    .fa-folder-plus:before {
      content: "\f65e"
    }

    .fa-font:before {
      content: "\f031"
    }

    .fa-font-awesome:before {
      content: "\f2b4"
    }

    .fa-font-awesome-alt:before {
      content: "\f35c"
    }

    .fa-font-awesome-flag:before {
      content: "\f425"
    }

    .fa-font-awesome-logo-full:before {
      content: "\f4e6"
    }

    .fa-fonticons:before {
      content: "\f280"
    }

    .fa-fonticons-fi:before {
      content: "\f3a2"
    }

    .fa-football-ball:before {
      content: "\f44e"
    }

    .fa-fort-awesome:before {
      content: "\f286"
    }

    .fa-fort-awesome-alt:before {
      content: "\f3a3"
    }

    .fa-forumbee:before {
      content: "\f211"
    }

    .fa-forward:before {
      content: "\f04e"
    }

    .fa-foursquare:before {
      content: "\f180"
    }

    .fa-free-code-camp:before {
      content: "\f2c5"
    }

    .fa-freebsd:before {
      content: "\f3a4"
    }

    .fa-frog:before {
      content: "\f52e"
    }

    .fa-frown:before {
      content: "\f119"
    }

    .fa-frown-open:before {
      content: "\f57a"
    }

    .fa-fulcrum:before {
      content: "\f50b"
    }

    .fa-funnel-dollar:before {
      content: "\f662"
    }

    .fa-futbol:before {
      content: "\f1e3"
    }

    .fa-galactic-republic:before {
      content: "\f50c"
    }

    .fa-galactic-senate:before {
      content: "\f50d"
    }

    .fa-gamepad:before {
      content: "\f11b"
    }

    .fa-gas-pump:before {
      content: "\f52f"
    }

    .fa-gavel:before {
      content: "\f0e3"
    }

    .fa-gem:before {
      content: "\f3a5"
    }

    .fa-genderless:before {
      content: "\f22d"
    }

    .fa-get-pocket:before {
      content: "\f265"
    }

    .fa-gg:before {
      content: "\f260"
    }

    .fa-gg-circle:before {
      content: "\f261"
    }

    .fa-ghost:before {
      content: "\f6e2"
    }

    .fa-gift:before {
      content: "\f06b"
    }

    .fa-gifts:before {
      content: "\f79c"
    }

    .fa-git:before {
      content: "\f1d3"
    }

    .fa-git-alt:before {
      content: "\f841"
    }

    .fa-git-square:before {
      content: "\f1d2"
    }

    .fa-github:before {
      content: "\f09b"
    }

    .fa-github-alt:before {
      content: "\f113"
    }

    .fa-github-square:before {
      content: "\f092"
    }

    .fa-gitkraken:before {
      content: "\f3a6"
    }

    .fa-gitlab:before {
      content: "\f296"
    }

    .fa-gitter:before {
      content: "\f426"
    }

    .fa-glass-cheers:before {
      content: "\f79f"
    }

    .fa-glass-martini:before {
      content: "\f000"
    }

    .fa-glass-martini-alt:before {
      content: "\f57b"
    }

    .fa-glass-whiskey:before {
      content: "\f7a0"
    }

    .fa-glasses:before {
      content: "\f530"
    }

    .fa-glide:before {
      content: "\f2a5"
    }

    .fa-glide-g:before {
      content: "\f2a6"
    }

    .fa-globe:before {
      content: "\f0ac"
    }

    .fa-globe-africa:before {
      content: "\f57c"
    }

    .fa-globe-americas:before {
      content: "\f57d"
    }

    .fa-globe-asia:before {
      content: "\f57e"
    }

    .fa-globe-europe:before {
      content: "\f7a2"
    }

    .fa-gofore:before {
      content: "\f3a7"
    }

    .fa-golf-ball:before {
      content: "\f450"
    }

    .fa-goodreads:before {
      content: "\f3a8"
    }

    .fa-goodreads-g:before {
      content: "\f3a9"
    }

    .fa-google:before {
      content: "\f1a0"
    }

    .fa-google-drive:before {
      content: "\f3aa"
    }

    .fa-google-pay:before {
      content: "\e079"
    }

    .fa-google-play:before {
      content: "\f3ab"
    }

    .fa-google-plus:before {
      content: "\f2b3"
    }

    .fa-google-plus-g:before {
      content: "\f0d5"
    }

    .fa-google-plus-square:before {
      content: "\f0d4"
    }

    .fa-google-wallet:before {
      content: "\f1ee"
    }

    .fa-gopuram:before {
      content: "\f664"
    }

    .fa-graduation-cap:before {
      content: "\f19d"
    }

    .fa-gratipay:before {
      content: "\f184"
    }

    .fa-grav:before {
      content: "\f2d6"
    }

    .fa-greater-than:before {
      content: "\f531"
    }

    .fa-greater-than-equal:before {
      content: "\f532"
    }

    .fa-grimace:before {
      content: "\f57f"
    }

    .fa-grin:before {
      content: "\f580"
    }

    .fa-grin-alt:before {
      content: "\f581"
    }

    .fa-grin-beam:before {
      content: "\f582"
    }

    .fa-grin-beam-sweat:before {
      content: "\f583"
    }

    .fa-grin-hearts:before {
      content: "\f584"
    }

    .fa-grin-squint:before {
      content: "\f585"
    }

    .fa-grin-squint-tears:before {
      content: "\f586"
    }

    .fa-grin-stars:before {
      content: "\f587"
    }

    .fa-grin-tears:before {
      content: "\f588"
    }

    .fa-grin-tongue:before {
      content: "\f589"
    }

    .fa-grin-tongue-squint:before {
      content: "\f58a"
    }

    .fa-grin-tongue-wink:before {
      content: "\f58b"
    }

    .fa-grin-wink:before {
      content: "\f58c"
    }

    .fa-grip-horizontal:before {
      content: "\f58d"
    }

    .fa-grip-lines:before {
      content: "\f7a4"
    }

    .fa-grip-lines-vertical:before {
      content: "\f7a5"
    }

    .fa-grip-vertical:before {
      content: "\f58e"
    }

    .fa-gripfire:before {
      content: "\f3ac"
    }

    .fa-grunt:before {
      content: "\f3ad"
    }

    .fa-guilded:before {
      content: "\e07e"
    }

    .fa-guitar:before {
      content: "\f7a6"
    }

    .fa-gulp:before {
      content: "\f3ae"
    }

    .fa-h-square:before {
      content: "\f0fd"
    }

    .fa-hacker-news:before {
      content: "\f1d4"
    }

    .fa-hacker-news-square:before {
      content: "\f3af"
    }

    .fa-hackerrank:before {
      content: "\f5f7"
    }

    .fa-hamburger:before {
      content: "\f805"
    }

    .fa-hammer:before {
      content: "\f6e3"
    }

    .fa-hamsa:before {
      content: "\f665"
    }

    .fa-hand-holding:before {
      content: "\f4bd"
    }

    .fa-hand-holding-heart:before {
      content: "\f4be"
    }

    .fa-hand-holding-medical:before {
      content: "\e05c"
    }

    .fa-hand-holding-usd:before {
      content: "\f4c0"
    }

    .fa-hand-holding-water:before {
      content: "\f4c1"
    }

    .fa-hand-lizard:before {
      content: "\f258"
    }

    .fa-hand-middle-finger:before {
      content: "\f806"
    }

    .fa-hand-paper:before {
      content: "\f256"
    }

    .fa-hand-peace:before {
      content: "\f25b"
    }

    .fa-hand-point-down:before {
      content: "\f0a7"
    }

    .fa-hand-point-left:before {
      content: "\f0a5"
    }

    .fa-hand-point-right:before {
      content: "\f0a4"
    }

    .fa-hand-point-up:before {
      content: "\f0a6"
    }

    .fa-hand-pointer:before {
      content: "\f25a"
    }

    .fa-hand-rock:before {
      content: "\f255"
    }

    .fa-hand-scissors:before {
      content: "\f257"
    }

    .fa-hand-sparkles:before {
      content: "\e05d"
    }

    .fa-hand-spock:before {
      content: "\f259"
    }

    .fa-hands:before {
      content: "\f4c2"
    }

    .fa-hands-helping:before {
      content: "\f4c4"
    }

    .fa-hands-wash:before {
      content: "\e05e"
    }

    .fa-handshake:before {
      content: "\f2b5"
    }

    .fa-handshake-alt-slash:before {
      content: "\e05f"
    }

    .fa-handshake-slash:before {
      content: "\e060"
    }

    .fa-hanukiah:before {
      content: "\f6e6"
    }

    .fa-hard-hat:before {
      content: "\f807"
    }

    .fa-hashtag:before {
      content: "\f292"
    }

    .fa-hat-cowboy:before {
      content: "\f8c0"
    }

    .fa-hat-cowboy-side:before {
      content: "\f8c1"
    }

    .fa-hat-wizard:before {
      content: "\f6e8"
    }

    .fa-hdd:before {
      content: "\f0a0"
    }

    .fa-head-side-cough:before {
      content: "\e061"
    }

    .fa-head-side-cough-slash:before {
      content: "\e062"
    }

    .fa-head-side-mask:before {
      content: "\e063"
    }

    .fa-head-side-virus:before {
      content: "\e064"
    }

    .fa-heading:before {
      content: "\f1dc"
    }

    .fa-headphones:before {
      content: "\f025"
    }

    .fa-headphones-alt:before {
      content: "\f58f"
    }

    .fa-headset:before {
      content: "\f590"
    }

    .fa-heart:before {
      content: "\f004"
    }

    .fa-heart-broken:before {
      content: "\f7a9"
    }

    .fa-heartbeat:before {
      content: "\f21e"
    }

    .fa-helicopter:before {
      content: "\f533"
    }

    .fa-highlighter:before {
      content: "\f591"
    }

    .fa-hiking:before {
      content: "\f6ec"
    }

    .fa-hippo:before {
      content: "\f6ed"
    }

    .fa-hips:before {
      content: "\f452"
    }

    .fa-hire-a-helper:before {
      content: "\f3b0"
    }

    .fa-history:before {
      content: "\f1da"
    }

    .fa-hive:before {
      content: "\e07f"
    }

    .fa-hockey-puck:before {
      content: "\f453"
    }

    .fa-holly-berry:before {
      content: "\f7aa"
    }

    .fa-home:before {
      content: "\f015"
    }

    .fa-hooli:before {
      content: "\f427"
    }

    .fa-hornbill:before {
      content: "\f592"
    }

    .fa-horse:before {
      content: "\f6f0"
    }

    .fa-horse-head:before {
      content: "\f7ab"
    }

    .fa-hospital:before {
      content: "\f0f8"
    }

    .fa-hospital-alt:before {
      content: "\f47d"
    }

    .fa-hospital-symbol:before {
      content: "\f47e"
    }

    .fa-hospital-user:before {
      content: "\f80d"
    }

    .fa-hot-tub:before {
      content: "\f593"
    }

    .fa-hotdog:before {
      content: "\f80f"
    }

    .fa-hotel:before {
      content: "\f594"
    }

    .fa-hotjar:before {
      content: "\f3b1"
    }

    .fa-hourglass:before {
      content: "\f254"
    }

    .fa-hourglass-end:before {
      content: "\f253"
    }

    .fa-hourglass-half:before {
      content: "\f252"
    }

    .fa-hourglass-start:before {
      content: "\f251"
    }

    .fa-house-damage:before {
      content: "\f6f1"
    }

    .fa-house-user:before {
      content: "\e065"
    }

    .fa-houzz:before {
      content: "\f27c"
    }

    .fa-hryvnia:before {
      content: "\f6f2"
    }

    .fa-html5:before {
      content: "\f13b"
    }

    .fa-hubspot:before {
      content: "\f3b2"
    }

    .fa-i-cursor:before {
      content: "\f246"
    }

    .fa-ice-cream:before {
      content: "\f810"
    }

    .fa-icicles:before {
      content: "\f7ad"
    }

    .fa-icons:before {
      content: "\f86d"
    }

    .fa-id-badge:before {
      content: "\f2c1"
    }

    .fa-id-card:before {
      content: "\f2c2"
    }

    .fa-id-card-alt:before {
      content: "\f47f"
    }

    .fa-ideal:before {
      content: "\e013"
    }

    .fa-igloo:before {
      content: "\f7ae"
    }

    .fa-image:before {
      content: "\f03e"
    }

    .fa-images:before {
      content: "\f302"
    }

    .fa-ixsb:before {
      content: "\f2d8"
    }

    .fa-inbox:before {
      content: "\f01c"
    }

    .fa-indent:before {
      content: "\f03c"
    }

    .fa-industry:before {
      content: "\f275"
    }

    .fa-infinity:before {
      content: "\f534"
    }

    .fa-info:before {
      content: "\f129"
    }

    .fa-info-circle:before {
      content: "\f05a"
    }

    .fa-innosoft:before {
      content: "\e080"
    }

    .fa-instagram:before {
      content: "\f16d"
    }

    .fa-instagram-square:before {
      content: "\e055"
    }

    .fa-instalod:before {
      content: "\e081"
    }

    .fa-intercom:before {
      content: "\f7af"
    }

    .fa-internet-explorer:before {
      content: "\f26b"
    }

    .fa-invision:before {
      content: "\f7b0"
    }

    .fa-ioxhost:before {
      content: "\f208"
    }

    .fa-italic:before {
      content: "\f033"
    }

    .fa-itch-io:before {
      content: "\f83a"
    }

    .fa-itunes:before {
      content: "\f3b4"
    }

    .fa-itunes-note:before {
      content: "\f3b5"
    }

    .fa-java:before {
      content: "\f4e4"
    }

    .fa-jedi:before {
      content: "\f669"
    }

    .fa-jedi-order:before {
      content: "\f50e"
    }

    .fa-jenkins:before {
      content: "\f3b6"
    }

    .fa-jira:before {
      content: "\f7b1"
    }

    .fa-joget:before {
      content: "\f3b7"
    }

    .fa-joint:before {
      content: "\f595"
    }

    .fa-joomla:before {
      content: "\f1aa"
    }

    .fa-journal-whills:before {
      content: "\f66a"
    }

    .fa-js:before {
      content: "\f3b8"
    }

    .fa-js-square:before {
      content: "\f3b9"
    }

    .fa-jsfiddle:before {
      content: "\f1cc"
    }

    .fa-kaaba:before {
      content: "\f66b"
    }

    .fa-kaggle:before {
      content: "\f5fa"
    }

    .fa-key:before {
      content: "\f084"
    }

    .fa-keybase:before {
      content: "\f4f5"
    }

    .fa-keyboard:before {
      content: "\f11c"
    }

    .fa-keycdn:before {
      content: "\f3ba"
    }

    .fa-khanda:before {
      content: "\f66d"
    }

    .fa-kickstarter:before {
      content: "\f3bb"
    }

    .fa-kickstarter-k:before {
      content: "\f3bc"
    }

    .fa-kiss:before {
      content: "\f596"
    }

    .fa-kiss-beam:before {
      content: "\f597"
    }

    .fa-kiss-wink-heart:before {
      content: "\f598"
    }

    .fa-kiwi-bird:before {
      content: "\f535"
    }

    .fa-korvue:before {
      content: "\f42f"
    }

    .fa-landmark:before {
      content: "\f66f"
    }

    .fa-language:before {
      content: "\f1ab"
    }

    .fa-laptop:before {
      content: "\f109"
    }

    .fa-laptop-code:before {
      content: "\f5fc"
    }

    .fa-laptop-house:before {
      content: "\e066"
    }

    .fa-laptop-medical:before {
      content: "\f812"
    }

    .fa-laravel:before {
      content: "\f3bd"
    }

    .fa-lastfm:before {
      content: "\f202"
    }

    .fa-lastfm-square:before {
      content: "\f203"
    }

    .fa-laugh:before {
      content: "\f599"
    }

    .fa-laugh-beam:before {
      content: "\f59a"
    }

    .fa-laugh-squint:before {
      content: "\f59b"
    }

    .fa-laugh-wink:before {
      content: "\f59c"
    }

    .fa-layer-group:before {
      content: "\f5fd"
    }

    .fa-leaf:before {
      content: "\f06c"
    }

    .fa-leanpub:before {
      content: "\f212"
    }

    .fa-lemon:before {
      content: "\f094"
    }

    .fa-less:before {
      content: "\f41d"
    }

    .fa-less-than:before {
      content: "\f536"
    }

    .fa-less-than-equal:before {
      content: "\f537"
    }

    .fa-level-down-alt:before {
      content: "\f3be"
    }

    .fa-level-up-alt:before {
      content: "\f3bf"
    }

    .fa-life-ring:before {
      content: "\f1cd"
    }

    .fa-lightbulb:before {
      content: "\f0eb"
    }

    .fa-line:before {
      content: "\f3c0"
    }

    .fa-link:before {
      content: "\f0c1"
    }

    .fa-linkedin:before {
      content: "\f08c"
    }

    .fa-linkedin-in:before {
      content: "\f0e1"
    }

    .fa-linode:before {
      content: "\f2b8"
    }

    .fa-linux:before {
      content: "\f17c"
    }

    .fa-lira-sign:before {
      content: "\f195"
    }

    .fa-list:before {
      content: "\f03a"
    }

    .fa-list-alt:before {
      content: "\f022"
    }

    .fa-list-ol:before {
      content: "\f0cb"
    }

    .fa-list-ul:before {
      content: "\f0ca"
    }

    .fa-location-arrow:before {
      content: "\f124"
    }

    .fa-lock:before {
      content: "\f023"
    }

    .fa-lock-open:before {
      content: "\f3c1"
    }

    .fa-long-arrow-alt-down:before {
      content: "\f309"
    }

    .fa-long-arrow-alt-left:before {
      content: "\f30a"
    }

    .fa-long-arrow-alt-right:before {
      content: "\f30b"
    }

    .fa-long-arrow-alt-up:before {
      content: "\f30c"
    }

    .fa-low-vision:before {
      content: "\f2a8"
    }

    .fa-luggage-cart:before {
      content: "\f59d"
    }

    .fa-lungs:before {
      content: "\f604"
    }

    .fa-lungs-virus:before {
      content: "\e067"
    }

    .fa-lyft:before {
      content: "\f3c3"
    }

    .fa-magento:before {
      content: "\f3c4"
    }

    .fa-magic:before {
      content: "\f0d0"
    }

    .fa-magnet:before {
      content: "\f076"
    }

    .fa-mail-bulk:before {
      content: "\f674"
    }

    .fa-mailchimp:before {
      content: "\f59e"
    }

    .fa-male:before {
      content: "\f183"
    }

    .fa-mandalorian:before {
      content: "\f50f"
    }

    .fa-map:before {
      content: "\f279"
    }

    .fa-map-marked:before {
      content: "\f59f"
    }

    .fa-map-marked-alt:before {
      content: "\f5a0"
    }

    .fa-map-marker:before {
      content: "\f041"
    }

    .fa-map-marker-alt:before {
      content: "\f3c5"
    }

    .fa-map-pin:before {
      content: "\f276"
    }

    .fa-map-signs:before {
      content: "\f277"
    }

    .fa-markdown:before {
      content: "\f60f"
    }

    .fa-marker:before {
      content: "\f5a1"
    }

    .fa-mars:before {
      content: "\f222"
    }

    .fa-mars-double:before {
      content: "\f227"
    }

    .fa-mars-stroke:before {
      content: "\f229"
    }

    .fa-mars-stroke-h:before {
      content: "\f22b"
    }

    .fa-mars-stroke-v:before {
      content: "\f22a"
    }

    .fa-mask:before {
      content: "\f6fa"
    }

    .fa-mastodon:before {
      content: "\f4f6"
    }

    .fa-maxcdn:before {
      content: "\f136"
    }

    .fa-mdb:before {
      content: "\f8ca"
    }

    .fa-medal:before {
      content: "\f5a2"
    }

    .fa-medapps:before {
      content: "\f3c6"
    }

    .fa-medium:before {
      content: "\f23a"
    }

    .fa-medium-m:before {
      content: "\f3c7"
    }

    .fa-medkit:before {
      content: "\f0fa"
    }

    .fa-medrt:before {
      content: "\f3c8"
    }

    .fa-meetup:before {
      content: "\f2e0"
    }

    .fa-megaport:before {
      content: "\f5a3"
    }

    .fa-meh:before {
      content: "\f11a"
    }

    .fa-meh-blank:before {
      content: "\f5a4"
    }

    .fa-meh-rolling-eyes:before {
      content: "\f5a5"
    }

    .fa-memory:before {
      content: "\f538"
    }

    .fa-mendeley:before {
      content: "\f7b3"
    }

    .fa-menorah:before {
      content: "\f676"
    }

    .fa-mercury:before {
      content: "\f223"
    }

    .fa-meteor:before {
      content: "\f753"
    }

    .fa-microblog:before {
      content: "\e01a"
    }

    .fa-microchip:before {
      content: "\f2db"
    }

    .fa-microphone:before {
      content: "\f130"
    }

    .fa-microphone-alt:before {
      content: "\f3c9"
    }

    .fa-microphone-alt-slash:before {
      content: "\f539"
    }

    .fa-microphone-slash:before {
      content: "\f131"
    }

    .fa-microscope:before {
      content: "\f610"
    }

    .fa-microsoft:before {
      content: "\f3ca"
    }

    .fa-minus:before {
      content: "\f068"
    }

    .fa-minus-circle:before {
      content: "\f056"
    }

    .fa-minus-square:before {
      content: "\f146"
    }

    .fa-mitten:before {
      content: "\f7b5"
    }

    .fa-mix:before {
      content: "\f3cb"
    }

    .fa-mixcloud:before {
      content: "\f289"
    }

    .fa-mixer:before {
      content: "\e056"
    }

    .fa-mizuni:before {
      content: "\f3cc"
    }

    .fa-mobile:before {
      content: "\f10b"
    }

    .fa-mobile-alt:before {
      content: "\f3cd"
    }

    .fa-modx:before {
      content: "\f285"
    }

    .fa-monero:before {
      content: "\f3d0"
    }

    .fa-money-bill:before {
      content: "\f0d6"
    }

    .fa-money-bill-alt:before {
      content: "\f3d1"
    }

    .fa-money-bill-wave:before {
      content: "\f53a"
    }

    .fa-money-bill-wave-alt:before {
      content: "\f53b"
    }

    .fa-money-check:before {
      content: "\f53c"
    }

    .fa-money-check-alt:before {
      content: "\f53d"
    }

    .fa-monument:before {
      content: "\f5a6"
    }

    .fa-moon:before {
      content: "\f186"
    }

    .fa-mortar-pestle:before {
      content: "\f5a7"
    }

    .fa-mosque:before {
      content: "\f678"
    }

    .fa-motorcycle:before {
      content: "\f21c"
    }

    .fa-mountain:before {
      content: "\f6fc"
    }

    .fa-mouse:before {
      content: "\f8cc"
    }

    .fa-mouse-pointer:before {
      content: "\f245"
    }

    .fa-mug-hot:before {
      content: "\f7b6"
    }

    .fa-music:before {
      content: "\f001"
    }

    .fa-napster:before {
      content: "\f3d2"
    }

    .fa-neos:before {
      content: "\f612"
    }

    .fa-network-wired:before {
      content: "\f6ff"
    }

    .fa-neuter:before {
      content: "\f22c"
    }

    .fa-newspaper:before {
      content: "\f1ea"
    }

    .fa-nimblr:before {
      content: "\f5a8"
    }

    .fa-node:before {
      content: "\f419"
    }

    .fa-node-js:before {
      content: "\f3d3"
    }

    .fa-not-equal:before {
      content: "\f53e"
    }

    .fa-notes-medical:before {
      content: "\f481"
    }

    .fa-npm:before {
      content: "\f3d4"
    }

    .fa-ns8:before {
      content: "\f3d5"
    }

    .fa-nutritionix:before {
      content: "\f3d6"
    }

    .fa-object-group:before {
      content: "\f247"
    }

    .fa-object-ungroup:before {
      content: "\f248"
    }

    .fa-octopus-deploy:before {
      content: "\e082"
    }

    .fa-odnoklassniki:before {
      content: "\f263"
    }

    .fa-odnoklassniki-square:before {
      content: "\f264"
    }

    .fa-oil-can:before {
      content: "\f613"
    }

    .fa-old-republic:before {
      content: "\f510"
    }

    .fa-om:before {
      content: "\f679"
    }

    .fa-opencart:before {
      content: "\f23d"
    }

    .fa-openid:before {
      content: "\f19b"
    }

    .fa-opera:before {
      content: "\f26a"
    }

    .fa-optin-monster:before {
      content: "\f23c"
    }

    .fa-orcid:before {
      content: "\f8d2"
    }

    .fa-osi:before {
      content: "\f41a"
    }

    .fa-otter:before {
      content: "\f700"
    }

    .fa-outdent:before {
      content: "\f03b"
    }

    .fa-page4:before {
      content: "\f3d7"
    }

    .fa-pagelines:before {
      content: "\f18c"
    }

    .fa-pager:before {
      content: "\f815"
    }

    .fa-paint-brush:before {
      content: "\f1fc"
    }

    .fa-paint-roller:before {
      content: "\f5aa"
    }

    .fa-palette:before {
      content: "\f53f"
    }

    .fa-palfed:before {
      content: "\f3d8"
    }

    .fa-pallet:before {
      content: "\f482"
    }

    .fa-paper-plane:before {
      content: "\f1d8"
    }

    .fa-paperclip:before {
      content: "\f0c6"
    }

    .fa-parachute-box:before {
      content: "\f4cd"
    }

    .fa-paragraph:before {
      content: "\f1dd"
    }

    .fa-parking:before {
      content: "\f540"
    }

    .fa-passport:before {
      content: "\f5ab"
    }

    .fa-pastafarianism:before {
      content: "\f67b"
    }

    .fa-paste:before {
      content: "\f0ea"
    }

    .fa-patreon:before {
      content: "\f3d9"
    }

    .fa-pause:before {
      content: "\f04c"
    }

    .fa-pause-circle:before {
      content: "\f28b"
    }

    .fa-paw:before {
      content: "\f1b0"
    }

    .fa-paypal:before {
      content: "\f1ed"
    }

    .fa-peace:before {
      content: "\f67c"
    }

    .fa-pen:before {
      content: "\f304"
    }

    .fa-pen-alt:before {
      content: "\f305"
    }

    .fa-pen-fancy:before {
      content: "\f5ac"
    }

    .fa-pen-nib:before {
      content: "\f5ad"
    }

    .fa-pen-square:before {
      content: "\f14b"
    }

    .fa-pencil-alt:before {
      content: "\f303"
    }

    .fa-pencil-ruler:before {
      content: "\f5ae"
    }

    .fa-penny-arcade:before {
      content: "\f704"
    }

    .fa-people-arrows:before {
      content: "\e068"
    }

    .fa-people-carry:before {
      content: "\f4ce"
    }

    .fa-pepper-hot:before {
      content: "\f816"
    }

    .fa-perbyte:before {
      content: "\e083"
    }

    .fa-percent:before {
      content: "\f295"
    }

    .fa-percentage:before {
      content: "\f541"
    }

    .fa-periscope:before {
      content: "\f3da"
    }

    .fa-person-booth:before {
      content: "\f756"
    }

    .fa-phabricator:before {
      content: "\f3db"
    }

    .fa-phoenix-framework:before {
      content: "\f3dc"
    }

    .fa-phoenix-squadron:before {
      content: "\f511"
    }

    .fa-phone:before {
      content: "\f095"
    }

    .fa-phone-alt:before {
      content: "\f879"
    }

    .fa-phone-slash:before {
      content: "\f3dd"
    }

    .fa-phone-square:before {
      content: "\f098"
    }

    .fa-phone-square-alt:before {
      content: "\f87b"
    }

    .fa-phone-volume:before {
      content: "\f2a0"
    }

    .fa-photo-video:before {
      content: "\f87c"
    }

    .fa-php:before {
      content: "\f457"
    }

    .fa-pied-piper:before {
      content: "\f2ae"
    }

    .fa-pied-piper-alt:before {
      content: "\f1a8"
    }

    .fa-pied-piper-hat:before {
      content: "\f4e5"
    }

    .fa-pied-piper-pp:before {
      content: "\f1a7"
    }

    .fa-pied-piper-square:before {
      content: "\e01e"
    }

    .fa-piggy-bank:before {
      content: "\f4d3"
    }

    .fa-pills:before {
      content: "\f484"
    }

    .fa-pinterest:before {
      content: "\f0d2"
    }

    .fa-pinterest-p:before {
      content: "\f231"
    }

    .fa-pinterest-square:before {
      content: "\f0d3"
    }

    .fa-pizza-slice:before {
      content: "\f818"
    }

    .fa-place-of-worship:before {
      content: "\f67f"
    }

    .fa-plane:before {
      content: "\f072"
    }

    .fa-plane-arrival:before {
      content: "\f5af"
    }

    .fa-plane-departure:before {
      content: "\f5b0"
    }

    .fa-plane-slash:before {
      content: "\e069"
    }

    .fa-play:before {
      content: "\f04b"
    }

    .fa-play-circle:before {
      content: "\f144"
    }

    .fa-playstation:before {
      content: "\f3df"
    }

    .fa-plug:before {
      content: "\f1e6"
    }

    .fa-plus:before {
      content: "\f067"
    }

    .fa-plus-circle:before {
      content: "\f055"
    }

    .fa-plus-square:before {
      content: "\f0fe"
    }

    .fa-podcast:before {
      content: "\f2ce"
    }

    .fa-poll:before {
      content: "\f681"
    }

    .fa-poll-h:before {
      content: "\f682"
    }

    .fa-poo:before {
      content: "\f2fe"
    }

    .fa-poo-storm:before {
      content: "\f75a"
    }

    .fa-poop:before {
      content: "\f619"
    }

    .fa-portrait:before {
      content: "\f3e0"
    }

    .fa-pound-sign:before {
      content: "\f154"
    }

    .fa-power-off:before {
      content: "\f011"
    }

    .fa-pray:before {
      content: "\f683"
    }

    .fa-praying-hands:before {
      content: "\f684"
    }

    .fa-prescription:before {
      content: "\f5b1"
    }

    .fa-prescription-bottle:before {
      content: "\f485"
    }

    .fa-prescription-bottle-alt:before {
      content: "\f486"
    }

    .fa-print:before {
      content: "\f02f"
    }

    .fa-procedures:before {
      content: "\f487"
    }

    .fa-product-hunt:before {
      content: "\f288"
    }

    .fa-project-diagram:before {
      content: "\f542"
    }

    .fa-pump-medical:before {
      content: "\e06a"
    }

    .fa-pump-soap:before {
      content: "\e06b"
    }

    .fa-pushed:before {
      content: "\f3e1"
    }

    .fa-puzzle-piece:before {
      content: "\f12e"
    }

    .fa-python:before {
      content: "\f3e2"
    }

    .fa-qq:before {
      content: "\f1d6"
    }

    .fa-qrcode:before {
      content: "\f029"
    }

    .fa-question:before {
      content: "\f128"
    }

    .fa-question-circle:before {
      content: "\f059"
    }

    .fa-quidditch:before {
      content: "\f458"
    }

    .fa-quinscape:before {
      content: "\f459"
    }

    .fa-quora:before {
      content: "\f2c4"
    }

    .fa-quote-left:before {
      content: "\f10d"
    }

    .fa-quote-right:before {
      content: "\f10e"
    }

    .fa-quran:before {
      content: "\f687"
    }

    .fa-r-project:before {
      content: "\f4f7"
    }

    .fa-radiation:before {
      content: "\f7b9"
    }

    .fa-radiation-alt:before {
      content: "\f7ba"
    }

    .fa-rainbow:before {
      content: "\f75b"
    }

    .fa-random:before {
      content: "\f074"
    }

    .fa-raspberry-pi:before {
      content: "\f7bb"
    }

    .fa-ravelry:before {
      content: "\f2d9"
    }

    .fa-react:before {
      content: "\f41b"
    }

    .fa-reacteurope:before {
      content: "\f75d"
    }

    .fa-readme:before {
      content: "\f4d5"
    }

    .fa-rebel:before {
      content: "\f1d0"
    }

    .fa-receipt:before {
      content: "\f543"
    }

    .fa-record-vinyl:before {
      content: "\f8d9"
    }

    .fa-recycle:before {
      content: "\f1b8"
    }

    .fa-red-river:before {
      content: "\f3e3"
    }

    .fa-reddit:before {
      content: "\f1a1"
    }

    .fa-reddit-alien:before {
      content: "\f281"
    }

    .fa-reddit-square:before {
      content: "\f1a2"
    }

    .fa-redhat:before {
      content: "\f7bc"
    }

    .fa-redo:before {
      content: "\f01e"
    }

    .fa-redo-alt:before {
      content: "\f2f9"
    }

    .fa-registered:before {
      content: "\f25d"
    }

    .fa-remove-format:before {
      content: "\f87d"
    }

    .fa-renren:before {
      content: "\f18b"
    }

    .fa-reply:before {
      content: "\f3e5"
    }

    .fa-reply-all:before {
      content: "\f122"
    }

    .fa-replyd:before {
      content: "\f3e6"
    }

    .fa-republican:before {
      content: "\f75e"
    }

    .fa-researchgate:before {
      content: "\f4f8"
    }

    .fa-resolving:before {
      content: "\f3e7"
    }

    .fa-restroom:before {
      content: "\f7bd"
    }

    .fa-retweet:before {
      content: "\f079"
    }

    .fa-rev:before {
      content: "\f5b2"
    }

    .fa-ribbon:before {
      content: "\f4d6"
    }

    .fa-ring:before {
      content: "\f70b"
    }

    .fa-road:before {
      content: "\f018"
    }

    .fa-robot:before {
      content: "\f544"
    }

    .fa-rocket:before {
      content: "\f135"
    }

    .fa-rocketchat:before {
      content: "\f3e8"
    }

    .fa-rockrms:before {
      content: "\f3e9"
    }

    .fa-route:before {
      content: "\f4d7"
    }

    .fa-rss:before {
      content: "\f09e"
    }

    .fa-rss-square:before {
      content: "\f143"
    }

    .fa-ruble-sign:before {
      content: "\f158"
    }

    .fa-ruler:before {
      content: "\f545"
    }

    .fa-ruler-combined:before {
      content: "\f546"
    }

    .fa-ruler-horizontal:before {
      content: "\f547"
    }

    .fa-ruler-vertical:before {
      content: "\f548"
    }

    .fa-running:before {
      content: "\f70c"
    }

    .fa-rupee-sign:before {
      content: "\f156"
    }

    .fa-rust:before {
      content: "\e07a"
    }

    .fa-sad-cry:before {
      content: "\f5b3"
    }

    .fa-sad-tear:before {
      content: "\f5b4"
    }

    .fa-safari:before {
      content: "\f267"
    }

    .fa-salesforce:before {
      content: "\f83b"
    }

    .fa-sass:before {
      content: "\f41e"
    }

    .fa-satellite:before {
      content: "\f7bf"
    }

    .fa-satellite-dish:before {
      content: "\f7c0"
    }

    .fa-save:before {
      content: "\f0c7"
    }

    .fa-schlix:before {
      content: "\f3ea"
    }

    .fa-school:before {
      content: "\f549"
    }

    .fa-screwdriver:before {
      content: "\f54a"
    }

    .fa-scribd:before {
      content: "\f28a"
    }

    .fa-scroll:before {
      content: "\f70e"
    }

    .fa-sd-card:before {
      content: "\f7c2"
    }

    .fa-search:before {
      content: "\f002"
    }

    .fa-search-dollar:before {
      content: "\f688"
    }

    .fa-search-location:before {
      content: "\f689"
    }

    .fa-search-minus:before {
      content: "\f010"
    }

    .fa-search-plus:before {
      content: "\f00e"
    }

    .fa-searchengin:before {
      content: "\f3eb"
    }

    .fa-seedling:before {
      content: "\f4d8"
    }

    .fa-sellcast:before {
      content: "\f2da"
    }

    .fa-sellsy:before {
      content: "\f213"
    }

    .fa-server:before {
      content: "\f233"
    }

    .fa-servicestack:before {
      content: "\f3ec"
    }

    .fa-shapes:before {
      content: "\f61f"
    }

    .fa-share:before {
      content: "\f064"
    }

    .fa-share-alt:before {
      content: "\f1e0"
    }

    .fa-share-alt-square:before {
      content: "\f1e1"
    }

    .fa-share-square:before {
      content: "\f14d"
    }

    .fa-shekel-sign:before {
      content: "\f20b"
    }

    .fa-shield-alt:before {
      content: "\f3ed"
    }

    .fa-shield-virus:before {
      content: "\e06c"
    }

    .fa-ship:before {
      content: "\f21a"
    }

    .fa-shipping-fast:before {
      content: "\f48b"
    }

    .fa-shirtsinbulk:before {
      content: "\f214"
    }

    .fa-shoe-prints:before {
      content: "\f54b"
    }

    .fa-shopify:before {
      content: "\e057"
    }

    .fa-shopping-bag:before {
      content: "\f290"
    }

    .fa-shopping-basket:before {
      content: "\f291"
    }

    .fa-shopping-cart:before {
      content: "\f07a"
    }

    .fa-shopware:before {
      content: "\f5b5"
    }

    .fa-shower:before {
      content: "\f2cc"
    }

    .fa-shuttle-van:before {
      content: "\f5b6"
    }

    .fa-sign:before {
      content: "\f4d9"
    }

    .fa-sign-in-alt:before {
      content: "\f2f6"
    }

    .fa-sign-language:before {
      content: "\f2a7"
    }

    .fa-sign-out-alt:before {
      content: "\f2f5"
    }

    .fa-signal:before {
      content: "\f012"
    }

    .fa-signature:before {
      content: "\f5b7"
    }

    .fa-sim-card:before {
      content: "\f7c4"
    }

    .fa-simplybuilt:before {
      content: "\f215"
    }

    .fa-sink:before {
      content: "\e06d"
    }

    .fa-sistrix:before {
      content: "\f3ee"
    }

    .fa-sitemap:before {
      content: "\f0e8"
    }

    .fa-sith:before {
      content: "\f512"
    }

    .fa-skating:before {
      content: "\f7c5"
    }

    .fa-sketch:before {
      content: "\f7c6"
    }

    .fa-skiing:before {
      content: "\f7c9"
    }

    .fa-skiing-nordic:before {
      content: "\f7ca"
    }

    .fa-skull:before {
      content: "\f54c"
    }

    .fa-skull-crossbones:before {
      content: "\f714"
    }

    .fa-skyatlas:before {
      content: "\f216"
    }

    .fa-skype:before {
      content: "\f17e"
    }

    .fa-slack:before {
      content: "\f198"
    }

    .fa-slack-hash:before {
      content: "\f3ef"
    }

    .fa-slash:before {
      content: "\f715"
    }

    .fa-sleigh:before {
      content: "\f7cc"
    }

    .fa-sliders-h:before {
      content: "\f1de"
    }

    .fa-slideshare:before {
      content: "\f1e7"
    }

    .fa-smile:before {
      content: "\f118"
    }

    .fa-smile-beam:before {
      content: "\f5b8"
    }

    .fa-smile-wink:before {
      content: "\f4da"
    }

    .fa-smog:before {
      content: "\f75f"
    }

    .fa-smoking:before {
      content: "\f48d"
    }

    .fa-smoking-ban:before {
      content: "\f54d"
    }

    .fa-sms:before {
      content: "\f7cd"
    }

    .fa-snapchat:before {
      content: "\f2ab"
    }

    .fa-snapchat-ghost:before {
      content: "\f2ac"
    }

    .fa-snapchat-square:before {
      content: "\f2ad"
    }

    .fa-snowboarding:before {
      content: "\f7ce"
    }

    .fa-snowflake:before {
      content: "\f2dc"
    }

    .fa-snowman:before {
      content: "\f7d0"
    }

    .fa-snowplow:before {
      content: "\f7d2"
    }

    .fa-soap:before {
      content: "\e06e"
    }

    .fa-socks:before {
      content: "\f696"
    }

    .fa-solar-panel:before {
      content: "\f5ba"
    }

    .fa-sort:before {
      content: "\f0dc"
    }

    .fa-sort-alpha-down:before {
      content: "\f15d"
    }

    .fa-sort-alpha-down-alt:before {
      content: "\f881"
    }

    .fa-sort-alpha-up:before {
      content: "\f15e"
    }

    .fa-sort-alpha-up-alt:before {
      content: "\f882"
    }

    .fa-sort-amount-down:before {
      content: "\f160"
    }

    .fa-sort-amount-down-alt:before {
      content: "\f884"
    }

    .fa-sort-amount-up:before {
      content: "\f161"
    }

    .fa-sort-amount-up-alt:before {
      content: "\f885"
    }

    .fa-sort-down:before {
      content: "\f0dd"
    }

    .fa-sort-numeric-down:before {
      content: "\f162"
    }

    .fa-sort-numeric-down-alt:before {
      content: "\f886"
    }

    .fa-sort-numeric-up:before {
      content: "\f163"
    }

    .fa-sort-numeric-up-alt:before {
      content: "\f887"
    }

    .fa-sort-up:before {
      content: "\f0de"
    }

    .fa-soundcloud:before {
      content: "\f1be"
    }

    .fa-sourcetree:before {
      content: "\f7d3"
    }

    .fa-spa:before {
      content: "\f5bb"
    }

    .fa-space-shuttle:before {
      content: "\f197"
    }

    .fa-speakap:before {
      content: "\f3f3"
    }

    .fa-speaker-deck:before {
      content: "\f83c"
    }

    .fa-spell-check:before {
      content: "\f891"
    }

    .fa-spider:before {
      content: "\f717"
    }

    .fa-spinner:before {
      content: "\f110"
    }

    .fa-splotch:before {
      content: "\f5bc"
    }

    .fa-spotify:before {
      content: "\f1bc"
    }

    .fa-spray-can:before {
      content: "\f5bd"
    }

    .fa-square:before {
      content: "\f0c8"
    }

    .fa-square-full:before {
      content: "\f45c"
    }

    .fa-square-root-alt:before {
      content: "\f698"
    }

    .fa-squarespace:before {
      content: "\f5be"
    }

    .fa-stack-exchange:before {
      content: "\f18d"
    }

    .fa-stack-overflow:before {
      content: "\f16c"
    }

    .fa-stackpath:before {
      content: "\f842"
    }

    .fa-stamp:before {
      content: "\f5bf"
    }

    .fa-star:before {
      content: "\f005"
    }

    .fa-star-and-crescent:before {
      content: "\f699"
    }

    .fa-star-half:before {
      content: "\f089"
    }

    .fa-star-half-alt:before {
      content: "\f5c0"
    }

    .fa-star-of-david:before {
      content: "\f69a"
    }

    .fa-star-of-life:before {
      content: "\f621"
    }

    .fa-staylinked:before {
      content: "\f3f5"
    }

    .fa-steam:before {
      content: "\f1b6"
    }

    .fa-steam-square:before {
      content: "\f1b7"
    }

    .fa-steam-symbol:before {
      content: "\f3f6"
    }

    .fa-step-backward:before {
      content: "\f048"
    }

    .fa-step-forward:before {
      content: "\f051"
    }

    .fa-stethoscope:before {
      content: "\f0f1"
    }

    .fa-sticker-mule:before {
      content: "\f3f7"
    }

    .fa-sticky-note:before {
      content: "\f249"
    }

    .fa-stop:before {
      content: "\f04d"
    }

    .fa-stop-circle:before {
      content: "\f28d"
    }

    .fa-stopwatch:before {
      content: "\f2f2"
    }

    .fa-stopwatch-20:before {
      content: "\e06f"
    }

    .fa-store:before {
      content: "\f54e"
    }

    .fa-store-alt:before {
      content: "\f54f"
    }

    .fa-store-alt-slash:before {
      content: "\e070"
    }

    .fa-store-slash:before {
      content: "\e071"
    }

    .fa-strava:before {
      content: "\f428"
    }

    .fa-stream:before {
      content: "\f550"
    }

    .fa-street-view:before {
      content: "\f21d"
    }

    .fa-strikethrough:before {
      content: "\f0cc"
    }

    .fa-stripe:before {
      content: "\f429"
    }

    .fa-stripe-s:before {
      content: "\f42a"
    }

    .fa-stroopwafel:before {
      content: "\f551"
    }

    .fa-studiovinari:before {
      content: "\f3f8"
    }

    .fa-stumbleupon:before {
      content: "\f1a4"
    }

    .fa-stumbleupon-circle:before {
      content: "\f1a3"
    }

    .fa-subscript:before {
      content: "\f12c"
    }

    .fa-subway:before {
      content: "\f239"
    }

    .fa-suitcase:before {
      content: "\f0f2"
    }

    .fa-suitcase-rolling:before {
      content: "\f5c1"
    }

    .fa-sun:before {
      content: "\f185"
    }

    .fa-superpowers:before {
      content: "\f2dd"
    }

    .fa-superscript:before {
      content: "\f12b"
    }

    .fa-supple:before {
      content: "\f3f9"
    }

    .fa-surprise:before {
      content: "\f5c2"
    }

    .fa-suse:before {
      content: "\f7d6"
    }

    .fa-swatchbook:before {
      content: "\f5c3"
    }

    .fa-swift:before {
      content: "\f8e1"
    }

    .fa-swimmer:before {
      content: "\f5c4"
    }

    .fa-swimming-pool:before {
      content: "\f5c5"
    }

    .fa-symfony:before {
      content: "\f83d"
    }

    .fa-synagogue:before {
      content: "\f69b"
    }

    .fa-sync:before {
      content: "\f021"
    }

    .fa-sync-alt:before {
      content: "\f2f1"
    }

    .fa-syringe:before {
      content: "\f48e"
    }

    .fa-table:before {
      content: "\f0ce"
    }

    .fa-table-tennis:before {
      content: "\f45d"
    }

    .fa-tablet:before {
      content: "\f10a"
    }

    .fa-tablet-alt:before {
      content: "\f3fa"
    }

    .fa-tablets:before {
      content: "\f490"
    }

    .fa-tachometer-alt:before {
      content: "\f3fd"
    }

    .fa-tag:before {
      content: "\f02b"
    }

    .fa-tags:before {
      content: "\f02c"
    }

    .fa-tape:before {
      content: "\f4db"
    }

    .fa-tasks:before {
      content: "\f0ae"
    }

    .fa-taxi:before {
      content: "\f1ba"
    }

    .fa-teamspeak:before {
      content: "\f4f9"
    }

    .fa-teeth:before {
      content: "\f62e"
    }

    .fa-teeth-open:before {
      content: "\f62f"
    }

    .fa-telegram:before {
      content: "\f2c6"
    }

    .fa-telegram-plane:before {
      content: "\f3fe"
    }

    .fa-temperature-high:before {
      content: "\f769"
    }

    .fa-temperature-low:before {
      content: "\f76b"
    }

    .fa-tencent-weibo:before {
      content: "\f1d5"
    }

    .fa-tenge:before {
      content: "\f7d7"
    }

    .fa-terminal:before {
      content: "\f120"
    }

    .fa-text-height:before {
      content: "\f034"
    }

    .fa-text-width:before {
      content: "\f035"
    }

    .fa-th:before {
      content: "\f00a"
    }

    .fa-th-large:before {
      content: "\f009"
    }

    .fa-th-list:before {
      content: "\f00b"
    }

    .fa-the-red-yeti:before {
      content: "\f69d"
    }

    .fa-theater-masks:before {
      content: "\f630"
    }

    .fa-themeco:before {
      content: "\f5c6"
    }

    .fa-themeisle:before {
      content: "\f2b2"
    }

    .fa-thermometer:before {
      content: "\f491"
    }

    .fa-thermometer-empty:before {
      content: "\f2cb"
    }

    .fa-thermometer-full:before {
      content: "\f2c7"
    }

    .fa-thermometer-half:before {
      content: "\f2c9"
    }

    .fa-thermometer-quarter:before {
      content: "\f2ca"
    }

    .fa-thermometer-three-quarters:before {
      content: "\f2c8"
    }

    .fa-think-peaks:before {
      content: "\f731"
    }

    .fa-thumbs-down:before {
      content: "\f165"
    }

    .fa-thumbs-up:before {
      content: "\f164"
    }

    .fa-thumbtack:before {
      content: "\f08d"
    }

    .fa-ticket-alt:before {
      content: "\f3ff"
    }

    .fa-tiktok:before {
      content: "\e07b"
    }

    .fa-times:before {
      content: "\f00d"
    }

    .fa-times-circle:before {
      content: "\f057"
    }

    .fa-tint:before {
      content: "\f043"
    }

    .fa-tint-slash:before {
      content: "\f5c7"
    }

    .fa-tired:before {
      content: "\f5c8"
    }

    .fa-toggle-off:before {
      content: "\f204"
    }

    .fa-toggle-on:before {
      content: "\f205"
    }

    .fa-toilet:before {
      content: "\f7d8"
    }

    .fa-toilet-paper:before {
      content: "\f71e"
    }

    .fa-toilet-paper-slash:before {
      content: "\e072"
    }

    .fa-toolbox:before {
      content: "\f552"
    }

    .fa-tools:before {
      content: "\f7d9"
    }

    .fa-tooth:before {
      content: "\f5c9"
    }

    .fa-torah:before {
      content: "\f6a0"
    }

    .fa-torii-gate:before {
      content: "\f6a1"
    }

    .fa-tractor:before {
      content: "\f722"
    }

    .fa-trade-federation:before {
      content: "\f513"
    }

    .fa-trademark:before {
      content: "\f25c"
    }

    .fa-traffic-light:before {
      content: "\f637"
    }

    .fa-trailer:before {
      content: "\e041"
    }

    .fa-train:before {
      content: "\f238"
    }

    .fa-tram:before {
      content: "\f7da"
    }

    .fa-transgender:before {
      content: "\f224"
    }

    .fa-transgender-alt:before {
      content: "\f225"
    }

    .fa-trash:before {
      content: "\f1f8"
    }

    .fa-trash-alt:before {
      content: "\f2ed"
    }

    .fa-trash-restore:before {
      content: "\f829"
    }

    .fa-trash-restore-alt:before {
      content: "\f82a"
    }

    .fa-tree:before {
      content: "\f1bb"
    }

    .fa-trello:before {
      content: "\f181"
    }

    .fa-tripadvisor:before {
      content: "\f262"
    }

    .fa-trophy:before {
      content: "\f091"
    }

    .fa-truck:before {
      content: "\f0d1"
    }

    .fa-truck-loading:before {
      content: "\f4de"
    }

    .fa-truck-monster:before {
      content: "\f63b"
    }

    .fa-truck-moving:before {
      content: "\f4df"
    }

    .fa-truck-pickup:before {
      content: "\f63c"
    }

    .fa-tshirt:before {
      content: "\f553"
    }

    .fa-tty:before {
      content: "\f1e4"
    }

    .fa-tumblr:before {
      content: "\f173"
    }

    .fa-tumblr-square:before {
      content: "\f174"
    }

    .fa-tv:before {
      content: "\f26c"
    }

    .fa-twitch:before {
      content: "\f1e8"
    }

    .fa-twitter:before {
      content: "\f099"
    }

    .fa-twitter-square:before {
      content: "\f081"
    }

    .fa-typo3:before {
      content: "\f42b"
    }

    .fa-uber:before {
      content: "\f402"
    }

    .fa-ubuntu:before {
      content: "\f7df"
    }

    .fa-uikit:before {
      content: "\f403"
    }

    .fa-umbraco:before {
      content: "\f8e8"
    }

    .fa-umbrella:before {
      content: "\f0e9"
    }

    .fa-umbrella-beach:before {
      content: "\f5ca"
    }

    .fa-uncharted:before {
      content: "\e084"
    }

    .fa-underline:before {
      content: "\f0cd"
    }

    .fa-undo:before {
      content: "\f0e2"
    }

    .fa-undo-alt:before {
      content: "\f2ea"
    }

    .fa-uniregistry:before {
      content: "\f404"
    }

    .fa-unity:before {
      content: "\e049"
    }

    .fa-universal-access:before {
      content: "\f29a"
    }

    .fa-university:before {
      content: "\f19c"
    }

    .fa-unlink:before {
      content: "\f127"
    }

    .fa-unlock:before {
      content: "\f09c"
    }

    .fa-unlock-alt:before {
      content: "\f13e"
    }

    .fa-unsplash:before {
      content: "\e07c"
    }

    .fa-untappd:before {
      content: "\f405"
    }

    .fa-upload:before {
      content: "\f093"
    }

    .fa-ups:before {
      content: "\f7e0"
    }

    .fa-usb:before {
      content: "\f287"
    }

    .fa-user:before {
      content: "\f007"
    }

    .fa-user-alt:before {
      content: "\f406"
    }

    .fa-user-alt-slash:before {
      content: "\f4fa"
    }

    .fa-user-astronaut:before {
      content: "\f4fb"
    }

    .fa-user-check:before {
      content: "\f4fc"
    }

    .fa-user-circle:before {
      content: "\f2bd"
    }

    .fa-user-clock:before {
      content: "\f4fd"
    }

    .fa-user-cog:before {
      content: "\f4fe"
    }

    .fa-user-edit:before {
      content: "\f4ff"
    }

    .fa-user-friends:before {
      content: "\f500"
    }

    .fa-user-graduate:before {
      content: "\f501"
    }

    .fa-user-injured:before {
      content: "\f728"
    }

    .fa-user-lock:before {
      content: "\f502"
    }

    .fa-user-md:before {
      content: "\f0f0"
    }

    .fa-user-minus:before {
      content: "\f503"
    }

    .fa-user-ninja:before {
      content: "\f504"
    }

    .fa-user-nurse:before {
      content: "\f82f"
    }

    .fa-user-plus:before {
      content: "\f234"
    }

    .fa-user-secret:before {
      content: "\f21b"
    }

    .fa-user-shield:before {
      content: "\f505"
    }

    .fa-user-slash:before {
      content: "\f506"
    }

    .fa-user-tag:before {
      content: "\f507"
    }

    .fa-user-tie:before {
      content: "\f508"
    }

    .fa-user-times:before {
      content: "\f235"
    }

    .fa-users:before {
      content: "\f0c0"
    }

    .fa-users-cog:before {
      content: "\f509"
    }

    .fa-users-slash:before {
      content: "\e073"
    }

    .fa-usps:before {
      content: "\f7e1"
    }

    .fa-ussunnah:before {
      content: "\f407"
    }

    .fa-utensil-spoon:before {
      content: "\f2e5"
    }

    .fa-utensils:before {
      content: "\f2e7"
    }

    .fa-vaadin:before {
      content: "\f408"
    }

    .fa-vector-square:before {
      content: "\f5cb"
    }

    .fa-venus:before {
      content: "\f221"
    }

    .fa-venus-double:before {
      content: "\f226"
    }

    .fa-venus-mars:before {
      content: "\f228"
    }

    .fa-vest:before {
      content: "\e085"
    }

    .fa-vest-patches:before {
      content: "\e086"
    }

    .fa-viacoin:before {
      content: "\f237"
    }

    .fa-viadeo:before {
      content: "\f2a9"
    }

    .fa-viadeo-square:before {
      content: "\f2aa"
    }

    .fa-vial:before {
      content: "\f492"
    }

    .fa-vials:before {
      content: "\f493"
    }

    .fa-viber:before {
      content: "\f409"
    }

    .fa-video:before {
      content: "\f03d"
    }

    .fa-video-slash:before {
      content: "\f4e2"
    }

    .fa-vihara:before {
      content: "\f6a7"
    }

    .fa-vimeo:before {
      content: "\f40a"
    }

    .fa-vimeo-square:before {
      content: "\f194"
    }

    .fa-vimeo-v:before {
      content: "\f27d"
    }

    .fa-vine:before {
      content: "\f1ca"
    }

    .fa-virus:before {
      content: "\e074"
    }

    .fa-virus-slash:before {
      content: "\e075"
    }

    .fa-viruses:before {
      content: "\e076"
    }

    .fa-vk:before {
      content: "\f189"
    }

    .fa-vnv:before {
      content: "\f40b"
    }

    .fa-voicemail:before {
      content: "\f897"
    }

    .fa-volleyball-ball:before {
      content: "\f45f"
    }

    .fa-volume-down:before {
      content: "\f027"
    }

    .fa-volume-mute:before {
      content: "\f6a9"
    }

    .fa-volume-off:before {
      content: "\f026"
    }

    .fa-volume-up:before {
      content: "\f028"
    }

    .fa-vote-yea:before {
      content: "\f772"
    }

    .fa-vr-cardboard:before {
      content: "\f729"
    }

    .fa-vuejs:before {
      content: "\f41f"
    }

    .fa-walking:before {
      content: "\f554"
    }

    .fa-wallet:before {
      content: "\f555"
    }

    .fa-warehouse:before {
      content: "\f494"
    }

    .fa-watchman-monitoring:before {
      content: "\e087"
    }

    .fa-water:before {
      content: "\f773"
    }

    .fa-wave-square:before {
      content: "\f83e"
    }

    .fa-waze:before {
      content: "\f83f"
    }

    .fa-weebly:before {
      content: "\f5cc"
    }

    .fa-weibo:before {
      content: "\f18a"
    }

    .fa-weight:before {
      content: "\f496"
    }

    .fa-weight-hanging:before {
      content: "\f5cd"
    }

    .fa-weixin:before {
      content: "\f1d7"
    }

    .fa-whatsapp:before {
      content: "\f232"
    }

    .fa-whatsapp-square:before {
      content: "\f40c"
    }

    .fa-wheelchair:before {
      content: "\f193"
    }

    .fa-whmcs:before {
      content: "\f40d"
    }

    .fa-wifi:before {
      content: "\f1eb"
    }

    .fa-wikipedia-w:before {
      content: "\f266"
    }

    .fa-wind:before {
      content: "\f72e"
    }

    .fa-window-close:before {
      content: "\f410"
    }

    .fa-window-maximize:before {
      content: "\f2d0"
    }

    .fa-window-minimize:before {
      content: "\f2d1"
    }

    .fa-window-restore:before {
      content: "\f2d2"
    }

    .fa-windows:before {
      content: "\f17a"
    }

    .fa-wine-bottle:before {
      content: "\f72f"
    }

    .fa-wine-glass:before {
      content: "\f4e3"
    }

    .fa-wine-glass-alt:before {
      content: "\f5ce"
    }

    .fa-wix:before {
      content: "\f5cf"
    }

    .fa-wizards-of-the-coast:before {
      content: "\f730"
    }

    .fa-wodu:before {
      content: "\e088"
    }

    .fa-wolf-pack-battalion:before {
      content: "\f514"
    }

    .fa-won-sign:before {
      content: "\f159"
    }

    .fa-wordpress:before {
      content: "\f19a"
    }

    .fa-wordpress-simple:before {
      content: "\f411"
    }

    .fa-wpbeginner:before {
      content: "\f297"
    }

    .fa-wpexplorer:before {
      content: "\f2de"
    }

    .fa-wpforms:before {
      content: "\f298"
    }

    .fa-wpressr:before {
      content: "\f3e4"
    }

    .fa-wrench:before {
      content: "\f0ad"
    }

    .fa-x-ray:before {
      content: "\f497"
    }

    .fa-xbox:before {
      content: "\f412"
    }

    .fa-xing:before {
      content: "\f168"
    }

    .fa-xing-square:before {
      content: "\f169"
    }

    .fa-y-combinator:before {
      content: "\f23b"
    }

    .fa-yahoo:before {
      content: "\f19e"
    }

    .fa-yammer:before {
      content: "\f840"
    }

    .fa-yandex:before {
      content: "\f413"
    }

    .fa-yandex-international:before {
      content: "\f414"
    }

    .fa-yarn:before {
      content: "\f7e3"
    }

    .fa-yelp:before {
      content: "\f1e9"
    }

    .fa-yen-sign:before {
      content: "\f157"
    }

    .fa-yin-yang:before {
      content: "\f6ad"
    }

    .fa-yoast:before {
      content: "\f2b1"
    }

    .fa-youtube:before {
      content: "\f167"
    }

    .fa-youtube-square:before {
      content: "\f431"
    }

    .fa-zhihu:before {
      content: "\f63f"
    }

    .sr-only {
      border: 0;
      clip: rect(0, 0, 0, 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      clip: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      position: static;
      width: auto
    }

    @font-face {
      font-family: "Font Awesome 5 Brands";
      font-style: normal;
      font-weight: 400;
      font-display: block;
      src: url(../webfonts/fa-brands-400.eot);
      src: url(../webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.woff) format("woff"), url(../webfonts/fa-brands-400.ttf) format("truetype"), url(../webfonts/fa-brands-400.svg#fontawesome) format("svg")
    }

    .fab {
      font-family: "Font Awesome 5 Brands"
    }

    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 400;
      font-display: block;
      src: url(../webfonts/fa-regular-400.eot);
      src: url(../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.woff) format("woff"), url(../webfonts/fa-regular-400.ttf) format("truetype"), url(../webfonts/fa-regular-400.svg#fontawesome) format("svg")
    }

    .fab,
    .far {
      font-weight: 400
    }

    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 900;
      font-display: block;
      src: url(../webfonts/fa-solid-900.eot);
      src: url(../webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.woff) format("woff"), url(../webfonts/fa-solid-900.ttf) format("truetype"), url(../webfonts/fa-solid-900.svg#fontawesome) format("svg")
    }

    .fa,
    .far,
    .fas {
      font-family: "Font Awesome 5 Free"
    }

    .fa,
    .fas {
      font-weight: 900
    }
  </style>
  <style>
    html {
      font-family: 'Times New Roman', Times, serif;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
      display: block
    }

    audio,
    canvas,
    progress,
    video {
      display: inline-block;
      vertical-align: baseline
    }

    audio:not([controls]) {
      display: none;
      height: 0
    }

    [hidden],
    template {
      display: none
    }

    a {
      background-color: transparent
    }

    a:active,
    a:hover {
      outline: 0
    }

    abbr[title] {
      border-bottom: 1px dotted
    }

    b,
    strong {
      font-weight: 700
    }

    dfn {
      font-style: italic
    }

    h1 {
      margin: .67em 0;
      font-size: 2em
    }

    mark {
      color: #000;
      background: #ff0
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      position: relative;
      font-size: 75%;
      line-height: 0;
      vertical-align: baseline
    }

    sup {
      top: -.5em
    }

    sub {
      bottom: -.25em
    }

    img {
      border: 0
    }

    svg:not(:root) {
      overflow: hidden
    }

    figure {
      margin: 1em 40px
    }

    hr {
      height: 0;
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box
    }

    pre {
      overflow: auto
    }

    code,
    kbd,
    pre,
    samp {
      font-family: monospace, monospace;
      font-size: 1em
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      margin: 0;
      font: inherit;
      color: inherit
    }

    button {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
      -webkit-appearance: button;
      cursor: pointer
    }

    button[disabled],
    html input[disabled] {
      cursor: default
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
      padding: 0;
      border: 0
    }

    input {
      line-height: normal
    }

    input[type=checkbox],
    input[type=radio] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 0
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      height: auto
    }

    input[type=search] {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      -webkit-appearance: textfield
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration {
      -webkit-appearance: none
    }

    fieldset {
      padding: .35em .625em .75em;
      margin: 0 2px;
      border: 1px solid silver
    }

    legend {
      padding: 0;
      border: 0
    }

    textarea {
      overflow: auto
    }

    optgroup {
      font-weight: 700
    }

    table {
      border-spacing: 0;
      border-collapse: collapse
    }

    td,
    th {
      padding: 0
    }

    /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
    @media print {

      *,
      :after,
      :before {
        color: #000 !important;
        text-shadow: none !important;
        background: 0 0 !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
      }

      a,
      a:visited {
        text-decoration: underline
      }

      a[href]:after {
        content: " (" attr(href) ")"
      }

      abbr[title]:after {
        content: " (" attr(title) ")"
      }

      a[href^="javascript:"]:after,
      a[href^="#"]:after {
        content: ""
      }

      blockquote,
      pre {
        border: 1px solid #999;
        page-break-inside: avoid
      }

      thead {
        display: table-header-group
      }

      img,
      tr {
        page-break-inside: avoid
      }

      img {
        max-width: 100% !important
      }

      h2,
      h3,
      p {
        orphans: 3;
        widows: 3
      }

      h2,
      h3 {
        page-break-after: avoid
      }

      .navbar {
        display: none
      }

      .btn>.caret,
      .dropup>.btn>.caret {
        border-top-color: #000 !important
      }

      .label {
        border: 1px solid #000
      }

      .table {
        border-collapse: collapse !important
      }

      .table td,
      .table th {
        background-color: #fff !important
      }

      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd !important
      }

      .borderless>thead>tr>th,
      .borderless>tbody>tr>th,
      .borderless>tfoot>tr>th,
      .borderless>thead>tr>td,
      .borderless>tbody>tr>td,
      .borderless>tfoot>tr>td {
        border-top: none;
      }
    }

    @font-face {
      font-family: 'Glyphicons Halflings';
      src: url(../fonts/glyphicons-halflings-regular.eot);
      src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'), url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'), url(../fonts/glyphicons-halflings-regular.woff) format('woff'), url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
    }

    .glyphicon {
      position: relative;
      top: 1px;
      display: inline-block;
      font-family: 'Glyphicons Halflings';
      font-style: normal;
      font-weight: 400;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .glyphicon-asterisk:before {
      content: "\002a"
    }

    .glyphicon-plus:before {
      content: "\002b"
    }

    .glyphicon-eur:before,
    .glyphicon-euro:before {
      content: "\20ac"
    }

    .glyphicon-minus:before {
      content: "\2212"
    }

    .glyphicon-cloud:before {
      content: "\2601"
    }

    .glyphicon-envelope:before {
      content: "\2709"
    }

    .glyphicon-pencil:before {
      content: "\270f"
    }

    .glyphicon-glass:before {
      content: "\e001"
    }

    .glyphicon-music:before {
      content: "\e002"
    }

    .glyphicon-search:before {
      content: "\e003"
    }

    .glyphicon-heart:before {
      content: "\e005"
    }

    .glyphicon-star:before {
      content: "\e006"
    }

    .glyphicon-star-empty:before {
      content: "\e007"
    }

    .glyphicon-user:before {
      content: "\e008"
    }

    .glyphicon-film:before {
      content: "\e009"
    }

    .glyphicon-th-large:before {
      content: "\e010"
    }

    .glyphicon-th:before {
      content: "\e011"
    }

    .glyphicon-th-list:before {
      content: "\e012"
    }

    .glyphicon-ok:before {
      content: "\e013"
    }

    .glyphicon-remove:before {
      content: "\e014"
    }

    .glyphicon-zoom-in:before {
      content: "\e015"
    }

    .glyphicon-zoom-out:before {
      content: "\e016"
    }

    .glyphicon-off:before {
      content: "\e017"
    }

    .glyphicon-signal:before {
      content: "\e018"
    }

    .glyphicon-cog:before {
      content: "\e019"
    }

    .glyphicon-trash:before {
      content: "\e020"
    }

    .glyphicon-home:before {
      content: "\e021"
    }

    .glyphicon-file:before {
      content: "\e022"
    }

    .glyphicon-time:before {
      content: "\e023"
    }

    .glyphicon-road:before {
      content: "\e024"
    }

    .glyphicon-download-alt:before {
      content: "\e025"
    }

    .glyphicon-download:before {
      content: "\e026"
    }

    .glyphicon-upload:before {
      content: "\e027"
    }

    .glyphicon-inbox:before {
      content: "\e028"
    }

    .glyphicon-play-circle:before {
      content: "\e029"
    }

    .glyphicon-repeat:before {
      content: "\e030"
    }

    .glyphicon-refresh:before {
      content: "\e031"
    }

    .glyphicon-list-alt:before {
      content: "\e032"
    }

    .glyphicon-lock:before {
      content: "\e033"
    }

    .glyphicon-flag:before {
      content: "\e034"
    }

    .glyphicon-headphones:before {
      content: "\e035"
    }

    .glyphicon-volume-off:before {
      content: "\e036"
    }

    .glyphicon-volume-down:before {
      content: "\e037"
    }

    .glyphicon-volume-up:before {
      content: "\e038"
    }

    .glyphicon-qrcode:before {
      content: "\e039"
    }

    .glyphicon-barcode:before {
      content: "\e040"
    }

    .glyphicon-tag:before {
      content: "\e041"
    }

    .glyphicon-tags:before {
      content: "\e042"
    }

    .glyphicon-book:before {
      content: "\e043"
    }

    .glyphicon-bookmark:before {
      content: "\e044"
    }

    .glyphicon-print:before {
      content: "\e045"
    }

    .glyphicon-camera:before {
      content: "\e046"
    }

    .glyphicon-font:before {
      content: "\e047"
    }

    .glyphicon-bold:before {
      content: "\e048"
    }

    .glyphicon-italic:before {
      content: "\e049"
    }

    .glyphicon-text-height:before {
      content: "\e050"
    }

    .glyphicon-text-width:before {
      content: "\e051"
    }

    .glyphicon-align-left:before {
      content: "\e052"
    }

    .glyphicon-align-center:before {
      content: "\e053"
    }

    .glyphicon-align-right:before {
      content: "\e054"
    }

    .glyphicon-align-justify:before {
      content: "\e055"
    }

    .glyphicon-list:before {
      content: "\e056"
    }

    .glyphicon-indent-left:before {
      content: "\e057"
    }

    .glyphicon-indent-right:before {
      content: "\e058"
    }

    .glyphicon-facetime-video:before {
      content: "\e059"
    }

    .glyphicon-picture:before {
      content: "\e060"
    }

    .glyphicon-map-marker:before {
      content: "\e062"
    }

    .glyphicon-adjust:before {
      content: "\e063"
    }

    .glyphicon-tint:before {
      content: "\e064"
    }

    .glyphicon-edit:before {
      content: "\e065"
    }

    .glyphicon-share:before {
      content: "\e066"
    }

    .glyphicon-check:before {
      content: "\e067"
    }

    .glyphicon-move:before {
      content: "\e068"
    }

    .glyphicon-step-backward:before {
      content: "\e069"
    }

    .glyphicon-fast-backward:before {
      content: "\e070"
    }

    .glyphicon-backward:before {
      content: "\e071"
    }

    .glyphicon-play:before {
      content: "\e072"
    }

    .glyphicon-pause:before {
      content: "\e073"
    }

    .glyphicon-stop:before {
      content: "\e074"
    }

    .glyphicon-forward:before {
      content: "\e075"
    }

    .glyphicon-fast-forward:before {
      content: "\e076"
    }

    .glyphicon-step-forward:before {
      content: "\e077"
    }

    .glyphicon-eject:before {
      content: "\e078"
    }

    .glyphicon-chevron-left:before {
      content: "\e079"
    }

    .glyphicon-chevron-right:before {
      content: "\e080"
    }

    .glyphicon-plus-sign:before {
      content: "\e081"
    }

    .glyphicon-minus-sign:before {
      content: "\e082"
    }

    .glyphicon-remove-sign:before {
      content: "\e083"
    }

    .glyphicon-ok-sign:before {
      content: "\e084"
    }

    .glyphicon-question-sign:before {
      content: "\e085"
    }

    .glyphicon-info-sign:before {
      content: "\e086"
    }

    .glyphicon-screenshot:before {
      content: "\e087"
    }

    .glyphicon-remove-circle:before {
      content: "\e088"
    }

    .glyphicon-ok-circle:before {
      content: "\e089"
    }

    .glyphicon-ban-circle:before {
      content: "\e090"
    }

    .glyphicon-arrow-left:before {
      content: "\e091"
    }

    .glyphicon-arrow-right:before {
      content: "\e092"
    }

    .glyphicon-arrow-up:before {
      content: "\e093"
    }

    .glyphicon-arrow-down:before {
      content: "\e094"
    }

    .glyphicon-share-alt:before {
      content: "\e095"
    }

    .glyphicon-resize-full:before {
      content: "\e096"
    }

    .glyphicon-resize-small:before {
      content: "\e097"
    }

    .glyphicon-exclamation-sign:before {
      content: "\e101"
    }

    .glyphicon-gift:before {
      content: "\e102"
    }

    .glyphicon-leaf:before {
      content: "\e103"
    }

    .glyphicon-fire:before {
      content: "\e104"
    }

    .glyphicon-eye-open:before {
      content: "\e105"
    }

    .glyphicon-eye-close:before {
      content: "\e106"
    }

    .glyphicon-warning-sign:before {
      content: "\e107"
    }

    .glyphicon-plane:before {
      content: "\e108"
    }

    .glyphicon-calendar:before {
      content: "\e109"
    }

    .glyphicon-random:before {
      content: "\e110"
    }

    .glyphicon-comment:before {
      content: "\e111"
    }

    .glyphicon-magnet:before {
      content: "\e112"
    }

    .glyphicon-chevron-up:before {
      content: "\e113"
    }

    .glyphicon-chevron-down:before {
      content: "\e114"
    }

    .glyphicon-retweet:before {
      content: "\e115"
    }

    .glyphicon-shopping-cart:before {
      content: "\e116"
    }

    .glyphicon-folder-close:before {
      content: "\e117"
    }

    .glyphicon-folder-open:before {
      content: "\e118"
    }

    .glyphicon-resize-vertical:before {
      content: "\e119"
    }

    .glyphicon-resize-horizontal:before {
      content: "\e120"
    }

    .glyphicon-hdd:before {
      content: "\e121"
    }

    .glyphicon-bullhorn:before {
      content: "\e122"
    }

    .glyphicon-bell:before {
      content: "\e123"
    }

    .glyphicon-certificate:before {
      content: "\e124"
    }

    .glyphicon-thumbs-up:before {
      content: "\e125"
    }

    .glyphicon-thumbs-down:before {
      content: "\e126"
    }

    .glyphicon-hand-right:before {
      content: "\e127"
    }

    .glyphicon-hand-left:before {
      content: "\e128"
    }

    .glyphicon-hand-up:before {
      content: "\e129"
    }

    .glyphicon-hand-down:before {
      content: "\e130"
    }

    .glyphicon-circle-arrow-right:before {
      content: "\e131"
    }

    .glyphicon-circle-arrow-left:before {
      content: "\e132"
    }

    .glyphicon-circle-arrow-up:before {
      content: "\e133"
    }

    .glyphicon-circle-arrow-down:before {
      content: "\e134"
    }

    .glyphicon-globe:before {
      content: "\e135"
    }

    .glyphicon-wrench:before {
      content: "\e136"
    }

    .glyphicon-tasks:before {
      content: "\e137"
    }

    .glyphicon-filter:before {
      content: "\e138"
    }

    .glyphicon-briefcase:before {
      content: "\e139"
    }

    .glyphicon-fullscreen:before {
      content: "\e140"
    }

    .glyphicon-dashboard:before {
      content: "\e141"
    }

    .glyphicon-paperclip:before {
      content: "\e142"
    }

    .glyphicon-heart-empty:before {
      content: "\e143"
    }

    .glyphicon-link:before {
      content: "\e144"
    }

    .glyphicon-phone:before {
      content: "\e145"
    }

    .glyphicon-pushpin:before {
      content: "\e146"
    }

    .glyphicon-usd:before {
      content: "\e148"
    }

    .glyphicon-gbp:before {
      content: "\e149"
    }

    .glyphicon-sort:before {
      content: "\e150"
    }

    .glyphicon-sort-by-alphabet:before {
      content: "\e151"
    }

    .glyphicon-sort-by-alphabet-alt:before {
      content: "\e152"
    }

    .glyphicon-sort-by-order:before {
      content: "\e153"
    }

    .glyphicon-sort-by-order-alt:before {
      content: "\e154"
    }

    .glyphicon-sort-by-attributes:before {
      content: "\e155"
    }

    .glyphicon-sort-by-attributes-alt:before {
      content: "\e156"
    }

    .glyphicon-unchecked:before {
      content: "\e157"
    }

    .glyphicon-expand:before {
      content: "\e158"
    }

    .glyphicon-collapse-down:before {
      content: "\e159"
    }

    .glyphicon-collapse-up:before {
      content: "\e160"
    }

    .glyphicon-log-in:before {
      content: "\e161"
    }

    .glyphicon-flash:before {
      content: "\e162"
    }

    .glyphicon-log-out:before {
      content: "\e163"
    }

    .glyphicon-new-window:before {
      content: "\e164"
    }

    .glyphicon-record:before {
      content: "\e165"
    }

    .glyphicon-save:before {
      content: "\e166"
    }

    .glyphicon-open:before {
      content: "\e167"
    }

    .glyphicon-saved:before {
      content: "\e168"
    }

    .glyphicon-import:before {
      content: "\e169"
    }

    .glyphicon-export:before {
      content: "\e170"
    }

    .glyphicon-send:before {
      content: "\e171"
    }

    .glyphicon-floppy-disk:before {
      content: "\e172"
    }

    .glyphicon-floppy-saved:before {
      content: "\e173"
    }

    .glyphicon-floppy-remove:before {
      content: "\e174"
    }

    .glyphicon-floppy-save:before {
      content: "\e175"
    }

    .glyphicon-floppy-open:before {
      content: "\e176"
    }

    .glyphicon-credit-card:before {
      content: "\e177"
    }

    .glyphicon-transfer:before {
      content: "\e178"
    }

    .glyphicon-cutlery:before {
      content: "\e179"
    }

    .glyphicon-header:before {
      content: "\e180"
    }

    .glyphicon-compressed:before {
      content: "\e181"
    }

    .glyphicon-earphone:before {
      content: "\e182"
    }

    .glyphicon-phone-alt:before {
      content: "\e183"
    }

    .glyphicon-tower:before {
      content: "\e184"
    }

    .glyphicon-stats:before {
      content: "\e185"
    }

    .glyphicon-sd-video:before {
      content: "\e186"
    }

    .glyphicon-hd-video:before {
      content: "\e187"
    }

    .glyphicon-subtitles:before {
      content: "\e188"
    }

    .glyphicon-sound-stereo:before {
      content: "\e189"
    }

    .glyphicon-sound-dolby:before {
      content: "\e190"
    }

    .glyphicon-sound-5-1:before {
      content: "\e191"
    }

    .glyphicon-sound-6-1:before {
      content: "\e192"
    }

    .glyphicon-sound-7-1:before {
      content: "\e193"
    }

    .glyphicon-copyright-mark:before {
      content: "\e194"
    }

    .glyphicon-registration-mark:before {
      content: "\e195"
    }

    .glyphicon-cloud-download:before {
      content: "\e197"
    }

    .glyphicon-cloud-upload:before {
      content: "\e198"
    }

    .glyphicon-tree-conifer:before {
      content: "\e199"
    }

    .glyphicon-tree-deciduous:before {
      content: "\e200"
    }

    .glyphicon-cd:before {
      content: "\e201"
    }

    .glyphicon-save-file:before {
      content: "\e202"
    }

    .glyphicon-open-file:before {
      content: "\e203"
    }

    .glyphicon-level-up:before {
      content: "\e204"
    }

    .glyphicon-copy:before {
      content: "\e205"
    }

    .glyphicon-paste:before {
      content: "\e206"
    }

    .glyphicon-alert:before {
      content: "\e209"
    }

    .glyphicon-equalizer:before {
      content: "\e210"
    }

    .glyphicon-king:before {
      content: "\e211"
    }

    .glyphicon-queen:before {
      content: "\e212"
    }

    .glyphicon-pawn:before {
      content: "\e213"
    }

    .glyphicon-bishop:before {
      content: "\e214"
    }

    .glyphicon-knight:before {
      content: "\e215"
    }

    .glyphicon-baby-formula:before {
      content: "\e216"
    }

    .glyphicon-tent:before {
      content: "\26fa"
    }

    .glyphicon-blackboard:before {
      content: "\e218"
    }

    .glyphicon-bed:before {
      content: "\e219"
    }

    .glyphicon-apple:before {
      content: "\f8ff"
    }

    .glyphicon-erase:before {
      content: "\e221"
    }

    .glyphicon-hourglass:before {
      content: "\231b"
    }

    .glyphicon-lamp:before {
      content: "\e223"
    }

    .glyphicon-duplicate:before {
      content: "\e224"
    }

    .glyphicon-piggy-bank:before {
      content: "\e225"
    }

    .glyphicon-scissors:before {
      content: "\e226"
    }

    .glyphicon-bitcoin:before {
      content: "\e227"
    }

    .glyphicon-btc:before {
      content: "\e227"
    }

    .glyphicon-xbt:before {
      content: "\e227"
    }

    .glyphicon-yen:before {
      content: "\00a5"
    }

    .glyphicon-jpy:before {
      content: "\00a5"
    }

    .glyphicon-ruble:before {
      content: "\20bd"
    }

    .glyphicon-rub:before {
      content: "\20bd"
    }

    .glyphicon-scale:before {
      content: "\e230"
    }

    .glyphicon-ice-lolly:before {
      content: "\e231"
    }

    .glyphicon-ice-lolly-tasted:before {
      content: "\e232"
    }

    .glyphicon-education:before {
      content: "\e233"
    }

    .glyphicon-option-horizontal:before {
      content: "\e234"
    }

    .glyphicon-option-vertical:before {
      content: "\e235"
    }

    .glyphicon-menu-hamburger:before {
      content: "\e236"
    }

    .glyphicon-modal-window:before {
      content: "\e237"
    }

    .glyphicon-oil:before {
      content: "\e238"
    }

    .glyphicon-grain:before {
      content: "\e239"
    }

    .glyphicon-sunglasses:before {
      content: "\e240"
    }

    .glyphicon-text-size:before {
      content: "\e241"
    }

    .glyphicon-text-color:before {
      content: "\e242"
    }

    .glyphicon-text-background:before {
      content: "\e243"
    }

    .glyphicon-object-align-top:before {
      content: "\e244"
    }

    .glyphicon-object-align-bottom:before {
      content: "\e245"
    }

    .glyphicon-object-align-horizontal:before {
      content: "\e246"
    }

    .glyphicon-object-align-left:before {
      content: "\e247"
    }

    .glyphicon-object-align-vertical:before {
      content: "\e248"
    }

    .glyphicon-object-align-right:before {
      content: "\e249"
    }

    .glyphicon-triangle-right:before {
      content: "\e250"
    }

    .glyphicon-triangle-left:before {
      content: "\e251"
    }

    .glyphicon-triangle-bottom:before {
      content: "\e252"
    }

    .glyphicon-triangle-top:before {
      content: "\e253"
    }

    .glyphicon-console:before {
      content: "\e254"
    }

    .glyphicon-superscript:before {
      content: "\e255"
    }

    .glyphicon-subscript:before {
      content: "\e256"
    }

    .glyphicon-menu-left:before {
      content: "\e257"
    }

    .glyphicon-menu-right:before {
      content: "\e258"
    }

    .glyphicon-menu-down:before {
      content: "\e259"
    }

    .glyphicon-menu-up:before {
      content: "\e260"
    }

    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    :after,
    :before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    html {
      font-size: 10px;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      line-height: 1.42857143;
      color: #333;
      background-color: #fff
    }

    button,
    input,
    select,
    textarea {
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
    }

    a {
      color: #337ab7;
      text-decoration: none
    }

    a:focus,
    a:hover {
      color: #23527c;
      text-decoration: underline
    }

    a:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    figure {
      margin: 0
    }

    img {
      vertical-align: middle
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img,
    .img-responsive,
    .thumbnail a>img,
    .thumbnail>img {
      display: block;
      max-width: 100%;
      height: auto
    }

    .img-rounded {
      border-radius: 6px
    }

    .img-thumbnail {
      display: inline-block;
      max-width: 100%;
      height: auto;
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out
    }

    .img-circle {
      border-radius: 50%
    }

    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #eee
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      clip: auto
    }

    [role=button] {
      cursor: pointer
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: inherit;
      font-weight: 500;
      line-height: 1.1;
      color: inherit
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
      font-weight: 400;
      line-height: 1;
      color: #777
    }

    .h1,
    .h2,
    .h3,
    h1,
    h2,
    h3 {
      margin-top: 20px;
      margin-bottom: 10px
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small {
      font-size: 65%
    }

    .h4,
    .h5,
    .h6,
    h4,
    h5,
    h6 {
      margin-top: 10px;
      margin-bottom: 10px
    }

    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
      font-size: 75%
    }

    .h1,
    h1 {
      font-size: 36px
    }

    .h2,
    h2 {
      font-size: 30px
    }

    .h3,
    h3 {
      font-size: 24px
    }

    .h4,
    h4 {
      font-size: 18px
    }

    .h5,
    h5 {
      font-size: 14px
    }

    .h6,
    h6 {
      font-size: 12px
    }

    p {
      margin: 0 0 10px
    }

    .lead {
      margin-bottom: 20px;
      font-size: 16px;
      font-weight: 300;
      line-height: 1.4
    }

    @media (min-width:768px) {
      .lead {
        font-size: 21px
      }
    }

    .small,
    small {
      font-size: 85%
    }

    .mark,
    mark {
      padding: .2em;
      background-color: #fcf8e3
    }

    .text-left {
      text-align: left
    }

    .text-right {
      text-align: right
    }

    .text-center {
      text-align: center
    }

    .text-justify {
      text-align: justify
    }

    .text-nowrap {
      white-space: nowrap
    }

    .text-lowercase {
      text-transform: lowercase
    }

    .text-uppercase {
      text-transform: uppercase
    }

    .text-capitalize {
      text-transform: capitalize
    }

    .text-muted {
      color: #777
    }

    .text-primary {
      color: #337ab7
    }

    a.text-primary:focus,
    a.text-primary:hover {
      color: #286090
    }

    .text-success {
      color: #3c763d
    }

    a.text-success:focus,
    a.text-success:hover {
      color: #2b542c
    }

    .text-info {
      color: #31708f
    }

    a.text-info:focus,
    a.text-info:hover {
      color: #245269
    }

    .text-warning {
      color: #8a6d3b
    }

    a.text-warning:focus,
    a.text-warning:hover {
      color: #66512c
    }

    .text-danger {
      color: #a94442
    }

    a.text-danger:focus,
    a.text-danger:hover {
      color: #843534
    }

    .bg-primary {
      color: #fff;
      background-color: #337ab7
    }

    a.bg-primary:focus,
    a.bg-primary:hover {
      background-color: #286090
    }

    .bg-success {
      background-color: #dff0d8
    }

    a.bg-success:focus,
    a.bg-success:hover {
      background-color: #c1e2b3
    }

    .bg-info {
      background-color: #d9edf7
    }

    a.bg-info:focus,
    a.bg-info:hover {
      background-color: #afd9ee
    }

    .bg-warning {
      background-color: #fcf8e3
    }

    a.bg-warning:focus,
    a.bg-warning:hover {
      background-color: #f7ecb5
    }

    .bg-danger {
      background-color: #f2dede
    }

    a.bg-danger:focus,
    a.bg-danger:hover {
      background-color: #e4b9b9
    }

    .page-header {
      padding-bottom: 9px;
      margin: 40px 0 20px;
      border-bottom: 1px solid #eee
    }

    ol,
    ul {
      margin-top: 0;
      margin-bottom: 10px
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
      margin-bottom: 0
    }

    .list-unstyled {
      padding-left: 0;
      list-style: none
    }

    .list-inline {
      padding-left: 0;
      margin-left: -5px;
      list-style: none
    }

    .list-inline>li {
      display: inline-block;
      padding-right: 5px;
      padding-left: 5px
    }

    dl {
      margin-top: 0;
      margin-bottom: 20px
    }

    dd,
    dt {
      line-height: 1.42857143
    }

    dt {
      font-weight: 700
    }

    dd {
      margin-left: 0
    }

    @media (min-width:768px) {
      .dl-horizontal dt {
        float: left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: right;
        text-overflow: ellipsis;
        white-space: nowrap
      }

      .dl-horizontal dd {
        margin-left: 180px
      }
    }

    abbr[data-original-title],
    abbr[title] {
      cursor: help;
      border-bottom: 1px dotted #777
    }

    .initialism {
      font-size: 90%;
      text-transform: uppercase
    }

    blockquote {
      padding: 10px 20px;
      margin: 0 0 20px;
      font-size: 17.5px;
      border-left: 5px solid #eee
    }

    blockquote ol:last-child,
    blockquote p:last-child,
    blockquote ul:last-child {
      margin-bottom: 0
    }

    blockquote .small,
    blockquote footer,
    blockquote small {
      display: block;
      font-size: 80%;
      line-height: 1.42857143;
      color: #777
    }

    blockquote .small:before,
    blockquote footer:before,
    blockquote small:before {
      content: '\2014 \00A0'
    }

    .blockquote-reverse,
    blockquote.pull-right {
      padding-right: 15px;
      padding-left: 0;
      text-align: right;
      border-right: 5px solid #eee;
      border-left: 0
    }

    .blockquote-reverse .small:before,
    .blockquote-reverse footer:before,
    .blockquote-reverse small:before,
    blockquote.pull-right .small:before,
    blockquote.pull-right footer:before,
    blockquote.pull-right small:before {
      content: ''
    }

    .blockquote-reverse .small:after,
    .blockquote-reverse footer:after,
    .blockquote-reverse small:after,
    blockquote.pull-right .small:after,
    blockquote.pull-right footer:after,
    blockquote.pull-right small:after {
      content: '\00A0 \2014'
    }

    address {
      margin-bottom: 20px;
      font-style: normal;
      line-height: 1.42857143
    }

    code,
    kbd,
    pre,
    samp {
      font-family: 'Times New Roman', Times, serif
    }

    code {
      padding: 2px 4px;
      font-size: 90%;
      color: #c7254e;
      background-color: #f9f2f4;
      border-radius: 4px
    }

    kbd {
      padding: 2px 4px;
      font-size: 90%;
      color: #fff;
      background-color: #333;
      border-radius: 3px;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }

    kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: 700;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    pre {
      display: block;
      padding: 9.5px;
      margin: 0 0 10px;
      font-size: 13px;
      line-height: 1.42857143;
      color: #333;
      word-break: break-all;
      word-wrap: break-word;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 4px
    }

    pre code {
      padding: 0;
      font-size: inherit;
      color: inherit;
      white-space: pre-wrap;
      background-color: transparent;
      border-radius: 0
    }

    .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll
    }

    .container {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    @media (min-width:768px) {
      .container {
        width: 750px
      }
    }

    @media (min-width:992px) {
      .container {
        width: 970px
      }
    }

    @media (min-width:1200px) {
      .container {
        width: 1170px
      }
    }

    .container-fluid {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    .row {
      margin-right: -15px;
      margin-left: -15px
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
      position: relative;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
      float: left
    }

    .col-xs-12 {
      width: 100%
    }

    .col-xs-11 {
      width: 91.66666667%
    }

    .col-xs-10 {
      width: 83.33333333%
    }

    .col-xs-9 {
      width: 75%
    }

    .col-xs-8 {
      width: 66.66666667%
    }

    .col-xs-7 {
      width: 58.33333333%
    }

    .col-xs-6 {
      width: 50%
    }

    .col-xs-5 {
      width: 41.66666667%
    }

    .col-xs-4 {
      width: 33.33333333%
    }

    .col-xs-3 {
      width: 25%
    }

    .col-xs-2 {
      width: 16.66666667%
    }

    .col-xs-1 {
      width: 8.33333333%
    }

    .col-xs-pull-12 {
      right: 100%
    }

    .col-xs-pull-11 {
      right: 91.66666667%
    }

    .col-xs-pull-10 {
      right: 83.33333333%
    }

    .col-xs-pull-9 {
      right: 75%
    }

    .col-xs-pull-8 {
      right: 66.66666667%
    }

    .col-xs-pull-7 {
      right: 58.33333333%
    }

    .col-xs-pull-6 {
      right: 50%
    }

    .col-xs-pull-5 {
      right: 41.66666667%
    }

    .col-xs-pull-4 {
      right: 33.33333333%
    }

    .col-xs-pull-3 {
      right: 25%
    }

    .col-xs-pull-2 {
      right: 16.66666667%
    }

    .col-xs-pull-1 {
      right: 8.33333333%
    }

    .col-xs-pull-0 {
      right: auto
    }

    .col-xs-push-12 {
      left: 100%
    }

    .col-xs-push-11 {
      left: 91.66666667%
    }

    .col-xs-push-10 {
      left: 83.33333333%
    }

    .col-xs-push-9 {
      left: 75%
    }

    .col-xs-push-8 {
      left: 66.66666667%
    }

    .col-xs-push-7 {
      left: 58.33333333%
    }

    .col-xs-push-6 {
      left: 50%
    }

    .col-xs-push-5 {
      left: 41.66666667%
    }

    .col-xs-push-4 {
      left: 33.33333333%
    }

    .col-xs-push-3 {
      left: 25%
    }

    .col-xs-push-2 {
      left: 16.66666667%
    }

    .col-xs-push-1 {
      left: 8.33333333%
    }

    .col-xs-push-0 {
      left: auto
    }

    .col-xs-offset-12 {
      margin-left: 100%
    }

    .col-xs-offset-11 {
      margin-left: 91.66666667%
    }

    .col-xs-offset-10 {
      margin-left: 83.33333333%
    }

    .col-xs-offset-9 {
      margin-left: 75%
    }

    .col-xs-offset-8 {
      margin-left: 66.66666667%
    }

    .col-xs-offset-7 {
      margin-left: 58.33333333%
    }

    .col-xs-offset-6 {
      margin-left: 50%
    }

    .col-xs-offset-5 {
      margin-left: 41.66666667%
    }

    .col-xs-offset-4 {
      margin-left: 33.33333333%
    }

    .col-xs-offset-3 {
      margin-left: 25%
    }

    .col-xs-offset-2 {
      margin-left: 16.66666667%
    }

    .col-xs-offset-1 {
      margin-left: 8.33333333%
    }

    .col-xs-offset-0 {
      margin-left: 0
    }

    @media (min-width:768px) {

      .col-sm-1,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9 {
        float: left
      }

      .col-sm-12 {
        width: 100%
      }

      .col-sm-11 {
        width: 91.66666667%
      }

      .col-sm-10 {
        width: 83.33333333%
      }

      .col-sm-9 {
        width: 75%
      }

      .col-sm-8 {
        width: 66.66666667%
      }

      .col-sm-7 {
        width: 58.33333333%
      }

      .col-sm-6 {
        width: 50%
      }

      .col-sm-5 {
        width: 41.66666667%
      }

      .col-sm-4 {
        width: 33.33333333%
      }

      .col-sm-3 {
        width: 25%
      }

      .col-sm-2 {
        width: 16.66666667%
      }

      .col-sm-1 {
        width: 8.33333333%
      }

      .col-sm-pull-12 {
        right: 100%
      }

      .col-sm-pull-11 {
        right: 91.66666667%
      }

      .col-sm-pull-10 {
        right: 83.33333333%
      }

      .col-sm-pull-9 {
        right: 75%
      }

      .col-sm-pull-8 {
        right: 66.66666667%
      }

      .col-sm-pull-7 {
        right: 58.33333333%
      }

      .col-sm-pull-6 {
        right: 50%
      }

      .col-sm-pull-5 {
        right: 41.66666667%
      }

      .col-sm-pull-4 {
        right: 33.33333333%
      }

      .col-sm-pull-3 {
        right: 25%
      }

      .col-sm-pull-2 {
        right: 16.66666667%
      }

      .col-sm-pull-1 {
        right: 8.33333333%
      }

      .col-sm-pull-0 {
        right: auto
      }

      .col-sm-push-12 {
        left: 100%
      }

      .col-sm-push-11 {
        left: 91.66666667%
      }

      .col-sm-push-10 {
        left: 83.33333333%
      }

      .col-sm-push-9 {
        left: 75%
      }

      .col-sm-push-8 {
        left: 66.66666667%
      }

      .col-sm-push-7 {
        left: 58.33333333%
      }

      .col-sm-push-6 {
        left: 50%
      }

      .col-sm-push-5 {
        left: 41.66666667%
      }

      .col-sm-push-4 {
        left: 33.33333333%
      }

      .col-sm-push-3 {
        left: 25%
      }

      .col-sm-push-2 {
        left: 16.66666667%
      }

      .col-sm-push-1 {
        left: 8.33333333%
      }

      .col-sm-push-0 {
        left: auto
      }

      .col-sm-offset-12 {
        margin-left: 100%
      }

      .col-sm-offset-11 {
        margin-left: 91.66666667%
      }

      .col-sm-offset-10 {
        margin-left: 83.33333333%
      }

      .col-sm-offset-9 {
        margin-left: 75%
      }

      .col-sm-offset-8 {
        margin-left: 66.66666667%
      }

      .col-sm-offset-7 {
        margin-left: 58.33333333%
      }

      .col-sm-offset-6 {
        margin-left: 50%
      }

      .col-sm-offset-5 {
        margin-left: 41.66666667%
      }

      .col-sm-offset-4 {
        margin-left: 33.33333333%
      }

      .col-sm-offset-3 {
        margin-left: 25%
      }

      .col-sm-offset-2 {
        margin-left: 16.66666667%
      }

      .col-sm-offset-1 {
        margin-left: 8.33333333%
      }

      .col-sm-offset-0 {
        margin-left: 0
      }
    }

    @media (min-width:992px) {

      .col-md-1,
      .col-md-10,
      .col-md-11,
      .col-md-12,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9 {
        float: left
      }

      .col-md-12 {
        width: 100%
      }

      .col-md-11 {
        width: 91.66666667%
      }

      .col-md-10 {
        width: 83.33333333%
      }

      .col-md-9 {
        width: 75%
      }

      .col-md-8 {
        width: 66.66666667%
      }

      .col-md-7 {
        width: 58.33333333%
      }

      .col-md-6 {
        width: 50%
      }

      .col-md-5 {
        width: 41.66666667%
      }

      .col-md-4 {
        width: 33.33333333%
      }

      .col-md-3 {
        width: 25%
      }

      .col-md-2 {
        width: 16.66666667%
      }

      .col-md-1 {
        width: 8.33333333%
      }

      .col-md-pull-12 {
        right: 100%
      }

      .col-md-pull-11 {
        right: 91.66666667%
      }

      .col-md-pull-10 {
        right: 83.33333333%
      }

      .col-md-pull-9 {
        right: 75%
      }

      .col-md-pull-8 {
        right: 66.66666667%
      }

      .col-md-pull-7 {
        right: 58.33333333%
      }

      .col-md-pull-6 {
        right: 50%
      }

      .col-md-pull-5 {
        right: 41.66666667%
      }

      .col-md-pull-4 {
        right: 33.33333333%
      }

      .col-md-pull-3 {
        right: 25%
      }

      .col-md-pull-2 {
        right: 16.66666667%
      }

      .col-md-pull-1 {
        right: 8.33333333%
      }

      .col-md-pull-0 {
        right: auto
      }

      .col-md-push-12 {
        left: 100%
      }

      .col-md-push-11 {
        left: 91.66666667%
      }

      .col-md-push-10 {
        left: 83.33333333%
      }

      .col-md-push-9 {
        left: 75%
      }

      .col-md-push-8 {
        left: 66.66666667%
      }

      .col-md-push-7 {
        left: 58.33333333%
      }

      .col-md-push-6 {
        left: 50%
      }

      .col-md-push-5 {
        left: 41.66666667%
      }

      .col-md-push-4 {
        left: 33.33333333%
      }

      .col-md-push-3 {
        left: 25%
      }

      .col-md-push-2 {
        left: 16.66666667%
      }

      .col-md-push-1 {
        left: 8.33333333%
      }

      .col-md-push-0 {
        left: auto
      }

      .col-md-offset-12 {
        margin-left: 100%
      }

      .col-md-offset-11 {
        margin-left: 91.66666667%
      }

      .col-md-offset-10 {
        margin-left: 83.33333333%
      }

      .col-md-offset-9 {
        margin-left: 75%
      }

      .col-md-offset-8 {
        margin-left: 66.66666667%
      }

      .col-md-offset-7 {
        margin-left: 58.33333333%
      }

      .col-md-offset-6 {
        margin-left: 50%
      }

      .col-md-offset-5 {
        margin-left: 41.66666667%
      }

      .col-md-offset-4 {
        margin-left: 33.33333333%
      }

      .col-md-offset-3 {
        margin-left: 25%
      }

      .col-md-offset-2 {
        margin-left: 16.66666667%
      }

      .col-md-offset-1 {
        margin-left: 8.33333333%
      }

      .col-md-offset-0 {
        margin-left: 0
      }
    }

    @media (min-width:1200px) {

      .col-lg-1,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9 {
        float: left
      }

      .col-lg-12 {
        width: 100%
      }

      .col-lg-11 {
        width: 91.66666667%
      }

      .col-lg-10 {
        width: 83.33333333%
      }

      .col-lg-9 {
        width: 75%
      }

      .col-lg-8 {
        width: 66.66666667%
      }

      .col-lg-7 {
        width: 58.33333333%
      }

      .col-lg-6 {
        width: 50%
      }

      .col-lg-5 {
        width: 41.66666667%
      }

      .col-lg-4 {
        width: 33.33333333%
      }

      .col-lg-3 {
        width: 25%
      }

      .col-lg-2 {
        width: 16.66666667%
      }

      .col-lg-1 {
        width: 8.33333333%
      }

      .col-lg-pull-12 {
        right: 100%
      }

      .col-lg-pull-11 {
        right: 91.66666667%
      }

      .col-lg-pull-10 {
        right: 83.33333333%
      }

      .col-lg-pull-9 {
        right: 75%
      }

      .col-lg-pull-8 {
        right: 66.66666667%
      }

      .col-lg-pull-7 {
        right: 58.33333333%
      }

      .col-lg-pull-6 {
        right: 50%
      }

      .col-lg-pull-5 {
        right: 41.66666667%
      }

      .col-lg-pull-4 {
        right: 33.33333333%
      }

      .col-lg-pull-3 {
        right: 25%
      }

      .col-lg-pull-2 {
        right: 16.66666667%
      }

      .col-lg-pull-1 {
        right: 8.33333333%
      }

      .col-lg-pull-0 {
        right: auto
      }

      .col-lg-push-12 {
        left: 100%
      }

      .col-lg-push-11 {
        left: 91.66666667%
      }

      .col-lg-push-10 {
        left: 83.33333333%
      }

      .col-lg-push-9 {
        left: 75%
      }

      .col-lg-push-8 {
        left: 66.66666667%
      }

      .col-lg-push-7 {
        left: 58.33333333%
      }

      .col-lg-push-6 {
        left: 50%
      }

      .col-lg-push-5 {
        left: 41.66666667%
      }

      .col-lg-push-4 {
        left: 33.33333333%
      }

      .col-lg-push-3 {
        left: 25%
      }

      .col-lg-push-2 {
        left: 16.66666667%
      }

      .col-lg-push-1 {
        left: 8.33333333%
      }

      .col-lg-push-0 {
        left: auto
      }

      .col-lg-offset-12 {
        margin-left: 100%
      }

      .col-lg-offset-11 {
        margin-left: 91.66666667%
      }

      .col-lg-offset-10 {
        margin-left: 83.33333333%
      }

      .col-lg-offset-9 {
        margin-left: 75%
      }

      .col-lg-offset-8 {
        margin-left: 66.66666667%
      }

      .col-lg-offset-7 {
        margin-left: 58.33333333%
      }

      .col-lg-offset-6 {
        margin-left: 50%
      }

      .col-lg-offset-5 {
        margin-left: 41.66666667%
      }

      .col-lg-offset-4 {
        margin-left: 33.33333333%
      }

      .col-lg-offset-3 {
        margin-left: 25%
      }

      .col-lg-offset-2 {
        margin-left: 16.66666667%
      }

      .col-lg-offset-1 {
        margin-left: 8.33333333%
      }

      .col-lg-offset-0 {
        margin-left: 0
      }
    }

    table {
      background-color: transparent
    }

    caption {
      padding-top: 8px;
      padding-bottom: 8px;
      color: #777;
      text-align: left
    }

    th {
      text-align: left
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
      padding: 8px;
      line-height: 1.42857143;
      vertical-align: top;
      border-top: 1px solid #ddd
    }

    .table>thead>tr>th {
      vertical-align: bottom;
      border-bottom: 2px solid #ddd
    }

    .table>caption+thead>tr:first-child>td,
    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>td,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>td,
    .table>thead:first-child>tr:first-child>th {
      border-top: 0
    }

    .table>tbody+tbody {
      border-top: 2px solid #ddd
    }

    .table .table {
      background-color: #fff
    }

    .table-condensed>tbody>tr>td,
    .table-condensed>tbody>tr>th,
    .table-condensed>tfoot>tr>td,
    .table-condensed>tfoot>tr>th,
    .table-condensed>thead>tr>td,
    .table-condensed>thead>tr>th {
      padding: 5px
    }

    .table-bordered {
      border: 1px solid #ddd
    }

    .table-bordered>tbody>tr>td,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>td,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
      border: 1px solid #ddd
    }

    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
      border-bottom-width: 2px
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
      background-color: #f9f9f9
    }

    .table-hover>tbody>tr:hover {
      background-color: #f5f5f5
    }

    table col[class*=col-] {
      position: static;
      display: table-column;
      float: none
    }

    table td[class*=col-],
    table th[class*=col-] {
      position: static;
      display: table-cell;
      float: none
    }

    .table>tbody>tr.active>td,
    .table>tbody>tr.active>th,
    .table>tbody>tr>td.active,
    .table>tbody>tr>th.active,
    .table>tfoot>tr.active>td,
    .table>tfoot>tr.active>th,
    .table>tfoot>tr>td.active,
    .table>tfoot>tr>th.active,
    .table>thead>tr.active>td,
    .table>thead>tr.active>th,
    .table>thead>tr>td.active,
    .table>thead>tr>th.active {
      background-color: #f5f5f5
    }

    .table-hover>tbody>tr.active:hover>td,
    .table-hover>tbody>tr.active:hover>th,
    .table-hover>tbody>tr:hover>.active,
    .table-hover>tbody>tr>td.active:hover,
    .table-hover>tbody>tr>th.active:hover {
      background-color: #e8e8e8
    }

    .table>tbody>tr.success>td,
    .table>tbody>tr.success>th,
    .table>tbody>tr>td.success,
    .table>tbody>tr>th.success,
    .table>tfoot>tr.success>td,
    .table>tfoot>tr.success>th,
    .table>tfoot>tr>td.success,
    .table>tfoot>tr>th.success,
    .table>thead>tr.success>td,
    .table>thead>tr.success>th,
    .table>thead>tr>td.success,
    .table>thead>tr>th.success {
      background-color: #dff0d8
    }

    .table-hover>tbody>tr.success:hover>td,
    .table-hover>tbody>tr.success:hover>th,
    .table-hover>tbody>tr:hover>.success,
    .table-hover>tbody>tr>td.success:hover,
    .table-hover>tbody>tr>th.success:hover {
      background-color: #d0e9c6
    }

    .table>tbody>tr.info>td,
    .table>tbody>tr.info>th,
    .table>tbody>tr>td.info,
    .table>tbody>tr>th.info,
    .table>tfoot>tr.info>td,
    .table>tfoot>tr.info>th,
    .table>tfoot>tr>td.info,
    .table>tfoot>tr>th.info,
    .table>thead>tr.info>td,
    .table>thead>tr.info>th,
    .table>thead>tr>td.info,
    .table>thead>tr>th.info {
      background-color: #d9edf7
    }

    .table-hover>tbody>tr.info:hover>td,
    .table-hover>tbody>tr.info:hover>th,
    .table-hover>tbody>tr:hover>.info,
    .table-hover>tbody>tr>td.info:hover,
    .table-hover>tbody>tr>th.info:hover {
      background-color: #c4e3f3
    }

    .table>tbody>tr.warning>td,
    .table>tbody>tr.warning>th,
    .table>tbody>tr>td.warning,
    .table>tbody>tr>th.warning,
    .table>tfoot>tr.warning>td,
    .table>tfoot>tr.warning>th,
    .table>tfoot>tr>td.warning,
    .table>tfoot>tr>th.warning,
    .table>thead>tr.warning>td,
    .table>thead>tr.warning>th,
    .table>thead>tr>td.warning,
    .table>thead>tr>th.warning {
      background-color: #fcf8e3
    }

    .table-hover>tbody>tr.warning:hover>td,
    .table-hover>tbody>tr.warning:hover>th,
    .table-hover>tbody>tr:hover>.warning,
    .table-hover>tbody>tr>td.warning:hover,
    .table-hover>tbody>tr>th.warning:hover {
      background-color: #faf2cc
    }

    .table>tbody>tr.danger>td,
    .table>tbody>tr.danger>th,
    .table>tbody>tr>td.danger,
    .table>tbody>tr>th.danger,
    .table>tfoot>tr.danger>td,
    .table>tfoot>tr.danger>th,
    .table>tfoot>tr>td.danger,
    .table>tfoot>tr>th.danger,
    .table>thead>tr.danger>td,
    .table>thead>tr.danger>th,
    .table>thead>tr>td.danger,
    .table>thead>tr>th.danger {
      background-color: #f2dede
    }

    .table-hover>tbody>tr.danger:hover>td,
    .table-hover>tbody>tr.danger:hover>th,
    .table-hover>tbody>tr:hover>.danger,
    .table-hover>tbody>tr>td.danger:hover,
    .table-hover>tbody>tr>th.danger:hover {
      background-color: #ebcccc
    }

    .table-responsive {
      min-height: .01%;
      overflow-x: auto
    }

    @media screen and (max-width:767px) {
      .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd
      }

      .table-responsive>.table {
        margin-bottom: 0
      }

      .table-responsive>.table>tbody>tr>td,
      .table-responsive>.table>tbody>tr>th,
      .table-responsive>.table>tfoot>tr>td,
      .table-responsive>.table>tfoot>tr>th,
      .table-responsive>.table>thead>tr>td,
      .table-responsive>.table>thead>tr>th {
        white-space: nowrap
      }

      .table-responsive>.table-bordered {
        border: 0
      }

      .table-responsive>.table-bordered>tbody>tr>td:first-child,
      .table-responsive>.table-bordered>tbody>tr>th:first-child,
      .table-responsive>.table-bordered>tfoot>tr>td:first-child,
      .table-responsive>.table-bordered>tfoot>tr>th:first-child,
      .table-responsive>.table-bordered>thead>tr>td:first-child,
      .table-responsive>.table-bordered>thead>tr>th:first-child {
        border-left: 0
      }

      .table-responsive>.table-bordered>tbody>tr>td:last-child,
      .table-responsive>.table-bordered>tbody>tr>th:last-child,
      .table-responsive>.table-bordered>tfoot>tr>td:last-child,
      .table-responsive>.table-bordered>tfoot>tr>th:last-child,
      .table-responsive>.table-bordered>thead>tr>td:last-child,
      .table-responsive>.table-bordered>thead>tr>th:last-child {
        border-right: 0
      }

      .table-responsive>.table-bordered>tbody>tr:last-child>td,
      .table-responsive>.table-bordered>tbody>tr:last-child>th,
      .table-responsive>.table-bordered>tfoot>tr:last-child>td,
      .table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0
      }
    }

    fieldset {
      min-width: 0;
      padding: 0;
      margin: 0;
      border: 0
    }

    legend {
      display: block;
      width: 100%;
      padding: 0;
      margin-bottom: 20px;
      font-size: 21px;
      line-height: inherit;
      color: #333;
      border: 0;
      border-bottom: 1px solid #e5e5e5
    }

    label {
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700
    }

    input[type=search] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    input[type=checkbox],
    input[type=radio] {
      margin: 4px 0 0;
      margin-top: 1px\9;
      line-height: normal
    }

    input[type=file] {
      display: block
    }

    input[type=range] {
      display: block;
      width: 100%
    }

    select[multiple],
    select[size] {
      height: auto
    }

    input[type=file]:focus,
    input[type=checkbox]:focus,
    input[type=radio]:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    output {
      display: block;
      padding-top: 7px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555
    }

    .form-control {
      display: block;
      width: 100%;
      height: 34px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    .form-control:focus {
      border-color: #66afe9;
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .form-control::-moz-placeholder {
      color: #999;
      opacity: 1
    }

    .form-control:-ms-input-placeholder {
      color: #999
    }

    .form-control::-webkit-input-placeholder {
      color: #999
    }

    .form-control::-ms-expand {
      background-color: transparent;
      border: 0
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
      background-color: #eee;
      opacity: 1
    }

    .form-control[disabled],
    fieldset[disabled] .form-control {
      cursor: not-allowed
    }

    textarea.form-control {
      height: auto
    }

    input[type=search] {
      -webkit-appearance: none
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {

      input[type=date].form-control,
      input[type=time].form-control,
      input[type=datetime-local].form-control,
      input[type=month].form-control {
        line-height: 34px
      }

      .input-group-sm input[type=date],
      .input-group-sm input[type=time],
      .input-group-sm input[type=datetime-local],
      .input-group-sm input[type=month],
      input[type=date].input-sm,
      input[type=time].input-sm,
      input[type=datetime-local].input-sm,
      input[type=month].input-sm {
        line-height: 30px
      }

      .input-group-lg input[type=date],
      .input-group-lg input[type=time],
      .input-group-lg input[type=datetime-local],
      .input-group-lg input[type=month],
      input[type=date].input-lg,
      input[type=time].input-lg,
      input[type=datetime-local].input-lg,
      input[type=month].input-lg {
        line-height: 46px
      }
    }

    .form-group {
      margin-bottom: 15px
    }

    .checkbox,
    .radio {
      position: relative;
      display: block;
      margin-top: 10px;
      margin-bottom: 10px
    }

    .checkbox label,
    .radio label {
      min-height: 20px;
      padding-left: 20px;
      margin-bottom: 0;
      font-weight: 400;
      cursor: pointer
    }

    .checkbox input[type=checkbox],
    .checkbox-inline input[type=checkbox],
    .radio input[type=radio],
    .radio-inline input[type=radio] {
      position: absolute;
      margin-top: 4px\9;
      margin-left: -20px
    }

    .checkbox+.checkbox,
    .radio+.radio {
      margin-top: -5px
    }

    .checkbox-inline,
    .radio-inline {
      position: relative;
      display: inline-block;
      padding-left: 20px;
      margin-bottom: 0;
      font-weight: 400;
      vertical-align: middle;
      cursor: pointer
    }

    .checkbox-inline+.checkbox-inline,
    .radio-inline+.radio-inline {
      margin-top: 0;
      margin-left: 10px
    }

    fieldset[disabled] input[type=checkbox],
    fieldset[disabled] input[type=radio],
    input[type=checkbox].disabled,
    input[type=checkbox][disabled],
    input[type=radio].disabled,
    input[type=radio][disabled] {
      cursor: not-allowed
    }

    .checkbox-inline.disabled,
    .radio-inline.disabled,
    fieldset[disabled] .checkbox-inline,
    fieldset[disabled] .radio-inline {
      cursor: not-allowed
    }

    .checkbox.disabled label,
    .radio.disabled label,
    fieldset[disabled] .checkbox label,
    fieldset[disabled] .radio label {
      cursor: not-allowed
    }

    .form-control-static {
      min-height: 34px;
      padding-top: 7px;
      padding-bottom: 7px;
      margin-bottom: 0
    }

    .form-control-static.input-lg,
    .form-control-static.input-sm {
      padding-right: 0;
      padding-left: 0
    }

    .input-sm {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    select.input-sm {
      height: 30px;
      line-height: 30px
    }

    select[multiple].input-sm,
    textarea.input-sm {
      height: auto
    }

    .form-group-sm .form-control {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    .form-group-sm select.form-control {
      height: 30px;
      line-height: 30px
    }

    .form-group-sm select[multiple].form-control,
    .form-group-sm textarea.form-control {
      height: auto
    }

    .form-group-sm .form-control-static {
      height: 30px;
      min-height: 32px;
      padding: 6px 10px;
      font-size: 12px;
      line-height: 1.5
    }

    .input-lg {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    select.input-lg {
      height: 46px;
      line-height: 46px
    }

    select[multiple].input-lg,
    textarea.input-lg {
      height: auto
    }

    .form-group-lg .form-control {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    .form-group-lg select.form-control {
      height: 46px;
      line-height: 46px
    }

    .form-group-lg select[multiple].form-control,
    .form-group-lg textarea.form-control {
      height: auto
    }

    .form-group-lg .form-control-static {
      height: 46px;
      min-height: 38px;
      padding: 11px 16px;
      font-size: 18px;
      line-height: 1.3333333
    }

    .has-feedback {
      position: relative
    }

    .has-feedback .form-control {
      padding-right: 42.5px
    }

    .form-control-feedback {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 2;
      display: block;
      width: 34px;
      height: 34px;
      line-height: 34px;
      text-align: center;
      pointer-events: none
    }

    .form-group-lg .form-control+.form-control-feedback,
    .input-group-lg+.form-control-feedback,
    .input-lg+.form-control-feedback {
      width: 46px;
      height: 46px;
      line-height: 46px
    }

    .form-group-sm .form-control+.form-control-feedback,
    .input-group-sm+.form-control-feedback,
    .input-sm+.form-control-feedback {
      width: 30px;
      height: 30px;
      line-height: 30px
    }

    .has-success .checkbox,
    .has-success .checkbox-inline,
    .has-success .control-label,
    .has-success .help-block,
    .has-success .radio,
    .has-success .radio-inline,
    .has-success.checkbox label,
    .has-success.checkbox-inline label,
    .has-success.radio label,
    .has-success.radio-inline label {
      color: #3c763d
    }

    .has-success .form-control {
      border-color: #3c763d;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-success .form-control:focus {
      border-color: #2b542c;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
    }

    .has-success .input-group-addon {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #3c763d
    }

    .has-success .form-control-feedback {
      color: #3c763d
    }

    .has-warning .checkbox,
    .has-warning .checkbox-inline,
    .has-warning .control-label,
    .has-warning .help-block,
    .has-warning .radio,
    .has-warning .radio-inline,
    .has-warning.checkbox label,
    .has-warning.checkbox-inline label,
    .has-warning.radio label,
    .has-warning.radio-inline label {
      color: #8a6d3b
    }

    .has-warning .form-control {
      border-color: #8a6d3b;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-warning .form-control:focus {
      border-color: #66512c;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
    }

    .has-warning .input-group-addon {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #8a6d3b
    }

    .has-warning .form-control-feedback {
      color: #8a6d3b
    }

    .has-error .checkbox,
    .has-error .checkbox-inline,
    .has-error .control-label,
    .has-error .help-block,
    .has-error .radio,
    .has-error .radio-inline,
    .has-error.checkbox label,
    .has-error.checkbox-inline label,
    .has-error.radio label,
    .has-error.radio-inline label {
      color: #a94442
    }

    .has-error .form-control {
      border-color: #a94442;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-error .form-control:focus {
      border-color: #843534;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }

    .has-error .input-group-addon {
      color: #a94442;
      background-color: #f2dede;
      border-color: #a94442
    }

    .has-error .form-control-feedback {
      color: #a94442
    }

    .has-feedback label~.form-control-feedback {
      top: 25px
    }

    .has-feedback label.sr-only~.form-control-feedback {
      top: 0
    }

    .help-block {
      display: block;
      margin-top: 5px;
      margin-bottom: 10px;
      color: #737373
    }

    @media (min-width:768px) {
      .form-inline .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle
      }

      .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
      }

      .form-inline .form-control-static {
        display: inline-block
      }

      .form-inline .input-group {
        display: inline-table;
        vertical-align: middle
      }

      .form-inline .input-group .form-control,
      .form-inline .input-group .input-group-addon,
      .form-inline .input-group .input-group-btn {
        width: auto
      }

      .form-inline .input-group>.form-control {
        width: 100%
      }

      .form-inline .control-label {
        margin-bottom: 0;
        vertical-align: middle
      }

      .form-inline .checkbox,
      .form-inline .radio {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle
      }

      .form-inline .checkbox label,
      .form-inline .radio label {
        padding-left: 0
      }

      .form-inline .checkbox input[type=checkbox],
      .form-inline .radio input[type=radio] {
        position: relative;
        margin-left: 0
      }

      .form-inline .has-feedback .form-control-feedback {
        top: 0
      }
    }

    .form-horizontal .checkbox,
    .form-horizontal .checkbox-inline,
    .form-horizontal .radio,
    .form-horizontal .radio-inline {
      padding-top: 7px;
      margin-top: 0;
      margin-bottom: 0
    }

    .form-horizontal .checkbox,
    .form-horizontal .radio {
      min-height: 27px
    }

    .form-horizontal .form-group {
      margin-right: -15px;
      margin-left: -15px
    }

    @media (min-width:768px) {
      .form-horizontal .control-label {
        padding-top: 7px;
        margin-bottom: 0;
        text-align: right
      }
    }

    .form-horizontal .has-feedback .form-control-feedback {
      right: 15px
    }

    @media (min-width:768px) {
      .form-horizontal .form-group-lg .control-label {
        padding-top: 11px;
        font-size: 18px
      }
    }

    @media (min-width:768px) {
      .form-horizontal .form-group-sm .control-label {
        padding-top: 6px;
        font-size: 12px
      }
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px
    }

    .btn.active.focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn:active:focus,
    .btn:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    .btn.focus,
    .btn:focus,
    .btn:hover {
      color: #333;
      text-decoration: none
    }

    .btn.active,
    .btn:active {
      background-image: none;
      outline: 0;
      -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
      cursor: not-allowed;
      filter: alpha(opacity=65);
      -webkit-box-shadow: none;
      box-shadow: none;
      opacity: .65
    }

    a.btn.disabled,
    fieldset[disabled] a.btn {
      pointer-events: none
    }

    .btn-default {
      color: #333;
      background-color: #fff;
      border-color: #ccc
    }

    .btn-default.focus,
    .btn-default:focus {
      color: #333;
      background-color: #e6e6e6;
      border-color: #8c8c8c
    }

    .btn-default:hover {
      color: #333;
      background-color: #e6e6e6;
      border-color: #adadad
    }

    .btn-default.active,
    .btn-default:active,
    .open>.dropdown-toggle.btn-default {
      color: #333;
      background-color: #e6e6e6;
      border-color: #adadad
    }

    .btn-default.active.focus,
    .btn-default.active:focus,
    .btn-default.active:hover,
    .btn-default:active.focus,
    .btn-default:active:focus,
    .btn-default:active:hover,
    .open>.dropdown-toggle.btn-default.focus,
    .open>.dropdown-toggle.btn-default:focus,
    .open>.dropdown-toggle.btn-default:hover {
      color: #333;
      background-color: #d4d4d4;
      border-color: #8c8c8c
    }

    .btn-default.active,
    .btn-default:active,
    .open>.dropdown-toggle.btn-default {
      background-image: none
    }

    .btn-default.disabled.focus,
    .btn-default.disabled:focus,
    .btn-default.disabled:hover,
    .btn-default[disabled].focus,
    .btn-default[disabled]:focus,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default.focus,
    fieldset[disabled] .btn-default:focus,
    fieldset[disabled] .btn-default:hover {
      background-color: #fff;
      border-color: #ccc
    }

    .btn-default .badge {
      color: #fff;
      background-color: #333
    }

    .btn-primary {
      color: #fff;
      background-color: #337ab7;
      border-color: #2e6da4
    }

    .btn-primary.focus,
    .btn-primary:focus {
      color: #fff;
      background-color: #286090;
      border-color: #122b40
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #286090;
      border-color: #204d74
    }

    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
      color: #fff;
      background-color: #286090;
      border-color: #204d74
    }

    .btn-primary.active.focus,
    .btn-primary.active:focus,
    .btn-primary.active:hover,
    .btn-primary:active.focus,
    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .open>.dropdown-toggle.btn-primary.focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .open>.dropdown-toggle.btn-primary:hover {
      color: #fff;
      background-color: #204d74;
      border-color: #122b40
    }

    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
      background-image: none
    }

    .btn-primary.disabled.focus,
    .btn-primary.disabled:focus,
    .btn-primary.disabled:hover,
    .btn-primary[disabled].focus,
    .btn-primary[disabled]:focus,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary.focus,
    fieldset[disabled] .btn-primary:focus,
    fieldset[disabled] .btn-primary:hover {
      background-color: #337ab7;
      border-color: #2e6da4
    }

    .btn-primary .badge {
      color: #337ab7;
      background-color: #fff
    }

    .btn-success {
      color: #fff;
      background-color: #5cb85c;
      border-color: #4cae4c
    }

    .btn-success.focus,
    .btn-success:focus {
      color: #fff;
      background-color: #449d44;
      border-color: #255625
    }

    .btn-success:hover {
      color: #fff;
      background-color: #449d44;
      border-color: #398439
    }

    .btn-success.active,
    .btn-success:active,
    .open>.dropdown-toggle.btn-success {
      color: #fff;
      background-color: #449d44;
      border-color: #398439
    }

    .btn-success.active.focus,
    .btn-success.active:focus,
    .btn-success.active:hover,
    .btn-success:active.focus,
    .btn-success:active:focus,
    .btn-success:active:hover,
    .open>.dropdown-toggle.btn-success.focus,
    .open>.dropdown-toggle.btn-success:focus,
    .open>.dropdown-toggle.btn-success:hover {
      color: #fff;
      background-color: #398439;
      border-color: #255625
    }

    .btn-success.active,
    .btn-success:active,
    .open>.dropdown-toggle.btn-success {
      background-image: none
    }

    .btn-success.disabled.focus,
    .btn-success.disabled:focus,
    .btn-success.disabled:hover,
    .btn-success[disabled].focus,
    .btn-success[disabled]:focus,
    .btn-success[disabled]:hover,
    fieldset[disabled] .btn-success.focus,
    fieldset[disabled] .btn-success:focus,
    fieldset[disabled] .btn-success:hover {
      background-color: #5cb85c;
      border-color: #4cae4c
    }

    .btn-success .badge {
      color: #5cb85c;
      background-color: #fff
    }

    .btn-info {
      color: #fff;
      background-color: #5bc0de;
      border-color: #46b8da
    }

    .btn-info.focus,
    .btn-info:focus {
      color: #fff;
      background-color: #31b0d5;
      border-color: #1b6d85
    }

    .btn-info:hover {
      color: #fff;
      background-color: #31b0d5;
      border-color: #269abc
    }

    .btn-info.active,
    .btn-info:active,
    .open>.dropdown-toggle.btn-info {
      color: #fff;
      background-color: #31b0d5;
      border-color: #269abc
    }

    .btn-info.active.focus,
    .btn-info.active:focus,
    .btn-info.active:hover,
    .btn-info:active.focus,
    .btn-info:active:focus,
    .btn-info:active:hover,
    .open>.dropdown-toggle.btn-info.focus,
    .open>.dropdown-toggle.btn-info:focus,
    .open>.dropdown-toggle.btn-info:hover {
      color: #fff;
      background-color: #269abc;
      border-color: #1b6d85
    }

    .btn-info.active,
    .btn-info:active,
    .open>.dropdown-toggle.btn-info {
      background-image: none
    }

    .btn-info.disabled.focus,
    .btn-info.disabled:focus,
    .btn-info.disabled:hover,
    .btn-info[disabled].focus,
    .btn-info[disabled]:focus,
    .btn-info[disabled]:hover,
    fieldset[disabled] .btn-info.focus,
    fieldset[disabled] .btn-info:focus,
    fieldset[disabled] .btn-info:hover {
      background-color: #5bc0de;
      border-color: #46b8da
    }

    .btn-info .badge {
      color: #5bc0de;
      background-color: #fff
    }

    .btn-warning {
      color: #fff;
      background-color: #f0ad4e;
      border-color: #eea236
    }

    .btn-warning.focus,
    .btn-warning:focus {
      color: #fff;
      background-color: #ec971f;
      border-color: #985f0d
    }

    .btn-warning:hover {
      color: #fff;
      background-color: #ec971f;
      border-color: #d58512
    }

    .btn-warning.active,
    .btn-warning:active,
    .open>.dropdown-toggle.btn-warning {
      color: #fff;
      background-color: #ec971f;
      border-color: #d58512
    }

    .btn-warning.active.focus,
    .btn-warning.active:focus,
    .btn-warning.active:hover,
    .btn-warning:active.focus,
    .btn-warning:active:focus,
    .btn-warning:active:hover,
    .open>.dropdown-toggle.btn-warning.focus,
    .open>.dropdown-toggle.btn-warning:focus,
    .open>.dropdown-toggle.btn-warning:hover {
      color: #fff;
      background-color: #d58512;
      border-color: #985f0d
    }

    .btn-warning.active,
    .btn-warning:active,
    .open>.dropdown-toggle.btn-warning {
      background-image: none
    }

    .btn-warning.disabled.focus,
    .btn-warning.disabled:focus,
    .btn-warning.disabled:hover,
    .btn-warning[disabled].focus,
    .btn-warning[disabled]:focus,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn-warning.focus,
    fieldset[disabled] .btn-warning:focus,
    fieldset[disabled] .btn-warning:hover {
      background-color: #f0ad4e;
      border-color: #eea236
    }

    .btn-warning .badge {
      color: #f0ad4e;
      background-color: #fff
    }

    .btn-danger {
      color: #fff;
      background-color: #d9534f;
      border-color: #d43f3a
    }

    .btn-danger.focus,
    .btn-danger:focus {
      color: #fff;
      background-color: #c9302c;
      border-color: #761c19
    }

    .btn-danger:hover {
      color: #fff;
      background-color: #c9302c;
      border-color: #ac2925
    }

    .btn-danger.active,
    .btn-danger:active,
    .open>.dropdown-toggle.btn-danger {
      color: #fff;
      background-color: #c9302c;
      border-color: #ac2925
    }

    .btn-danger.active.focus,
    .btn-danger.active:focus,
    .btn-danger.active:hover,
    .btn-danger:active.focus,
    .btn-danger:active:focus,
    .btn-danger:active:hover,
    .open>.dropdown-toggle.btn-danger.focus,
    .open>.dropdown-toggle.btn-danger:focus,
    .open>.dropdown-toggle.btn-danger:hover {
      color: #fff;
      background-color: #ac2925;
      border-color: #761c19
    }

    .btn-danger.active,
    .btn-danger:active,
    .open>.dropdown-toggle.btn-danger {
      background-image: none
    }

    .btn-danger.disabled.focus,
    .btn-danger.disabled:focus,
    .btn-danger.disabled:hover,
    .btn-danger[disabled].focus,
    .btn-danger[disabled]:focus,
    .btn-danger[disabled]:hover,
    fieldset[disabled] .btn-danger.focus,
    fieldset[disabled] .btn-danger:focus,
    fieldset[disabled] .btn-danger:hover {
      background-color: #d9534f;
      border-color: #d43f3a
    }

    .btn-danger .badge {
      color: #d9534f;
      background-color: #fff
    }

    .btn-link {
      font-weight: 400;
      color: #337ab7;
      border-radius: 0
    }

    .btn-link,
    .btn-link.active,
    .btn-link:active,
    .btn-link[disabled],
    fieldset[disabled] .btn-link {
      background-color: transparent;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .btn-link,
    .btn-link:active,
    .btn-link:focus,
    .btn-link:hover {
      border-color: transparent
    }

    .btn-link:focus,
    .btn-link:hover {
      color: #23527c;
      text-decoration: underline;
      background-color: transparent
    }

    .btn-link[disabled]:focus,
    .btn-link[disabled]:hover,
    fieldset[disabled] .btn-link:focus,
    fieldset[disabled] .btn-link:hover {
      color: #777;
      text-decoration: none
    }

    .btn-group-lg>.btn,
    .btn-lg {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    .btn-group-sm>.btn,
    .btn-sm {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    .btn-group-xs>.btn,
    .btn-xs {
      padding: 1px 5px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    .btn-block {
      display: block;
      width: 100%
    }

    .btn-block+.btn-block {
      margin-top: 5px
    }

    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
      width: 100%
    }

    .fade {
      opacity: 0;
      -webkit-transition: opacity .15s linear;
      -o-transition: opacity .15s linear;
      transition: opacity .15s linear
    }

    .fade.in {
      opacity: 1
    }

    .collapse {
      display: none
    }

    .collapse.in {
      display: block
    }

    tr.collapse.in {
      display: table-row
    }

    tbody.collapse.in {
      display: table-row-group
    }

    .collapsing {
      position: relative;
      height: 0;
      overflow: hidden;
      -webkit-transition-timing-function: ease;
      -o-transition-timing-function: ease;
      transition-timing-function: ease;
      -webkit-transition-duration: .35s;
      -o-transition-duration: .35s;
      transition-duration: .35s;
      -webkit-transition-property: height, visibility;
      -o-transition-property: height, visibility;
      transition-property: height, visibility
    }

    .caret {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 2px;
      vertical-align: middle;
      border-top: 4px dashed;
      border-top: 4px solid\9;
      border-right: 4px solid transparent;
      border-left: 4px solid transparent
    }

    .dropdown,
    .dropup {
      position: relative
    }

    .dropdown-toggle:focus {
      outline: 0
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 160px;
      padding: 5px 0;
      margin: 2px 0 0;
      font-size: 14px;
      text-align: left;
      list-style: none;
      background-color: #fff;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, .15);
      border-radius: 4px;
      -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
      box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
    }

    .dropdown-menu.pull-right {
      right: 0;
      left: auto
    }

    .dropdown-menu .divider {
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5
    }

    .dropdown-menu>li>a {
      display: block;
      padding: 3px 20px;
      clear: both;
      font-weight: 400;
      line-height: 1.42857143;
      color: #333;
      white-space: nowrap
    }

    .dropdown-menu>li>a:focus,
    .dropdown-menu>li>a:hover {
      color: #262626;
      text-decoration: none;
      background-color: #f5f5f5
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:focus,
    .dropdown-menu>.active>a:hover {
      color: #fff;
      text-decoration: none;
      background-color: #337ab7;
      outline: 0
    }

    .dropdown-menu>.disabled>a,
    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
      color: #777
    }

    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
      text-decoration: none;
      cursor: not-allowed;
      background-color: transparent;
      background-image: none;
      filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
    }

    .open>.dropdown-menu {
      display: block
    }

    .open>a {
      outline: 0
    }

    .dropdown-menu-right {
      right: 0;
      left: auto
    }

    .dropdown-menu-left {
      right: auto;
      left: 0
    }

    .dropdown-header {
      display: block;
      padding: 3px 20px;
      font-size: 12px;
      line-height: 1.42857143;
      color: #777;
      white-space: nowrap
    }

    .dropdown-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 990
    }

    .pull-right>.dropdown-menu {
      right: 0;
      left: auto
    }

    .dropup .caret,
    .navbar-fixed-bottom .dropdown .caret {
      content: "";
      border-top: 0;
      border-bottom: 4px dashed;
      border-bottom: 4px solid\9
    }

    .dropup .dropdown-menu,
    .navbar-fixed-bottom .dropdown .dropdown-menu {
      top: auto;
      bottom: 100%;
      margin-bottom: 2px
    }

    @media (min-width:768px) {
      .navbar-right .dropdown-menu {
        right: 0;
        left: auto
      }

      .navbar-right .dropdown-menu-left {
        right: auto;
        left: 0
      }
    }

    .btn-group,
    .btn-group-vertical {
      position: relative;
      display: inline-block;
      vertical-align: middle
    }

    .btn-group-vertical>.btn,
    .btn-group>.btn {
      position: relative;
      float: left
    }

    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
      z-index: 2
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
      margin-left: -1px
    }

    .btn-toolbar {
      margin-left: -5px
    }

    .btn-toolbar .btn,
    .btn-toolbar .btn-group,
    .btn-toolbar .input-group {
      float: left
    }

    .btn-toolbar>.btn,
    .btn-toolbar>.btn-group,
    .btn-toolbar>.input-group {
      margin-left: 5px
    }

    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
      border-radius: 0
    }

    .btn-group>.btn:first-child {
      margin-left: 0
    }

    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group>.btn-group {
      float: left
    }

    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
      border-radius: 0
    }

    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group .dropdown-toggle:active,
    .btn-group.open .dropdown-toggle {
      outline: 0
    }

    .btn-group>.btn+.dropdown-toggle {
      padding-right: 8px;
      padding-left: 8px
    }

    .btn-group>.btn-lg+.dropdown-toggle {
      padding-right: 12px;
      padding-left: 12px
    }

    .btn-group.open .dropdown-toggle {
      -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn-group.open .dropdown-toggle.btn-link {
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .btn .caret {
      margin-left: 0
    }

    .btn-lg .caret {
      border-width: 5px 5px 0;
      border-bottom-width: 0
    }

    .dropup .btn-lg .caret {
      border-width: 0 5px 5px
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group,
    .btn-group-vertical>.btn-group>.btn {
      display: block;
      float: none;
      width: 100%;
      max-width: 100%
    }

    .btn-group-vertical>.btn-group>.btn {
      float: none
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
      margin-top: -1px;
      margin-left: 0
    }

    .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
      border-radius: 0
    }

    .btn-group-vertical>.btn:first-child:not(:last-child) {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn:last-child:not(:first-child) {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
    }

    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
      border-radius: 0
    }

    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .btn-group-justified {
      display: table;
      width: 100%;
      table-layout: fixed;
      border-collapse: separate
    }

    .btn-group-justified>.btn,
    .btn-group-justified>.btn-group {
      display: table-cell;
      float: none;
      width: 1%
    }

    .btn-group-justified>.btn-group .btn {
      width: 100%
    }

    .btn-group-justified>.btn-group .dropdown-menu {
      left: auto
    }

    [data-toggle=buttons]>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn input[type=radio],
    [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none
    }

    .input-group {
      position: relative;
      display: table;
      border-collapse: separate
    }

    .input-group[class*=col-] {
      float: none;
      padding-right: 0;
      padding-left: 0
    }

    .input-group .form-control {
      position: relative;
      z-index: 2;
      float: left;
      width: 100%;
      margin-bottom: 0
    }

    .input-group .form-control:focus {
      z-index: 3
    }

    .input-group-lg>.form-control,
    .input-group-lg>.input-group-addon,
    .input-group-lg>.input-group-btn>.btn {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    select.input-group-lg>.form-control,
    select.input-group-lg>.input-group-addon,
    select.input-group-lg>.input-group-btn>.btn {
      height: 46px;
      line-height: 46px
    }

    select[multiple].input-group-lg>.form-control,
    select[multiple].input-group-lg>.input-group-addon,
    select[multiple].input-group-lg>.input-group-btn>.btn,
    textarea.input-group-lg>.form-control,
    textarea.input-group-lg>.input-group-addon,
    textarea.input-group-lg>.input-group-btn>.btn {
      height: auto
    }

    .input-group-sm>.form-control,
    .input-group-sm>.input-group-addon,
    .input-group-sm>.input-group-btn>.btn {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    select.input-group-sm>.form-control,
    select.input-group-sm>.input-group-addon,
    select.input-group-sm>.input-group-btn>.btn {
      height: 30px;
      line-height: 30px
    }

    select[multiple].input-group-sm>.form-control,
    select[multiple].input-group-sm>.input-group-addon,
    select[multiple].input-group-sm>.input-group-btn>.btn,
    textarea.input-group-sm>.form-control,
    textarea.input-group-sm>.input-group-addon,
    textarea.input-group-sm>.input-group-btn>.btn {
      height: auto
    }

    .input-group .form-control,
    .input-group-addon,
    .input-group-btn {
      display: table-cell
    }

    .input-group .form-control:not(:first-child):not(:last-child),
    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child) {
      border-radius: 0
    }

    .input-group-addon,
    .input-group-btn {
      width: 1%;
      white-space: nowrap;
      vertical-align: middle
    }

    .input-group-addon {
      padding: 6px 12px;
      font-size: 14px;
      font-weight: 400;
      line-height: 1;
      color: #555;
      text-align: center;
      background-color: #eee;
      border: 1px solid #ccc;
      border-radius: 4px
    }

    .input-group-addon.input-sm {
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 3px
    }

    .input-group-addon.input-lg {
      padding: 10px 16px;
      font-size: 18px;
      border-radius: 6px
    }

    .input-group-addon input[type=checkbox],
    .input-group-addon input[type=radio] {
      margin-top: 0
    }

    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .input-group-addon:first-child {
      border-right: 0
    }

    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
    .input-group-btn:first-child>.btn:not(:first-child),
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group>.btn,
    .input-group-btn:last-child>.dropdown-toggle {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .input-group-addon:last-child {
      border-left: 0
    }

    .input-group-btn {
      position: relative;
      font-size: 0;
      white-space: nowrap
    }

    .input-group-btn>.btn {
      position: relative
    }

    .input-group-btn>.btn+.btn {
      margin-left: -1px
    }

    .input-group-btn>.btn:active,
    .input-group-btn>.btn:focus,
    .input-group-btn>.btn:hover {
      z-index: 2
    }

    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group {
      margin-right: -1px
    }

    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group {
      z-index: 2;
      margin-left: -1px
    }

    .nav {
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .nav>li {
      position: relative;
      display: block
    }

    .nav>li>a {
      position: relative;
      display: block;
      padding: 10px 15px
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
      text-decoration: none;
      background-color: #eee
    }

    .nav>li.disabled>a {
      color: #777
    }

    .nav>li.disabled>a:focus,
    .nav>li.disabled>a:hover {
      color: #777;
      text-decoration: none;
      cursor: not-allowed;
      background-color: transparent
    }

    .nav .open>a,
    .nav .open>a:focus,
    .nav .open>a:hover {
      background-color: #eee;
      border-color: #337ab7
    }

    .nav .nav-divider {
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5
    }

    .nav>li>a>img {
      max-width: none
    }

    .nav-tabs {
      border-bottom: 1px solid #ddd
    }

    .nav-tabs>li {
      float: left;
      margin-bottom: -1px
    }

    .nav-tabs>li>a {
      margin-right: 2px;
      line-height: 1.42857143;
      border: 1px solid transparent;
      border-radius: 4px 4px 0 0
    }

    .nav-tabs>li>a:hover {
      border-color: #eee #eee #ddd
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
      color: #555;
      cursor: default;
      background-color: #fff;
      border: 1px solid #ddd;
      border-bottom-color: transparent
    }

    .nav-tabs.nav-justified {
      width: 100%;
      border-bottom: 0
    }

    .nav-tabs.nav-justified>li {
      float: none
    }

    .nav-tabs.nav-justified>li>a {
      margin-bottom: 5px;
      text-align: center
    }

    .nav-tabs.nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
    }

    @media (min-width:768px) {
      .nav-tabs.nav-justified>li {
        display: table-cell;
        width: 1%
      }

      .nav-tabs.nav-justified>li>a {
        margin-bottom: 0
      }
    }

    .nav-tabs.nav-justified>li>a {
      margin-right: 0;
      border-radius: 4px
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {
      border: 1px solid #ddd
    }

    @media (min-width:768px) {
      .nav-tabs.nav-justified>li>a {
        border-bottom: 1px solid #ddd;
        border-radius: 4px 4px 0 0
      }

      .nav-tabs.nav-justified>.active>a,
      .nav-tabs.nav-justified>.active>a:focus,
      .nav-tabs.nav-justified>.active>a:hover {
        border-bottom-color: #fff
      }
    }

    .nav-pills>li {
      float: left
    }

    .nav-pills>li>a {
      border-radius: 4px
    }

    .nav-pills>li+li {
      margin-left: 2px
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
      color: #fff;
      background-color: #337ab7
    }

    .nav-stacked>li {
      float: none
    }

    .nav-stacked>li+li {
      margin-top: 2px;
      margin-left: 0
    }

    .nav-justified {
      width: 100%
    }

    .nav-justified>li {
      float: none
    }

    .nav-justified>li>a {
      margin-bottom: 5px;
      text-align: center
    }

    .nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
    }

    @media (min-width:768px) {
      .nav-justified>li {
        display: table-cell;
        width: 1%
      }

      .nav-justified>li>a {
        margin-bottom: 0
      }
    }

    .nav-tabs-justified {
      border-bottom: 0
    }

    .nav-tabs-justified>li>a {
      margin-right: 0;
      border-radius: 4px
    }

    .nav-tabs-justified>.active>a,
    .nav-tabs-justified>.active>a:focus,
    .nav-tabs-justified>.active>a:hover {
      border: 1px solid #ddd
    }

    @media (min-width:768px) {
      .nav-tabs-justified>li>a {
        border-bottom: 1px solid #ddd;
        border-radius: 4px 4px 0 0
      }

      .nav-tabs-justified>.active>a,
      .nav-tabs-justified>.active>a:focus,
      .nav-tabs-justified>.active>a:hover {
        border-bottom-color: #fff
      }
    }

    .tab-content>.tab-pane {
      display: none
    }

    .tab-content>.active {
      display: block
    }

    .nav-tabs .dropdown-menu {
      margin-top: -1px;
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .navbar {
      position: relative;
      min-height: 50px;
      margin-bottom: 20px;
      border: 1px solid transparent
    }

    @media (min-width:768px) {
      .navbar {
        border-radius: 4px
      }
    }

    @media (min-width:768px) {
      .navbar-header {
        float: left
      }
    }

    .navbar-collapse {
      padding-right: 15px;
      padding-left: 15px;
      overflow-x: visible;
      -webkit-overflow-scrolling: touch;
      border-top: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
    }

    .navbar-collapse.in {
      overflow-y: auto
    }

    @media (min-width:768px) {
      .navbar-collapse {
        width: auto;
        border-top: 0;
        -webkit-box-shadow: none;
        box-shadow: none
      }

      .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important
      }

      .navbar-collapse.in {
        overflow-y: visible
      }

      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse,
      .navbar-static-top .navbar-collapse {
        padding-right: 0;
        padding-left: 0
      }
    }

    .navbar-fixed-bottom .navbar-collapse,
    .navbar-fixed-top .navbar-collapse {
      max-height: 340px
    }

    @media (max-device-width:480px) and (orientation:landscape) {

      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse {
        max-height: 200px
      }
    }

    .container-fluid>.navbar-collapse,
    .container-fluid>.navbar-header,
    .container>.navbar-collapse,
    .container>.navbar-header {
      margin-right: -15px;
      margin-left: -15px
    }

    @media (min-width:768px) {

      .container-fluid>.navbar-collapse,
      .container-fluid>.navbar-header,
      .container>.navbar-collapse,
      .container>.navbar-header {
        margin-right: 0;
        margin-left: 0
      }
    }

    .navbar-static-top {
      z-index: 1000;
      border-width: 0 0 1px
    }

    @media (min-width:768px) {
      .navbar-static-top {
        border-radius: 0
      }
    }

    .navbar-fixed-bottom,
    .navbar-fixed-top {
      position: fixed;
      right: 0;
      left: 0;
      z-index: 1030
    }

    @media (min-width:768px) {

      .navbar-fixed-bottom,
      .navbar-fixed-top {
        border-radius: 0
      }
    }

    .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px
    }

    .navbar-fixed-bottom {
      bottom: 0;
      margin-bottom: 0;
      border-width: 1px 0 0
    }

    .navbar-brand {
      float: left;
      height: 50px;
      padding: 15px 15px;
      font-size: 18px;
      line-height: 20px
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
      text-decoration: none
    }

    .navbar-brand>img {
      display: block
    }

    @media (min-width:768px) {

      .navbar>.container .navbar-brand,
      .navbar>.container-fluid .navbar-brand {
        margin-left: -15px
      }
    }

    .navbar-toggle {
      position: relative;
      float: right;
      padding: 9px 10px;
      margin-top: 8px;
      margin-right: 15px;
      margin-bottom: 8px;
      background-color: transparent;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px
    }

    .navbar-toggle:focus {
      outline: 0
    }

    .navbar-toggle .icon-bar {
      display: block;
      width: 22px;
      height: 2px;
      border-radius: 1px
    }

    .navbar-toggle .icon-bar+.icon-bar {
      margin-top: 4px
    }

    @media (min-width:768px) {
      .navbar-toggle {
        display: none
      }
    }

    .navbar-nav {
      margin: 7.5px -15px
    }

    .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
      line-height: 20px
    }

    @media (max-width:767px) {
      .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none
      }

      .navbar-nav .open .dropdown-menu .dropdown-header,
      .navbar-nav .open .dropdown-menu>li>a {
        padding: 5px 15px 5px 25px
      }

      .navbar-nav .open .dropdown-menu>li>a {
        line-height: 20px
      }

      .navbar-nav .open .dropdown-menu>li>a:focus,
      .navbar-nav .open .dropdown-menu>li>a:hover {
        background-image: none
      }
    }

    @media (min-width:768px) {
      .navbar-nav {
        float: left;
        margin: 0
      }

      .navbar-nav>li {
        float: left
      }

      .navbar-nav>li>a {
        padding-top: 15px;
        padding-bottom: 15px
      }
    }

    .navbar-form {
      padding: 10px 15px;
      margin-top: 8px;
      margin-right: -15px;
      margin-bottom: 8px;
      margin-left: -15px;
      border-top: 1px solid transparent;
      border-bottom: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
    }

    @media (min-width:768px) {
      .navbar-form .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle
      }

      .navbar-form .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
      }

      .navbar-form .form-control-static {
        display: inline-block
      }

      .navbar-form .input-group {
        display: inline-table;
        vertical-align: middle
      }

      .navbar-form .input-group .form-control,
      .navbar-form .input-group .input-group-addon,
      .navbar-form .input-group .input-group-btn {
        width: auto
      }

      .navbar-form .input-group>.form-control {
        width: 100%
      }

      .navbar-form .control-label {
        margin-bottom: 0;
        vertical-align: middle
      }

      .navbar-form .checkbox,
      .navbar-form .radio {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle
      }

      .navbar-form .checkbox label,
      .navbar-form .radio label {
        padding-left: 0
      }

      .navbar-form .checkbox input[type=checkbox],
      .navbar-form .radio input[type=radio] {
        position: relative;
        margin-left: 0
      }

      .navbar-form .has-feedback .form-control-feedback {
        top: 0
      }
    }

    @media (max-width:767px) {
      .navbar-form .form-group {
        margin-bottom: 5px
      }

      .navbar-form .form-group:last-child {
        margin-bottom: 0
      }
    }

    @media (min-width:768px) {
      .navbar-form {
        width: auto;
        padding-top: 0;
        padding-bottom: 0;
        margin-right: 0;
        margin-left: 0;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none
      }
    }

    .navbar-nav>li>.dropdown-menu {
      margin-top: 0;
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
      margin-bottom: 0;
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .navbar-btn {
      margin-top: 8px;
      margin-bottom: 8px
    }

    .navbar-btn.btn-sm {
      margin-top: 10px;
      margin-bottom: 10px
    }

    .navbar-btn.btn-xs {
      margin-top: 14px;
      margin-bottom: 14px
    }

    .navbar-text {
      margin-top: 15px;
      margin-bottom: 15px
    }

    @media (min-width:768px) {
      .navbar-text {
        float: left;
        margin-right: 15px;
        margin-left: 15px
      }
    }

    @media (min-width:768px) {
      .navbar-left {
        float: left !important
      }

      .navbar-right {
        float: right !important;
        margin-right: -15px
      }

      .navbar-right~.navbar-right {
        margin-right: 0
      }
    }

    .navbar-default {
      background-color: #f8f8f8;
      border-color: #e7e7e7
    }

    .navbar-default .navbar-brand {
      color: #777
    }

    .navbar-default .navbar-brand:focus,
    .navbar-default .navbar-brand:hover {
      color: #5e5e5e;
      background-color: transparent
    }

    .navbar-default .navbar-text {
      color: #777
    }

    .navbar-default .navbar-nav>li>a {
      color: #777
    }

    .navbar-default .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {
      color: #333;
      background-color: transparent
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:focus,
    .navbar-default .navbar-nav>.active>a:hover {
      color: #555;
      background-color: #e7e7e7
    }

    .navbar-default .navbar-nav>.disabled>a,
    .navbar-default .navbar-nav>.disabled>a:focus,
    .navbar-default .navbar-nav>.disabled>a:hover {
      color: #ccc;
      background-color: transparent
    }

    .navbar-default .navbar-toggle {
      border-color: #ddd
    }

    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
      background-color: #ddd
    }

    .navbar-default .navbar-toggle .icon-bar {
      background-color: #888
    }

    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
      border-color: #e7e7e7
    }

    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:focus,
    .navbar-default .navbar-nav>.open>a:hover {
      color: #555;
      background-color: #e7e7e7
    }

    @media (max-width:767px) {
      .navbar-default .navbar-nav .open .dropdown-menu>li>a {
        color: #777
      }

      .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
      .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #333;
        background-color: transparent
      }

      .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
      .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
      .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #555;
        background-color: #e7e7e7
      }

      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #ccc;
        background-color: transparent
      }
    }

    .navbar-default .navbar-link {
      color: #777
    }

    .navbar-default .navbar-link:hover {
      color: #333
    }

    .navbar-default .btn-link {
      color: #777
    }

    .navbar-default .btn-link:focus,
    .navbar-default .btn-link:hover {
      color: #333
    }

    .navbar-default .btn-link[disabled]:focus,
    .navbar-default .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-default .btn-link:focus,
    fieldset[disabled] .navbar-default .btn-link:hover {
      color: #ccc
    }

    .navbar-inverse {
      background-color: #222;
      border-color: #080808
    }

    .navbar-inverse .navbar-brand {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-brand:focus,
    .navbar-inverse .navbar-brand:hover {
      color: #fff;
      background-color: transparent
    }

    .navbar-inverse .navbar-text {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-nav>li>a {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-nav>li>a:focus,
    .navbar-inverse .navbar-nav>li>a:hover {
      color: #fff;
      background-color: transparent
    }

    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:focus,
    .navbar-inverse .navbar-nav>.active>a:hover {
      color: #fff;
      background-color: #080808
    }

    .navbar-inverse .navbar-nav>.disabled>a,
    .navbar-inverse .navbar-nav>.disabled>a:focus,
    .navbar-inverse .navbar-nav>.disabled>a:hover {
      color: #444;
      background-color: transparent
    }

    .navbar-inverse .navbar-toggle {
      border-color: #333
    }

    .navbar-inverse .navbar-toggle:focus,
    .navbar-inverse .navbar-toggle:hover {
      background-color: #333
    }

    .navbar-inverse .navbar-toggle .icon-bar {
      background-color: #fff
    }

    .navbar-inverse .navbar-collapse,
    .navbar-inverse .navbar-form {
      border-color: #101010
    }

    .navbar-inverse .navbar-nav>.open>a,
    .navbar-inverse .navbar-nav>.open>a:focus,
    .navbar-inverse .navbar-nav>.open>a:hover {
      color: #fff;
      background-color: #080808
    }

    @media (max-width:767px) {
      .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
        border-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
        background-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
        color: #9d9d9d
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #fff;
        background-color: transparent
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #fff;
        background-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #444;
        background-color: transparent
      }
    }

    .navbar-inverse .navbar-link {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-link:hover {
      color: #fff
    }

    .navbar-inverse .btn-link {
      color: #9d9d9d
    }

    .navbar-inverse .btn-link:focus,
    .navbar-inverse .btn-link:hover {
      color: #fff
    }

    .navbar-inverse .btn-link[disabled]:focus,
    .navbar-inverse .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-inverse .btn-link:focus,
    fieldset[disabled] .navbar-inverse .btn-link:hover {
      color: #444
    }

    .breadcrumb {
      padding: 8px 15px;
      margin-bottom: 20px;
      list-style: none;
      background-color: #f5f5f5;
      border-radius: 4px
    }

    .breadcrumb>li {
      display: inline-block
    }

    .breadcrumb>li+li:before {
      padding: 0 5px;
      color: #ccc;
      content: "/\00a0"
    }

    .breadcrumb>.active {
      color: #777
    }

    .pagination {
      display: inline-block;
      padding-left: 0;
      margin: 20px 0;
      border-radius: 4px
    }

    .pagination>li {
      display: inline
    }

    .pagination>li>a,
    .pagination>li>span {
      position: relative;
      float: left;
      padding: 6px 12px;
      margin-left: -1px;
      line-height: 1.42857143;
      color: #337ab7;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd
    }

    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
      margin-left: 0;
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px
    }

    .pagination>li:last-child>a,
    .pagination>li:last-child>span {
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
      z-index: 2;
      color: #23527c;
      background-color: #eee;
      border-color: #ddd
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
      z-index: 3;
      color: #fff;
      cursor: default;
      background-color: #337ab7;
      border-color: #337ab7
    }

    .pagination>.disabled>a,
    .pagination>.disabled>a:focus,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>span,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>span:hover {
      color: #777;
      cursor: not-allowed;
      background-color: #fff;
      border-color: #ddd
    }

    .pagination-lg>li>a,
    .pagination-lg>li>span {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333
    }

    .pagination-lg>li:first-child>a,
    .pagination-lg>li:first-child>span {
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px
    }

    .pagination-lg>li:last-child>a,
    .pagination-lg>li:last-child>span {
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px
    }

    .pagination-sm>li>a,
    .pagination-sm>li>span {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5
    }

    .pagination-sm>li:first-child>a,
    .pagination-sm>li:first-child>span {
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .pagination-sm>li:last-child>a,
    .pagination-sm>li:last-child>span {
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px
    }

    .pager {
      padding-left: 0;
      margin: 20px 0;
      text-align: center;
      list-style: none
    }

    .pager li {
      display: inline
    }

    .pager li>a,
    .pager li>span {
      display: inline-block;
      padding: 5px 14px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 15px
    }

    .pager li>a:focus,
    .pager li>a:hover {
      text-decoration: none;
      background-color: #eee
    }

    .pager .next>a,
    .pager .next>span {
      float: right
    }

    .pager .previous>a,
    .pager .previous>span {
      float: left
    }

    .pager .disabled>a,
    .pager .disabled>a:focus,
    .pager .disabled>a:hover,
    .pager .disabled>span {
      color: #777;
      cursor: not-allowed;
      background-color: #fff
    }

    .label {
      display: inline;
      padding: .2em .6em .3em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25em
    }

    a.label:focus,
    a.label:hover {
      color: #fff;
      text-decoration: none;
      cursor: pointer
    }

    .label:empty {
      display: none
    }

    .btn .label {
      position: relative;
      top: -1px
    }

    .label-default {
      background-color: #777
    }

    .label-default[href]:focus,
    .label-default[href]:hover {
      background-color: #5e5e5e
    }

    .label-primary {
      background-color: #337ab7
    }

    .label-primary[href]:focus,
    .label-primary[href]:hover {
      background-color: #286090
    }

    .label-success {
      background-color: #5cb85c
    }

    .label-success[href]:focus,
    .label-success[href]:hover {
      background-color: #449d44
    }

    .label-info {
      background-color: #5bc0de
    }

    .label-info[href]:focus,
    .label-info[href]:hover {
      background-color: #31b0d5
    }

    .label-warning {
      background-color: #f0ad4e
    }

    .label-warning[href]:focus,
    .label-warning[href]:hover {
      background-color: #ec971f
    }

    .label-danger {
      background-color: #d9534f
    }

    .label-danger[href]:focus,
    .label-danger[href]:hover {
      background-color: #c9302c
    }

    .badge {
      display: inline-block;
      min-width: 10px;
      padding: 3px 7px;
      font-size: 12px;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      background-color: #777;
      border-radius: 10px
    }

    .badge:empty {
      display: none
    }

    .btn .badge {
      position: relative;
      top: -1px
    }

    .btn-group-xs>.btn .badge,
    .btn-xs .badge {
      top: 0;
      padding: 1px 5px
    }

    a.badge:focus,
    a.badge:hover {
      color: #fff;
      text-decoration: none;
      cursor: pointer
    }

    .list-group-item.active>.badge,
    .nav-pills>.active>a>.badge {
      color: #337ab7;
      background-color: #fff
    }

    .list-group-item>.badge {
      float: right
    }

    .list-group-item>.badge+.badge {
      margin-right: 5px
    }

    .nav-pills>li>a>.badge {
      margin-left: 3px
    }

    .jumbotron {
      padding-top: 30px;
      padding-bottom: 30px;
      margin-bottom: 30px;
      color: inherit;
      background-color: #eee
    }

    .jumbotron .h1,
    .jumbotron h1 {
      color: inherit
    }

    .jumbotron p {
      margin-bottom: 15px;
      font-size: 21px;
      font-weight: 200
    }

    .jumbotron>hr {
      border-top-color: #d5d5d5
    }

    .container .jumbotron,
    .container-fluid .jumbotron {
      padding-right: 15px;
      padding-left: 15px;
      border-radius: 6px
    }

    .jumbotron .container {
      max-width: 100%
    }

    @media screen and (min-width:768px) {
      .jumbotron {
        padding-top: 48px;
        padding-bottom: 48px
      }

      .container .jumbotron,
      .container-fluid .jumbotron {
        padding-right: 60px;
        padding-left: 60px
      }

      .jumbotron .h1,
      .jumbotron h1 {
        font-size: 63px
      }
    }

    .thumbnail {
      display: block;
      padding: 4px;
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: border .2s ease-in-out;
      -o-transition: border .2s ease-in-out;
      transition: border .2s ease-in-out
    }

    .thumbnail a>img,
    .thumbnail>img {
      margin-right: auto;
      margin-left: auto
    }

    a.thumbnail.active,
    a.thumbnail:focus,
    a.thumbnail:hover {
      border-color: #337ab7
    }

    .thumbnail .caption {
      padding: 9px;
      color: #333
    }

    .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px
    }

    .alert h4 {
      margin-top: 0;
      color: inherit
    }

    .alert .alert-link {
      font-weight: 700
    }

    .alert>p,
    .alert>ul {
      margin-bottom: 0
    }

    .alert>p+p {
      margin-top: 5px
    }

    .alert-dismissable,
    .alert-dismissible {
      padding-right: 35px
    }

    .alert-dismissable .close,
    .alert-dismissible .close {
      position: relative;
      top: -2px;
      right: -21px;
      color: inherit
    }

    .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6
    }

    .alert-success hr {
      border-top-color: #c9e2b3
    }

    .alert-success .alert-link {
      color: #2b542c
    }

    .alert-info {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1
    }

    .alert-info hr {
      border-top-color: #a6e1ec
    }

    .alert-info .alert-link {
      color: #245269
    }

    .alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc
    }

    .alert-warning hr {
      border-top-color: #f7e1b5
    }

    .alert-warning .alert-link {
      color: #66512c
    }

    .alert-danger {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1
    }

    .alert-danger hr {
      border-top-color: #e4b9c0
    }

    .alert-danger .alert-link {
      color: #843534
    }

    @-webkit-keyframes progress-bar-stripes {
      from {
        background-position: 40px 0
      }

      to {
        background-position: 0 0
      }
    }

    @-o-keyframes progress-bar-stripes {
      from {
        background-position: 40px 0
      }

      to {
        background-position: 0 0
      }
    }

    @keyframes progress-bar-stripes {
      from {
        background-position: 40px 0
      }

      to {
        background-position: 0 0
      }
    }

    .progress {
      height: 20px;
      margin-bottom: 20px;
      overflow: hidden;
      background-color: #f5f5f5;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
    }

    .progress-bar {
      float: left;
      width: 0;
      height: 100%;
      font-size: 12px;
      line-height: 20px;
      color: #fff;
      text-align: center;
      background-color: #337ab7;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
      -webkit-transition: width .6s ease;
      -o-transition: width .6s ease;
      transition: width .6s ease
    }

    .progress-bar-striped,
    .progress-striped .progress-bar {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      -webkit-background-size: 40px 40px;
      background-size: 40px 40px
    }

    .progress-bar.active,
    .progress.active .progress-bar {
      -webkit-animation: progress-bar-stripes 2s linear infinite;
      -o-animation: progress-bar-stripes 2s linear infinite;
      animation: progress-bar-stripes 2s linear infinite
    }

    .progress-bar-success {
      background-color: #5cb85c
    }

    .progress-striped .progress-bar-success {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-info {
      background-color: #5bc0de
    }

    .progress-striped .progress-bar-info {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-warning {
      background-color: #f0ad4e
    }

    .progress-striped .progress-bar-warning {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-danger {
      background-color: #d9534f
    }

    .progress-striped .progress-bar-danger {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .media {
      margin-top: 15px
    }

    .media:first-child {
      margin-top: 0
    }

    .media,
    .media-body {
      overflow: hidden;
      zoom: 1
    }

    .media-body {
      width: 10000px
    }

    .media-object {
      display: block
    }

    .media-object.img-thumbnail {
      max-width: none
    }

    .media-right,
    .media>.pull-right {
      padding-left: 10px
    }

    .media-left,
    .media>.pull-left {
      padding-right: 10px
    }

    .media-body,
    .media-left,
    .media-right {
      display: table-cell;
      vertical-align: top
    }

    .media-middle {
      vertical-align: middle
    }

    .media-bottom {
      vertical-align: bottom
    }

    .media-heading {
      margin-top: 0;
      margin-bottom: 5px
    }

    .media-list {
      padding-left: 0;
      list-style: none
    }

    .list-group {
      padding-left: 0;
      margin-bottom: 20px
    }

    .list-group-item {
      position: relative;
      display: block;
      padding: 10px 15px;
      margin-bottom: -1px;
      background-color: #fff;
      border: 1px solid #ddd
    }

    .list-group-item:first-child {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px
    }

    .list-group-item:last-child {
      margin-bottom: 0;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
    }

    a.list-group-item,
    button.list-group-item {
      color: #555
    }

    a.list-group-item .list-group-item-heading,
    button.list-group-item .list-group-item-heading {
      color: #333
    }

    a.list-group-item:focus,
    a.list-group-item:hover,
    button.list-group-item:focus,
    button.list-group-item:hover {
      color: #555;
      text-decoration: none;
      background-color: #f5f5f5
    }

    button.list-group-item {
      width: 100%;
      text-align: left
    }

    .list-group-item.disabled,
    .list-group-item.disabled:focus,
    .list-group-item.disabled:hover {
      color: #777;
      cursor: not-allowed;
      background-color: #eee
    }

    .list-group-item.disabled .list-group-item-heading,
    .list-group-item.disabled:focus .list-group-item-heading,
    .list-group-item.disabled:hover .list-group-item-heading {
      color: inherit
    }

    .list-group-item.disabled .list-group-item-text,
    .list-group-item.disabled:focus .list-group-item-text,
    .list-group-item.disabled:hover .list-group-item-text {
      color: #777
    }

    .list-group-item.active,
    .list-group-item.active:focus,
    .list-group-item.active:hover {
      z-index: 2;
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7
    }

    .list-group-item.active .list-group-item-heading,
    .list-group-item.active .list-group-item-heading>.small,
    .list-group-item.active .list-group-item-heading>small,
    .list-group-item.active:focus .list-group-item-heading,
    .list-group-item.active:focus .list-group-item-heading>.small,
    .list-group-item.active:focus .list-group-item-heading>small,
    .list-group-item.active:hover .list-group-item-heading,
    .list-group-item.active:hover .list-group-item-heading>.small,
    .list-group-item.active:hover .list-group-item-heading>small {
      color: inherit
    }

    .list-group-item.active .list-group-item-text,
    .list-group-item.active:focus .list-group-item-text,
    .list-group-item.active:hover .list-group-item-text {
      color: #c7ddef
    }

    .list-group-item-success {
      color: #3c763d;
      background-color: #dff0d8
    }

    a.list-group-item-success,
    button.list-group-item-success {
      color: #3c763d
    }

    a.list-group-item-success .list-group-item-heading,
    button.list-group-item-success .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-success:focus,
    a.list-group-item-success:hover,
    button.list-group-item-success:focus,
    button.list-group-item-success:hover {
      color: #3c763d;
      background-color: #d0e9c6
    }

    a.list-group-item-success.active,
    a.list-group-item-success.active:focus,
    a.list-group-item-success.active:hover,
    button.list-group-item-success.active,
    button.list-group-item-success.active:focus,
    button.list-group-item-success.active:hover {
      color: #fff;
      background-color: #3c763d;
      border-color: #3c763d
    }

    .list-group-item-info {
      color: #31708f;
      background-color: #d9edf7
    }

    a.list-group-item-info,
    button.list-group-item-info {
      color: #31708f
    }

    a.list-group-item-info .list-group-item-heading,
    button.list-group-item-info .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-info:focus,
    a.list-group-item-info:hover,
    button.list-group-item-info:focus,
    button.list-group-item-info:hover {
      color: #31708f;
      background-color: #c4e3f3
    }

    a.list-group-item-info.active,
    a.list-group-item-info.active:focus,
    a.list-group-item-info.active:hover,
    button.list-group-item-info.active,
    button.list-group-item-info.active:focus,
    button.list-group-item-info.active:hover {
      color: #fff;
      background-color: #31708f;
      border-color: #31708f
    }

    .list-group-item-warning {
      color: #8a6d3b;
      background-color: #fcf8e3
    }

    a.list-group-item-warning,
    button.list-group-item-warning {
      color: #8a6d3b
    }

    a.list-group-item-warning .list-group-item-heading,
    button.list-group-item-warning .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-warning:focus,
    a.list-group-item-warning:hover,
    button.list-group-item-warning:focus,
    button.list-group-item-warning:hover {
      color: #8a6d3b;
      background-color: #faf2cc
    }

    a.list-group-item-warning.active,
    a.list-group-item-warning.active:focus,
    a.list-group-item-warning.active:hover,
    button.list-group-item-warning.active,
    button.list-group-item-warning.active:focus,
    button.list-group-item-warning.active:hover {
      color: #fff;
      background-color: #8a6d3b;
      border-color: #8a6d3b
    }

    .list-group-item-danger {
      color: #a94442;
      background-color: #f2dede
    }

    a.list-group-item-danger,
    button.list-group-item-danger {
      color: #a94442
    }

    a.list-group-item-danger .list-group-item-heading,
    button.list-group-item-danger .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-danger:focus,
    a.list-group-item-danger:hover,
    button.list-group-item-danger:focus,
    button.list-group-item-danger:hover {
      color: #a94442;
      background-color: #ebcccc
    }

    a.list-group-item-danger.active,
    a.list-group-item-danger.active:focus,
    a.list-group-item-danger.active:hover,
    button.list-group-item-danger.active,
    button.list-group-item-danger.active:focus,
    button.list-group-item-danger.active:hover {
      color: #fff;
      background-color: #a94442;
      border-color: #a94442
    }

    .list-group-item-heading {
      margin-top: 0;
      margin-bottom: 5px
    }

    .list-group-item-text {
      margin-bottom: 0;
      line-height: 1.3
    }

    .panel {
      margin-bottom: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-body {
      padding: 15px
    }

    .panel-heading {
      padding: 10px 15px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel-heading>.dropdown .dropdown-toggle {
      color: inherit
    }

    .panel-title {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: inherit
    }

    .panel-title>.small,
    .panel-title>.small>a,
    .panel-title>a,
    .panel-title>small,
    .panel-title>small>a {
      color: inherit
    }

    .panel-footer {
      padding: 10px 15px;
      background-color: #f5f5f5;
      border-top: 1px solid #ddd;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.list-group,
    .panel>.panel-collapse>.list-group {
      margin-bottom: 0
    }

    .panel>.list-group .list-group-item,
    .panel>.panel-collapse>.list-group .list-group-item {
      border-width: 1px 0;
      border-radius: 0
    }

    .panel>.list-group:first-child .list-group-item:first-child,
    .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
      border-top: 0;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel>.list-group:last-child .list-group-item:last-child,
    .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
      border-bottom: 0;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .panel-heading+.list-group .list-group-item:first-child {
      border-top-width: 0
    }

    .list-group+.panel-footer {
      border-top-width: 0
    }

    .panel>.panel-collapse>.table,
    .panel>.table,
    .panel>.table-responsive>.table {
      margin-bottom: 0
    }

    .panel>.panel-collapse>.table caption,
    .panel>.table caption,
    .panel>.table-responsive>.table caption {
      padding-right: 15px;
      padding-left: 15px
    }

    .panel>.table-responsive:first-child>.table:first-child,
    .panel>.table:first-child {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
      border-top-left-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
      border-top-right-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child,
    .panel>.table:last-child {
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child {
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
      border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
      border-bottom-right-radius: 3px
    }

    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive,
    .panel>.table+.panel-body,
    .panel>.table-responsive+.panel-body {
      border-top: 1px solid #ddd
    }

    .panel>.table>tbody:first-child>tr:first-child td,
    .panel>.table>tbody:first-child>tr:first-child th {
      border-top: 0
    }

    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
      border: 0
    }

    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
      border-left: 0
    }

    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
      border-right: 0
    }

    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
      border-bottom: 0
    }

    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
      border-bottom: 0
    }

    .panel>.table-responsive {
      margin-bottom: 0;
      border: 0
    }

    .panel-group {
      margin-bottom: 20px
    }

    .panel-group .panel {
      margin-bottom: 0;
      border-radius: 4px
    }

    .panel-group .panel+.panel {
      margin-top: 5px
    }

    .panel-group .panel-heading {
      border-bottom: 0
    }

    .panel-group .panel-heading+.panel-collapse>.list-group,
    .panel-group .panel-heading+.panel-collapse>.panel-body {
      border-top: 1px solid #ddd
    }

    .panel-group .panel-footer {
      border-top: 0
    }

    .panel-group .panel-footer+.panel-collapse .panel-body {
      border-bottom: 1px solid #ddd
    }

    .panel-default {
      border-color: #ddd
    }

    .panel-default>.panel-heading {
      color: #333;
      background-color: #f5f5f5;
      border-color: #ddd
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #ddd
    }

    .panel-default>.panel-heading .badge {
      color: #f5f5f5;
      background-color: #333
    }

    .panel-default>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #ddd
    }

    .panel-primary {
      border-color: #337ab7
    }

    .panel-primary>.panel-heading {
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7
    }

    .panel-primary>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #337ab7
    }

    .panel-primary>.panel-heading .badge {
      color: #337ab7;
      background-color: #fff
    }

    .panel-primary>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #337ab7
    }

    .panel-success {
      border-color: #d6e9c6
    }

    .panel-success>.panel-heading {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6
    }

    .panel-success>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #d6e9c6
    }

    .panel-success>.panel-heading .badge {
      color: #dff0d8;
      background-color: #3c763d
    }

    .panel-success>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #d6e9c6
    }

    .panel-info {
      border-color: #bce8f1
    }

    .panel-info>.panel-heading {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1
    }

    .panel-info>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #bce8f1
    }

    .panel-info>.panel-heading .badge {
      color: #d9edf7;
      background-color: #31708f
    }

    .panel-info>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #bce8f1
    }

    .panel-warning {
      border-color: #faebcc
    }

    .panel-warning>.panel-heading {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc
    }

    .panel-warning>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #faebcc
    }

    .panel-warning>.panel-heading .badge {
      color: #fcf8e3;
      background-color: #8a6d3b
    }

    .panel-warning>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #faebcc
    }

    .panel-danger {
      border-color: #ebccd1
    }

    .panel-danger>.panel-heading {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1
    }

    .panel-danger>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #ebccd1
    }

    .panel-danger>.panel-heading .badge {
      color: #f2dede;
      background-color: #a94442
    }

    .panel-danger>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #ebccd1
    }

    .embed-responsive {
      position: relative;
      display: block;
      height: 0;
      padding: 0;
      overflow: hidden
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive embed,
    .embed-responsive iframe,
    .embed-responsive object,
    .embed-responsive video {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0
    }

    .embed-responsive-16by9 {
      padding-bottom: 56.25%
    }

    .embed-responsive-4by3 {
      padding-bottom: 75%
    }

    .well {
      min-height: 20px;
      padding: 19px;
      margin-bottom: 20px;
      background-color: #f5f5f5;
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }

    .well blockquote {
      border-color: #ddd;
      border-color: rgba(0, 0, 0, .15)
    }

    .well-lg {
      padding: 24px;
      border-radius: 6px
    }

    .well-sm {
      padding: 9px;
      border-radius: 3px
    }

    .close {
      float: right;
      font-size: 21px;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      filter: alpha(opacity=20);
      opacity: .2
    }

    .close:focus,
    .close:hover {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      filter: alpha(opacity=50);
      opacity: .5
    }

    button.close {
      -webkit-appearance: none;
      padding: 0;
      cursor: pointer;
      background: 0 0;
      border: 0
    }

    .modal-open {
      overflow: hidden
    }

    .modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1050;
      display: none;
      overflow: hidden;
      -webkit-overflow-scrolling: touch;
      outline: 0
    }

    .modal.fade .modal-dialog {
      -webkit-transition: -webkit-transform .3s ease-out;
      -o-transition: -o-transform .3s ease-out;
      transition: transform .3s ease-out;
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      -o-transform: translate(0, -25%);
      transform: translate(0, -25%)
    }

    .modal.in .modal-dialog {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      -o-transform: translate(0, 0);
      transform: translate(0, 0)
    }

    .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
    }

    .modal-dialog {
      position: relative;
      width: auto;
      margin: 10px
    }

    .modal-content {
      position: relative;
      background-color: #fff;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      outline: 0;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
    }

    .modal-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #000
    }

    .modal-backdrop.fade {
      filter: alpha(opacity=0);
      opacity: 0
    }

    .modal-backdrop.in {
      filter: alpha(opacity=50);
      opacity: .5
    }

    .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5
    }

    .modal-header .close {
      margin-top: -2px
    }

    .modal-title {
      margin: 0;
      line-height: 1.42857143
    }

    .modal-body {
      position: relative;
      padding: 15px
    }

    .modal-footer {
      padding: 15px;
      text-align: right;
      border-top: 1px solid #e5e5e5
    }

    .modal-footer .btn+.btn {
      margin-bottom: 0;
      margin-left: 5px
    }

    .modal-footer .btn-group .btn+.btn {
      margin-left: -1px
    }

    .modal-footer .btn-block+.btn-block {
      margin-left: 0
    }

    .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    @media (min-width:768px) {
      .modal-dialog {
        width: 600px;
        margin: 30px auto
      }

      .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
      }

      .modal-sm {
        width: 300px
      }
    }

    @media (min-width:992px) {
      .modal-lg {
        width: 900px
      }
    }

    .tooltip {
      position: absolute;
      z-index: 1070;
      display: block;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      white-space: normal;
      filter: alpha(opacity=0);
      opacity: 0;
      line-break: auto
    }

    .tooltip.in {
      filter: alpha(opacity=90);
      opacity: .9
    }

    .tooltip.top {
      padding: 5px 0;
      margin-top: -3px
    }

    .tooltip.right {
      padding: 0 5px;
      margin-left: 3px
    }

    .tooltip.bottom {
      padding: 5px 0;
      margin-top: 3px
    }

    .tooltip.left {
      padding: 0 5px;
      margin-left: -3px
    }

    .tooltip-inner {
      max-width: 200px;
      padding: 3px 8px;
      color: #fff;
      text-align: center;
      background-color: #000;
      border-radius: 4px
    }

    .tooltip-arrow {
      position: absolute;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid
    }

    .tooltip.top .tooltip-arrow {
      bottom: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
    }

    .tooltip.top-left .tooltip-arrow {
      right: 5px;
      bottom: 0;
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
    }

    .tooltip.top-right .tooltip-arrow {
      bottom: 0;
      left: 5px;
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
    }

    .tooltip.right .tooltip-arrow {
      top: 50%;
      left: 0;
      margin-top: -5px;
      border-width: 5px 5px 5px 0;
      border-right-color: #000
    }

    .tooltip.left .tooltip-arrow {
      top: 50%;
      right: 0;
      margin-top: -5px;
      border-width: 5px 0 5px 5px;
      border-left-color: #000
    }

    .tooltip.bottom .tooltip-arrow {
      top: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
    }

    .tooltip.bottom-left .tooltip-arrow {
      top: 0;
      right: 5px;
      margin-top: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
    }

    .tooltip.bottom-right .tooltip-arrow {
      top: 0;
      left: 5px;
      margin-top: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
    }

    .popover {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1060;
      display: none;
      max-width: 276px;
      padding: 1px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      white-space: normal;
      background-color: #fff;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
      box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
      line-break: auto
    }

    .popover.top {
      margin-top: -10px
    }

    .popover.right {
      margin-left: 10px
    }

    .popover.bottom {
      margin-top: 10px
    }

    .popover.left {
      margin-left: -10px
    }

    .popover-title {
      padding: 8px 14px;
      margin: 0;
      font-size: 14px;
      background-color: #f7f7f7;
      border-bottom: 1px solid #ebebeb;
      border-radius: 5px 5px 0 0
    }

    .popover-content {
      padding: 9px 14px
    }

    .popover>.arrow,
    .popover>.arrow:after {
      position: absolute;
      display: block;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid
    }

    .popover>.arrow {
      border-width: 11px
    }

    .popover>.arrow:after {
      content: "";
      border-width: 10px
    }

    .popover.top>.arrow {
      bottom: -11px;
      left: 50%;
      margin-left: -11px;
      border-top-color: #999;
      border-top-color: rgba(0, 0, 0, .25);
      border-bottom-width: 0
    }

    .popover.top>.arrow:after {
      bottom: 1px;
      margin-left: -10px;
      content: " ";
      border-top-color: #fff;
      border-bottom-width: 0
    }

    .popover.right>.arrow {
      top: 50%;
      left: -11px;
      margin-top: -11px;
      border-right-color: #999;
      border-right-color: rgba(0, 0, 0, .25);
      border-left-width: 0
    }

    .popover.right>.arrow:after {
      bottom: -10px;
      left: 1px;
      content: " ";
      border-right-color: #fff;
      border-left-width: 0
    }

    .popover.bottom>.arrow {
      top: -11px;
      left: 50%;
      margin-left: -11px;
      border-top-width: 0;
      border-bottom-color: #999;
      border-bottom-color: rgba(0, 0, 0, .25)
    }

    .popover.bottom>.arrow:after {
      top: 1px;
      margin-left: -10px;
      content: " ";
      border-top-width: 0;
      border-bottom-color: #fff
    }

    .popover.left>.arrow {
      top: 50%;
      right: -11px;
      margin-top: -11px;
      border-right-width: 0;
      border-left-color: #999;
      border-left-color: rgba(0, 0, 0, .25)
    }

    .popover.left>.arrow:after {
      right: 1px;
      bottom: -10px;
      content: " ";
      border-right-width: 0;
      border-left-color: #fff
    }

    .carousel {
      position: relative
    }

    .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden
    }

    .carousel-inner>.item {
      position: relative;
      display: none;
      -webkit-transition: .6s ease-in-out left;
      -o-transition: .6s ease-in-out left;
      transition: .6s ease-in-out left
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img {
      line-height: 1
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {
      .carousel-inner>.item {
        -webkit-transition: -webkit-transform .6s ease-in-out;
        -o-transition: -o-transform .6s ease-in-out;
        transition: transform .6s ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
      }

      .carousel-inner>.item.active.right,
      .carousel-inner>.item.next {
        left: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
      }

      .carousel-inner>.item.active.left,
      .carousel-inner>.item.prev {
        left: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
      }

      .carousel-inner>.item.active,
      .carousel-inner>.item.next.left,
      .carousel-inner>.item.prev.right {
        left: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
      }
    }

    .carousel-inner>.active,
    .carousel-inner>.next,
    .carousel-inner>.prev {
      display: block
    }

    .carousel-inner>.active {
      left: 0
    }

    .carousel-inner>.next,
    .carousel-inner>.prev {
      position: absolute;
      top: 0;
      width: 100%
    }

    .carousel-inner>.next {
      left: 100%
    }

    .carousel-inner>.prev {
      left: -100%
    }

    .carousel-inner>.next.left,
    .carousel-inner>.prev.right {
      left: 0
    }

    .carousel-inner>.active.left {
      left: -100%
    }

    .carousel-inner>.active.right {
      left: 100%
    }

    .carousel-control {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 15%;
      font-size: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
      background-color: rgba(0, 0, 0, 0);
      filter: alpha(opacity=50);
      opacity: .5
    }

    .carousel-control.left {
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
      background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
      background-repeat: repeat-x
    }

    .carousel-control.right {
      right: 0;
      left: auto;
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
      background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
      background-repeat: repeat-x
    }

    .carousel-control:focus,
    .carousel-control:hover {
      color: #fff;
      text-decoration: none;
      filter: alpha(opacity=90);
      outline: 0;
      opacity: .9
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
      position: absolute;
      top: 50%;
      z-index: 5;
      display: inline-block;
      margin-top: -10px
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
      left: 50%;
      margin-left: -10px
    }

    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
      right: 50%;
      margin-right: -10px
    }

    .carousel-control .icon-next,
    .carousel-control .icon-prev {
      width: 20px;
      height: 20px;
      font-family: serif;
      line-height: 1
    }

    .carousel-control .icon-prev:before {
      content: '\2039'
    }

    .carousel-control .icon-next:before {
      content: '\203a'
    }

    .carousel-indicators {
      position: absolute;
      bottom: 10px;
      left: 50%;
      z-index: 15;
      width: 60%;
      padding-left: 0;
      margin-left: -30%;
      text-align: center;
      list-style: none
    }

    .carousel-indicators li {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin: 1px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #000\9;
      background-color: rgba(0, 0, 0, 0);
      border: 1px solid #fff;
      border-radius: 10px
    }

    .carousel-indicators .active {
      width: 12px;
      height: 12px;
      margin: 0;
      background-color: #fff
    }

    .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 20px;
      left: 15%;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }

    .carousel-caption .btn {
      text-shadow: none
    }

    @media screen and (min-width:768px) {

      .carousel-control .glyphicon-chevron-left,
      .carousel-control .glyphicon-chevron-right,
      .carousel-control .icon-next,
      .carousel-control .icon-prev {
        width: 30px;
        height: 30px;
        margin-top: -10px;
        font-size: 30px
      }

      .carousel-control .glyphicon-chevron-left,
      .carousel-control .icon-prev {
        margin-left: -10px
      }

      .carousel-control .glyphicon-chevron-right,
      .carousel-control .icon-next {
        margin-right: -10px
      }

      .carousel-caption {
        right: 20%;
        left: 20%;
        padding-bottom: 30px
      }

      .carousel-indicators {
        bottom: 20px
      }
    }

    .btn-group-vertical>.btn-group:after,
    .btn-group-vertical>.btn-group:before,
    .btn-toolbar:after,
    .btn-toolbar:before,
    .clearfix:after,
    .clearfix:before,
    .container-fluid:after,
    .container-fluid:before,
    .container:after,
    .container:before,
    .dl-horizontal dd:after,
    .dl-horizontal dd:before,
    .form-horizontal .form-group:after,
    .form-horizontal .form-group:before,
    .modal-footer:after,
    .modal-footer:before,
    .modal-header:after,
    .modal-header:before,
    .nav:after,
    .nav:before,
    .navbar-collapse:after,
    .navbar-collapse:before,
    .navbar-header:after,
    .navbar-header:before,
    .navbar:after,
    .navbar:before,
    .pager:after,
    .pager:before,
    .panel-body:after,
    .panel-body:before,
    .row:after,
    .row:before {
      display: table;
      content: " "
    }

    .btn-group-vertical>.btn-group:after,
    .btn-toolbar:after,
    .clearfix:after,
    .container-fluid:after,
    .container:after,
    .dl-horizontal dd:after,
    .form-horizontal .form-group:after,
    .modal-footer:after,
    .modal-header:after,
    .nav:after,
    .navbar-collapse:after,
    .navbar-header:after,
    .navbar:after,
    .pager:after,
    .panel-body:after,
    .row:after {
      clear: both
    }

    .center-block {
      display: block;
      margin-right: auto;
      margin-left: auto
    }

    .pull-right {
      float: right !important
    }

    .pull-left {
      float: left !important
    }

    .hide {
      display: none !important
    }

    .show {
      display: block !important
    }

    .invisible {
      visibility: hidden
    }

    .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0
    }

    .hidden {
      display: none !important
    }

    .affix {
      position: fixed
    }

    @-ms-viewport {
      width: device-width
    }

    .visible-lg,
    .visible-md,
    .visible-sm,
    .visible-xs {
      display: none !important
    }

    .visible-lg-block,
    .visible-lg-inline,
    .visible-lg-inline-block,
    .visible-md-block,
    .visible-md-inline,
    .visible-md-inline-block,
    .visible-sm-block,
    .visible-sm-inline,
    .visible-sm-inline-block,
    .visible-xs-block,
    .visible-xs-inline,
    .visible-xs-inline-block {
      display: none !important
    }

    @media (max-width:767px) {
      .visible-xs {
        display: block !important
      }

      table.visible-xs {
        display: table !important
      }

      tr.visible-xs {
        display: table-row !important
      }

      td.visible-xs,
      th.visible-xs {
        display: table-cell !important
      }
    }

    @media (max-width:767px) {
      .visible-xs-block {
        display: block !important
      }
    }

    @media (max-width:767px) {
      .visible-xs-inline {
        display: inline !important
      }
    }

    @media (max-width:767px) {
      .visible-xs-inline-block {
        display: inline-block !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm {
        display: block !important
      }

      table.visible-sm {
        display: table !important
      }

      tr.visible-sm {
        display: table-row !important
      }

      td.visible-sm,
      th.visible-sm {
        display: table-cell !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm-block {
        display: block !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm-inline {
        display: inline !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm-inline-block {
        display: inline-block !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md {
        display: block !important
      }

      table.visible-md {
        display: table !important
      }

      tr.visible-md {
        display: table-row !important
      }

      td.visible-md,
      th.visible-md {
        display: table-cell !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md-block {
        display: block !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md-inline {
        display: inline !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md-inline-block {
        display: inline-block !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg {
        display: block !important
      }

      table.visible-lg {
        display: table !important
      }

      tr.visible-lg {
        display: table-row !important
      }

      td.visible-lg,
      th.visible-lg {
        display: table-cell !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg-block {
        display: block !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg-inline {
        display: inline !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg-inline-block {
        display: inline-block !important
      }
    }

    @media (max-width:767px) {
      .hidden-xs {
        display: none !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .hidden-sm {
        display: none !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .hidden-md {
        display: none !important
      }
    }

    @media (min-width:1200px) {
      .hidden-lg {
        display: none !important
      }
    }

    .visible-print {
      display: none !important
    }

    @media print {
      .visible-print {
        display: block !important
      }

      table.visible-print {
        display: table !important
      }

      tr.visible-print {
        display: table-row !important
      }

      td.visible-print,
      th.visible-print {
        display: table-cell !important
      }
    }

    .visible-print-block {
      display: none !important
    }

    @media print {
      .visible-print-block {
        display: block !important
      }
    }

    .visible-print-inline {
      display: none !important
    }

    @media print {
      .visible-print-inline {
        display: inline !important
      }
    }

    .visible-print-inline-block {
      display: none !important
    }

    @media print {
      .visible-print-inline-block {
        display: inline-block !important
      }
    }

    @media print {
      .hidden-print {
        display: none !important
      }
    }
  </style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>InvoiceKu</title>

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h2><strong>Invoices</strong></h2>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-6 justify-content-start my-auto mx-auto">
        <img style="max-width: 40%;" src="data:image/jpeg;base64,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" alt="" />
      </div>
      <div class="col-xs-6">
        <p style="margin-right: 30px;"><?= $invoice['billto'] ?></p>
      </div>
    </div>
    <hr>
    <div class="row d-flex">
      <div class="col-xs-8 justify-content-start">
        <p style="white-space: pre-line;"><strong>PEMBAYARAN KEPADA</strong></p>
        <p style="white-space: pre-line;"><strong>Putra Chandra Sentosa </strong></p>
      </div>
      <div class="col-xs-4 justify-content-end">
        <p><strong>No.Invoice: <?= $invoice['invoice'] ?></strong></p>
        <p><strong>Tanggal Invoice: <?= date("Y-m-d", strtotime($invoice['invoice_date'])) ?></strong></p>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-xs-12">
        <table class="table">
          <tr class="table-primary text-center info">
            <th class="text-center">Tanggal Pemesanan</th>
            <th>Keterangan</th>
            <th class="text-center">Pesawat</th>
            <th class="text-center">Rute</th>
            <th class="text-center">Booking</th>
            <th class="text-center">Kuantitas</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Jumlah</th>
          </tr>
          <?php foreach ($details as $detail) : ?>
            <tr>
              <td class="text-center"><?= date("Y-m-d", strtotime($detail['detail_date'])) ?></td>
              <td style="white-space: pre-line;"><?= $detail['description'] ?></td>
              <td class="text-center"><?= $detail['flight'] ?></td>
              <td class="text-center"><?= $detail['route'] ?></td>
              <td class="text-center"><?= $detail['booking'] ?></td>
              <td class="text-center"><?= $detail['qty'] ?></td>
              <td class="text-center">Rp. <?= number_format($detail['price'], 0, '.', '.') ?></td>
              <td class="text-center">Rp. <?= number_format($detail['total_details'], 0, '.', '.') ?></td>
            </tr>
          <?php endforeach; ?>

        </table>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-xs-7">
        <h5><strong>Instruksi Pembayaran</strong></h5>
        <table class="borderless">
          <tbody>
            <tr>
              <td style="padding: 5px;"><strong>Mandiri: </strong>1550011429449</td>
            </tr>
            <tr>
              <td style="padding: 5px;"><strong>BRI: </strong>1550011429449</td>
            </tr>
            <tr>
              <td style="padding: 5px;">A/n: Bersama Meniti Nur</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-xs-5">
        <table class="borderless" style="margin-left: auto;margin-right:100px">
          <tbody>
            <tr style=" border-bottom: none;">
              <th style="padding: 5px;">Total</th>
              <td style="padding: 5px;">Rp. <?= number_format($invoice['total_invoice'], 0, '.', '.') ?></td>
            </tr>
            <tr style="border-bottom: none;">
              <th style="padding: 5px;">Jasa Layanan <?= number_format($invoice['prosentase_service'], 1, '.') ?>%</th>
              <td style="padding: 5px;">Rp. <?= number_format($service, 0, '.', '.') ?></td>
            </tr>
            <tr style="border-bottom: none;">
              <th style="padding: 5px;">PPN 11%</th>
              <td style="padding: 5px;">Rp. <?= number_format($ppn, 0, '.', '.') ?></td>
            </tr>
            <tr style="border-bottom: none;">
              <th style="padding: 5px;"><strong>TOTAL DIBAYAR </strong></th>
              <td style="padding: 5px;"><strong>Rp. <?= number_format($total, 0, '.', '.') ?></strong></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
<!-- DEBUG-VIEW ENDED 1 APPPATH/Views/layouts/main.php -->

<!-- DEBUG-VIEW ENDED 2 APPPATH/Views/invoice/show-invoice.php -->