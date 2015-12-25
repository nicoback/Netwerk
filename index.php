<?php
require_once 'inc/forcehttps.php';
function __autoload($class_name) {
  include_once 'inc/class.' . $class_name . '.php';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Netwerk: Easy network management">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Netwerk</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="assets/img/android-desktop.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Netwerk">
  <link rel="apple-touch-icon-precomposed" href="assets/img/ios-desktop.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="assets/img/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">

  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="assets/css/ripples.min.css">
  <link rel="stylesheet" href="assets/css/material.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <img src="assets/img/logo.png" width="127" height="37" alt="Netwerk" />
        <div class="mdl-layout-spacer"></div>
        <form class="form-horizontal">
          <fieldset>
            <div class="form-group label-floating">
              <label class="control-label" for="select111">Sort by...</label>
              <select id="select111" class="form-control" style="min-width: 10em">
                <option>First Name</option>
                <option>Last Name</option>
                <option>Industry</option>
                <option>Company</option>
                <option>Division</option>
                <option>Job</option>
                <option>Last Contacted</option>
                <option>Last Response</option>
                <option>Alumni</option>
                <option>Email</option>
                <option>Location</option>
              </select>
            </div>
          </fieldset>
        </form>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons">details</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search">
            <label class="mdl-textfield__label" for="search">Filter...</label>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
          <li class="mdl-menu__item">About</li>
          <li class="mdl-menu__item">Github Repo</li>
          <li class="mdl-menu__item">Contact</li>
        </ul>
      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
      <header class="demo-drawer-header">
        <img src="assets/img/user.jpg" class="demo-avatar">
        <div class="demo-avatar-dropdown">
          <span>hello@example.com</span>
          <div class="mdl-layout-spacer"></div>
          <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_drop_down</i>
            <span class="visuallyhidden">Accounts</span>
          </button>
          <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
            <li class="mdl-menu__item">hello@example.com</li>
            <li class="mdl-menu__item">info@example.com</li>
            <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
          </ul>
        </div>
      </header>
      <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Inbox</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">subject</i>Email Templates</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
      </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
          <div class="table-responsive" style="width: 100%">
            <table class="mdl-data-table mdl-js-data-table" style="width: 100%">
              <thead>
                <tr>
                  <th style="padding:0"></th>
                  <th class="mdl-data-table__cell--non-numeric first">First</th>
                  <th class="mdl-data-table__cell--non-numeric">Last</th>
                  <th class="mdl-data-table__cell--non-numeric">Email</th>
                  <th class="mdl-data-table__cell--non-numeric">Points of Contact</th>
                  <th class="mdl-data-table__cell--non-numeric">Industry</th>
                  <th class="mdl-data-table__cell--non-numeric">Location</th>
                  <th class="mdl-data-table__cell--non-numeric">Company</th>
                  <th class="mdl-data-table__cell--non-numeric">Division</th>
                  <th class="mdl-data-table__cell--non-numeric">Job</th>
                  <th class="mdl-data-table__cell--non-numeric">Alumn?</th>
                  <th class="mdl-data-table__cell--non-numeric">Last Contacted</th>
                  <th class="mdl-data-table__cell--non-numeric">Last Response</th>
                  <th class="mdl-data-table__cell--non-numeric">Notes</th>
                  <th class="mdl-data-table__cell--non-numeric">Category</th>
                </tr>
              </thead>
              <tbody>
                <tr class="friend">
                  <td class="trash"><a href="#"><i class="material-icons" style="font-size: 1em;">delete</i></a></td>
                  <td class="mdl-data-table__cell--non-numeric name first"> John</td>
                  <td class="mdl-data-table__cell--non-numeric name">Lennon</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">Offered web dev internship at Massdrop, a startup in San Francisco that he advises with over 80 team members. Super smart, made an educational stock simulation program. <br />Gave advice on intellectual property (you have to prove your atent, very expensive... having a patent doesn't mean that much if you don't have the means to defend it BUT it can increase the valuation of a start-up). Lead a guild on WoW. Leads the Real-time analysis investment lab at Stanford and teaches financial classes. Offered to teach us excel for 2 hours, show us the rail lab, and show us Massdrop in SF. </td>

                </tr>
                <tr class="very-good">
                  <td class="trash"><i class="material-icons" style="font-size: 1em">delete</i></td>

                  <td class="mdl-data-table__cell--non-numeric name first">John</td>
                  <td class="mdl-data-table__cell--non-numeric name">Lennon</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                </tr>
                <tr class="good">
                  <td class="trash"><i class="material-icons" style="font-size: 1em">delete</i></td>

                  <td class="mdl-data-table__cell--non-numeric name first">John</td>
                  <td class="mdl-data-table__cell--non-numeric name">Lennon</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                </tr>
                <tr class="future">
                  <td class="trash"><i class="material-icons" style="font-size: 1em">delete</i></td>

                  <td class="mdl-data-table__cell--non-numeric name first">John</td>
                  <td class="mdl-data-table__cell--non-numeric name">Lennon</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                  <td class="mdl-data-table__cell--non-numeric">No</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
          <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
            <use xlink:href="#chart">
            </svg>
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart">
              </svg>
            </div>
            <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
              <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                  <h2 class="mdl-card__title-text">Updates</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                  Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
                </div>
              </div>
              <div class="demo-separator mdl-cell--1-col"></div>
              <div class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                  <h3>View options</h3>
                  <ul>
                    <li>
                      <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        <input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">Click per object</span>
                      </label>
                    </li>
                    <li>
                      <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        <input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">Views per object</span>
                      </label>
                    </li>
                    <li>
                      <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        <input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">Objects selected</span>
                      </label>
                    </li>
                    <li>
                      <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        <input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">Objects viewed</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change location</a>
                  <div class="mdl-layout-spacer"></div>
                  <i class="material-icons">location_on</i>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white">
              <circle cx=0.5 cy=0.5 r=0.40 fill="black">
              </mask>
              <g id="piechart">
                <circle cx=0.5 cy=0.5 r=0.5>
                  <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)">
                  </g>
                </defs>
              </svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
                <defs>
                  <g id="chart">
                    <g id="Gridlines">
                      <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3">
                        <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7">
                          <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3">
                            <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7">
                              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3">
                              </g>
                              <g id="Numbers">
                                <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
                                <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
                                <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
                                <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
                                <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
                                <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
                                <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
                                <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
                                <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
                                <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
                                <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
                                <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
                              </g>
                              <g id="Layer_5">
                                <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
                                294.5,80.5 380,165.2 437,75.5 469.5,223.3 	">
                              </g>
                              <g id="Layer_4">
                                <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
                                296.7,128 380.7,184.3 436.7,125 	">
                              </g>
                            </g>
                          </defs>
                        </svg>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom-server.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.min.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                        <script src="assets/js/bootstrap.min.js"></script>
                        <script src="assets/js/ripples.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.6/js/material.min.js"></script>
                        <script>
                        $(function() {
                          $.material.init();
                        });
                        </script>
                        <script src="assets/js/material.min.js"></script>

                      </body>
                      </html>
