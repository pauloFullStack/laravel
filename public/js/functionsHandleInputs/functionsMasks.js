export const mask = (o, f) => {
    setTimeout(function () {

        let v;
        if (f == 'mphone') {
            v = mphone(o.value);
        } else if (f == 'mCpf') {
            v = mCpf(o.value);
        } else if (f == 'mMoeda') {
            v = mMoeda(o.value);
        } else if (f == 'mDate') {
            v = mDate(o.value);
        }

        if (v != o.value) {
            o.value = v;
        }
    }, 1);
}


//Mask Telephone
const mphone = (v) => {
    let r = v.replace(/\D/g, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
}


//Mask cpf
const mCpf = (v) => {
    let r = v.replace(/\D/g, "");

    if (r.length > 11) {
        r = r.replace(/^(\d\d\d)(\d{0,3})(\d{0,3})(\d{0,3})(\d{1})/, "$1.$2.$3-$4");
    } else if (r.length > 9) {
        r = r.replace(/^(\d{0,3})(\d{0,3})(\d{0,3})/, "$1.$2.$3-");
    } else if (r.length > 6) {
        r = r.replace(/^(\d{0,3})(\d{0,3})/, "$1.$2.");
    } else if (r.length > 3) {
        r = r.replace(/^(\d{0,3})/, "$1.");
    }

    return r;
}


//Mask moeda
function mMoeda(v) {
    let r = v.replace(/\D/g, "");

    r = (r / 100).toFixed(2) + '';
    r = r.replace(".", ",");
    r = r.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    return r;
}


//Mask date
function mDate(v) {
    let r = v.replace(/\D/g, "");

    if (r.length > 4) {
        r = r.replace(/^(\d\d)(\d{0,2})(\d{0,4})(\d{0,4})/, "$1/$2/$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,2})/, "$1/$2");
    }

    return r;
}