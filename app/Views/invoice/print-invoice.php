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
        <img style="max-width: 40%;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/2wBDAQMDAwQDBAgEBAgQCwkLEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBD/wAARCAHJAiIDAREAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9PaACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAr3moWlg1sl1KIzdzC3iz/FIQSB+IU0CbS3LFAwoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoA4L446T4r1X4dXr+BrYXHiDTbi11PTot23zJYJ0k2A/7Sqy++cVpSaUve2OLMIVpYd+w+Jaop/DP4+eA/iQV0iK/wD7J8SxDZeaHqI8i7hlH3lVWx5gBHVc1dWhKnrujnwWbUMU/ZSfLU6xe9/Luek1geqFABQAUAFA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BQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFAH//Z" alt="" />
      </div>
      <div class="col-xs-6">
        <p style="margin-right: 30px;">PT.BERSAMA MENITI NUR
          RUKO BATAVIA BLOK LC 8 NO.23 KELAPA GADING JAKARTA 14240
          Indonesia 021-56515461 (0812389980932)
          bersamamenitinur@gmail.com
          PT.BERSAMA MENITI NUR</p>
      </div>
    </div>
    <hr>
    <div class="row d-flex">
      <div class="col-xs-8 justify-content-start">
        <p style="white-space: pre-line;"><strong>PEMBAYARAN KEPADA</strong></p>
        <p style="white-space: pre-line;"><strong>Putra Chandra Sentosa </strong></p>
      </div>
      <div class="col-xs-4 justify-content-end">
        <p><strong>No.Invoice: 3</strong></p>
        <p><strong>Tanggal Invoice: 2023-03-11</strong></p>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-xs-12">
        <table class="table">
          <tr class="table-primary text-center info">
            <th>Tanggal Pemesanan</th>
            <th>Keterangan</th>
            <th>Pesawat</th>
            <th>Rute</th>
            <th>Booking</th>
            <th>Kuantitas</th>
            <th>Harga</th>
            <th>Jumlah</th>
          </tr>
          <tr>
            <td class="text-center">2023-03-16</td>
            <td style="white-space: pre-line;">Pembelian Tiket:
              1. Rohim Muhamad</td>
            <td class="text-center">Garuda</td>
            <td class="text-center">CGK-KLO</td>
            <td class="text-center">PX987</td>
            <td class="text-center">1</td>
            <td class="text-center">Rp. 1.540.000</td>
            <td class="text-center">Rp. 1.540.000</td>
          </tr>
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
              <td style="padding: 5px;">Rp. 1.540.000</td>
            </tr>
            <tr style="border-bottom: none;">
              <th style="padding: 5px;">Jasa Layanan 7.0%</th>
              <td style="padding: 5px;">Rp. 107.800</td>
            </tr>
            <tr style="border-bottom: none;">
              <th style="padding: 5px;">PPN 11%</th>
              <td style="padding: 5px;">Rp. 11.858</td>
            </tr>
            <tr style="border-bottom: none;">
              <th style="padding: 5px;"><strong>TOTAL DIBAYAR </strong></th>
              <td style="padding: 5px;"><strong>Rp. 1.659.658</strong></td>
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