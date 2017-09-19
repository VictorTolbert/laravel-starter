<html>
<head>
  <style>

    .header {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.07);
      z-index: 1;
    }

    .stage-left {
      width: 4rem;
      transition: width .2s ease-in-out .05s;

      @media (min-width: 1024px) {
        &.open {
          width: 15rem;
          transition: width .1s ease-in-out;

          // Show Text on Open
          .stage-left__text {
            opacity: 1;
            width: auto;
            transition-delay: .2s;
          }
        }
      }

      li + li {
        margin-top: 0.5rem;
      }

      a:not(.button) {
        display: block;
        text-decoration: none;
        white-space: nowrap;
        border-radius: 0.25rem;
        background: transparent;
        padding: 0.25rem;
        transition: background .05s linear;

        &:hover,
        &:focus {
          background: #061c3f;
        }

        &:active {
          box-shadow: inset 0px 3px 3px 0px rgba(0,0,0,.16), 0 0 3px #0070D2;
        }
      }

      // Setup Nav Item text to disappear on stage left toggle
      .stage-left__text {
        opacity: 0;
        width: 0;
        transition: all .05s linear;
      }

      // Since we're not using svg sprites, need to override img property
      .slds-icon {
        max-width: initial;
      }
    }

    .stage-container {
      max-height: 100%;
      overflow: hidden;
    }

    // App specific
    .slds-grid--frame {
      min-width: 767px;
      overflow-y: auto;
    }
  </style>
</head>

<div class="slds-grid slds-grid--frame slds-grid--vertical">
  <!-- Header -->
  <header class="header slds-size--1-of-1" role="banner">

    <div class="slds-grid">
      <div class="stage-left slds-grid slds-size--2-of-12 slds-theme--alt-inverse slds-p-vertical--x-small slds-p-horizontal--medium js-nav-toggle open">
        <span class="slds-icon__container slds-align-middle">
          <img class="slds-icon slds-icon--small" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/8005/rows.svg" alt="Toggle Menu" />
          <span class="slds-assistive-text">Toggle Menu</span>
        </span>
      </div>
      <div class="slds-grid slds-grow">
        <div class="slds-p-vertical--x-small slds-p-horizontal--medium">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/8005/salesforce-logo.png" style="height: 44px;">
        </div>
      </div>
    </div>
  </header>

  <!-- Stage Container -->
  <div class="stage-container slds-grid slds-nowrap slds-size--1-of-1">

    <!-- Stage Left - Navigation -->
    <nav class="stage-left slds-size--2-of-12 slds-shrink-none slds-scrollable--y slds-theme--alt-inverse slds-p-around--small open">

      <ul role="navigation" class="slds-has-block-links">
        <li>
          <a href="#">
            <span class="slds-icon__container slds-icon-standard-today slds-m-right--small">
              <img class="slds-icon" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/8005/today.svg" alt="Nav Item One" />
              <span class="slds-assistive-text">Nav Item One</span>
            </span>
            <span class="stage-left__text slds-max-medium-hide">Nav Item One</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="slds-icon__container slds-icon-standard-opportunity slds-m-right--small">
              <img class="slds-icon" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/8005/opportunity.svg" alt="Nav Item One" />
              <span class="slds-assistive-text">Nav Item Two</span>
            </span>
            <span class="stage-left__text slds-max-medium-hide">Nav Item Two</span>
          </a>
        </li>
      </ul>

    </nav>

    <!-- Stage -->
    <section class="stage slds-grid slds-grid--vertical slds-nowrap">

      <div class="slds-shrink-none">
        <div class="slds-page-header">Page Header</div>
      </div>

      <!-- Stage Main -->
      <div class="stage-main slds-grid slds-wrap slds-grow slds-scrollable--y" role="main">

        <div class="slds-grow slds-size--1-of-1 slds-medium-size--1-of-2 slds-large-size--8-of-12 slds-col-rule--right slds-p-around--large">

          Primary Content Area

        </div>

        <div class="slds-shrink-none slds-size--1-of-1 slds-medium-size--1-of-2 slds-large-size--4-of-12 slds-p-around--large" role="complementary">

          Secondary Content Area

        </div>

      </div>

    </section>
  </div>
</div>


<script>
  var stageLeft = $('.stage-left');

  $('.js-nav-toggle').click(function() {
    stageLeft.toggleClass('open');
  });
</script>
<html>
