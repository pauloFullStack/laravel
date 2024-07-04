export const generateNotification = (obj, concatError) => {

    let messageErro = '';
    let itemOriginal;

    Object.keys(obj).forEach(function (item) {

        if (concatError) {
            itemOriginal = item;
            item = item + '_' + concatError;
        }

        document.querySelector('#' + item).style.cssText = 'border: #FF0000 solid 1px !important;';

        if (concatError) {
            item = itemOriginal;
        }

        obj[item].forEach((itemArray) => {
            messageErro += itemArray + "<br>";
        });
    })

    toastr.error(messageErro);
    document.querySelector("button").disabled = false;
    return null;

}