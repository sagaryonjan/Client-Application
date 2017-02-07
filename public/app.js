/**
 * Created by SGRYNJN on 2/6/2017.
 */
var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        todos: [
            'Laravel',
            'Javascript',
            'Vue Js',
            2,
            false,
            {},
            function () {

            },
            null,
            NaN
        ]
    },
    methods: {
        clickMe: function () {
            alert('sfdkjdskf');
        }
    }
})
