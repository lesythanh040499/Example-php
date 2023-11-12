$(document).ready(function() {


});
var indexpagels = 1;
var indexpagehs = 1;

function loadPagehs(ind) {
    indexpagehs = ind;
    $.ajax({
        type: "post",
        url: "../xuli/handlinghs.php",
        data: {
            index: ind
        },
        dataType: "text",
        success: function(rs) {
            $('.tths').html(rs);
            $("html, body").animate({ scrollTop: "0" }, 500);
        }
    });
};

function loadPagels(ind) {
    indexpagels = ind;
    $.ajax({
        type: "post",
        url: "../xuli/handlingls.php",
        data: {
            index: ind
        },
        dataType: "text",
        success: function(rs) {
            $('.ttls').html(rs);
            $("html, body").animate({ scrollTop: "0" }, 500);
        }
    });
};

function loadPrevls() {
    if (indexpagels > 1) loadPagels(indexpagels - 1);
    else loadPagels(indexpagels);
}

function loadNextls(len) {
    if (indexpagels < len) loadPagels(indexpagels + 1);
    else loadPagels(indexpagels);
}

function loadPrevhs() {
    if (indexpagehs > 1) loadPagehs(indexpagehs - 1);
    else loadPagehs(indexpagehs);
}

function loadNexths(len) {
    if (indexpagehs < len) loadPagehs(indexpagehs + 1);
    else loadPagehs(indexpagehs);
}

function funcXoa(name, idd) {
    if (confirm("Chắc chắn xóa") == false) {
        return;
    }
    $.ajax({
        type: "post",
        url: "../xuli/handlingxoa.php",
        data: {
            nametb: name,
            id: idd
        },
        dataType: "text",
        success: function(rs) {
            if (rs == 1) {
                alert("susscess");
                location.reload();
            } else alert("Fail");
        }
    });
};

function funcThem() {
    $.ajax({
        type: "post",
        url: "../form/formthemhangsua.php",
        dataType: "text",
        success: function(rs) {
            $('.themhangsua').html(rs);
            $('.themhangsua').show();
        }
    });
}

function funcSuahs(id) {
    $.ajax({
        type: "post",
        url: "../form/formsuahangsua.php",
        data: {
            id: id
        },
        dataType: "text",
        success: function(rs) {
            $('.themhangsua').html(rs);
            $('.themhangsua').show();
        }
    });
}

function funcSuals(id) {
    $.ajax({
        type: "post",
        url: "../form/formsuasua.php",
        data: {
            id: id
        },
        dataType: "text",
        success: function(rs) {
            $('.loaisua').html(rs);
            $('.loaisua').show();
        }
    });
}

function funcExit(name) {
    var namecl = "." + name;
    $(namecl).html("");
    $(namecl).hide();
}

function funcThemdatahs() {
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();
    $.ajax({
        type: "post",
        url: "../xuli/handlingthemhangsua.php",
        data: {
            img: str,
            mhs: $('#mhs').val(),
            hangsua: $('#hangsua').val(),
            diachi: $('#diachi').val(),
            sdt: $('#sdt').val(),
            email: $('#email').val(),
            rate: $('#rate').val()
        },
        dataType: "text",
        success: function(rs) {
            if (rs == 1) {
                alert("Thêm Thành Công!");
                location.reload();
            } else alert("Thêm thất bại");
        }
    });
}

function funcSuahsdata(id) {
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();
    $.ajax({
        type: "post",
        url: "../xuli/handlingsuahangsua.php",
        data: {
            id: id,
            img: str,
            mhs: $('#mhs').val(),
            hangsua: $('#hangsua').val(),
            diachi: $('#diachi').val(),
            sdt: $('#sdt').val(),
            email: $('#email').val(),
            rate: $('#rate').val()
        },
        dataType: "text",
        success: function(rs) {
            if (rs == 1) {
                alert("Sửa Thành Công!");
                location.reload();
            } else alert("Sửa thất bại");
        }
    });
}

function funcThemls() {
    $.ajax({
        type: "post",
        url: "../form/formthemsua.php",
        dataType: "text",
        success: function(rs) {
            $('.loaisua').html(rs);
            $('.loaisua').show();
        }
    });
}

function funcThemdatals() {
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();
    $.ajax({
        type: "post",
        url: "../xuli/handlingthemsua.php",
        data: {
            img: str,
            hs: $('#hs').val(),
            loaisua: $('#loaisua').val(),
            kl: $('#kl').val(),
            gia: $('#gia').val(),
            tensua: $('#tensua').val(),
            dinhduong: $('#dinhduong').val(),
            loiich: $('#loiich').val()
        },
        dataType: "text",
        success: function(rs) {
            if (rs == 1) {
                alert("Thêm Thành Công!");
                location.reload();
            } else alert("Thêm thất bại");
        }
    });
}

function funcSualsdata(id) {
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();
    $.ajax({
        type: "post",
        url: "../xuli/handlingsuasua.php",
        data: {
            img: str,
            hs: $('#hs').val(),
            tensua: $('#tensua').val(),
            loaisua: $('#loaisua').val(),
            kl: $('#kl').val(),
            gia: $('#gia').val(),
            id: id,
            dinhduong: $('#dinhduong').val(),
            loiich: $('#loiich').val()
        },
        dataType: "text",
        success: function(rs) {
            if (rs == 1) {
                alert("Sửa Thành Công!");
                location.reload();
            } else alert("Sửa thất bại");
        }
    });
}

function funcAbout(id) {
    $.ajax({
        type: "post",
        url: "../form/formabout.php",
        data: {
            id: id
        },
        dataType: "text",
        success: function(rs) {
            $('.about').html(rs);
            $('.about').show();
        }
    });
}

function funcSuakh(id) {
    $.ajax({
        type: "post",
        url: "../form/formsuakh.php",
        data: {
            id: id
        },
        dataType: "text",
        success: function(rs) {
            $('.khachhang').html(rs);
            $('.khachhang').show();
        }
    });
}

function funcSuakhdata(id) {
    $.ajax({
        type: "post",
        url: "../xuli/handlingsuakh.php",
        data: {
            oid: id,
            id: $('#id').val(),
            ten: $('#ten').val(),
            gt: $('#gt').val(),
            dc: $('#dc').val(),
            sdt: $('#sdt').val(),
            em: $('#em').val()
        },
        dataType: "text",
        success: function(rs) {
            if (rs == 1) {
                alert("Sửa thành công");
                location.reload();
            } else alert("Sửa thất bại");
        }
    });
}