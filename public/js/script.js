$(function () {
    var location = window.location.href;

    var cur_url = '/' + location.split('/').pop();
    console.log(cur_url);
    $('nav .navbar-nav .nav-item').each(function () {
        var link = $(this).find('a').attr('href');
        if (location == link) {
            $(this).addClass('active');
        }else {
            $(this).removeClass('active');
        }
    });
    if (cur_url == '/'){
        $('nav > ul > li:nth-child(1)').addClass('active');
    }
    $('div#checkbox input[type=radio]').change(function() {
        var checked = $(this).prop("checked", true),
            name = checked.data('name'),
            floor = checked.data('floor'),
            place = checked.data('place'),
            term = checked.data('term'),
            price = checked.data('price'),
            total = $('table.totalproduct td.price.total').data('total'),
            chosedOptions = $('table.totalproduct tbody').html();
            total +=price;
            chosedOptions += "<tr class='pad'>"
                +"<td><strong>"+name+"</strong> <br><span>"+floor+", "+term+"</span>"
                +"<td class='price' data-price='"+price+"'>"+price+"</td>"
                +"<td><span class='close' onclick='deleteself(this);'><i class='fal fa-times'></i></span></td></td>"
                +"</tr>";
        if (chosedOptions != '') {
            $('table.totalproduct tbody').html(chosedOptions);
            $('table.totalproduct td.price.total').html(total);
            $('table.totalproduct td.price.total').data('total', total);
        }
    });
    $('#stickyblock > div > ul > li > ul > li > a').click(function () {
        $('#adv_areas div').each(function () {
            $(this).addClass('hidden');
        });
        $('#adv_areas').before('<span class="malldesc_more" id="show_back" onclick="show_back();">Показать рекламные зоны</span>');
        $('section.collapse').each(function () {
            $(this).removeClass('show');
        });
    });


});
function deleteself(obj) {
   var a = obj.closest('.pad');
    var child = a.querySelector('.price'),
        price = child.getAttribute('data-price');
    var b = $('td.price.total').html();
    var total = b - price;
    $('td.price.total').html(total);
    console.log(b);
    obj.closest('.pad').hidden = true;

}
function show_back() {
    $('#adv_areas div').each(function () {
        $(this).removeClass('hidden');
    });
    $('span#show_back').remove();
}
