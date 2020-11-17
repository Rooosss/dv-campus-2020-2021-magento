/**
 * grunt exec:rostyslav_luma_uk_ua && grunt less:rostyslav_luma_uk_ua && grunt watch
 * grunt exec:rostyslav_luma_en_us && grunt less:rostyslav_luma_en_us && grunt watch
 */
module.exports = {
    rostyslav_luma_uk_ua: {
        area: 'frontend',
        name: 'Rostyslav/luma',
        locale: 'uk_UA',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    rostyslav_luma_en_us: {
        area: 'frontend',
        name: 'Rostyslav/luma',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
};
