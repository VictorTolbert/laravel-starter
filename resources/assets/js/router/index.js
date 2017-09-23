import Vue from 'vue'
import Router from 'vue-router'
import axios from 'axios'

axios.defaults.baseURL = 'http://localhost:3000'

Vue.use(Router)

export default new Router({
    linkActiveClass: 'is-active',
    routes: [
        {
            name: 'home',
            path: '/',
            components: {
                nav: require('@/layout/Nav'),
                default: require('@/pages/Home')
            }
        },
        {
            name: 'blog',
            path: '/blog',
            components: {
                default: require('@/pages/Blog')
            }
        },
        {
            name: 'typography',
            path: '/typography',
            components: {
                default: require('@/components/Typography')
            }
        },
        {
            name: 'participant-graphs',
            path: '/participant-graphs',
            components: {
                default: require('@/pages/ParticipantGraphs')
            }
        },
        {
            name: 'todo',
            path: '/todo',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Todo')
            }
        },
        {
            name: 'help',
            path: '/help',
            components: {
                default: require('@/pages/Help')
            }
        },
        {
            name: 'hello',
            path: '/hello',
            components: {
                default: require('@/pages/Hello')
            }
        },
        {
            name: 'price-guide',
            path: '/price-guide',
            props: {
                hero: {
                    title: 'Price Guide'
                }
            },
            meta: { helpId: 1304 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/PriceGuide')
            }
        },
        {
            name: 'avails',
            path: '/avails',
            props: {
                hero: {
                    title: 'Avails'
                }
            },
            meta: { helpId: 1226 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/Avails')
            }
        },
        {
            name: 'pending-orders',
            path: '/pending-orders',
            props: {
                hero: {
                    title: 'Pending Orders'
                }
            },
            meta: { helpId: 1421 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/PendingOrders')
            }
        },
        {
            name: 'pending-makegoods',
            path: '/pending-makegoods',
            props: {
                hero: {
                    title: 'Pending Makegoods'
                }
            },
            meta: { helpId: 1262 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/PendingMakegoods')
            }
        },
        {
            name: 'open-preempts',
            path: '/open-preempts',
            props: {
                hero: {
                    title: 'Open Preempts'
                }
            },
            meta: { helpId: 1269 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/OpenPreempts')
            }
        },
        {
            name: 'order-search',
            path: '/order-search',
            props: {
                hero: {
                    title: 'Order Search'
                }
            },
            meta: { helpId: 1274 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/components/OrderSearch')
            }
        },
        {
            name: 'account-performance',
            path: '/account-performance',
            props: {
                hero: {
                    title: 'Account Performance'
                }
            },
            meta: { helpId: 1347 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/AccountPerformance')
            }
        },
        {
            name: 'order-reporting',
            path: '/order-reporting',
            props: {
                hero: {
                    title: 'Order Reporting'
                }
            },
            meta: { helpId: 1055 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/OrderReporting')
            }
        },
        {
            name: 'program-revenue',
            path: '/program-revenue',
            props: {
                hero: {
                    title: 'Program Revenue'
                }
            },
            meta: { helpId: 1426 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/ProgramRevenue')
            }
        },
        {
            name: 'campaign-performance',
            path: '/campaign-performance',
            props: {
                hero: {
                    title: 'Campaign Performance'
                }
            },
            meta: { helpId: 1089 },
            components: {
                nav: require('@/layout/Nav/Sellers'),
                hero: require('@/layout/Hero/Sellers'),
                help: require('@/layout/Help'),
                default: require('@/pages/CampaignPerformance')
            }
        },
        {
            name: 'revision-history',
            path: '/revision-history',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/RevisionHistory')
            }
        },
        {
            name: 'privacy',
            path: '/privacy',
            components: {
                default: require('@/pages/Privacy')
            }
        },
        {
            name: 'terms',
            path: '/terms',
            components: {
                default: require('@/pages/Terms')
            }
        },
        {
            name: 'dashboard',
            path: '/dashboard',
            props: {
                hero: {
                    title: 'Dashboard',
                    subtitle: ''
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Dashboard')
            }
        },
        {
            name: 'playground',
            path: '/playground',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Playground')
            }
        },
        {
            path: '/form',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Form')
            },
            children: [
                {
                    name: 'field',
                    path: 'field',
                    component: require('@/components/Field')
                },
                {
                    name: 'input',
                    path: 'input',
                    component: require('@/components/Input')
                },
                {
                    name: 'select',
                    path: 'select',
                    component: require('@/components/Select')
                },
                {
                    name: 'checkbox',
                    path: 'checkbox',
                    component: require('@/components/Checkbox')
                },
                {
                    name: 'radio',
                    path: 'radio',
                    component: require('@/components/Radio')
                },
                {
                    name: 'switch',
                    path: 'switch',
                    component: require('@/components/Switch')
                },
                {
                    path: '',
                    redirect: 'field'
                }
            ]
        },
        {
            path: '/components',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Components')
            },
            children: [
                {
                    name: 'alert',
                    path: 'alert',
                    component: require('@/components/Alert')
                },
                {
                    name: 'card',
                    path: 'card',
                    component: require('@/components/Card')
                },
                {
                    name: 'chart',
                    path: 'chart',
                    component: require('@/components/Chart')
                },
                {
                    name: 'confirm',
                    path: 'confirm',
                    component: require('@/components/Confirm')
                },
                {
                    name: 'dialog',
                    path: 'dialog',
                    component: require('@/components/Dialog')
                },
                {
                    name: 'image-modal',
                    path: 'image-modal',
                    component: require('@/components/ImageModal')
                },
                {
                    name: 'level',
                    path: 'level',
                    component: require('@/components/Level')
                },
                {
                    name: 'media-object',
                    path: 'media-object',
                    component: require('@/components/MediaObject')
                },
                {
                    name: 'menu',
                    path: 'menu',
                    component: require('@/components/Menu')
                },
                {
                    name: 'message',
                    path: 'message',
                    component: require('@/components/Message')
                },
                {
                    name: 'notification',
                    path: 'notification',
                    component: require('@/components/Notification')
                },
                {
                    name: 'modal',
                    path: 'modal',
                    component: require('@/components/Modal')
                },
                {
                    name: 'nav',
                    path: 'nav',
                    component: require('@/components/Nav')
                },
                {
                    name: 'panel',
                    path: 'panel',
                    component: require('@/components/Panel')
                },
                {
                    name: 'prompt',
                    path: 'prompt',
                    component: require('@/components/Prompt')
                },
                {
                    name: 'snackbar',
                    path: 'snackbar',
                    component: require('@/components/Snackbar')
                },
                {
                    name: 'tabs',
                    path: 'tabs',
                    component: require('@/components/Tabs')
                },
                {
                    name: 'toast',
                    path: 'toast',
                    component: require('@/components/Toast')
                },
                {
                    path: '',
                    redirect: 'card'
                }
            ]
        },
        {
            path: '/elements',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Elements')
            },
            children: [
                {
                    name: 'box',
                    path: 'box',
                    component: require('@/components/Box')
                },
                {
                    name: 'button',
                    path: 'button',
                    component: require('@/components/Button')
                },
                {
                    name: 'content',
                    path: 'content',
                    component: require('@/components/Content')
                },
                {
                    name: 'datepicker',
                    path: 'datepicker',
                    component: require('@/components/Datepicker')
                },
                {
                    name: 'delete',
                    path: 'delete',
                    component: require('@/components/Delete')
                },
                {
                    name: 'dropdown',
                    path: 'dropdown',
                    component: require('@/components/Dropdown')
                },
                {
                    name: 'form',
                    path: 'form',
                    component: require('@/components/Form')
                },
                {
                    name: 'icon',
                    path: 'icon',
                    component: require('@/components/Icon')
                },
                {
                    name: 'image',
                    path: 'image',
                    component: require('@/components/Image')
                },
                {
                    name: 'progress',
                    path: 'progress',
                    component: require('@/components/Progress')
                },
                {
                    name: 'tag',
                    path: 'tag',
                    component: require('@/components/Tag')
                },
                {
                    name: 'title',
                    path: 'title',
                    component: require('@/components/Title')
                },
                {
                    name: 'tooltip',
                    path: 'tooltip',
                    component: require('@/components/Tooltip')
                },
                {
                    path: '',
                    redirect: 'box'
                }
            ]
        },
        {
            path: '/grid',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Grid')
            },
            children: [
                {
                    name: 'columns',
                    path: 'columns',
                    component: require('@/components/Columns')
                },
                {
                    name: 'tiles',
                    path: 'tiles',
                    component: require('@/components/Tiles')
                },
                {
                    path: '',
                    redirect: 'columns'
                }
            ]
        },
        {
            path: '/data',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Data')
            },
            children: [
                {
                    name: 'autocomplete',
                    path: 'autocomplete',
                    component: require('@/components/Autocomplete')
                },
                {
                    name: 'pagination',
                    path: 'pagination',
                    component: require('@/components/Pagination')
                },
                {
                    name: 'table',
                    path: 'table',
                    component: require('@/components/Table')
                },
                {
                    path: '',
                    redirect: 'table'
                }
            ]
        },
        {
            path: '/overview',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Overview')
            },
            children: [
                {
                    name: 'markup-and-style',
                    path: 'markup-and-style',
                    component: require('@/components/MarkupAndStyle')
                },
                {
                    name: 'design-tokens',
                    path: 'design-tokens',
                    component: require('@/components/DesignTokens')
                },
                {
                    name: 'ui-elements',
                    path: 'ui-elements',
                    component: require('@/components/UiElements')
                },
                {
                    name: 'icons',
                    path: 'icons',
                    component: require('@/pages/Icons')
                },
                {
                    path: '',
                    redirect: 'ui-elements'
                }
            ]
        },
        {
            path: '/layout',
            props: {
                hero: {
                    title: 'Documentation',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Layout')
            },
            children: [
                {
                    name: 'container',
                    path: 'container',
                    component: require('@/components/Container')
                },
                {
                    name: 'hero',
                    path: 'hero',
                    component: require('@/components/Hero')
                },
                {
                    name: 'section',
                    path: 'section',
                    component: require('@/components/Section')
                },
                {
                    name: 'footer',
                    path: 'footer',
                    component: require('@/components/Footer')
                },
                {
                    path: '',
                    redirect: 'container'
                }
            ]
        },
        {
            name: 'templates',
            path: '/templates',
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/pages/Templates')
            }
        },
        {
            name: 'tickets',
            path: '/tickets',
            props: {
                hero: {
                    title: 'TechOps Tickets'
                }
            },
            components: {
                nav: require('@/layout/Nav/Tickets'),
                hero: require('@/layout/Hero/Tickets'),
                default: require('@/components/Tickets')
            }
        },
        {
            name: 'team',
            path: '/team',
            props: {
                hero: {
                    title: 'Product Team',
                    subtitle: ''
                }
            },
            components: {
                nav: require('@/layout/Nav'),
                hero: require('@/layout/Hero'),
                default: require('@/components/Team')
            }
        },
        {
            name: 'ticket',
            path: '/tickets/:id',
            props: {
                hero: {
                    title: 'TechOps Tickets',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav/Tickets'),
                hero: require('@/layout/Hero/Tickets'),
                default: require('@/components/Ticket')
            }
        },
        {
            name: 'create-ticket',
            path: '/tickets/create',
            props: {
                hero: {
                    title: 'TechOps Tickets',
                    sections: require('@/data/sections')
                }
            },
            components: {
                nav: require('@/layout/Nav/Tickets'),
                hero: require('@/layout/Hero/Tickets'),
                default: require('@/components/CreateTicket')
            }
        },
        {
            name: 'users',
            path: '/users',
            component: require('@/components/Users')
        },
        {
            name: 'user-settings',
            path: '/user-settings',
            component: require('@/components/UserSettings')
        },
        {
            name: 'user',
            path: '/users/:id',
            component: require('@/components/User'),
            props: true,
            children: [
                {
                    name: 'user-profile',
                    path: 'profile',
                    component: require('@/components/UserProfile')
                },
                {
                    name: 'user-posts',
                    path: 'posts',
                    component: require('@/components/UserPosts')
                }
            ]
        }
    ]
})
