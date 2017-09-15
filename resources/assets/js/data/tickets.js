const faker = require('faker')
const _ = require('lodash')
const moment = require('moment')
const comments =  _.times(4, function (n) {
    return {
        id: n + 1,
        created_by: 'Sherri Arnold',
        created_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
        updated_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
        comment: faker.hacker.phrase()
    }
})

module.exports =  _.times(30, function (n) {
    return {
        id: n + 10001,
        date_opened: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
        request_type: faker.random.arrayElement(['TechOps -- DBA Request', 'TechOps -- Server Request', 'TechOps -- Change Management Request', 'Release Management -- Change Request']),
        request_subtype: faker.random.arrayElement(['Feedback', 'General Inquiry', 'Report Problem']),
        description: faker.lorem.sentence(),
        priority: faker.random.arrayElement(['Critical', 'High', 'Medium', 'Low']),
        scrum_team: faker.random.arrayElement(['Abacus', 'Apollo', 'Autobots', 'Calypso', 'Deee-lite', 'Ichiban', 'Titan', 'We Are N4']),
        pull_request_id: faker.random.number(),
        summary: faker.lorem.sentence(),
        justification: faker.lorem.sentence(),
        impact_analysis:faker.lorem.sentence(),
        environment: faker.random.arrayElement(['Alpha', 'Production', 'Deployment', 'UAT']),
        systems_impacted: faker.lorem.sentence(),
        planned_date: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
        enduser_outage: faker.random.arrayElement(['Yes', 'No']),
        validation_steps: faker.lorem.sentence(),
        validator: faker.lorem.sentence(),
        patch_steps: faker.lorem.sentence(),
        additonal_notes: faker.lorem.sentence(),
        rollback_plan: faker.lorem.sentence(),
        status: faker.random.arrayElement(['New', 'Closed']),
        reason: faker.lorem.sentence(),
        subject: faker.lorem.paragraph(),
        comments: comments
    }
})

// module.exports = [
//     {
//         id: 10001,
//         status: 'New',
//         dateOpened: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//         priority: 'High',
//         reason: 'Installation',
//         subject: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
//         comments: [
//             {
//                 id: 1,
//                 created_by: 'Sherri Arnold',
//                 created_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 updated_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 comment: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
//             }
//         ]
//     },
//     {
//         id: 10002,
//         status: 'New',
//         dateOpened: moment().subtract(1, 'weeks').weekday(3).format('MM/DD/YY'),
//         priority: 'Low',
//         reason: 'Release Management Change Request',
//         subject: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
//         comments: [
//             {
//                 id: 1,
//                 created_by: 'Sherri Arnold',
//                 created_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 updated_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 comment: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
//             }
//         ]
//     },
//     {
//         id: 10003,
//         status: 'New',
//         dateOpened: moment().subtract(2, 'weeks').weekday(2).format('MM/DD/YY'),
//         priority: 'Low',
//         reason: 'Server Request',
//         subject: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
//         comments: [
//             {
//                 id: 1,
//                 created_by: 'Sherri Arnold',
//                 created_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 updated_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 comment: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
//             }
//         ]
//     },
//     {
//         id: 10004,
//         status: 'New',
//         dateOpened: moment().subtract(1, 'weeks').weekday(3).format('MM/DD/YY'),
//         priority: 'High',
//         reason: 'Tech Ops CM Request',
//         subject: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
//         comments: [
//             {
//                 id: 1,
//                 created_by: 'Sherri Arnold',
//                 created_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 updated_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 comment: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
//             }
//         ]
//     },
//     {
//         id: 10005,
//         status: 'New',
//         dateOpened: moment().subtract(1, 'weeks').weekday(7).format('MM/DD/YY'),
//         priority: 'Critical',
//         reason: 'Tech Ops CM Request',
//         subject: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
//         comments: [
//             {
//                 id: 1,
//                 created_by: 'Sherri Arnold',
//                 created_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 updated_at: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
//                 comment: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
//             }
//         ]
//     }
// ]
