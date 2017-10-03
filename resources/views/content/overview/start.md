There are 2 ways to **get started**. You can either:

1. Use [npm](https://www.npmjs.com/get-npm) to install the package
2. Download the CSS file from Git to get the latest development version

### 1. Use NPM (recommended):

```
npm install videa-ui-css@^2.x
```

### 2. Download the CSS file from TFS 
<https://tfs.videa.tv/tfs/Videa/Videa%20Git/_git/videa-ui-css>

[test](https://tfs.videa.tv/tfs/Videa/Videa%20Git/_git/videa-ui-css?path=%2Fsrc%2Fscss&version=GBdevelop&_a=contents)


## Starter template 

If you want to get started right away, you can use this HTML starter template. Just copy/paste this code in a file and save it on your computer.

```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello World!</title>
        <link rel="stylesheet" href="http://52.203.47.170/css/app.css">
    </head>
    <body>
        <section class="section">
            <div class="container">
                <h1 class="title">
                    Hello World
                </h1>
                <p class="subtitle">
                    My first website!
                </p>
            </div>
        </section>
    </body>
</html>
```



## TODO Cleanup

```
.
├── components
│   ├── AccountPerformance
│   ├── Alert
│   ├── Assets
│   ├── Autocomplete
│   ├── Avails
│   ├── BarChart
│   ├── Bem
│   ├── Box
│   ├── Breadcrumb
│   ├── Button
│   ├── Buyers
│   ├── CampaignPerformance
│   ├── Card
│   ├── Chart
│   ├── Checkbox
│   ├── Color
│   ├── Columns
│   ├── Confirm
│   ├── Container
│   ├── Content
│   ├── CreateTicket
│   ├── CreateUser
│   ├── DataTable
│   ├── Datepicker
│   ├── DaypartSelector
│   ├── DebugGrid
│   ├── DebugInfo
│   ├── Delete
│   ├── DesignTokens
│   ├── Device
│   ├── Dialog
│   ├── DoughnutChart
│   ├── Dropdown
│   ├── Example
│   ├── ExperimentsDropdown
│   ├── FeaturesTable
│   ├── Field
│   ├── Footer
│   ├── Form
│   ├── Ham
│   ├── Help
│   ├── HelpLink
│   ├── Hero
│   ├── Icon
│   ├── Icons
│   ├── Image
│   ├── ImageModal
│   ├── ImagePlaceholder
│   ├── Images
│   ├── Imdb
│   ├── Input
│   ├── InstantSearch
│   ├── LineChart
│   ├── Logo
│   ├── Logos
│   ├── MarkupAndStyle
│   ├── MediaObject
│   ├── Menu
│   ├── MenuList
│   ├── Message
│   ├── Mjml
│   ├── Modal
│   ├── ModalForm
│   ├── Movies
│   ├── Nav
│   ├── Notification
│   ├── Omdb
│   ├── OpenPreempts
│   ├── OrderReporting
│   ├── OrderSearch
│   ├── Orders
│   ├── Pagination
│   ├── Panel
│   ├── PendingMakegoods
│   ├── PendingOrders
│   ├── Photos
│   ├── PieChart
│   ├── PriceGuide
│   ├── ProgramRevenue
│   ├── Progress
│   ├── Prompt
│   ├── QuickView
│   ├── Radio
│   ├── Section
│   ├── Select
│   ├── Sellers
│   ├── Snackbar
│   ├── Steps
│   ├── SvgStates
│   ├── Switch
│   ├── Table
│   ├── Tabs
│   ├── Tag
│   ├── Team
│   ├── Ticket
│   ├── Tickets
│   ├── Tiles
│   ├── Title
│   ├── Toast
│   ├── Tooltip
│   ├── Typography
│   ├── UiElements
│   ├── User
│   ├── UserPosts
│   ├── UserProfile
│   ├── UserSettings
│   ├── Users
│   ├── Window
│   ├── Windows
│   ├── passport
│   ├── AccordionMenu.vue
│   ├── Calendar.vue
│   ├── Carousel.vue
│   ├── ComponentWrapper.vue
│   ├── CoverImageUpload.vue
│   ├── CurrentQuery.vue
│   ├── DataTable.vue
│   ├── FabButton.vue
│   ├── Flash.vue
│   ├── FloatLabel.vue
│   ├── GenericForm.vue
│   ├── IntersectionObserver.vue
│   ├── MemberLink.vue
│   ├── MultiIndex.vue
│   ├── Notification.vue
│   ├── Paginator.vue
│   ├── PublishButton.vue
│   ├── QuickLinks.vue
│   ├── Register.vue
│   ├── Search.vue
│   ├── SubscribeButton.vue
│   ├── VLink.vue
│   ├── WizardStep.vue
│   ├── passport-authorized-clients.js
│   ├── passport-clients.js
│   ├── passport-personal-access-tokens.js
│   └── scan-view.vue
├── data
│   ├── accounts.js
│   ├── advertisers.js
│   ├── agencies.js
│   ├── assets.js
│   ├── avails.js
│   ├── bar-chart.js
│   ├── colors.js
│   ├── components.js
│   ├── data.js
│   ├── dayparts.js
│   ├── doughnut-chart.js
│   ├── elements.js
│   ├── form.js
│   ├── grid.js
│   ├── icons.js
│   ├── images.js
│   ├── index.js
│   ├── layout.js
│   ├── line-chart.js
│   ├── logos.js
│   ├── markets.js
│   ├── nav-items.js
│   ├── notices.js
│   ├── order-management-menu.js
│   ├── orders.js
│   ├── overview.js
│   ├── packages.js
│   ├── patterns.js
│   ├── people.json
│   ├── pie-chart.js
│   ├── price-guide.js
│   ├── programs.js
│   ├── prototypes.js
│   ├── reporting-menu.js
│   ├── sections.js
│   ├── station-groups.js
│   ├── stations.js
│   ├── tags.js
│   ├── team.js
│   ├── tickets.js
│   ├── tta-tabs.js
│   ├── tv.json
│   ├── typography.js
│   ├── vectors.js
│   └── zip-code.json
├── filters
│   ├── booleanFormatter.js
│   ├── byteFormatter.js
│   ├── currency.js
│   ├── decimal-to-percent.js
│   ├── format-rating.js
│   ├── percentageFormatter.js
│   └── timestampFormatter.js
├── forms
│   ├── errors.js
│   ├── form-bootstrap.js
│   ├── forms.js
│   └── http.js
├── layout
│   ├── Header
│   ├── Help
│   ├── Hero
│   ├── Nav
│   └── Footer.vue
├── layouts
│   └── Main.vue
├── mixins
│   ├── Auth
│   ├── base.js
│   ├── collection.js
│   ├── global-channel.js
│   ├── initial-state.js
│   ├── listener.js
│   ├── presence-channel.js
│   ├── private-channel.js
│   └── toggle.js
├── modules
│   ├── highlight.js
│   └── sidebar.js
├── pages
│   ├── AccountPerformance
│   ├── Assets
│   ├── Avails
│   ├── Blog
│   ├── CampaignPerformance
│   ├── Components
│   ├── Dashboard
│   ├── Data
│   ├── Elements
│   ├── Error
│   ├── Form
│   ├── Grid
│   ├── Hello
│   ├── Help
│   ├── Icons
│   ├── Layout
│   ├── OpenPreempts
│   ├── OrderReporting
│   ├── OrderSearch
│   ├── Overview
│   ├── ParticipantGraphs
│   ├── PendingMakegoods
│   ├── PendingOrders
│   ├── Playground
│   ├── PriceGuide
│   ├── Privacy
│   ├── ProgramRevenue
│   ├── RevisionHistory
│   ├── Support
│   ├── SupportRequest
│   ├── SupportRequests
│   ├── Templates
│   ├── Terms
│   ├── Todo
│   ├── TrafficMart
│   ├── VideaMarketplace
│   ├── About.vue
│   ├── AboutUs.vue
│   ├── Calendar.vue
│   ├── ContactInformation.vue
│   ├── Courses.vue
│   ├── Dashboard.vue
│   ├── Faqs.vue
│   ├── GeorgiaSeow.vue
│   ├── Home\ 2.vue
│   ├── Home.vue
│   ├── Icons.vue
│   ├── Login.vue
│   ├── NotFound.vue
│   ├── Parallax.vue
│   ├── Register.vue
│   ├── Resources.vue
│   ├── Search.vue
│   ├── SpfOverview.vue
│   ├── Support.vue
│   ├── Test.vue
│   └── Training.vue
├── partials
│   ├── AppFooter.vue
│   ├── AppNavBar.vue
│   └── LeftSideBar.vue
├── router
│   ├── index.js
│   └── new.js
├── services
│   ├── auth.js
│   └── ls.js
├── slideshows
│   ├── first-slideshow
│   ├── introducing-eagle
│   └── index.js
├── store
│   └── index.js
├── stories
│   ├── Button.vue
│   └── index.js
├── util
│   └── dom.js
├── utils
│   ├── DateLanguages.js
│   └── DateUtils.js
├── Api.js
├── App.vue
├── app.js
├── bootstrap.js
├── docs.js
├── global-components.js
├── main.js
├── routes.js
├── structure.md
├── template.js
├── test.vue
├── vue-bootstrap.js
└── zurb.js

170 directories, 143 files
```

```
