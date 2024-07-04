import { messageVoidTable } from '../message.js';

export const removeElementLine = (result, message, colspan = null) => {

    document.querySelector('#line-' + result.data.id).remove();
    messageVoidTable(colspan);
    toastr.success(message);
    closeModal('modal-delete');

}


function closeModal(id) {
    $('#' + id).modal('hide');
}