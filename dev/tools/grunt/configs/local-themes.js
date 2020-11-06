/**
 * grunt exec:rostyslav_luma_en_us && grunt less:rostyslav_luma_en_us && grunt watch
 */
module.exports = {
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
