Prolab.behaviors.getShiftDetails = function (content) {

    $('.empFrom').change(function () {
        var pData = {emp_id:$('.empFrom').val(), plan_id:Prolab.planid};
        $.post(Prolab.urlGetShiftDetail, pData, function (data) {
            var rel = eval("(" + data + ")");
            if (rel.error == 1) {
                $('.fromid').html('');
                return;
            } else {
                $('.fromid').html('');
                for (var item in rel) {
                    var a = $('<option></option>').val(rel[item].id).html(rel[item].name);
                    $('.fromid').append(a);
                }
            }
        });
    });
    $('.empTo').change(function () {
        var pData = {emp_id:$('.empTo').val(), plan_id:Prolab.planid };
        $.post(Prolab.urlGetShiftDetail, pData, function (data) {
            var rel = eval("(" + data + ")");
            if (rel.error == 1) {
                $('.toid').html('');
                return;
            } else {
                $('.toid').html('');
                for (var item in rel) {
                    var a = $('<option></option>').val(rel[item].id).html(rel[item].name);
                    $('.toid').append(a);
                }
            }
        })
    });

    $('.oldemp').change(function () {
        var pData = {emp_id:$('.oldemp').val(), plan_id:Prolab.planid };
        $.post(Prolab.urlGetShiftDetail, pData, function (data) {
            var rel = eval("(" + data + ")");
            if (rel.error == 1) {
                $('.detailshift').html('');
                return;
            } else {
                $('.detailshift').html('');
                for (var item in rel) {
                    var a = $('<option></option>').val(rel[item].id).html(rel[item].name);
                    $('.detailshift').append(a);
                }
            }
        })
    });

};