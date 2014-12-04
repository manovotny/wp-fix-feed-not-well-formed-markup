module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: {
                name: 'manovotny/wp-fix-feed-not-well-formed-markup',
                type: 'project' // Should be `library` or `project`.
            },
            description: 'Fixes WordPress not properly encoding markup when displayed in a feed.',
            git: 'git://github.com/manovotny/wp-fix-feed-not-well-formed-markup.git',
            name: 'WP Fix Feed Not Well-Formed Markup',
            slug: 'wp-fix-feed-not-well-formed-markup',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-fix-feed-not-well-formed-markup',
            version: '1.0.0'
        }
    };

}());
