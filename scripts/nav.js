var nav = [['alisawong.co/about.html', '../about.html', 'About'], ['media/AlisaWong_Resume.pdf target="_blank"', 'media/AlisaWong_Resume.pdf target="_blank"', 'Resume']];
var work = ['alisawong.co/projects/callbaxx.html'];
var workSelect = '';
var currentPage = window.location.href;

work.forEach(function(element) {
    if (element == currentPage || currentPage == 'alisawong.co/index.html') {
        workSelect = 'current';
    } else {
        workSelect = '';
    }
});