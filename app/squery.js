(function ($) {
    var aas_ = String.fromCharCode(35);
    var $eq_ = String.fromCharCode(61);
    eva_ = function (e) {
        if ($qsc_() == true) {

            var url = $nsi_(e);
            var Po = $('#Fram').serialize();
            var Bval = $("#BUTS").val();
            $("#BUTS").html('<i class="fa fa-refresh fa-spin"></i>&nbsp;Please Wait');
            var sres = $.post(url, Po, {
                dataType: "html"
            });
            sres.done(function (data) {

                if ((data.toUpperCase().indexOf("SUCCESSFULLY") != -1) == true) {
                    //$msg(data);
                    scsbox(data)
                } else {
                   $("#BUTS").html(Bval);
                }
            })
           sres.fail(function( jqXHR, textStatus ) {
			 
			 $("#BUTS").html(Bval);
           erroebox( "Request failed: " + jqXHR.responseText );
		   
});


        }
    }
    Rep_ = function (e) {
        if ($qsc_() == true) {
            $("#TableView").html('<a class="Lodings" ><i class="fa fa-cog fa-spin"></i></a>');
            var url = $(e).attr('scs');
            var Po = $('#Fram').serialize();
            var sres = $.get(url, Po, {
                dataType: "html"
            });
            sres.done(function (data) {
                $("#TableView").html(data);
                do_sums();
            })
        }
    }
    evarow_ = function (e) {

        $("#BUTS").html('<i class="fa fa-refresh fa-spin"></i>&nbsp;Please Wait');
    }


    gol_ = function (e) {

        if ($qsc_() == true) {

            $.ajax({
                type: window.post,
                url: $nsi_(e),
                data: $(window.scfmm).serialize(),
                success: function (html) {


                    if ("777" == html) {
                        window.location.href = 'index.php/home';
                    }
                }
            })
        }
    }

    dit_ = function (url) {
        if ($qsc_ == false) {
            $.ajax({
                type: window.post,
                url: url,
                data: $(window.scfm).serialize(),
                success: function (html) {}
            })
        }
    }

    $Rep_ = function (a, b, c) {


        $.ajax({
            type: window.post,
            url: c,
            data: $(window.scfm).serialize(),
            success: function (html) {
                $("#pri").html(html);
                $("#example_wrapper").hide();
            }
        })
    }

    $qsc_ = function () {

        bl = true;
        $('[val=1]').each(function () {
            if (this.value == "") {

                $(this).css('border', '1px solid #900');
                bl = false;
            } else {
                $(this).css('border', '1px solid #ccc');
            }
        });

        return bl;
    }

    $(window.hgrs)
        .each(function (index) {
            if ($(this)
                .val() == '') {
                $(this)
                    .val(0);
            }
        });

    $(window.fdd)
        .blur(function (i) {

            if ("" == $.trim($(this)
                .val())) {
                $(this)
                    .val("0");
            }
        })
    $nsi_ = function (e) {
        var f = "";
        var l = "";
        var t = "";
        $('[isn=1]')
            .each(function (index) {
                f = f + $(this).attr('id') + ",";
                l = l + $(this).attr('ln') + ",";
                t = t + $(this).attr('ty') + ",";
            });
        f = f.substring(0, f.length - 1);
        var ff = $(e).attr('scs') + "?Colm=" + f + "&len=" + l + "&typ=" + t + "&Sbutton=" + $(e).html() + "&idv=" + $(e).attr('idn');

        return ff;
    }

    $gcv_ = function (html) {
        var a = html.split(aas_);

        for (var i = 0; i < a.length; i++) {
            try {
                var b = a[i].split($eq_);
                if (b[0] != "") {
                    var bool = true;
                    var ctrl = $.trim(b[0]);

                    if ($("#" + ctrl).attr('type') == 'checkbox') {

                        if (b[1] == "on") {
                            document.getElementById(b[0]).checked = true;
                        } else {
                            document.getElementById(b[0]).checked = false;
                        }
                        bool = false;
                    }
                    if ((ctrl.toUpperCase().indexOf("DATE") != -1) == true) {

                        $("#" + b[0]).val(b[1]);
                        bool = false;
                    }

                    if (bool == true) {
                        if ($('#' + ctrl).attr('edi') == 1) {
                            var $ta = $('.' + $('#' + ctrl).attr('class'));
                            var w5ref = $ta.data('wysihtml5');
                            w5ref.editor.setValue(b[1]);
                        } else {
                            $('#' + ctrl).val(b[1]);
                        }
                    }


                }
            } catch (err) {}
        }

        try {
            Sbox();
        } catch (err) {}


    }

    ecm_ = function (a, b, c) {

        if ($qsc_() != false) {
            $.ajax({
                type: window.post,
                url: "application/post/" + a,
                data: $("#Fram").serialize() + "&" + b + "=" + c,
                success: function (html) {

                    $msg(html);

                }
            })
        }
    }




    $Tv_ = function (a) {
        var ba = $("#" + a).attr('slink');
        $(".fram").hide();


        $("#TableView").show();
        $("#TableView").html('<a class="Lodings" ><i class="fa fa-cog fa-spin"></i></a>');
        $.ajax({
            type: "GET",
            url: ba,
            data: $("#Fram").serialize(),
            success: function (html) {

                $("#TableView").html(html);

                $htb_();
            }
        })

    }

    $Rec_ = function (a) {

        $("#maindiv").hide();
        $.ajax({
            type: window.post,
            url: "application/post/page.php?id=" + a,
            data: $("#Fram").serialize(),
            success: function (html) {
                alert(html);
            }
        })

    }


    $Tve_ = function (a, b, c) {
        var ab = $.trim(a);
        $("#" + $.trim(b)).val(ab);
        $(".fram").show();
        $("#TableView").hide();


        $.ajax({
            type: "GET",
            url: $("#Mlk").val() + "DEdit?idd=" + a + "&fn=" + b,
            data: $("#Fram").serialize(),
            success: function (html) {
                var gd = html.split('{');
                $gcv_(gd[0]);
                if (gd.length == 2) {

                    i = 1;
                    var b = gd[1].split('}');
                    for (var ii = 0; ii < b.length; ii++) {

                        if (b[ii] != "") {


                            GE("add" + ii);
                            var fld = b[ii].split('~');
                            for (var m = 0; m < fld.length; m++) {
                                if (fld[m] != "") {
                                    var vl = fld[m].split('=');

                                    $("#" + vl[0]).val(vl[1]);
                                }
                            }

                        }
                    }

                }



            }
        })
        $("#BUTS").html(c);
        try {
            Gen();
        } catch (err) {}
    }
    $TAd_ = function (a, b) {

        $.ajax({
            type: window.post,
            url: "application/Handler/link.ashx?link=" + a + "&ty=" + b,
            data: "",
            success: function (html) {

                $("#divid").html(html);
                $("#FrmBorder").css("height", $(window).height());
            }
        })

    }



    function Create() {
        var width = $("#dig").width();
        var height = $("#dig").height();
        var windowHeight = $(window).height();
        var windowWidth = $(window).width();
        var top = windowHeight / 2 - height / 2;
        var left = windowWidth / 2 - width / 2;
        $('#dig').css("top", top - 100);
        $('#dig').css("left", left);
        $("#dig").show();
    }

    function Ctrl_Center(ctrlid) {


        var width = $("#" + ctrlid).width();
        var height = $("#" + ctrlid).height();
        var windowHeight = $(window).height();
        var windowWidth = $(window).width();

        var top = windowHeight / 2 - height / 2;
        var left = windowWidth / 2 - width / 2;
        $("#" + ctrlid).css("top", top - 100);
        $("#" + ctrlid).css("left", left);
        $("#" + ctrlid).show();
    }


    $htb_ = function () {


        $('#example').dataTable();


    }

    $winprint_ = function (pri, url) {
        var mywindow = window.open('', '', 'height=200,width=300');
        mywindow.document.write('<html><head><title></title>');
        mywindow.document.write('<link rel="stylesheet" href="' + url + 'css/bootstrap.min.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write($('#' + pri).html());
        mywindow.document.write('</body></html>');
        mywindow.document.close();
        mywindow.print();
        mywindow.close();
        return true;

    }
	
	 $mail_ = function (pri, url) {
		  var Po = $('#Fram').serialize();
		  var sres = $.post(url, Po, {
                dataType: "html"
            });
            sres.done(function (data) {
				alert(data);
			})
	 }

    $DSp_ = function (dat) {
        dat = dat.replace('-', '/').replace('-', '/').replace('-', '/').replace('-', '/').replace('-', '/');
        var dt = dat.split('/');
        var datt = dt[2] + '/' + dt[1] + '/' + dt[0];
        return datt;
    }
    $rel_ = function () {
        window.location.reload();
    }
    $exec = function (e) {

        ecm_($(e).attr('scs'), e.id, e.value);
    }
    $sgm = function (z) {
        uLightBox.destroy();
        uLightBox.init({
            override: true,
            background: 'black',
            centerOnResize: false,
            fade: true
        });
        alert(z);
    }




    $msg = function (mgs) {
        $('#errorMessage').remove();
        $('body').append('<div id="errorMessage"><div class="small-box bg-aqua"> <p>' + mgs + '</p><input onclick="location.reload()" type="button" value="Close" style="background-color:#8F8;padding:8px;border:2px solid #ffffff;" >    </div>    </div>');

        $('#errorMessage').show();

    }

    $emsg = function (mgs) {
        $('#errorMessage').remove();
        $('body').append('<div id="errorMessage"><table id="frmmessage" style="background-color:#005E00;margin-top:25%;" width="100%" border="0" cellspacing="1" cellpadding="1" align="center"> <tr><td align="center" style="color:#FFF;font-size:26px" colspan="2">' + mgs + '</td></tr><tr><td width="76%">&nbsp;</td> <td width="24%"><input onclick="$(&#39;#errorMessage&#39;).remove()" type="button" value="Close" style="background-color:#8F8;padding:8px;border:2px solid #ffffff;" ></td> </tr></table></div>');

        $('#errorMessage').show();

    }




})(jQuery)

$('[num=1]')
    .each(function (index) {
        if ($(this)
            .val() == '') {
            $(this)
                .val(0);
        }
    });



$('[num=1]').focus(function () {
    if ($(this)
        .val() == '0') {
        $(this)
            .val('');
    }
})

$('[num=1]').blur(function () {
    if ($(this)
        .val() == '') {
        $(this)
            .val(0);
    }
})


function DatPick() {

    $('.Dat').datepicker({
        changeMonth: true,
        changeYear: true,
        showOn: "button",
        buttonImage: $("#scs_url").val()+"icon/calendar.png",
        buttonImageOnly: true,
        dateFormat: 'dd-mm-yy'
    });

    var Dwidth = $('.Dat').width() - 30;
    $('.Dat').css('width', Dwidth);
    $('.Dat').val(GetDate());
}

function GetDate() {

    var currentTime = new Date();
    var dt = currentTime.getDate();
    var month = currentTime.getMonth() + 1;
    var year = currentTime.getFullYear();
    return AddZero(dt) + "-" + AddZero(month) + "-" + year + "";
}

function AddZero(num) {
    return ((parseInt(num) >= 0) && (parseInt(num) < 10)) ? "0" + parseInt(num) : parseInt(num) + "";
}

function DaSplit(Dats) {
    var dt = Dats.split('-');
    return dt[2] + "-" + dt[1] + "-" + dt[0];
}

function FrmReload() {
    window.location.href = ($("#Fadd").attr('href'))
}

$(document).ready(function (e) {
    DatPick();
});

function sumOfColumns(table, columnIndex) {
    var tot = 0;
    table.find("tr").children("td:nth-child(" + columnIndex + ")")
        .each(function () {
            $this = $(this);
            $(this).addClass('Sright');
            if (!$this.hasClass("sum") && $this.html() != "") {
				if( parseInt($this.html())){
                tot += parseInt($this.html()); }
				else{tot +=0;}
            }
        });
    return tot;
}

function do_sums() {
    var SCLM = $("#SCLM").val();
    var html = "";
    abc = 0 * 1;
    $("#RTable thead tr").each(function (i, tr) {
        $tr = $(tr);
        $tr.children().each(function (i, td) {
            $td = $(td);
            var table = $td.parent().parent().parent();

            if ((SCLM.indexOf("`" + i + "`") != -1) == true) {
                var tsum = (sumOfColumns(table, i + 1)).toFixed(2);
                html += '<td class="SrightS" >' + tsum + '</td>';
            } else {
                abc++;
            }
        })

    });
    abc = abc;
    shtml = '<td class="TName" colspan="' + abc + '">&nbsp;Total </td>' + html;
    html = '<tr>' + shtml + '</tr>';

    var row = $(html);
    var lastRow = $('#RTable tr:last');
    row.insertAfter(lastRow);


}

function ImageUpload(e, url, filen, ctrl) {

    $.ajaxFileUpload({
        url: url,
        secureuri: false,
        fileElementId: filen,
        dataType: 'json',
        data: {
            'title': $('#' + ctrl).val()
        },
        success: function (data, status) {
            if (data.status != 'error') {
                $('#files').html('<p>Reloading files...</p>');
                refresh_files();
                $('#title').val('');
            }
            alert(data.msg);
        }
    });
    return false;
}

function scsbox(msg) {
    $('#errorMessage').remove();
    $('body').append('<div id="errorMessage"><span id="spanmsg">' + msg + '</span></div>');
    $('#errorMessage').slideDown(500).delay(1000).slideUp(400,function(){
		window.location.href=$("#Fadd").attr('href');
		});
}
function erroebox(msg) {
   $('#errorMessage').remove();
    $('body').append('<div id="errorMessage"><span id="spanmsg">' + msg + '</span></div>');
    $('#errorMessage').slideDown(500).delay(1000).slideUp(400,function(){
		 
		});
}

function FrmLoad() {
    var hrf = $('#WLINK').val();
    window.location.href = hrf;
}

function Frmclo()
{
	$('#scsbox').dialog('close');
    return false;
}

function NumOnly()
{
$("[num=1]").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	
}