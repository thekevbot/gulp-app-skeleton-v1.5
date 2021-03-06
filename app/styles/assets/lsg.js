// Styleguide Menu
$('.lsg__menu-item').click(function(){
    $('.lsg__menu-item').removeClass('--open');
    $(this).addClass('--open');
});

// $('.lsg__submenu-item a').click(function(e){
//     e.preventDefault();
//     var page = $(this).attr('href'),
//     location = '../styles/library/' + page + '.php';
//     $('#contentArea').load(location, function(){
//         hljs.initHighlighting.called = false;
//         hljs.initHighlighting();
//     })
// })

var color = '';
$('.lsg__color').click(function() {
    var x = $(this).css('backgroundColor');
    hexc(x);
    alert(color);
})

function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');
}

$('.lsg__color').each(function(){
    var bg = $(this).css('backgroundColor');
    hexc(bg);
    $(this).append('<span class="lsg__color-hex">' + color + '</span>');
});
